<?php

for($i=strlen($_GET['chiper'])-1;$i>=0;$i--) print chr(ord($_GET['chiper'][$i])-((($i+3)%2)+((($i-2)%2)+2)+(($i+1)%2)+1));
