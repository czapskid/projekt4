<!DOCTYPE html>

<html lang="pl">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../main.css">
      <meta name="description" content="Strona ">
      <meta name="keywords" content="cv, damian, czapski, projekt, programowanie, internetowe">
      <meta name="author" content="&copy;2016 Damian Czapski">
      <meta name="copyright" content="(c) 2016 czapskid">
      <meta name="reply-to"  content="czapskid@ee.pw.edu.pl">
      <title>Damian Czapski - Programowanie Internetowe</title>
   </head>
   <body>
   		<div id = "caly_blok">
        <div id = "naglowek">
            Programowanie Internetowe<br>
            Projekt nr. 4
         </div>


      <div id = "spis_tresci"><ul>
            <li><a href="../index.php">Strona główna</a></li>
            <li><a href="../o_mnie.html">O mnie</a></li>
                     <li><a href="../projekt1.html">Projekt 1</a></li>
                     <li><a href="../projekt2.html">Projekt 2</a></li>
                     <li><a href="../projekt3.php">Projekt 3</a></li>
                     <li><a href="../projekt4.html">Projekt 4</a></li>
                     <li> <ul>
                         <li><a href="upload.html">Upload</a></li>
                         <li><a href="download.php">Download</a></li>
                         <li><a href="obiektowe.php">Obiektowe</a></li>
                         <li><a href="ajax.html">AJAX</a></li>
                         <li><a href = "https://github.com/czapskid/projekt4">Źródła strony</a></li>
                     </ul></li>
                  <li><a href="projekt5.html">Projekt 5</a></li>
                     <li><a href="../projekt3/logout.php">Wyloguj</a></li>
         </ul></div>


         <div id = "tresc">
            <h1>Download plików.</h1>

 Program do prezentacji uploadowanych plików oraz jego downloadu:<br>
- wyświetlać listę plików: lp. nazwa, typ, rozmiar;<br>
- nazwa pliku ma być linkiem do programu umożliwiającego pobranie tego pliku.<br><br>

      Lista plików<br>
<table>
           <thead>
             <tr>
               <th>Lp</th>
               <th>Nazwa</th>
               <th>Typ</th>
               <th>Rozmiar</th>
             </tr>
           </thead>
           <tbody>
 
               <?php
		 header("Content-Transfer-Encoding: Binary"); 
                 $katalog = './upload/';
                 $pliki = scandir($katalog);
                 $licznik = 1;
                 foreach ($pliki as $plik) {
                   if ($plik!='.' && $plik!='..') {
                     $info = pathinfo($plik);
                     $size = filesize($katalog.'/'.$plik);
                     echo '<tr><td>'.$licznik.'</td><td><a href="downloads.php?plik='.$plik.'">'.$info['filename'].'</a></td><td>'.$info['extension'].'</td><td>'.$size.'B</td></tr>';
                     $licznik++;
                   }
                 }
                ?>
 
           </tbody>
         </table>

          
         </div>



         <div id = "stopka">
            Autorem strony jest Damian Czapski.
         </div>


<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F%7Eczapskid%2Fprojekt4%2Fdownload.php">
                  <img src="http://dev.bowdenweb.com/a/i/dev/webcomm/badge-w3c-valid-html5.png" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
               </a>



    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Poprawny CSS!" />
    </a>

         </div>

         
      </body>
</html>
