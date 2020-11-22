<?php

setcookie("metgeyazilim", $_COOKIE["metgeyazilim"]+1 , time()+3600);
echo $_COOKIE["metgeyazilim"];

