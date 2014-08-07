</div>
<div class="footer">
    &copy; Copyright, 2014. All rights reserved
</div>
<?php for($i=0; $i<sizeof($this->postjs);$i++): ?>
<script src="/views/<?php echo $this->controller."/js/".$this->postjs[$i].".js";?>"></script>
<?php endfor; ?>
</body>
</html>