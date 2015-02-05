/*
 * Author: Luke Danielson
 * Email:  luke@luke-danielson.com
 * Date:   01-22-2015 (MM/DD/YYYY)
 */

// protect our jQuery from conflicts by aliasing it with the $ symbol
// cache the window and document objects
;(function( $, window, document ) {
    "use strict";

    // call our pubsub function so it is available immediately
    initPubSub();

    $(document).foundation(); // Initialize foundation JS for all pages

    $(document).ready(function(){

        console.log('document.ready in app.js');

        var $fotwSearchFormInput = $('#fotw-search-form').find('input[name="s"]'),
            $fotwSearchTimeout = null,
            $fotwSearchCurrQuery = null;


        // $fotwSearchFormInput.on('onfocusout', function() {  toggleFotwResultsLoad('hide'); });

        $fotwSearchFormInput.on('keyup', function() {
            var query = encodeURIComponent(this.value) || '',
                isBlankQuery = (query === ''),
                isDiffQuery = (query !== $fotwSearchCurrQuery);

            if(isDiffQuery) { toggleFotwResultsLoad('show'); }

            clearTimeout($fotwSearchTimeout);

            $fotwSearchTimeout = setTimeout(function() {
                // console.log(query);

                if( !isBlankQuery && isDiffQuery){
                    submitFotwSearchForm({'s':query});

                } else if(query !== $fotwSearchCurrQuery) {
                    submitFotwSearchForm({'s':'_all'});
                }

                $fotwSearchCurrQuery = query;
            }, 220);
        });

    });



    /* function declarations */

    function initPubSub() {

        // http://www.pixafy.com/blog/2013/02/pubsub-with-jquery/
        // create our instance of jQuery
        var o = $( {} );

        //link our jquery functions to our sudo function names
        $.each({

            //associate our keys and values to iterate through
            trigger: 'publish',
            on:      'subscribe',
            one:     'subscribeOnce',
            off:     'unsubscribe'

        }, function( key, val ){

            //attach our new function to the jQuery object using the array notation
            $[val] = function() {

                //when new function is called, call original function and pass any arguments along
                o[key].apply( o, arguments );

            };

        });

    }


    function submitFotwSearchForm(data) {

        $.publish('fotw.form.submitted', data );

    }


    function getFotwApiResults( d ) {

        var url = 'http://worldflags.dev/api/v1/areaMarkup';

        var jqxhr = $.getJSON( url, d, function(data) {
            // console.log( "getFotwApiResults success" );
        })
        .done(function() {
            // console.log( "getFotwApiResults second success" );
        })
        .fail(function() {
            // console.log( "getFotwApiResults error" );
        })
        .always(function(data) {

            $.publish( 'fotw.form.api.results', data );

        });

        //$.getJSON( url, d , function( data ){
        //    console.log('publishing getJson results...');
        //    $.publish( 'fotw.form.api.results', data );
        //});
    }

    function populateFotwResults( data ) {

        var $resultsDiv = $('#fotw-results-main'),
            $itemsWrap = $resultsDiv.find('.items-wrap');

            // console.log(data);

        if(data && data.status){
            var $markup = data.data.markup || '<p>the markup</p>';
            $resultsDiv.find('.no-items-wrap').remove();
            $itemsWrap.remove();
            $resultsDiv.prepend($markup);
        } else {
            console.log('there was an error');
        }

        toggleFotwResultsLoad('hide');
    }


    function toggleFotwResultsLoad(action) {
        var resultsLoader = document.getElementById("fotw-results-main").getElementsByClassName("results-loader")[0] || null;
        action = (action && action !== '') ? action : 'hide';


        if(action === 'show'){
            if( !hasClass(resultsLoader, 'in') ){ resultsLoader.classList.add("in"); }
        } else {
            if( hasClass(resultsLoader, 'in') ){ resultsLoader.classList.remove("in"); }
        }
    }


    function hasClass(element, cls) {
        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    }

    /* Subscriptions */
    ///////////////////

    // listen for when our form is submitted
    $.subscribe('fotw.form.submitted', function( e, queryObj ) {

        getFotwApiResults( queryObj );

    });


    $.subscribe( 'fotw.form.api.results', function( e, data ) {

        // console.log('api results:');
        // console.log(data);
        populateFotwResults( data );

    });


})( jQuery, window, document, undefined ); // undefined passed in but not assigned to retain a true "undefined"