<?php 
    $record = $this->model->getUserDetails($this->id);
    if ( $record == NULL ){
        $record = array();
        $record['words'] = "";
        $record['education'] = "0";
        $record['work'] = "";
        $record['dob'] = "";
        $record['gender'] = "";
        $record['single'] = "-1";

    }

    $edu = $this->model->edu;
    $sin = $this->model->sin;
    function renderOption($text, $value, $selected) {
        echo "<option value='$value' ".($selected ? "selected": "").">$text</option>";
    }
    
    function getOptions($array, $selected) {
        foreach($array as $key => $value) {
            renderOption($value, $key, $key == $selected);
        }
    }
?>
<form method="post" action="/profile/editSave">
    <section>
        <label>Few words about me</label>
        <textarea class="txt" name="words"><?php echo $record['words']; ?></textarea>
    </section>
    <section>
        <label>Education</label>
        <select class="txt" name="education">
            <?php getOptions($edu, $record['education']); ?>
        </select>
        <label>Work</label>
        <textarea class="txt" name="work"><?php echo $record['work'];?></textarea>
    </section>
    <section>
        <label>Date of Birth</label>
        <input type="date" name="dob" value="<?php echo $record['dob'];?>">

        <label>Gender</label>
        <label for="M"><input type="radio" id="M" name="gender" value="male" <?php echo $record['gender']=='male'? "checked":"" ; ?>> Male</label>
        <label for="F"><input type="radio" name="gender" id="F" value="female" <?php echo $record['gender']=='female'? "checked":"" ; ?>> Female</label>
        <label>Marital Status</label>
        <select name="single">
            <?php getOptions($sin, $record['single']); ?>
        </select>
    </section>
    <input type="submit" name="submit" value="Save">
</form>