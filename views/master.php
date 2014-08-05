<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Testbook <?php echo isset($this->title)?"| ".$this->title:""; ?></title>
        <link href="public/css/master.css" type="text/css" rel="stylesheet">

        <?php for($i=0; $i<sizeof($this->css);$i++): ?>
        <link href="views/<?php echo $controller."/css/".$this->css[$i].".css";?>" type="text/css" rel="stylesheet">
        <?php endfor;
              for($i=0; $i<sizeof($this->js);$i++): ?>
        <script src="views/<?php echo $controller."/js/".$this->js[$i].".js";?>"></script>
        <?php endfor; ?>
    </head>
    <body>
        <ul class="menu">
            <li> <?php ActionLink::create("Profile", "Profile", NULL, NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Posts", "Profile", "posts", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Photos", "Profile", "photos", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Friends", "Profile", "friends", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Settings", "Profile", "settings", NULL, array("id" => $this->id), "item");?></li>            
        </ul>

        <?php echo $this->content; ?>


    </body>
</html>
