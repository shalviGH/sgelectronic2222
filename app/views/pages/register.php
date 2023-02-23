<?php 
	require RUTA_APP.'/views/inc/header.php'; 
?>

    <div class="contFormRegister">

		<form action="<?= RUTA_URL;?>/UserController/addUser" method="POST" enctype="multipart/form-data" class="formLogin formRegister">
		
            <div class="iconClose js-back"> <p>x</p> </div>	
        
        <div class="conDataF"> 

			<div class="contDataForm1 contDataFormRegister">
                 
                
               
                    <div class="contInpRegister c2btnRegister">
                        <!--label>Nombre:</label-->
                        <label class="lblTitleRegister">Create account</label>
                    </div>

                    <div class="contInpRegister c2btnRegister">
                        <!--label>Nombre:</label-->
                        <label class="lblRegister">Already an user? <a>Sign in</a></label>
                    </div>
                    
                    
                    <div class="contInpRegister c2btnRegister">
                        <!--label>Nombre:</label-->
                        <input class="inpRegister" type="text" name="name"required placeholder="Name" required/>
                        <input class="inpRegister" type="text" name="lastName" required placeholder="Last Name" required/>
                    </div>
                    
                        <!--label>Nombre:</label-->
                    <div class="contInpRegister">    
                        <input class="inpRegister" type="text" name="userName" required placeholder="User Name" required/>
                    </div>
                    <div class="contInpRegister"> 
                        <input class="inpRegister" type="password" name="pass" required placeholder="Password" required/>
                    </div>    

                    <div class="contInpRegister">
                        <input type="submit" value="Sign Up" class="btnRegisterEnter"/>
                        <!--i class="btn btn-danger js-btnCancel">Cancel</i-->
                    </div>

                    <div class="contInpRegister c2btnRegister contLineOption">
                        <div class="lnRegister"></div> 
                            <label>Or sign in with</label>
                        <div class="lnRegister"></div> 
                        
                    </div>

                </div>

                <img src="<?php echo RUTA_IMG?>/logRegister.png" class="imgRegister" width="200px" height="300px">
            </div>
        </div>    
		
        </form>
    </div>


<?php 
	require RUTA_APP.'/views/inc/footer.php'; 
?>