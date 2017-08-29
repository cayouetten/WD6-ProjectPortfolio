<style>
    #progressBarWrap{
        width: 75%;
        margin-right: auto;
        margin-left: auto;
    }
</style>

<!-- CONTENT -->
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Produce 8</h1>
        <p>API</p>
    </div>
</div> <!-- /container -->

<!--PROGRESS BAR-->
<div id="progressBarWrap" class="progress">
    <div id="progressBar" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 5%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>

<!--PROGRESS BAR-->
<script>
    (function progression() {
        var pbar = document.getElementById("progressBar");
        var width = 5;
        var int = setInterval(function() {
            if (width >= 100) {
                clearInterval(int);
            } else {
                width++;
                pbar.style.width = width + '%';
            }
        }, 10);
    })();
</script>