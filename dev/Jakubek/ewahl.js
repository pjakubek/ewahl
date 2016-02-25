var formStore = new FS.Store.GridFS("formulare");

Uploads = new FS.Collection("formulare", {
 stores: [formStore]
});

var AFormStore = new FS.Store.GridFS("aformulare");
AUploads = new FS.Collection("aformulare", {
  stores: [AFormStore]
});


/*
--- TEMPLATE EVENTS BEGIN ---
*/

// Event fuer das Login-Formular
if(Meteor.isClient) {

  Template.Dashboard.helpers({
    formulare:function(){
      return Uploads.find();
    },
    aformulare:function(){
      return AUploads.find();
    }

}
);


  Template.Admin.helpers({
    aformulare:function(){
      return AUploads.find();
    }
  }
);

  Template.Login.events({
    'submit form': function(event, template) {
      event.preventDefault();
      var emailVar = template.find('#email').value;
      var passwordVar = template.find('#password').value;
      Meteor.loginWithPassword(emailVar, passwordVar);
      Accounts.onLoginFailure( function() {
        alert("Dieser Benutzer existiert nicht!");
        throw new Meteor.Error(403, 'you need to contact the admin!');

      });
    }
  });

// Button Event: Logout
  Template.Dashboard.events({
    'click #logout': function(event){
        event.preventDefault();
        Meteor.logout();
    },
    'change .input-1': function(event, template){
        FS.Utility.eachFile(event, function(file){
          var fileObj = new FS.File(file);
          Uploads.insert(fileObj,function(err){
            console.log(err);
          })
        })
    }
});

Template.Admin.events({
  'click #logout': function(event){
      event.preventDefault();
      Meteor.logout();
  },
  'change .input-a': function(event, template){
      FS.Utility.eachFile(event, function(file){
        var fileO = new FS.File(file);
        AUploads.insert(fileO, function(err){
          console.log(err);
        })
      })
  }
});




// Button Event: Passwort vergessen
  Template.Login.events({
    'click .forgot': function(event) {
        event.preventDefault();
        alert('Bitte kontaktieren Sie uns unter: \n Telefon: 01 379404142 \n E-Mail: zwa.bmhs@bmbf.gv.at')
    }
  });
}

/*
--- TEMPLATE EVENTS END ---
*/

/*
--- HELPERS BEGIN ---
*/

/*
--- HELPERS END ---
*/
