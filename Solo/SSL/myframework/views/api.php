<style>
    #searchForm {
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }
    #searchForm .form-group {
        width: 75%;
    }
    #searchForm .form-group input {
        width: 100%;
    }
    #searchButton {
        height: 34px;
        margin-left: 5px;
        margin-bottom: 15px;
    }
    #searchResults {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .singleResult{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 60%;

        margin-bottom: 15px;
    }
</style>

<!-- YouTube API -->
<div class="container">
    <div class="starter-template">
        <h1>API YouTube</h1>

        <form id="searchForm" method="POST" action="/api/searchYouTubeAPI">
            <div class="form-group">
                <label for="query">SEARCH YouTube</label>
                <input name="query" type="text" class="form-control" id="query" placeholder="Query Videos">
            </div>

            <button id="searchButton" type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Results -->
        <div id="searchResults">
            <? foreach($data as $item) {
                echo "<div class='singleResult'><img src='".$item["snippet"]["thumbnails"]["default"]["url"]."'/>"
                    ."<a href='api/redirectYouTube/".$item["id"]["videoId"]."'>".$item["snippet"]["title"]."</a><br/><br/></div>";
            } ?>
        </div>
    </div>
</div>