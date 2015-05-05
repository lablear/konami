
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Konami Code </title>

  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css'>

  <style>body {
  color: black;
  font-family: 'Lato', sans-serif;
  font-size: 30px;
}

article {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  text-align: center;
}

img {
  width: 300px;
  margin-top: 10px;
}</style>

</head>

<body>

  <article>
  <span>Enter Konami Code</span>
  <img src="http://upload.wikimedia.org/wikipedia/commons/e/e2/Konami_Code.svg" alt="konami code">
</article>

  <script src='//assets.codepen.io/assets/libs/fullpage/jquery_and_jqueryui-f854fb17d00ce0affeccceb6506e478e.js'></script>

  <script>
    var keys = [];
    var konami = '38,38,40,40,37,39,37,39,66,65';

    $(document).keydown(function(e){
        keys.push( e.keyCode );
        if ( keys.toString().indexOf( konami ) >=0 ){

            keys = [];

            //add silly music in background
           $('body').append ('<iframe width="0" height="0" src="https://www.youtube.com/embed/v83eOYu9Ad8?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>'); //ookay - star wars
          //add &autoplay=1 at the end of the source link
        }
    });
    //@ sourceURL=pen.js
  </script>