(function() {

    var Profile = Backbone.Model.extend();

    var ProfileList = Backbone.Collection.extend({
        model: Profile,
        url: 'http://163.172.129.160/app_dev.php/api/products/bottes/db'
    });

    var ProfileView = Backbone.View.extend({
        el: "#profiles",
        template: _.template($('#profileTemplate').html()),
        render: function(eventName) {
            _.each(this.model.models, function(profile){
                var profileTemplate = this.template(profile.toJSON());
                $(this.el).append(profileTemplate);
            }, this);
            return this;
        }
    });

    var profiles = new ProfileList();
    var profilesView = new ProfileView({model: profiles});
    profiles.fetch({
        success: function() {
            profilesView.render();
        }
    });



})();