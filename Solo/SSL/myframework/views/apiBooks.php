<style>
    #containerBook {
        margin-top: 25px;
    }
    #searchFormBook {
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }
    #searchFormBook .form-group {
        width: 75%;
    }
    #searchFormBook .form-group input {
        width: 100%;
    }
    #searchButtonBook {
        height: 34px;
        margin-left: 5px;
        margin-bottom: 15px;
    }
</style>

<!-- BOOKS API -->
<div id="containerBook" class="container">
    <div class="starter-template">
        <h1>API BOOKS</h1>

        <form id="searchFormBook" method="POST" action="/api/searchBookAPI">
            <div class="form-group">
                <label for="queryBook">SEARCH Google Books</label>
                <input name="queryBook" type="text" class="form-control" id="queryBook" placeholder="Query Books">
            </div>

            <button id="searchButtonBook" type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Results -->
        <div id="bookResults">
            <? foreach($data as $item) {
                echo $item["volumeInfo"]["title"]."<br/> \n";
            } ?>
        </div>
    </div>
</div>