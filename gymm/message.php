<?php session_start(); ob_start();
$msg = isset($_GET['msg']) ? $_GET['msg'] : header('location: index.php');

echo '<div style="width: 400px; margin: 5% auto; position: relative; 
                  border-radius: 5px; box-shadow: 0px 0px 6px #666; 
                  padding: 20px; text-align: center; font-family: Arial; font-size: 12px;">
        <h1 style="margin: 0px;">'.$msg.'</h1>
        <a href="index.php">Retour Membre space</a> - <a href="index-worker.php">Retour worker space</a>
      </div>';