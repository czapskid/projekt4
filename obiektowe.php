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

Prezentacja programowania obiektowego, dziedziczenia i serializacji:<br>
Należy napisać program z 2 klasami - Osoba i Student. Klasa Student dziedziczy po Osoba. <br>
Każda klasa posiada konstruktor, destruktor i funkcję o tej samej nazwie wypisującą obiekt na ekran. <br>
Klasa Osoba powinna posiadać przynajmniej 3 pola: Imię, Nazwisko, PESEL. <br>
Student dodatkowo ma mieć pole Ocena. 
Ponadto należy zaprezentować serializację i deserializację obiektów tych klas, 
wypisując otrzymane stringi i uruchamiając funkcję do wypisywania obiektów przed i po serializacji i deserializacji.<br><br>
<div class="container">
      




    <?php

           class Osoba
           {
             public $imie;
             public $nazwisko;
             public $pesel;

             function __construct($i, $n, $p)
             {
               $this->imie = $i;
    $this->nazwisko = $n;
    $this->pesel = $p;
    }

    function __destruct()
    {
    $this->imie = "null";
    $this->nazwisko = "null";
    $this->pesel = "null";
    }

    public function wypisz()
    {
    return 'Imię: '.$this->imie.', Nazwisko: '.$this->nazwisko.', PESEL: '.$this->pesel;
    }
    }

    class Student extends Osoba
    {
    private $ocena;
    function __construct($i, $n, $p, $o)
    {
    Osoba::__construct($i,$n,$p);
    $this->ocena = $o;
    }
    function __destruct()
    {
    Osoba::__destruct();
    $this->ocena = "null";
    }
    public function wypisz()
    {
    return Osoba::wypisz().', ocena: '.$this->ocena;
    }
    }

    echo 'Tworzenie obiektów: <br/>';
    $os1 = new Osoba("Damian","Czapski","914235876");
    echo $os1->wypisz().'<br/>';
    $st1 = new Student("Kasia","Nowak","678532419","6");
    echo $st1->wypisz().'<br/>';

    echo '<br/>Po serializacji - zniszczone wcześniejszcze elementy: </br>';
    $os2 = serialize($os1);
    $st2 = serialize($st1);
    $os1->__destruct();
    $st1->__destruct();
    echo $os1->wypisz().'<br/>';
    echo $st1->wypisz().'<br/>';

    echo '<br/>Po deserializacji - nowe obiekty: </br>';
    $os3 = unserialize($os2);
    $st3 = unserialize($st2);
    echo $os3->wypisz().'<br/>';
    echo $st3->wypisz().'<br/>';
    ?>


            </div>

  </div>

<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F%7Eczapskid%2Fprojekt4%2Fobiektowe.php">
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