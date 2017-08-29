<div class="container">
    <div class="starter-template">
        <? foreach($data as $d){

            echo "<h3>Update ".$d["email"]."</h3>
                <form action='/register/updateUser/".$d["id"]."' method='POST'>
                id: ".$d["id"]."<br>
                <input type='email' name='email' placeholder='New email' value='".$d["email"]."' />
                <input type='password' name='password' placeholder='New password' value='".$d["password"]."' />
                <input type='submit' value='UPDATE'></form>";

        } ?>
    </div>
</div>