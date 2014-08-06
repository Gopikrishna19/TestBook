<!DOCTYPE html>
<html>
    <head>
        <title>Testbook <?php echo isset($this->title)?"| ".$this->title:""; ?></title>
        <link href="/common/css/master.css" type="text/css" rel="stylesheet">
                
        <?php for($i=0; $i<sizeof($this->css);$i++): ?>
        <link href="/views/<?php echo $this->controller."/css/".$this->css[$i].".css";?>" type="text/css" rel="stylesheet">
        <?php endfor; ?>
        <?php for($i=0; $i<sizeof($this->js);$i++): ?>
        <script src="/views/<?php echo $this->controller."/js/".$this->js[$i].".js";?>"></script>
        <?php endfor; ?>
    </head>
    <body>
        <div class="header">
            <div class="center-it">
                <h2>Testbook</h2>
            </div>
        </div>
        <div class="content">
