$(document).ready(function () {
    $(".episode-search-field").change(function () {
        search($(this).val());
    });
    $(".episode-search-button").click(function () {
        search($(this).prev('input').val());
    });
});

function search(query) {
    $.ajax({
        // pass in to script
        url: "http://localhost/Workspace/ProgrammeFinder/public/search/limit/10/query/" + query,
        context: document.body
    }).done(function (data) {
            //change to populate nearest results
            if (data) {
                $(".episode-search-results").html(data);
            }
        });
}