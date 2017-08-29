<style>
    #subNavHeader {
        font-style: italic;
    }
    #navModalButtonWrap {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 100px;
    }
</style>

<!--CONTENT-->
<div class="container">
    <nav class="navbar">
        <ul class="nav navbar-nav">
            <li id="subNavHeader" class="navbar-brand">Direct to...</li>

            <?php foreach($data as $d): ?>
                <li>
                    <a href="navigation/<? echo $d; ?>">
                        <? echo $d; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </nav>
    <div id="navModalButtonWrap">
        <button id="navModalButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#navModal">
            Info
        </button>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="navModal" tabindex="-1" role="dialog" aria-labelledby="navModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="navModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Choose destination from given options for redirection.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>