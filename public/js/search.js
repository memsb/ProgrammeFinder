$(document).ready(function () {
    $(".episode-search-field").change(function () {
        search($(this).val());
    });
    $(".episode-search-button").click(function () {
        search($(this).prev('input').val());
    });
    $().
});

function search(query) {
    $.ajax({
        // pass in to script
        url: "http://localhost/Workspace/ProgrammeFinder/public/search/limit/10/query/" + query,
        context: document.body
    }).done(function (data) {
            //change to populate nearest results
            $(".episode-search-results").hide();
            if (data) {
                $(".episode-search-results").html(data);

                $(".episode-search-results").slideDown( 1000 );

            } else {
                $(".episode-search-results").html('<li>No results</li>');
            }
        });
}