Users = new Mongo.Collection("users");

var userID;
country = {};


if (!Meteor.isClient) {
} else {

    Session.set("land", "Alle Schulen");
    Session.set("checklist_land", "Alle Schulen");

    Template.user_management.events({
        'click #delete': function (event, template) {
            Users.remove(this._id);

        },
        'change #bundesland': function(event,template){
            this.country = template.find('#bundesland').value;
            Session.set("land", this.country);
        },
        'click #view': function (){
            Session.set("singleuser", this._id);
        },
        'click #edit': function (){
            Session.set("singleuser", this._id);
        },
        'click #saveEdit': function (event, template) {
            if (template.find('#edit_dNr').value === "" || template.find('#edit_sKz').value === "" ||  template.find('#edit_sKn').value === "" || template.find('#edit_gruppe').value === "" || template.find('#edit_email').value === "" || template.find('#edit_bLehrer').value === "" || template.find('#edit_sZettel').value === "") {
                //template.find(myAlert).style.display='block';
                alert("Nicht alle Felder ausgefüllt!")
            } else {
                editUser(template.find('#saveEdit').name, template.find('#edit_sKz').value, template.find('#edit_dNr').value, template.find('#edit_sKn').value, template.find('#edit_bundesland').value, template.find('#edit_gruppe').value, template.find('#edit_email').value, 'testpasswort', template.find('#edit_bLehrer').value, template.find('#edit_sZettel').value);
            }
        }
    });

    Template.checklist.events({
        'change #bundeslandChecklist': function(event,template){
            this.country = template.find('#bundeslandChecklist').value;
            Session.set("checklist_land", this.country);
        },
    });

    Template.addUser_content.events({
        'click #save_add': function (event, template) {
            if (template.find('#sKz').value === "" || template.find('#dNr').value === "" || template.find('#sKn').value === "" || template.find('#gruppe').value === "" || template.find('#email').value === ""|| template.find('#bLehrer').value === "" || template.find('#sZettel').value === "") {
                //template.find(myAlert).style.display='block';
                alert("Nicht alle Felder ausgefüllt!")
            } else {
                addUser(template.find('#sKz').value, template.find('#dNr').value, template.find('#sKn').value, template.find('#add_bundesland').value, template.find('#gruppe').value ,template.find('#email').value, 'testpasswort' ,template.find('#bLehrer').value, template.find('#sZettel').value);
            }
        }
    });


    function addUser(sKz, dNr, sKn, bLand, gruppe, email, password, bLehrer, sZettel) {
        Users.insert({
            sKz: sKz,
            dNr: dNr,
            sKn: sKn,
            bLand: bLand,
            gruppe: gruppe,
            email: email,
            password: password,
            bLehrer: bLehrer,
            sZettel: sZettel,
            f09:"",
            f08:"",
            f11:"",
            f23:"",
            f25:"",
            f16:"",
            f29:"",
            f19:""
        });
    }

    function editUser(id, sKz, dNr, sKn, bLand, gruppe, email, password, bLehrer, sZettel) {
        Users.update(
            {_id: id},
            {
                $set: {
                    sKz: sKz,
                    dNr: dNr,
                    sKn: sKn,
                    bLand: bLand,
                    gruppe: gruppe,
                    email: email,
                    password: password,
                    bLehrer: bLehrer,
                    sZettel: sZettel
                }
            }
        )

    }

    Template.checklist.helpers({
        users: function () {
            if(Session.get("checklist_land") === "Alle Schulen"){
                return Users.find();
            } else {
                return Users.find({bLand: Session.get("checklist_land")});
            }
        }
    });

    Template.user_management.helpers({
        users: function () {
            if(Session.get("land") === "Alle Schulen"){
                return Users.find();
            } else {
                return Users.find({bLand: Session.get("land")});
            }

        },
        user: function () {
            return Users.findOne({_id: Session.get("singleuser")});
        },

    });

}

if (Meteor.isServer) {
    Meteor.startup(function () {
        // code to run on server at startup
    });
}

// db.users.insert({ dNr: "B11", sKz: 111111, name: "eWahlistcool", bLehrer: 91, sZettel: 120, f09: "checked", f08: "", f11: "", f23: "", f25: "checked", f16: "", f29: "", f19: "checked" });

