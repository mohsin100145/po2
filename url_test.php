<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  	<button type="button" id="student_id_search" data-url="result/student-name-show" class="btn btn-danger"><i class="fa fa-search"></i> Search</button>
</div>

<script type="text/javascript">
		$(function() {
		    $(document).on('click', '#student_id_search', function(){
		        var studentId = 3;
		        // var studentId = $('#student_id').val();
		        console.log(studentId);
		        var url = $(this).attr('data-url') + "?student_id="+ studentId;
		        console.log(url);
		        $.get(url, function (data) {
		            $('#student_name_show').html(data);
		        });
		    });
		});
    </script>
</body>
</html>




