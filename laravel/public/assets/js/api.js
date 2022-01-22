// $.get('/api/imoveisDisponiveis/',  // url
//       function (data, textStatus, jqXHR) {  // success callback
//           console.log(data);
//           $.each(data, function(key, val) {
//             console.log(lista.PageName);
//         });
//     });

// var urlBase = "/api/imoveisDisponiveis/";

//     $.getJSON(urlBase, function(data) {
//         var items;
//         $.each(data, function(key, val) {
//             items = (lista.titulo);
//             console.log(items);
//             console.log(data);
//         });
//     });

    (function() {
        var flickerAPI = "/api/imoveisDisponiveis/";
        $.getJSON( flickerAPI, {
          format: "json"
        })
          .done(function( data ) {
            $.each( data.lista, function( k, v ) {
                var title;
                $.each(this, function( k, v ) {
                  title = data.lista[0].titulo;
                });
                $("#tituloImovel").text(title);
            });
          });
      })()