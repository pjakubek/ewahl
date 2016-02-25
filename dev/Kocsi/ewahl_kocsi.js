Results = new Mongo.Collection("tasks");

ResultsIndex = new EasySearch.Index({
  collection: Results,
  fields: ['vname', 'nname','standort','stimmen','amk'],
  engine: new EasySearch.Minimongo()
});

if (Meteor.isClient) {

  Template.suche_und_tabelle_und_graph.helpers({
    inputAttributes: function () {
      return { 'class': 'easy-search-input', 'placeholder': 'Kandidaten durchsuchen...' };
    }});

  Template.suche_und_tabelle_und_graph.helpers({
        resultsIndex: () => ResultsIndex // instanceof EasySearch.Index
  });

  Template.table_content.helpers({
    results: function () {
      return Results.find();
    }
  });
/* Edit Template Helpers */
  Template.editVname.helpers({
    onSuccess: function () {
      var id = this._id;
      return function (res, val) {
        Results.update({ _id: id }, { $set: { vname: val } });
        draw();
      }
    }
  });

  Template.editNname.helpers({
    onSuccess: function () {
      var id = this._id;
      return function (res, val) {
        Results.update({ _id: id }, { $set: { nname: val } });
        draw();
      }
    }
  });

  Template.editStd.helpers({
    onSuccess: function () {
      var id = this._id;
      return function (res, val) {
        Results.update({ _id: id }, { $set: { standort: val } });
      }
    }
  });

  Template.editStimmen.helpers({
    onSuccess: function () {
      var id = this._id;
      return function (res, val) {
        Results.update({ _id: id }, { $set: { stimmen: val } });
        draw();
      }
    }
  });

  Template.editAmk.helpers({
    onSuccess: function () {
      var id = this._id;
      return function (res, val) {
        Results.update({ _id: id }, { $set: { amk: val } });
      }
    }
  });

  Template.suche_und_tabelle_und_graph.events({
    'click #delete': function (event, template) {
      Results.remove(this._id);
      draw(); //on click in tab -> löschen in graph
    }});

  Template.addUser_content.events({
    'click #save_add': function (event, template) {
      if (template.find('#vname').value === "" || template.find('#nname').value === "" || template.find('#standort').value === "" || template.find('#stimmen').value === "" || template.find('#amk').value === "") {
        //template.find(myAlert).style.display='block';
        alert("Nicht alle Felder ausgefüllt!")
      } else {
        addUser(template.find('#vname').value, template.find('#nname').value, template.find('#standort').value, template.find('#stimmen').value, template.find('#amk').value);
      }
      draw();
    }
  });

  function addUser(vname, nname, standort, stimmen, amk) {
    Results.insert({
      vname: vname,
      nname: nname,
      standort: standort,
      stimmen: stimmen,
      amk: amk
    });
  }


  Meteor.startup(function () {
    draw();
  });
}

function draw(){
  var erg = Results.find();
  var list = [];
  erg.forEach(function(post){
    list.push([post.vname+ ' ' + post.nname, parseInt(post.stimmen,10)]);
    console.log(post.stimmen)
  });
  //console.log(list);
  chart = {
    target: 'chart1',
    type: 'PieChart',
    columns: [
      ['string', 'name'],
      ['number', 'stimmen']
    ],
    rows: list


    /*['Anna', 350],
     ['Frank Maier', 90],
     ['Oliver Fischer', 100],
     ['Margit Holzer', 222],
     ['Sebastian Müller', 345] */
    ,
    options: {
      /*'width':600,*/
      'height':300
    }
  };
  drawChart(chart);
}

if (Meteor.isServer) {
  Meteor.startup(function () {

  });
}







