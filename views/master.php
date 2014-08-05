<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Testbook <?php echo isset($this->title)?"| ".$this->title:""; ?></title>
        <link href="common/css/master.css" type="text/css" rel="stylesheet">

        <?php for($i=0; $i<sizeof($this->css);$i++): ?>
        <link href="views/<?php echo $controller."/css/".$this->css[$i].".css";?>" type="text/css" rel="stylesheet">
        <?php endfor;
              for($i=0; $i<sizeof($this->js);$i++): ?>
        <script src="views/<?php echo $controller."/js/".$this->js[$i].".js";?>"></script>
        <?php endfor; ?>
    </head>
    <body>
        <div class="header">
            <div class="center-it">
                <h2>Testbook</h2>
            </div>
        </div>
        <div class="content">
        <ul class="menu">
            <li> <?php ActionLink::create("Profile", "profile", NULL, NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Posts", "profile", "posts", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Photos", "profile", "photos", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Friends", "profile", "friends", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Settings", "profile", "settings", NULL, array("id" => $this->id), "item");?></li>
            <li> <?php ActionLink::create("Logout", "index", "logout", NULL, NULL, "item");?></li>            
        </ul>

        <?php echo $this->content; ?>
        </div>
        <div class="footer">
            &copy; Copyright, 2014. All rights reserved
        </div>

    </body>
</html>
