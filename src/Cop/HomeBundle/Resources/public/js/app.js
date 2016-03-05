(function() {

    var UsersModel = Backbone.Model.extend({
        defaults: function() {
            return {
                firstname: "",
                name: "",
                email: ""
            }
        }
    });

    console.log(new UsersModel());

    var UsersCollection = Backbone.Collection.extend({
        model: UsersModel,
        comparator: "name",
        url: "http://163.172.129.160/app_dev.php/api/products/bottes/db"
    });

    var testCollection = new UsersCollection();

    testCollection.fetch({
        success: function() {
            console.log(testCollection);
        }
    });

})();