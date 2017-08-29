<link href="../../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<style>
    #profileContent {
        margin-left: auto;
        margin-right: auto;

        width: 65%;
    }
    #profileContent div {
        width: 100%;
        text-align: center;
    }
    .profile-img {
        width: 200px;
        height: 200px;
    }
</style>

<!--Protected page-->
<div id="profileContent" class="row panel">
    <div class="col-md-12 col-xs-12">
        <div id="profileImg">
            <? if(@$data["profileImg"] != "") {
                echo "<img src='../../assets/images/".@$data["profileImg"]."' class='img-thumbnail picture hidden-xs profile-img' /><br>";
            } else {
                echo "<img src='../../assets/images/pier.jpg' class='img-thumbnail picture hidden-xs profile-img' /><br>";
            } ?>
        </div>
        <form action="/profile/update" method="POST" enctype="multipart/form-data">
            <label for="img" class="btn btn-default btn-file" style="width:110px;">Browse
                <input name="img" id="img" type="file" style="display:none;">
            </label>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>

        <div class="header">
            <? foreach(@$data as $d){
                if(isset($d["email"])) {
                    echo "<h1>".$d["email"]."</h1>";
                }
            } ?>

            <h4>Title</h4>

            <span>About...</span>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>
