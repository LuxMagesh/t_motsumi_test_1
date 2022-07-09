<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dev-Prox - User Registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="Style.css" rel="stylesheet">
        <script src=js/jquery-1.2.1.min.js></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap');
        </style>
    </head>
    <body>
        <?  include './inc/signup.php'; ?>
        <form class="" action="signup.php" method="post">
            <div class="container">
                <div class="inner">
                    <div class="title">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="content">
                            <div class="txt">
                                <input type="text" name="f_name" pattern="[A-Za-z]*" class="validate" value="" id="f_name" placeholder="   Firstname"/>
                                <span id="c1" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="l_name" pattern="[A-Za-z]*" class="validate" value="" id="l_name" placeholder="    Lastname"/>
                                <span id="c2" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="reg_date" id="reg_date" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="    Date of Birth">
                                <span id="c4" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="id_num" value="" id="id_num" placeholder="   ID Number"/>
                                <span id="c3" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="ckbox">
                                    <!-- <input type="checkbox" name="ck1" id="ckbox1"/> -->
                                    <!-- <span>I agree to the Term and Service</span>     -->
                            </div> 
                            
                            <div class="btnsub">
                                <div class="Register">
                                    <input type="submit" name="submit" id="btnsub" value="Register"/>
                                </div>
                                <div class="Cancel">
                                    <input type="button" name="cancel" id="btnsub" value="Cancel" onclick="reset();"/>
                                </div>                  
                            </div>
                    </div>
                          
                        
                </div>
            </div>
        </form>
        <script>
            function reset(){
                document.getElementById("f_name").value="";
                document.getElementById("l_name").value="";
                document.getElementById("id_num").value="";
                document.getElementById("reg_date").value="    Date of Birth";
               
                )
        </script>
    </body>

</html>