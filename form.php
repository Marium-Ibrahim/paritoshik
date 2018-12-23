<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
    $(function() {
      $("#add").click(function() {
          div = document.createElement('div');
          $(div).addClass("inner").html('<form id="form" method="post" action="form.php">'+
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
        
         $("#add2").click(function() {
          div = document.createElement('div');
          $(div).addClass("inner").html('<form id="form" method="post" action="form.php">'+
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
          $("#container2").append(div);
         });
         
          $("#add3").click(function() {
          div = document.createElement('div');
          $(div).addClass("inner").html('<form id="form" method="post" action="form.php">'+
      '<div class="input-group">'+
               '<label>কোর্স নং:</label>'+
               '<input type="text" name="course_no">'+
      '</div>'+
      '<div class="input-group">'+
            '<label>পরীক্ষার সংখ্যা: </label>'+
            '<input type="number" name="num_of_section">'+
      '</div>'+
      '<div class="input-group">'+
            '<label>শিক্ষার্থীর সংখ্যা: </label>'+
            '<input type="number" name="num_of_section">'+
      '</div>'+
      '<div class="input-group">'+
               '<button type="submit" class="btn" name="reg_user">সেভ</button>'+
      '</div>'+
        '</form>');
          $("#container3").append(div);
         
        });

    });
</script>
<style>
 #container {padding: 10px; width: 80%; height: 80%;}
 #container2 {padding: 10px; width: 80%; height: 80%;}
 #container3 {padding: 10px; width: 80%; height: 80%;}
 .inner {border: 1px solid black; margin: 10px; width: auto; height: 110px;width: 300px; }
</style>
<body>
<center><h1>শিক্ষক পারিতোষিক ফর্ম</h1><center/>
<center> <b>প্রশ্ন পত্র প্রণয়ন</b>
 <div id="container">
    <div id ="inner" class="inner"> 
         <form id="form" method="post" action="form.php">
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
 
<center><b>উত্তর পত্র মূল্যায়ণ</b>
 <div id="container2">
    <div id ="inner" class="inner"> 
         <form id="form" method="post" action="form.php">
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
   <button id="add2" style="float:right; height:50px; width:50px">+</button>
 </div></center>

<center><b> ক্লাস টেস্ট</b>
 <div id="container3">
    <div id ="inner" class="inner"> 
         <form id="form" method="post" action="form.php">
    	<div class="input-group">
  	           <label>কোর্স নং: </label>
  	           <input type="text" name="course_no">
    	</div>
	    <div class="input-group">
  	        <label>পরীক্ষার সংখ্যা: </label>
  	        <input type="number" name="num_of_section">
    	</div>
    	<div class="input-group">
  	        <label>শিক্ষার্থীর সংখ্যা: </label>
  	        <input type="number" name="num_of_section">
       </div>
		<div class="input-group">
  	           <button type="submit" class="btn" name="reg_user">সেভ</button>
    	</div>
        </form>
    </div>
   <button id="add3" style="float:right; height:50px; width:50px">+</button>
 </div></center>


</body>