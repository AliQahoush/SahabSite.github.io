<?php
/* Template Name: lIGHT FORM */
get_header();
?>
<?php the_content(); ?>  

<div class="rn-section-gap bg_color--1">
    <div class="container">
        <div class="row" style="text-align:center;margin: auto;width: 50%;border: 22px solid lightcyan; padding: 10px;">
            <div class="col-md-12">
            <form  method="post" style="margin: auto; width: 220px">
                <label>Enter Your Name</label>
            <input type="text" name="firstname">
            <br>
                            <label>Enter Your Phone Number</label>

            <input type="number" name="phonenumber" >
            <br>
                            <label>Enter Your Region</label>

            <input type="text" name="region">
            <br>

                <label>Select Your Problem</label>
                <div>
                  <select name="problem">
                    <option value="burntoutbulbmaintenance"> تصليح لمبه محروقه</option>
                    <option value="fullarminstallation"> تركيب ذراع كامل</option>
                    <option value="other">شكاوي اخرى</option>
                  </select>
                    </div>


            <input type="submit" name="lightsub" value="Send" style="margin:center">

            </form>  
             </div>
        </div>
    </div>
</div>
<?php
get_footer();
