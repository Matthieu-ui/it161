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
<div style="
    padding: 10px;
">	
    <label>
        How Did did you visit us today?:<br>
        <select name="device used" required="required" title="" tabindex="30">
            <option value="">Share How You viewed this webpage</option>
            <option value="phone">Phone</option>
            <option value="Tablet">tablet</option>
            <option value="Desktop">Desktop</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>How can this website improve?</legend>
        <input type="checkbox" name="Interested_In[]" value="Mobile optimization" tabindex="40" /> Mobile optimization <br />
        <input type="checkbox" name="Interested_In[]" value="Content" /> Content <br />
        <input type="checkbox" name="Interested_In[]" value="Redesign" /> Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Accessibility" /> Accessibility<br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

