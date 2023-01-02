<?php
/* Template Name: Materialstobedestroyed FORM */
get_header();
?>
<?php the_content(); ?>  

<div class="rn-section-gap bg_color--1">
    <div class="container">
        <div class="row" style="text-align:center;margin: auto;width: 50%;border: 22px solid lightcyan; padding: 10px;">
            <div class="col-md-12">
            <form  method="post" style="margin: auto; width: 220px">
                  <select name="type">
                    <option value="person">شخص</option>
                    <option value="company">شركة</option>
                    <option value="establishment">مؤسسة</option>
                  </select>

                    <label>Select The purpose of the damage</label>
                <div>
                  <select name="thepurposeofthedamage">
                    <option value="On personal request">بناء على طلب شخصي</option>
                    <option value="Based on a letter from an official authority">بناء على ككتاب من جهة رسمية</option>
                    <option value="other">أخرى</option>
                  </select>
                    </div>


                <label>Enter Your Name</label>
            <input type="text" name="firstname">
            <br>
                            <label>Enter Your Phone Number</label>

            <input type="number" name="phonenumber" >
            <br>
                            <label>Enter Your Region</label>

            <input type="text" name="region">
            <br>
      <label> Details of the item to be destroyed</label>
             <input type="text" name="details" style="width:250px;height:150px">
            <input type="submit" name="dessub" value="Send" style="margin:center">

            </form>  
             </div>
        </div>
    </div>
</div>
<?php
get_footer();
