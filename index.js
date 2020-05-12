     $(document).ready(function(){
$("#add-education-btn").click(function(){
    var standardName = $("#standard-input").val();
    var yearOfCompletion = $("#year-of-completion-input").val();
    var percentage = $("#percentage-input").val();
      $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{sn:standardName,yc:yearOfCompletion,percentage:percentage},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#education").append("<h6><b>"+standardName+"</b></h6><h6>"+"Year of completion: "+yearOfCompletion+"</h6><h6>"+"Percentage: "+percentage+"</h6>");
});
$("#add-internship-btn").click(function(){
    var company = $("#internship-company-input").val();
    var title = $("#internship-title-input").val();
    var internshipTime = $("#internship-time-input").val();
          $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{company:company,title:title,internshipTime:internshipTime},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#internships").append("<h6><b>"+company+"</b></h6><h6>"+title+"</h6><h6>"+internshipTime+"</h6>");
});
$("#add-training-btn").click(function(){
    var course = $("#course-name-input").val();
    var trainingTime = $("#course-time-input").val();
              $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{course:course,trainingTime:trainingTime},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#trainings").append("<h6><b>"+course+"</b></h6><h6>"+trainingTime+"</h6>");
});
$("#add-project-btn").click(function(){
    var projectName = $("#project-name-input").val();
    var aboutProject = $("#about-project-input").val();
                  $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{proj:projectName,about:aboutProject},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#projects").append("<h6><b>"+projectName+"</b></h6><p>"+aboutProject+"</p>");
});
$("#add-skill-btn").click(function(){
    var skill = $("#skill-name-input").val();
     var level = $("#level-input").val();
                       $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{skill:skill,level:level},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#skills").append("<li>"+skill+"-"+level+"</li>");
    
});
$("#add-work-sample-btn").click(function(){
    var githubLink = $("#github-profile-input").val();
    var otherPortfolio = $("#other-portfolio-input").val();
                      $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{git:githubLink,other:otherPortfolio},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#work-samples").append("<h6>Github Link</h6><a href='"+githubLink+"'>"+githubLink+"</a><h6>Other Portfolio</h6><a href='"+otherPortfolio+"'>"+otherPortfolio+"</a>");
    $("#add-work-sample").remove();
});
$("#add-additional-detail-btn").click(function(){
    var additionalDetail = $("#additional-details-input").val();
                          $.ajax({
                     url:"submit_education.php",
                     method:"POST",
                     data:{add_det:additionalDetail},
                     success:function(data)
                      {
                   
            alert(data);
                  
                      }
                     });
    $("#additional-details").append("<li>"+additionalDetail+"</li>");
});

     });
  
  

     
