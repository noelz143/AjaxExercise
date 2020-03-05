<?php
   // Array with names
   $a[] = "Reymartin Ybanez";
   $a[] = "Carl Sarsonas";
   $a[] = "Josephine Salonoy";
   $a[] = "Noel Deramos";
   $a[] = "Lovely Rivera";
   $a[] = "Mark Ronald Manalop";
   $a[] = "Thommy Calledo";
   $a[] = "Martin Cabatuan";
   $a[] = "Alfie Villarin";
   $a[] = "Joshua Cabaltera";
   $a[] = "Alvin Romaguera";
   
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
      
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>