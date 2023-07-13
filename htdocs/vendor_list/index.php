
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container" style="max-width: 50%;">
        <div class="text-center mt-5 mb-4">
            <h2>LIST OF VENDOR'S NAME</h2>
        </div>
        <input type=text class="form-control" id="live_search" autocomplete="off"
            placeholder="Search ...">
    </div>
    <div id="searchresult"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#responsiveform").keyup(function(){
                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    a.ajax({
                        url:"livesearch.php",
                        method:"POST",
                        data:{input:input},

                        success:function(data){
                            $("#searchresult").html(data);
                        }
                    });
                }else{
                    $("searchresult").css("display","none");
                }
            });
        });
    </script>
</body>
</html>