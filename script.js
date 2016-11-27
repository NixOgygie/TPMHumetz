/**
 * Created by Theo on 29/10/2016.
 */

$(function () {

    $("#search").hide();
    $("#result").hide();

    var contenu = '';
    var contenu2 = '';


    //On récupère les différentes catégories au chargement du script

    $.ajax({
        type: 'POST',
        url: 'requete_categorie.php',
        dataType : 'JSON',
        success: function (data) {
            //how to retrieve the php mysql result here?
            $.each(data, function(i) {
                contenu += "<option value=\""+ data[i].CAT_Id + "\">" + data[i].CAT_Nom + "</option>"
            });

            $("select").html(contenu);

        },
        error: function (){
            console.log("error");
        }
    });



    $("#accept").click(function(){
        $( "#regle" ).toggle( "fold" );
        $("#search").show();


    });


    $("#submit").click(function(){
        contenu2 = '';
        $("#result").show();
        var value=$( "#categorie" ).val();


    $.ajax({
        type: 'POST',
        url: 'requete_personnel.php?categorie='+value,
        dataType : 'JSON',
        success: function (data) {
            //how to retrieve the php mysql result here?
            $.each(data, function(i) {
                contenu2 += "<tr>" + "<td class='nom'>" + data[i].PER_Nom + "</td>" + "<td class='prenom'>" + data[i].PER_Prenom + "</td>" +  "<td class='mail'>" + data[i].PER_Mail + "</td>" +  "<td>" + data[i].PER_Tel + "<a href=\"tel:" + data[i].PER_Tel  + "\"class=\"label label-primary phone\"><i class=\"fa  fa-phone-square\" aria-hidden=\"true\"></i> Appeler </a>"  + "</td>" + data[i].CAT_Nom + "</tr>"

            });

            $("tbody").html(contenu2);

        },
        error: function (){
            console.log("error");
        }
    });
        $("#result").show();

    });


});