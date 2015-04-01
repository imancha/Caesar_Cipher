<?php

for($i=0;$i<strlen($_GET['plain']);$i++) print chr(ord($_GET['plain'][strlen($_GET['plain'])-$i-1])+((($i+3)%2)+((($i-2)%2)+2)+(($i+1)%2)+1));
