<!DOCTYPE html>
<html>
    <head>
        <title>Testbook <?php echo isset($this->title)?"| ".$this->title:""; ?></title>
        <link href="/common/css/master.css" type="text/css" rel="stylesheet">
        <script src="/common/js/jquery.js"></script>

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
                <?php ActionLink::create("Home", "profile"); ?>
                <div class="notify"></div>
            </div>
        </div>
        <div class="content">
            <ul class="menu left">
                <li> <?php ActionLink::create("Profile", "profile", NULL, NULL, array("id" => $this->id), "item index", "", "background-image: url(/common/img/profile.png)");?></li>
                <li> <?php ActionLink::create("Posts", "profile", "posts", NULL, array("id" => $this->id), "item posts", "", "background-image: url(/common/img/posts.png)");?></li>
                <li> <?php ActionLink::create("Photos", "profile", "photos", NULL, array("id" => $this->id), "item photos", "", "background-image: url(/common/img/photos.png)");?></li>
                <li> <?php ActionLink::create("Friends", "profile", "friends", NULL, array("id" => $this->id), "item friends", "", "background-image: url(/common/img/friends.png)");?></li>
                <li> <?php ActionLink::create("Settings", "profile", "settings", NULL, array("id" => $this->id), "item settings", "", "background-image: url(/common/img/settings.png)");?></li>
                <li> <?php ActionLink::create("Logout", "index", "logout", NULL, NULL, "item", "", "background-image: url(/common/img/logout.png)");?></li>
            </ul>
            <div class="right">
                <div class="photo"><img src="/common/img/bg.png" alt="profile picture"></div>
                <?php ActionLink::create("Name of the person", "profile", NULL, NULL, array("id" => $this->id), "article");?>
            </div>
            <div class="middle">
                <h2 class="article"><?php echo $this->title; ?></h2>                