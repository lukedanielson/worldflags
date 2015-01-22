// app.js
(function($) {
    console.log('app.js siaf');

    $(document).foundation(); // Initialize foundation JS for all pages

    $(document).ready(function(){

        console.log('document.ready in app.js');

        var $fotwSearchFormInput = $('#fotw-search-form').find('input[name="s"]'),
            $fotwSearchTimeout = null;

        $fotwSearchFormInput.on('keyup', function() {
            var query = this.value;
            clearTimeout($fotwSearchTimeout);
            $fotwSearchTimeout = setTimeout(function() {
                console.log(query)
            }, 500);
        })

    });


})(jQuery); // Fully reference jQuery after this point.
