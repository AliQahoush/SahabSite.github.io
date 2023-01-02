<?php
/* Template Name: DISEASEVECTOR FORM */
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
                    <option value="establishment">مؤسسة</option>
                  </select>

                    <label>Select the type of pest</label>
                <div>
                  <select name="typeofpest">
                    <option value="Dog">كلاب</option>
                    <option value="Spiders">عناكب</option>
                    <option value="scorpions"> عقارب</option>
                    <option value="flies">ذباب</option>
                    <option value= "wasps">دبابير</option>
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
      <label> Enter the building number</label>
<input type="number" name="buildingnumber">
            <input type="submit" name="vecsub" value="Send" style="margin:center">

            </form>  
             </div>
        </div>
    </div>
</div>
<?php
get_footer();
