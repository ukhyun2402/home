<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    // IE 감지
      function detectIE() {
          var ua = window.navigator.userAgent;
          var msie = ua.indexOf('MSIE ');
          if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
          }
          var trident = ua.indexOf('Trident/');
          if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
          }
          var edge = ua.indexOf('Edge/');
          if (edge > 0) {
            // Edge (IE 12+) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
          }
          // other browser
          return false;
      }

      document.addEventListener("DOMContentLoaded", function(){

        if ( detectIE() ){
          document.write('ie' + detectIE());
        }
      });
  </script>
  <title>Document</title>
</head>
<body>
  
</body>
</html>