<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo'<!DOCTYPE html>

<html>
    <head>
        <title>HARJOITELLAAN KOODAUSTA</title>';

include("header.php");
   
    echo'</head>
    <body>
  
         <header style="border: 1px solid  #333333;">
        <h1>Harjoitellaan koodausta 	&#129321 </h1>
        
    </header>
        
        <div style="border: 1px solid  #333333; margin-top: 20px; padding-bottom: 20px">
            
            <p style="font-size: 1em; color: blue">Hello World!</p>
            
<div  style="text-align: center">
            <img class="kuva" src="https://i.imgur.com/2w4sYoJ.png" style="width: 500px; height: 300px;">
            
</div>
<br>
            <h2>Nettisivuja (järjestämätön lista)</h2>

<ul>
  <li> <a href="https://cuulis.cm8solutions.fi/">Cuulis</a> </li>
  <li> <a href="https://wilma.edu.hel.fi/">Wilma</a> </li>
  <li> <a href="https://o365.edu.hel.fi/">Sähköposti</a> </li>
</ul>  
            
            <br>
            
        <h2>Lisää nettisivuja (järjestetty lista)</h2>

<ol>
  <li><a href="https://www.hel.fi/tyly/fi/uutiset/etu-toolon-lukion-oppimateriaalit-lukuvuodelle-2020-2021">Etu-Töölön lukion oppimateriaalit lukuvuodelle 2020-2021</a> </li>
  <li><a href="https://wilma.edu.hel.fi/news/48501">RO-tiedotteet</a> </li>
  <li><a href="https://google.fi/">Google</a> </li>
</ol>  

<br>
          <h2>Linkit toisille sivuille (painikkeet): </h2>
                  <a href="lomake.php"><u>Tämä linkki vie sivulle lomake.php</u></a>
                
        </div>';
        
include("footer.php");

echo    '</body>
</html>';
