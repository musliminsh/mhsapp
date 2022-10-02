<div class="container"> 
    <div class="row"> 
        <div class="col-md-6"> 
            <form action="<?php echo base_url('auth/login'); ?>" method="post"> 
                <div class="form-group"> 
                    <label for="exampleInput">Username</label> 
                    <input name="username" type="text" class="form-control" id="username" placeholder="Username"> 
                </div> 
                <div class="form-group"> 
                    <label for="exampleInputPassword1">Password</label> 
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password"> 
                </div> 
                <button name="submit" type="submit" value="Login" class="btn btn-primary">Login</button> 
            </form> 
        </div> 
    </div> 
 
</div> 