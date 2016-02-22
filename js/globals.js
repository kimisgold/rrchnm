(function($) {
    $(document).ready(function() {
        $('#global .mobile-toggle').click(function(e) {
            e.preventDefault();
            $('#global > ul').slideToggle();
        });
    });
})(jQuery)