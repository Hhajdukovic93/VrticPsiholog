<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-12" >
        <div class="jumbotron" style="background-color: rgba(222,226,232,0.3);">
            <form style="padding: 5px; opacity: 1;" method="POST" action="autoriziraj.php" >
                <label style="padding-bottom: 5px;"><b>Email:</b></label></br>
                <input type="email" name="email" placeholder="example@example.com" class="form-control" aria-describedby="emailPomoc" required value="<?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?>"/>
                <br/>
                <label style="margin-top: 5px;" ><b>Password:</b></label></br>
                <input  type="password" name="sifra" placeholder="yeti4preZ" class="form-control" aria-describedby="sifraPomoc" required/>
                </br>

                <?php
                if(isset($_GET["greska"])){
                ?>
                <input style="margin-top: 5px;" type="submit" value="Autoriziraj" class = "btn btn-success"/>
                <div class="alert alert-warning" style="margin-top: 20px;">
                    <strong>Upozorenje!</strong> Krivo korisnièko ime ili password.
                </div>
                <?php
                }else{
                ?>
                <input style="margin-top: 5px;" type="submit" value="autoriziraj" class = "btn btn-success"/>
            <?php
            }
            ?>
        </div>
        </form>

    </div>
    </div class="col-xs-12 col-sm-12">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>