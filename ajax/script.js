$(document).ready(function() {

  getAlbums();

  function getAlbums(data) {

    $.ajax({

      url: "api.php",
      method: "GET",

      success: function(data) {

        console.log(data);
        printAlbums(data)
      },

      error: function() {
        alert("errore");
      }

    });

  }

  function printAlbums(data) {

    var source   = $("#template_album").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < data.length; i++) {
      var album = data[i];

      var albumPoster = album.poster;
      var albumTitle = album.title;
      var albumAuthor = album.author;
      var albumYear = album.year;

      var context = {
        poster: albumPoster,
        title: albumTitle,
        author: albumAuthor,
        year: albumYear,

      };

      var html = template(context);

      $(".album_container").append(html);

    }
  }

});
