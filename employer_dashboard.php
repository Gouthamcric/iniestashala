<?php
include("connection.php");
session_start();
if(!isset($_SESSION['id'])){
   
header('location: login.php?msg=kindly sign in first');
exit;
}

else
{ $now = time();
 if ($now > $_SESSION['expire']) {
    
            session_unset();
             session_destroy();
            echo "Your session has expired! <a href='index.php'>sign up here</a>";
}
        else {
      //  $con= mysqli_connect("localhost", "root", "", "db");
        $querry='select * from data where owner="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
        $i=0;
        $job_ids="";
        $count= mysqli_num_rows($res);
        while($i!=$count){
        $out= mysqli_fetch_array($res);
        if($job_ids!=""){
        $job_ids=$job_ids.",".$out['id'];}
        else{ $job_ids=$job_ids."".$out['id']; }
        $i++;
        
        }
   //     $con2= mysqli_connect("localhost", "root", "", "db");
        $querry2='SELECT * FROM `application` WHERE company_id in('.$job_ids.')';
        $res2= mysqli_query($con, $querry2); 
        $res3= mysqli_query($con, $querry2);
        if($job_ids==""){$count2=0;}
        else{
        $count2=mysqli_num_rows($res2);}
        ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="dist/js/BsMultiSelect.js"></script>


    <link rel="stylesheet" href="internships.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" style="font-size:x-large;" href="#"><i class="fab fa-invision"></i> INIESTASHALA</a>
        <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#dashboard" data-toggle="pill" role="tab" aria-selected="false">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="active nav-link" href="#post-internship" data-toggle="pill" role="tab"
                    aria-selected="true">Post Internship</a>
            </li>
        </ul>
    </nav>


    <div class="tab-content" id="pills-tabContent">
        <!---------------------------------------- dashboard ------------------------------->
                <div class="tab-pane fade " id="dashboard" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <table class="table table-striped text-left">
                            <thead>
                              <tr>
                                <th scope="col">Applicant id</th>
                                
                                <th scope="col">Status</th>
                                <th scope="col">Application</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                        <?php $k=0;$j=0;while($j!=$count2){
                            $out2= mysqli_fetch_array($res2);?>        
                              <tr>
                                <td><?php echo $out2['applicant_id']; ?></td>
                                
                                <td class="text-primary" id="<?php echo "status".$j; ?>"><?php echo $out2['app_status'] ?></td>
                                <td><a href="application.php?applicant_id=<?php echo $out2['applicant_id']; ?>">view application</a></td>
                                <td class="text-primary">                       
                       <select id="<?php echo "action".$j; ?>" name="action"  class="form-control"  onchange="action()">
                           <option disabled="true"  value="not viewed">Not viewed</option>
                           <option value="selected">selected</option>
                           <option value="under review">under review</option>
                           <option value="rejected">rejected</option>
                       </select></td>
                              </tr>
                        <?php $j++;} ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end of dashboard -->
        
        <div class="tab-pane fade " id="dashboard" role="tabpanel" aria-labelledby="pills-home-tab">Dashboard</div>
        <div class="tab-pane fade show active" id="post-internship" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <h3>
                            Post an internship
                        </h3>
                        <p><a href="">(Important Guidelines)</a></p>
                        <p>Need assistance? Please visit <a href="">Help center</a></p>
                        <h6>Internship Details</h6>
                        <div style="text-align: left;" class="jumbotron">
                          <h5>Organization details</h5>
                          <input type="text" class="form-control" placeholder="Organization Name" id="company_name">
                          <br>
                          <textarea name="short_description" id="description" cols="32" rows="5" placeholder="About your organization"></textarea>
                          <hr>
                          <br>
                          <h6>Profile</h6>
                            <form action="">
                                <div class="row">
                                    <div class="column">
                                        <div>
                                            <input name="profile" value="Business Development (Sales)" type="radio">
                                            <label>Business Development (Sales)</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Web Development" type="radio">
                                            <label>Web Development</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Graphic Design" type="radio">
                                            <label>Graphic Design</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Content Writing" type="radio">
                                            <label>Content Writing</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Social Media Marketing" type="radio">
                                            <label>Social Media Marketing</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Marketing" type="radio">
                                            <label>Marketing</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="other" type="radio">
                                            <label>Other</label>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Enter your job profile" id="other_job" name="other_job" >
                                    </div>
                                    
                                    <div class="column">
                                        <div>
                                            <input name="profile" value="Operations" type="radio">
                                            <label>Operations</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="App Development" type="radio">
                                            <label>Mobile App Development</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Digital Marketing" type="radio">
                                            <label>Digital Marketing</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Human Resaurce" type="radio">
                                            <label>Huaman Resaurce(HR)</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Law/Legal" type="radio">
                                            <label>Law/Legal</label>
                                        </div>
                                        <div>
                                            <input name="profile" value="Campus Ambassador" type="radio">
                                            <label>Campus Ambassador</label>
                                        </div>

                                    </div>
                                </div>
                            </form><br>
                            <h6>Internship type</h6>
                            <div class="row">
                                <div>
                                    <input name="type" type="radio"  value="regular" id="type">
                                    <label>Regular (In-office/On-field)</label>
                                </div>
                                <div>
                                    <input name="type" type="radio" value="work for home" id="work_for_home">
                                    <label>Work from home</label>
                                </div>
                            </div><br>
                            <h6>City/Cities</h6>
                            <input class="form-control" type="text" placeholder="eg.Mumbai" id="city">
                            <input type="checkbox" name="" id="neighbouring_cities"><label for="">Allow application for above or
                                neighbouring cities.</label><br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1" >Is part-time allowed?</label>
                            </div><br>
                             <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3" >Is this internship exclusively for women?</label>
                            </div><br>
                            <input type="number" class="form-control" placeholder="Number of openings eg.4" id="openings"><br>
                            <h6>Internship start date</h6>
                            <div class="row">
                                <div>
                                    <input name="start-date" value="immediately" type="radio">
                                    <label>Immediately(within 30 days)</label>
                                </div>
                                <div>
                                    <input name="start-date" value="after_month" type="radio">
                                    <label>Later(After a month)</label>
                                </div>
                                
                            </div>
                            <input class="form-control" type="date" placeholder="Enter start date" id="start_date" name="start_date" ><br>
                            <h6>Internship Duration</h6>
                            <input type="number" class="form-control"
                                placeholder="shorter the duration more the applications" id="duration" name="duration" pattern="[0-9]$">
                            <br>
                            <h6>Intern's Responsibilities</h6>
                            <textarea name="responsibility"  cols="32" rows="5" id="res"></textarea>
                            <hr>
                            <h5>Stipend and Perks</h5>
                            <hr>
                            <h6>Stipend</h6>
                            <div class="row">
                                <div>
                                    <input name="stipend" type="radio" value="fixed">
                                    <label>Fixed</label>
                                </div>
                                <div>
                                    <input name="stipend" type="radio" value="negotiable">
                                    <label>Negotiable</label>
                                </div>
                                <div>
                                    <input name="stipend" type="radio" value="performance based">
                                    <label>Performance based</label>
                                </div>
                                <div>
                                    <input name="stipend" type="radio" value="unpaid">
                                    <label>Unpaid</label>
                                </div>
                            </div>
                            <select name="" id="">
                                <option selected value=""selected disabled>₹</option>
                           <!--     <option value="">$</option> -->
                            </select>
                            <input type="text" placeholder="eg 10000" id="paid">
                            <select name="" id="">
                                <option selected value="" disabled>/month</option>
                            <!--    <option value="">/week</option> -->
                            </select><br><br>
                            <h6>Perks(optional)</h6>
                            <div class="row">
                                <div class="column">
                                    <div>
                                        <input id="certificate" type="checkbox">
                                        <label>Certificate</label>
                                    </div>
                                    <div>
                                        <input id="flexi_wrk_hrs" type="checkbox">
                                        <label>Flexible work hours</label>
                                    </div>
                                    <div>
                                        <input id="informal_dress" type="checkbox">
                                        <label>Informal dress code</label>
                                    </div>


                                </div>
                                <div class="column">
                                    <div>
                                        <input id="recommendation_letter" type="checkbox">
                                        <label>Letter of recommendation</label>
                                    </div>
                                    <div>
                                        <input id="five_days" type="checkbox">
                                        <label>5 days a week</label>
                                    </div>
                                    <div>
                                        <input id="snaks" type="checkbox">
                                        <label>Free snacks and baverages</label>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Does this internship come with a
                                    pre-placement offer?</label>
                            </div><br>
                            <hr>
                            <h5>Skills and assessment</h5>
                            <hr>
                            <h6>Skills required(optional)</h6>
                            <input type="text" class="form-control" placeholder="eg.Java" id="skills">
                            <br>
                            <h6>Assessment</h6>
                            <p>Question 1 and 2 will be asked to every applicant by default. If you wish you may ask two
                                more customised questions</p>
                            <p><b>Question 1:</b> Why should you be hired for this role?</p>
                            <p><b>Question 2:</b> Are you available for given month(s) starting immediately, for a full time
                                internship?</p>
                            <div id="q"></div>
                            
                            <div id="wrapper"></div>
                            <p><a href="javascript:;" onclick="add_ques()">+ Add another question</a></p>
                        </div>
                        <button class="btn btn-secondary">Save Draft</button>&nbsp;<button class="btn btn-info" onclick="submit()">Post Internship</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







 <script>
     function action()
 {
    
      <?php while($k!=$count2){ $out3= mysqli_fetch_array($res3); ?>
              var x = document.getElementById("<?php echo "action".$k;?>").value;
              
    var y = document.getElementById("<?php echo "status".$k;?>");
  
  y.innerHTML = x;
        $.ajax({
            
            url:"update_status.php",
            method:"POST",
            data:{status:x,applicant_id:"<?php echo $out3['applicant_id']; ?>",company_id:"<?php echo $out3['company_id']; ?>"},
            success:function(data)
            { 
                
              //   window.location = "internship_status.php";
                  }
        });
      <?php $k++;} ?>
 }
     $(document).ready(function(){
 
$("#other_job").prop("disabled", true);
$("#city").prop("disabled", true);
$("#start_date").prop("disabled", true);
$("#paid").prop("disabled", true);
$("#neighbouring_cities").prop("disabled",true);

  $('input:radio').change(function() {
          var ele = document.getElementsByName('profile'); 
          var ele2 = document.getElementsByName('type'); 
          var ele3 = document.getElementsByName('start-date');
          var ele4 = document.getElementsByName('stipend');
             var job="";
             var type="";
             var date="";
             var stipend="";
             var work_from_home="";
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) 
                job=ele[i].value; 
            } 
            if(job==="other")
            {$("#other_job").prop("disabled", false);
             
            }
            else 
            {$("#other_job").prop("disabled", true);
              }
              
            for(i = 0; i < ele2.length; i++) { 
                if(ele2[i].checked) 
                type=ele2[i].value; 
            } 
            if(type==="regular")
            {$("#city").prop("disabled", false);
                $("#neighbouring_cities").prop("disabled",false);
             }
            else 
            {$("#city").prop("disabled", true);
                $("#neighbouring_cities").prop("disabled",true);
              }
              
            for(i = 0; i < ele3.length; i++) { 
                if(ele3[i].checked) 
                date=ele3[i].value; 
            } 
            if(date==="after_month")
            {$("#start_date").prop("disabled", false);
            
            }
            else 
            {$("#start_date").prop("disabled", true);
              }
              
            for(i = 0; i < ele4.length; i++) { 
             if(ele4[i].checked) 
             stipend=ele4[i].value; 
            } 
            if(stipend==="fixed")
            {$("#paid").prop("disabled", false);
             
            }
            else 
            {$("#paid").prop("disabled", true);
              }
              
    });


});
function add_ques()
{  $("#wrapper").show();   
    var dummy = 'Hit enter after completion: <input type="text" id="ques" onkeydown="search(this)"><br>';
    document.getElementById('wrapper').innerHTML =dummy;
}
function search(ele)
{
     if(event.key === 'Enter') {
          $("#wrapper").hide();  
         var dummy=$("#ques").val();
          document.getElementById('q').innerHTML +="<p>"+"<b>Question:</b> <MY>"+dummy+"</MY></p>";
    }
}
      
function submit()
{ var ques = [];
   $('#q MY').each(function() {
     ques.push($(this).text());
   });
 
     $(document).ready(function(){
       var ele = document.getElementsByName('profile'); 
          var ele2 = document.getElementsByName('type'); 
          var ele3 = document.getElementsByName('start-date');
          var ele4 = document.getElementsByName('stipend');
             var job="";
             var category="";
        
       
             var city="";
             var date="";
             var stipend="";
             var perks="";
             var partime=0;
             var work_from_home=0;
             var placement_offer=0;
             var internship_women=0;
             var company_name=$("#company_name").val();
             var description=$("#description").val();
             var openings=$("#openings").val();
             var duration=$("#duration").val();
             var responsibility=$("#res").val();
             var skills=$("#skills").val();
             var today = new Date();
var posted_on = today.getFullYear() + '-' + (today.getMonth()+1) + '-' + today.getDate();
var apply_by=today.getFullYear() + '-' + (today.getMonth()+2) + '-' + today.getDate();

            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) 
                job=ele[i].value; 
            } 
            if(job==="other")
            {job=$('#other_job').val();
             
            }
            for(i = 0; i < ele2.length; i++) { 
                if(ele2[i].checked) 
                city=ele2[i].value; 
            } 
            if(city==="regular")
            {city=$("#city").val();
             }
            for(i = 0; i < ele3.length; i++) { 
                if(ele3[i].checked) 
                date=ele3[i].value; 
            } 
            if(date==="after_month")
            {date=$("#start_date").val();
            }
              
            for(i = 0; i < ele4.length; i++) { 
             if(ele4[i].checked) 
             stipend=ele4[i].value; 
            } 
            if(stipend==="fixed")
            {stipend=$("#paid").val();
            }
           if(city==="work from home")
           {
               work_from_home=1;
           }
           
   
              if(document.getElementById("customSwitch1").checked===true)
       {
         partime=1;
       }
              if(document.getElementById("customSwitch2").checked===true)
       {
         placement_offer=1;
       } 
               if(document.getElementById("customSwitch3").checked===true)
       {
         internship_women=1;
       }
        if(document.getElementById("certificate").checked===true)
       {
         perks+="certificate,";
       }
        if(document.getElementById("flexi_wrk_hrs").checked===true)
       {
         perks+="flexible work hours,";
       }
        if(document.getElementById("informal_dress").checked===true)
       {
         perks+="informal dress code,";
       }
        if(document.getElementById("recommendation_letter").checked===true)
       {
         perks+="letter of recommendation,";
       }
        if(document.getElementById("five_days").checked===true)
       {
         perks+="5 days a weeks,";
       }
        if(document.getElementById("snaks").checked===true)
       {
         perks+="free snaks and beverages,";
       }
       var perks = perks.substr(0, perks.length-1);
       
       
       
       
       return_category();
        function return_category(){
        $.ajax({
            url:"return_result.php",
            method:"POST",
            data:{job:job},
            success:function(c)
            {
                 ajaxCallBack(c);
                 }
        });
    }
    var i=0;
    function ajaxCallBack(c){
    
        category=c;
       return_city(category);
       
 }

function return_city(category)
{
 
         
                
       if(document.getElementById("neighbouring_cities").checked===true)
       {
           $.ajax({
            url:"return_result.php",
            method:"POST",
            data:{city:city},
            success:function(c)
            {ajaxCallBack2(c,category);
                   
                  }
                  
        });
        
       }
       else
       {
           ajaxCallBack2("",category);
       }
      
   }
      function ajaxCallBack2(city,category){
         var questions=ques.toString();
   // alert(responsibility);
   // alert(questions);
        $.ajax({
            url:"insert_internship.php",
            method:"POST",
            data:{job:job,work_home:work_from_home,partime:partime,start_date:date,duration:duration,internship_women:internship_women,job_offer:placement_offer,location:city,stipend:stipend,posted_on:posted_on,apply_by:apply_by,category:category,openings:openings,res:responsibility,perks:perks,skills:skills,questions:questions,description:description,company_name:company_name},
            success:function(data)
            {
                alert(data);
                  }
        });
      
 } 


     /*   $.ajax({
            url:"send_email.php",
            method:"POST",
            data:{email:email},
            success:function(data)
            {
                  }
        });*/

    });
}
    </script>

</body>

</html>
<?php }} ?>