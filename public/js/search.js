// script params injected
define(['params'], function (params) {
    $(document).ready(function () {
        var timeout;
        $("#searchBox").keyup( function() {
            clearTimeout(timeout);
            var that = this;
            var search_string = $(this).val();
            if (search_string !== '') {
                timeout = setTimeout(function(){
                    search(that, search_string);
                }, 1000);
            }
        });
        $(".episode-search-button").click(function () {
            $(this).preventDefault();
            search(this, $(this).prev('input').val());
        });
    });

    // search request populates only one widget
    function search(source, query) {
        if (query) {
            $.ajax({
                url: params.searchUrl + '/' + query,
                context: document.body
            }).done(function (data) {
                    //change to populate nearest results
                    if (data) {
                        $(source).closest(".episode-search").find(".episode-search-results ul").html(data);
                    }
                });
        }
    }
});