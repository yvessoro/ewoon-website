$(document).ready(function(){
    var url_marque=  "pages/api/api_getmanufacturer.php";
    populateSelectManufacturer(url_marque);
});

function populateSelectManufacturer(url){
    $.ajax({
        url: url,
        type: 'get',
        success: function(response){
            var rep = response;
            let data = JSON.parse(rep)
            console.log(data);
            //console.log(data.length);
            let dataElemrnt = data.array;
            $('#marque').empty();
            $('#marque').append("<option selected disabled>Marque</option>")
            for (let i = 0; i < dataElemrnt.length; i++) {
                //console.log(element)
                $('#marque').append("<option value='"+dataElemrnt[i].manuId+"'>"+dataElemrnt[i].manuName+"</option>")
            }
        }
    });
    //document.location.replace(url);
    //console.log(url);
}

function populateSelectModele(url){
    $.ajax({
        url: url,
        type: 'get',
        success: function(response){
            var rep = response;
            let data = JSON.parse(rep)
            console.log(data);
            //console.log(data.length);
            let dataElemrnt = data.array;
            $('#modele').empty();
            $('#modele').append("<option selected disabled>Modèle/Année</option>")
            for (let i = 0; i < dataElemrnt.length; i++) {
                //console.log(element)
                $('#modele').append("<option value='"+dataElemrnt[i].modelId+"'>"+dataElemrnt[i].modelname+" ("+dataElemrnt[i].yearOfConstrFrom+")</option>")
            }
        }
    });
    //document.location.replace(url);
    //console.log(url);
}

function populateSelectFuelType(url){
    $.ajax({
        url: url,
        type: 'get',
        success: function(response){
            var rep = response;
            let data = JSON.parse(rep)
            console.log(data);
            //console.log(data.length);
            let dataElemrnt = data.linkageTargets;
            $('#motorisation').empty();
            $('#motorisation').append("<option selected disabled>Motorisation</option>")
            for (let i = 0; i < dataElemrnt.length; i++) {
                //console.log(element)
                $('#motorisation').append("<option value='"+dataElemrnt[i].linkageTargetId+"'>"+dataElemrnt[i].description+" ("+dataElemrnt[i].fuelType+")</option>")
            }
        }
    });
    //document.location.replace(url);
    //console.log(url);
}

$('#marque').change(function() {
    //test after 
    //console.log('test');
    var id = $('#marque').val();
    var url_modele=  "pages/api/api_getmodeletype.php/?marque="+id;
    //alert(id);
    populateSelectModele(url_modele);

    $('#motorisation').empty();
    $('#motorisation').append("<option selected disabled>Motorisation</option>")
            

});

$('#marque').change(function() {
    //test after 
    //console.log('test');
    var id = $('#marque').val();
    var url_modele=  "pages/api/api_getmodeletype.php/?marque="+id;
    //alert(id);
    populateSelectModele(url_modele);

    $('#motorisation').empty();
    $('#motorisation').append("<option selected disabled>Motorisation</option>")
            

});

$('#modele').change(function() {
    //test after 
    //console.log('test');
    var id = $('#modele').val();
    var url_fueltype=  "pages/api/api_getfueltype.php/?model="+id;
    //alert(id);
    populateSelectFuelType(url_fueltype);
});
