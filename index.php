<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>live search</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</head>
<body>

    <div class="container" style="max-width: 50%;">

        <div class="text-center mt-5 mb-4">
            <h2>PHP MYSQL LIVE SEARCH</h2>
        </div>

        <input type="text" class="form-control border border-primary" id="live_search" autocomplete="off" placeholder="&#x1F50D; Search ...">

    </div>

    <div id="searchresult"> </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                $("#live_search").keyup(function(){

                    var input = $(this).val();
                    
                    if(input != ""){
                        $.ajax({
                            url:"livesearch.php",
                            method:"POST",
                            data:{input:input},

                            success:function(data){
                                $("#searchresult").html(data);
                                $("#searchresult").css("display","block");
                            }
                        });
                    } else{
                        $("#searchresult").css("display","none");
                    }
                });
            });
        </script>
    

    


</body>
</html>