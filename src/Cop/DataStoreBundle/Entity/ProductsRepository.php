<?php

namespace Cop\DataStoreBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * ProductsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductsRepository extends EntityRepository
{
    public function searchProducts($term, $locale)
    {
        $term1 = urldecode($term);
        $data = array();

        $term2 = $term1;

        $sql = '
                  SELECT u.* ,
                            MATCH(s.name,s.description,s.category_merchant)
                                    AGAINST (:term) as Relevance
                   FROM FulltextProducts  AS s
                   INNER JOIN Products AS u ON s.id = u.id
                   WHERE status = "Ok"
                      AND    MATCH (s.name,s.description,s.category_merchant)  AGAINST( :term2 IN  BOOLEAN MODE)

                   GROUP BY u.name
                   ORDER BY Relevance DESC
                   LIMIT 0 , 100
                   ';

        $params['term']  = $term1;

        $params['term2'] = $term2;

        $stmt = $this->_em->getConnection()->prepare($sql);
        $stmt->execute($params);

        $results = $stmt->fetchAll();
        foreach($results as $item)
        {
            $data[] = $item;
        }
        return $data;
    }

    public function searchProductsByTag($term, $locale , $source)
    {
        $data = array();
        $api = strtoupper($source);
        $term2 = ">".implode(' >',explode(' ',$term));

        $sql = '
                  SELECT u.* ,
                            MATCH(s.name,s.description,s.category_merchant)
                                    AGAINST (:term) as Relevance
                   FROM FulltextProducts  AS s
                   INNER JOIN Products AS u ON s.id = u.id
                   INNER JOIN products_tags t ON u.id = t. products_id
                   INNER JOIN tag t2 ON t2.id = t.tag_id
                   WHERE source_id = :api AND
                            MATCH (s.name,s.description,s.category_merchant)  AGAINST( :term2 IN  BOOLEAN MODE)
                   AND status = "Ok"
                   GROUP BY u.name
                   ORDER BY Relevance DESC
                   LIMIT 0 , 100
                   ';

        $params['term']  = $term;
        $params['api']   = $api;
        $params['term2'] = $term2;

        $stmt = $this->_em->getConnection()->prepare($sql);
        $stmt->execute($params);

        $results = $stmt->fetchAll();
        foreach($results as $item)
        {
            $data[] = $item;
        }
        return $data;
    }

    public function getLinkedProducts($id)
    {
        $sourceType = 'CSV';
        // deploy3
       $sql = "
                SELECT
                 p.*
                FROM Products p
                INNER JOIN linked l ON p.id_api = l.`linked_ api_id`
                WHERE l.product_api_id = :id
                 AND p.status = 'Ok'
                AND p.id_api IS NOT NULL
                AND p.source_id = 'SDC'
                GROUP BY p.id_api
                LIMIT 4
                   ";
               $params['id']  = $id;

        $stmt = $this->_em->getConnection()->prepare($sql);
        $stmt->execute($params);

        $rows = $stmt->fetchAll();
        $results = array();
        foreach($rows as $row)
        {
            $results[] = Products::bulkCreate($sourceType, $row);
        }

        return $results;
    }

    public function getTaggedProductsByTag($tag)
    {
        $sql = <<<EOL
                SELECT
                  *
                FROM Products p
                INNER JOIN products_tags t ON p.id = t. products_id
                INNER JOIN tag t2 ON t2.id = t. tag_id
                WHERE t2.tagslug = :tag
EOL;


        $params['tag']  = $tag;
        $stmt = $this->_em->getConnection()->prepare($sql);
        $stmt->execute($params);

        $results = $stmt->fetchAll();
        return $results;
    }



    /**
     * Get the paginated list of published articles
     *
     * @param int $page
     * @param int $maxperpage
     * @param string $sortby
     * @return Paginator
     */
    public function getPaginatedProductsToValidate($page=1, $maxperpage=10)
    {
        $q = $this->_em->createQueryBuilder()
            ->select('produits')
            ->from('AppBundle:Products','produits')
            ->where('produits.status = :status ')
            ->setParameter('status' , "Validation" )
        ;
    
        $q->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);
 
        return new Paginator($q);
    }

    public function findSimilarImageHash($hash, $dbh)
    {
        /*$query = $this->_em->createQuery(
            "
                SELECT
                  p
                FROM AppBundle:Products p
                WHERE p.imagehash = :imagehash
            "
        );*/
/*
        $query  = $this->_em->createQueryBuilder()
        ->select(array('b'))
        ->from( 'AppBundle:Products' , 'b')
        ->where('BIT_COUNT( b.imagehash ^  :imagehash ) <= 4')
        ->setParameter('imagehash', $hash)->getQuery();*/
        /* Ex�cute une requ�te pr�par�e en liant des variables PHP */


        $prepare= $dbh->prepare("
        SELECT *, BIT_COUNT(
        imagehash ^ :hash ) as hamming_distance
        FROM Products
        WHERE status = 'Ok'
        HAVING hamming_distance < 4
        ORDER BY hamming_distance ASC
        ");
        $prepare->bindParam(":hash",$hash);
        $prepare->execute();
        $results = $prepare->fetchAll();

        return $results;
    }

    public function countItems()
    {
        return $this->createQueryBuilder('a')
            ->select('COUNT(a)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getBunchOfTags($limit)
    {
        $maxLimit = $limit + 2000;

        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addRootEntityFromClassMetadata('AppBundle\Entity\Products', 'u');

        $sql =     "SELECT description
                    FROM Products p  LIMIT ? , ?
                    WHERE status = 'Ok' ";
        // 3. Run the query
        $query = $this->_em->createNativeQuery($sql, $rsm);
        $query->setParameter(1, $limit);
        $query->setParameter(2, $maxLimit);


        $results = $query->getArrayResult();
        foreach($results as $item)
        {
            $data[] = $item;
        }

        return $data;

    }

    public function findLatest()
    {

        $sql = "
                SELECT
                  p.*
                FROM Products p
                WHERE p.status = 'Ok'
                AND p.id_api IN (
                            SELECT DISTINCT(l.product_api_id)  FROM linked l
                     )
                ORDER BY RAND()
                LIMIT 0, 100
                ";

        $stmt = $this->_em->getConnection()->prepare($sql);

        $date = new \DateTime('NOW');
        $date->modify('-11 day');
        $h48 =  $date->format('Y-m-d H:i:s');
        $params['h48'] = $h48;

        $stmt->execute($params);

        $results = $stmt->fetchAll();

        return $results;
    }

    public function ZnxImportCsv(array $produit, $feed)
    {
//
//        $siteId = $this->getFeed()->getId();
//        $siteName = $this->getFeed()->getSitename();

        $image = "";
        if ($produit['ImageLargeURL'] != "" && $produit['ImageLargeURL'] !== null) {
            $image = $produit['ImageLargeURL'];
        } else if ($produit['ImageMediumURL'] != "" && $produit['ImageMediumURL'] !== null){
            $image = $produit['ImageMediumURL'];
        } else if ($produit['ImageSmallURL'] != "" && $produit['ImageSmallURL'] !== null){
            $image = $produit['ImageSmallURL'];
        }

        $siteId = 1 ;
        $sitename = 1;

        $sql  = <<<SQL
                            INSERT IGNORE
                        INTO products
                        (
                            id,
                            name,
                            price,
                            currency,
                            site_id,
                            promo,
                            `status`,
                            brand,
                            image,
                            source_id,
                            program,
                            actif,
                            locale,
                            category_merchant,
                            softdeleted,
                            createdAt,
                            updateAt,
                            description,
                            url,
                            short_url,
                            source_type,
                            logostore
                         ) VALUES (
                            NULL,
                            :name,
                            :price,
                            :currency,
                            :site_id,
                            :promo,
                            :status,
                            :brand,
                            :image,
                            :source_id,
                            :program,
                            :actif,
                            :locale,
                            :category_merchant,
                            :softdeleted,
                             NOW(),
                             NOW(),
                            :description,
                            :url,
                            :short_url,
                            :source_type,
                            :logostore

                         );
SQL;

        $stmt = $this->_em->getConnection()->prepare($sql);
        $stmt->bindValue("name", $produit['ProductName']);
        $stmt->bindValue("price", $produit['ProductPrice']);
        $stmt->bindValue("currency", $produit['CurrencySymbolOfPrice']);
        $stmt->bindValue("site_id", $siteId);
        $stmt->bindValue("promo", $produit['ProductPrice']);
        $stmt->bindValue("status", "Validation");
        $stmt->bindValue("brand", $produit['ProductManufacturerBrand']);
        $stmt->bindValue("image", $image);
        $stmt->bindValue("source_id", 'znx');
        $stmt->bindValue("program", $sitename);
        $stmt->bindValue("actif", 'Y');
        $stmt->bindValue("locale", 'fr');
        $stmt->bindValue("category_merchant", $produit['MerchantProductCategoryPath']);
        $stmt->bindValue("softdeleted", NULL);
        $stmt->bindValue("description", $produit['ProductLongDescription']);
        $stmt->bindValue("url", $produit['ZanoxProductLink']);
        $stmt->bindValue("short_url", md5($produit['ZanoxProductLink']));
        $stmt->bindValue("source_type", 'csv');
        $stmt->bindValue("logostore", NULL);

        $stmt->execute();
    }


}
