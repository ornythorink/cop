var UsersView = Backbone.View.extend({
    el: "#users__body",

    collection: new UsersCollection(),

    initialize: function() {
        var scope = this;
        this.collection.fetch({
            success: function() {
                scope.render();
            }
        });
    },

    render: function() {
        var scope = this;
        this.collection.forEach(function(model) {
            scope.output(model);
        });
        return this;
    },

    output: function(model) {
        var row = document.createElement("tr");
        row.innerHTML = "<td>" + model.get("firstname") + "</td>\
        <td>" + model.get("lastname") + "</td>\
        <td>" + model.get("email") + "</td>";
        this.el.appendChild(row);
    }
});
