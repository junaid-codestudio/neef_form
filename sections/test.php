<div class="panel panel-default">
                <div class="panel-heading"><b>Academic Record</b></div>
                <div class="panel-body">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="control-label col-md-4 control-label">Degree Level</label>
                            <div class="col-md-6">
                               <select ng-model='discussionsSelect' id="level" name="level" class='form-control'>
                                            <option value='Matric'>Matric</option>
                                            <option value='Intermediate'>Intermediate</option>
                                            <option value='Bachelors'>Bachelors 14 Years</option>
                                            <option value='Bachelors/Masters'>Bachelors/Masters 16 Years</option>
                                            <option value='Masters/MPhil'>Masters/MPhil 18 Years</option>
                                            <option value='Other'>Other</option>
                                            </select>
                                <!-- <select name="level" id="level" value=" " class="form-control">
                                  <option value="">Degree Level</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-md-4 control-label">Name of Degree</label>
                            <div class="col-md-6">
                              <input type="text" placeholder="e.g FA/FSC/ICS" id="field" name="field" class="form-control">

                               <!--  <select name="field" id="field" class="form-control">
                                  <option value="">Select Degree</option>
                                </select> -->

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-md-4 control-label">Major Subject</label>
                            <div class="col-md-6">
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">Name of Institute</label>
                            <div class="col-md-6">
                                <input type="text" id="institute" name="institute" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">Board</label>
                            <div class="col-md-6">
                               <input type="text" id="board" name="board" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">Scholarship (if any)</label>
                            <div class="col-md-6">
                               <input type="text" id="scholarship" name="scholarship" class="form-control">
                            </div>
                        </div>
                      
                    </div>

                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="email" class="control-label col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                                <input type="date" id="startDate" name="startDate" class="form-control bfh-datepicker" data-min="01/15/2013" data-max="today" data-close="false">
                            </div>
                        </div>


                        <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">End Date</label>
                            <div class="col-md-6">
                               <input type="date" id="endDate" name="endDate" class="form-control bfh-datepicker" data-min="01/15/2013" data-max="today" data-close="false">
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="email" class="control-label col-md-4 control-label">Status</label>
                                <div class="col-md-6">
                                    <select ng-model='discussionsSelect' id="status" name="status" class='form-control'>
                                            <option value='Complete'>Complete</option>
                                            <option value='InProgress'>In Progress</option>
                                            <option value='ResultWaiting'>Result Waiting</option>
                                            </select>

                                </div>
                            </div>
                            <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">Obtained Marks</label>
                            <div class="col-md-6">
                                <input type="text" id="obtainMarks" maxlength ="4" class="form-control 4digit" name="obtainMarks">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="email" class="control-label col-md-4 control-label">Total Marks</label>
                            <div class="col-md-6">
                              <input type="text" id="totalMarks" maxlength="4" class="form-control 4digit" name="totalMarks">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-md-4 control-label"></label>
                            <div class="col-md-6">
                                 <input type="hidden" name="id" id="academic_id" />  
                                    <button type="button" name="academicAdd" id="academicAdd" class="btn btn-info" onclick="compare()">Add</button>  

                            </div>
                        </div>
 
 
                    </div>


                </div>
                 <div id="academic-result" class="table-responsive"></div>  
            </div>


<script>
    
 $(document).ready(function(){  
      fetchAcademic();  
      function fetchAcademic()  
      {  
           var academicAdd = "select";  
           $.ajax({  
                url : "includes/academic/select.php",  
                method:"POST",  
                data:{academicAdd:academicAdd},  
                success:function(data){  
                     $('#level').val('');  
                     $('#field').val('');
                    $('#subject').val('');  
                     $('#institute').val('');  
                    $('#board').val('');  
                     $('#scholarship').val('');  
                    $('#startDate').val('');  
                     $('#endDate').val('');  
                    $('#status').val('');  
                     $('#obtainMarks').val('');  
                    $('#totalMarks').val('');  
                    $('#academicAdd').text("Add");  
                     $('#academic-result').html(data);  
                }  
           });  
      }  
      $('#academicAdd').click(function(){  
           var Level = $('#level').val();  
           var Field = $('#field').val();
          var Subject = $('#subject').val();  
           var Institute = $('#institute').val();  
          var Board = $('#board').val();  
           var Scholarship = $('#scholarship').val();  
          var StartDate = $('#startDate').val();  
           var EndDate = $('#endDate').val();  
          var Status = $('#status').val();  
           var ObtainMarks = $('#obtainMarks').val();  
          var TotalMarks = $('#totalMarks').val();  
          var id = $('#academic_id').val();  
           var academicAdd = $('#academicAdd').text();  
           if(Level != '' && Field != '' && Subject != '' && Institute != '' && Board != '' && Scholarship != '' && StartDate != '' && EndDate != '' && Status != '' && ObtainMarks != '' && TotalMarks)  
           {  
                $.ajax({  
                     url : "includes/academic/action.php",  
                     method:"POST",  
                     data:{Level:Level, Field:Field,Subject:Subject, Institute:Institute,Board:Board, Scholarship:Scholarship, StartDate:StartDate, EndDate:EndDate, Status:Status, ObtainMarks:ObtainMarks, TotalMarks:TotalMarks,id:id, academicAdd:academicAdd},  
                     success:function(data){  
                          alert(data);  
                          fetchAcademic();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  
      $(document).on('click', '.update', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"includes/academic/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                     $('#academicAdd').text("Edit");  
                     $('#academic_id').val(id);  
                     $('#level').val(data.level);  
                     $('#field').val(data.field);  
                     $('#subject').val(data.subject);  
                     $('#institute').val(data.institute);  
                     $('#board').val(data.board);  
                     $('#scholarship').val(data.scholarship);  
                     $('#startDate').val(data.startDate);  
                     $('#endDate').val(data.endDate);  
                      $('#status').val(data.status);  
                     $('#obtainMarks').val(data.obtainMarks);  
                     $('#totalMarks').val(data.totalMarks);  
                      
                }  
           })  
      });  
      $(document).on('click', '.delete', function(){  
           var id = $(this).attr("id");  
           if(confirm("Are you sure you want to remove this data?"))  
           {  
                var academicAdd = "Delete";  
                $.ajax({  
                     url:"includes/academic/action.php",  
                     method:"POST",  
                     data:{id:id, academicAdd:academicAdd},  
                     success:function(data)  
                     {  
                          fetchAcademic();  
                          alert(data);  
                     }  
                })  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
</script>