<div class="center-it">
    <div class="message"><?php echo $this->num.", ".$this->message;?></div>
    <div class="article">Requested resource:
        <div class="resource"><?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?></div>
    </div>
</div>