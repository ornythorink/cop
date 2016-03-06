(function() {
    //
    //var Product = Backbone.Model.extend();
    //
    //var ProductList = Backbone.Collection.extend({
    //    model: Product,
    //    url: 'http://163.172.129.160/app_dev.php/api/products/bottes/db',
    //    parse: function(response){
    //         var items = _.map(response, function (itemArray, index) {
    //            return {
    //                name: itemArray[0].name,
    //                id: index + 1};
    //        });
    //        return items;
    //    }
    //});
    //// thanks to http://stackoverflow.com/questions/17392713/backbone-parse-nested-json
    //
    //var ProductView = Backbone.View.extend({
    //    el: "#products",
    //    template: _.template($('#productsTemplate').html()),
    //    render: function(eventName) {
    //        _.each(this.model.models, function(product){
    //            var productTemplate = this.template(product.toJSON());
    //            $(this.el).append(productTemplate);
    //        }, this);
    //        return this;
    //    }
    //});
    //
    //var products = new ProductList();
    //var productsView = new ProductView({model: products});
    //products.fetch({
    //    success: function() {
    //        productsView.render();
    //    }
    //});
})();