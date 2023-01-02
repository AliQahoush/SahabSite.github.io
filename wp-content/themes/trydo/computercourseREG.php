
<?php
/* Template Name: computercourseREG */
get_header();
?>
<?php the_content(); ?>  
<div class="rn-section-gap bg_color--1">
    <div class="container">
        <div class="row" style="text-align:center;margin: auto;width: 50%;border: 22px solid lightcyan; padding: 10px;">
<form method="POST" style="margin: auto; width: 220px">
 <div class="form-group">
    <div class="container">
        <div class="row">
              <div class="form-group" >
                <label> Enter your full name </label>
                <input type="text" class="form-control" id="name" name="name">
                <br>
              </div>
              <div class="form-group" >
                <label>Enter Your Gender</label>
                <div>
                  <select name="gender">
                     <option value="m">Male</option>
                     <option value="f">Female</option>
                   </select>
                       <br>
                </div>
               </div>
              <div class="form-group" >
                <label>Enter Your Phone Number</label>  
                <input type="number" class="form-control" id="number" name="phonenumber">
                <br>
              </div> 
              <div class="form-group">
                <lable>Enter Your Email if You Have</lable>
                <input type="text" class="form-control" id="email" name="email">
                <br>
              </div>
              <div class="form-group" >
                <label>Enter Your course</label>
                <div>
                  <select name="coursename">
                    <option value="icdl">icdl</option>
                    <option value="print">print</option>
                  </select>
                    </div>
                    <br>
               </div>
                <input type="submit" class="btn" value="Send" name="pcsub">
                <br>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
