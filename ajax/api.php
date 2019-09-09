<?php

  header('Content-type: application/json');

  $albums = [

    [
      "poster" => "https://static.lafeltrinelli.it/static/images-3/xxl/457/8864457.jpg",
      "title" => "Appetite for Destruction",
      "author" => "Guns N' Roses",
      "year" => "1987"
    ],

    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/51jPDpqLdqL.jpg",
      "title" => "Greatest Hits",
      "author" => "Foo Fighters",
      "year" => "2009"
    ],

    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/81bcusKozsL._SX466_.jpg",
      "title" => "Wasting Light",
      "author" => "Foo Fighters",
      "year" => "2011"
    ],

    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/51H6nwsp6QL.jpg",
      "title" => "American Idiot",
      "author" => "Green Day",
      "year" => "2004"
    ],

    [
      "poster" => "https://www.rnbjunk.com/foto/2016/11/greenday-600x600.jpg",
      "title" => "Revolution Radio",
      "author" => "Green Day",
      "year" => "2016"
    ],

    [
      "poster" => "https://www.significatocanzoni.it/wp-content/uploads/2014/03/acdc-1.jpg",
      "title" => "Back in Black",
      "author" => "AC/DC",
      "year" => "1980"
    ],

    [
      "poster" => "https://images.genius.com/361354eb8d27e802f7f08c30cb7d0535.595x595x1.jpg",
      "title" => "Live at Wembley '86",
      "author" => "Queen",
      "year" => "1990"
    ],

    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/51wM4rfWZKL.jpg",
      "title" => "Terremoto",
      "author" => "Litfiba",
      "year" => "1993"
    ],

    [
      "poster" => "https://m.media-amazon.com/images/I/81WxoyNuwxL._SS500_.jpg",
      "title" => "Buon compleanno Elvis",
      "author" => "Ligabue",
      "year" => "1995"
    ],

    [
      "poster" => "https://www.negrita.com/wp-content/uploads/2014/08/cover_big_reset.jpg",
      "title" => "Reset",
      "author" => "Negrita",
      "year" => "1999"
    ],

  ];

  echo json_encode($albums);

?>
