<?php $data = $this->model->getUserDetails($this->id); 
       
 
 ?>
<?php
    if($data == NULL) {
        echo "<section>No details to display</section>";
        if($this->checkUserId()) {
            echo "Click ";
            ActionLink::create("here", "profile","edit", $this->id);
            echo " to edit your personal details";
        }
    }
    else {
       if($this->checkUserId()) ActionLink::create("Edit", "profile","edit", $this->id, NULL, "btn");
?>
<section>
    <div class="title">Few words...</div>
    <div class="content"><?php echo $data['words']; ?></div>
</section>
<section>
    <div class="title">Education</div>
    <div class="content"><?php echo $this->model->edu[$data['education']]; ?></div>
    <div class="title">Work</div>
    <div class="content"><?php echo $data['work']; ?></div>
</section>
<section>
    <div class="title">Personal details</div>
    <div class="title">Date of Birth: 
    </div>
    <div class="content"><?php echo $data['dob']; ?></div>
    <div class="title">Gender:</div>
    <div class="content"><?php echo $data['gender']; ?></div>
    <div class="title">Marital Status</div>
    <div class="content"><?php echo $this->model->sin[$data['single']]; ?></div>
</section>
<?php    } ?>