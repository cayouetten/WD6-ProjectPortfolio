<div class="container">
    <div class="starter-template">
        <? foreach($data as $d){

            echo "<h3>Update ".$d["name"]."</h3>
                <form action='/about/updateAction/".$d["id"]."' method='POST'>
                id: ".$d["id"]."<br>
                <input type='text' name='name' placeholder='New name' value='".$d["name"]."' />
                <input type='submit' value='UPDATE'></form>";

        } ?>
    </div>
</div>