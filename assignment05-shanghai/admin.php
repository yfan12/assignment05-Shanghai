<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center">Back to Tutorial - <a href="http://www.webslesson.info/2016/02/live-table-add-edit-delete-using-ajax-jquery-in-php-mysql.html" title="Live Table Add Edit Delete using Ajax Jquery in PHP Mysql">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</a></h3><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        
       
        var age = $('#age').text(); 
        var job = $('#job').text();  
        var favourite = $('#favourite').text();
        var frequency = $('#frequency').text();  
        var email = $('#email').text();    
        if(age == '')  
        {  
            alert("Enter Age");  
            return false;  
        }  
        if(job == '')  
        {  
            alert("Enter Job");  
            return false;  
        }
        if(favourite == '')  
        {  
            alert("Enter Favourite");  
            return false;  
        }
        if(frequency == '')  
        {  
            alert("Enter frequency");  
            return false;  
        }  
        if(email == '')  
        {  
            alert("Enter Email");  
            return false;  
        }    
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{age:age, job:job, favourite:favourite, frequency:frequency, email:email},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.age', function(){  
        var id = $(this).data("id1");  
        var age = $(this).text();  
        edit_data(id, age, "age");  
    });  
    $(document).on('blur', '.job', function(){  
        var id = $(this).data("id2");  
        var job = $(this).text();  
        edit_data(id,job, "job");  
    });
    $(document).on('blur', '.favourite', function(){  
        var id = $(this).data("id4");  
        var favourite = $(this).text();  
        edit_data(id,favourite, "favourite");  
    });
    $(document).on('blur', '.frequency', function(){  
        var id = $(this).data("id5");  
        var frequency = $(this).text();  
        edit_data(id,frequency, "frequency");  
    });
    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id6");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    });   
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>