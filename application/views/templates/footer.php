</div> <!-- /.container -->
    <footer id="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInLeft">
                <h2>Flicker Images</h2>
                <ul class="flicker_nav">
                  <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInDown">
                <h2>Labels</h2>
                <ul class="labels_nav">
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Games</a></li>
                  <li><a href="#">Fashion</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Slider</a></li>
                  <li><a href="#">Life & Style</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInRight">
                <h2>About Us</h2>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="footer_bottom_left">
                <p>Copyright © 2015 <a href="index.html">KaZel</a></p>
              </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="footer_bottom_right">
                <p>Distributed by <a href="http://wpfreeware.com/">KaZel Team</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery google CDN Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <!-- for datetime picker-->
    <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
    <!-- For content animatin  -->
    <script src="js/wow.min.js"></script>
    <!-- bootstrap js file -->
    <script src="js/bootstrap.min.js"></script> 
    <!-- slick slider js file -->
    <script src="js/slick.min.js"></script> 
    <!-- for datetime picker -->
    <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- wysiwyg js files -->
    <script src="js/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.editor').summernote({
                height: 200,
                minHeight: null,
                maxHeight: 800,
                focus: true
            });
            $('.datetimepicker').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            
            /*** CREATE INTERNSHIP ***/
            $("#create").submit(function (event) {
                //Get values from the form input
                var markupStr = $('#textbox').summernote('code');
                //alert(markupStr);
                var iTitle = document.getElementById('iTitle').value;
                //alert(iTitle);
                var iDeadline = document.getElementById('iDeadline').value;
                //alert(iDeadline);
                var idlogin = document.getElementById('admin_id').value;
                //alert(idlogin);
                var cName = document.getElementById('cName').value;
                //alert(cName);
                var cID = parseInt(cName.split(".", 1));
                var pName_temp = document.querySelectorAll("#create input[name='pName[]']");
                var pName = [];
                for(var i = 0; i < pName_temp.length; i++){
                    pName.push(pName_temp[i].value);
                    //alert(pName[i]);
                }
                var iDeadline = document.getElementById('iDeadline').value;
                
                
                //stop the normal submit from happening
                event.preventDefault();
                
                //send to controller
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('cintern/save');?>",
                    async: false,
                    data: {'iDes': markupStr, 'iTitle' : iTitle, 'cID': cID, 'pName': pName, 'iDeadline' : iDeadline, 'idlogin': idlogin},
                    success: function (data) {
                        //do stuff with data then redirect to 'after_save' 
                        console.log(data.results, data.otherstuff);
                        window.location.href = "<?php echo site_url('internship/hidden');?>";
                    }
                });
            });
        
        
            /*** CREATE COMPANY ***/
            $("#ccreate").submit(function (event) {
                //Get values from the form input
                var markupStr = $('#textbox').summernote('code');
                //alert(markupStr);
                var cName = document.getElementById('cName').value;
                //alert(iTitle);
                var cTel = document.getElementById('cTel').value;
                //alert(iDeadline);
                var cEmail = document.getElementById('cEmail').value;
                //alert(idlogin);
                var cWebsite = document.getElementById('cWebsite').value;
                var cAddress = document.getElementById('cAddress').value;
                //alert(cName);
                     
                //stop the normal submit from happening
                event.preventDefault();
                
                //send to controller
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('ccompany/save');?>",
                    async: false,
                    data: {'cDes': markupStr, 'cName' : cName, 'cAddress': cAddress, 'cTel': cTel, 'cEmail' : cEmail, 'cWebsite': cWebsite},
                    success: function (data) {
                        //do stuff with data then redirect to 'after_save' 
                        console.log(data.results, data.otherstuff);
                        window.location.href = "<?php echo site_url('company/hidden');?>";
                    }
                });
            });
            
        
            /*** EDIT INTERNSHIP ***/
            $("#edit").submit(function (event) {
                //Get values from the form input
                var markupStr = $('#textbox').summernote('code');
                var iTitle = document.getElementById('iTitle').value;
                var iDeadline = document.getElementById('iDeadline').value;
                var iID = document.getElementById('iID').value;
                var cName = document.getElementById('cName').value;
                var cID = parseInt(cName.split(".", 1));
                var pName_temp = document.querySelectorAll("#edit input[name='pName[]']");
                var pName = [];
                for(var i = 0; i < pName_temp.length; i++){
                    pName.push(pName_temp[i].value);
                }
                
                //stop the normal submit from happening
                event.preventDefault();
                
                //send to controller
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('cintern/update');?>",
                    async: false,
                    data: {'iID' : iID,'iDes': markupStr, 'iTitle' : iTitle, 'cID': cID, 'pName': pName, 'iDeadline' : iDeadline},
                    success: function (data) {
                        console.log(data.results, data.otherstuff);
                        window.location.href = "<?php echo site_url('internship');?>";
                    }
                });
            });
        
        
            /*** EDIT COMPANY ***/
            $("#cedit").submit(function (event) {
                //Get values from the form input
                var markupStr = $('#textbox').summernote('code');
                var cName = document.getElementById('cName').value;
                var cAddress = document.getElementById('cAddress').value;
                var cTel = document.getElementById('cTel').value;
                var cEmail = document.getElementById('cEmail').value;
                var cWebsite = document.getElementById('cWebsite').value;
                var cID = document.getElementById('cID').value;
                
                //stop the normal submit from happening
                event.preventDefault();
                
                //send to controller
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('ccompany/update');?>",
                    async: false,
                    data: {'cID' : cID,'cDes': markupStr, 'cName' : cName, 'cAddress': cAddress, 'cTel': cTel, 'cEmail': cEmail, 'cWebsite' : cWebsite},
                    success: function (data) {
                        console.log(data.results, data.otherstuff);
                        window.location.href = "<?php echo site_url('company');?>";
                    }
                });
            });
        });
    </script>
  
    <!-- custom js file include -->
    <script src="js/custom.js"></script>

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>