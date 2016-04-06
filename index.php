<html>
<head>
    <title>TEST</title>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
    
    function funcBefore () {
        $("#information").text ("Ожидание данных...."); 
    }
    
    function funcSuccess (data) {
        $("#information").text (data);
    }
    
    $(document).ready (function () {
        $("#load").bind("click", function () {
            var admin= "Admin";
            $.ajax ({
                    url: "content.php",
                    type: "POST", 
                    data: ({name:admin, number: 5}),
                    dataType : "html",
                    beforeSend: funcBefore, 
                    success: funcSuccess      
                }) ;  
          });
       
    
        $("#done").bind("click", function () {
            var admin= "Admin";
            $.ajax ({
                    url: "check.php",
                    type: "POST", 
                    data: ({name: $("#name").val()}),
                    dataType : "html",
                    beforeSend: function () {
                        $("#information").text ("Ожидание данных...."); 
                    }, 
                    success: function (data) {
                        if(data == "Fail")
                    alert ("Имя занато");
                        else 
                            $("#information"). text (data);
                        }     
                }) ;  
          });
    });
    
    </script>    
    </head>
<body>
    <input type="test" id="name" placeholder="Введите имя" />
    <input type="button" id="done" value="Готово" />
    <p>All is working!!!</p>
    <p id="load" style="cursor:pointer">Загрузить данные</p>
    <div id="information"></div>
    </body>


</html>