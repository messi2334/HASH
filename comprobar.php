<?php
session_start();
if (isset ($_SESSION['iniciada'])) { 
echo "sesion iniciada";
}else {
echo "por favor inicie sesion";

}
