<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 2/28/2016
 * Time: 4:05 PM
 */
$title = "Rhoads Pressure Cleaning";
require_once 'vendor/autoload.php';
require_once 'vendor/header.php';

$typeSQL = "SELECT typeID, typeName FROM type";
$type = pdoSelect( $typeSQL );

foreach( $type as $t ){
    extract( $t );

}
?>
<style>
    .margin{ padding-top: 10px; }
</style>
    <form>
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-6" style="margin-top: 30px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Contact Information</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 margin">
                            <label style="padding-top: 5px;" class="col-md-2 col-md-offset-1 control-label" for="name">Name:</label>
                            <div class="col-md-9">
                                <input id="name" name="name" placeholder="John Doe" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        <div class="col-md-12 margin">
                            <label style="padding-top: 5px;" class="col-md-2 col-md-offset-1 control-label" for="address">Address:</label>
                            <div class="col-md-9">
                                <input id="name" name="address" placeholder="" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 30px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Type of Service</h4>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- contact information -->



<?php
require_once 'vendor/footer.php';
?>