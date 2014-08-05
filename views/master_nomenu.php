<!DOCTYPE html>
<html>
    <head>
        <title>Testbook <?php echo isset($this->title)?"| ".$this->title:""; ?></title>
        <link href="common/css/master.css" type="text/css" rel="stylesheet">
        <link href="views/index/css/login.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="center-it">
                <h2>Testbook</h2>
            </div>
        </div>
        <div class="content">
            <?php echo $this->content; ?> 
        </div>
        <div class="footer">
            &copy; Copyright, 2014. All rights reserved
        </div>
    </body>
</html>