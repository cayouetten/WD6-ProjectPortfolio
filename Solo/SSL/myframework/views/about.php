<!-- FRUITS -->
<div class="container">
    <div class="starter-template">
        <p><a href="/about/showAddForm">Add New</a></p>
        <? foreach($data as $fruit) {
            echo $fruit["name"]."<a href='/about/showEditForm/".$fruit["id"]."'>EDIT</a>
                <a href='/about/deleteAction/".$fruit["id"]."'>DELETE</a><br>";
        } ?>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>