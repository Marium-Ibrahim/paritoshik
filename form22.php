<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
    $(function() {
      $("#add").click(function() {
          div = document.createElement('div');
          $(div).addClass("inner").html('<form id="form" method="post" action="MakeQuestion.php">'+
      '<div class="input-group">'+
               '<label>কোর্স নং:</label>'+
               '<input type="text" name="course_no">'+
      '</div>'+
      '<div class="input-group">'+
            '<label>সংখ্যা: </label>'+
            '<input type="number" name="num_of_section">'+
      '</div>'+
     ' <div class="input-group">'+
  	        '<label>পত্র: </label>'+
  	        '<select name="role">'+
  		    	  '<option value="admin">'+'পূর্ণ'+'</option>'+
           		   '<option value="admin">'+'অর্ধ'+'</option>'+
           '</select>'+
    	'</div>'+
    '<div class="input-group">'+
               '<button type="submit" class="btn" name="reg_user">সেভ</button>'+
      '</div>'+
        '</form>');
          $("#container").append(div);
         });
    });
</script>
<style>
 #container {padding: 10px; width: 80%; height: 80%;}
 .inner {border: 1px solid black; margin: 10px; width: auto; height: 110px;width: 300px; }
</style>
<body>
<center><h1>শিক্ষক পারিতোষিক ফর্ম</h1><center/>
<center> <b>প্রশ্ন পত্র প্রণয়ন</b>
 <div id="container">
    <div id ="inner" class="inner"> 
         <form id="form" method="post" action="MakeQuestion.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
  	           <label>কোর্স নং: </label>
  	           <input type="text" name="course_no">
    	</div>
	    <div class="input-group">
  	        <label>সংখ্যা: </label>
  	        <input type="number" name="num_of_section">
    	</div>
    	 <div class="input-group">
  	        <label>পত্র: </label>
  	        <select name="role">
  		    	  <option value="admin">পূর্ণ</option>
           		  <option value="instructor"> অর্ধ</option>
        </select>
    	</div>
		<div class="input-group">
  	           <button type="submit" class="btn" name="reg_user">সেভ</button>
    	</div>
        </form>
    </div>
   <button id="add" style="float:right; height:50px; width:50px">+</button>
 </div></center>
</body>    
