<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<div class = "formcss">
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	   
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
    <div>	
    <label>
        How Did You Hear About Me?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="LinkedIn">LinkedIn</option>
            <option value="Web">Website Search</option>
            <option value="SocialMedia">Social Media</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="Building a New Website" tabindex="40" />Building a New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" />CSS Responsive Design Ideas <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" />More Research Topic Related Info <br />
        <input type="checkbox" name="Interested_In[]" value="What is on the Horizon" />What my Plans are for this Website <br />
        <input type="checkbox" name="Interested_In[]" value="Other" />Other Options<br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join my mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to me!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
</div>
<!-- END HTML FORM -->

