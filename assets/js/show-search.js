(function() {
    if( document.querySelector( '.js-search' ) ) {
        const searchs = document.getElementsByClassName( 'js-search' )
        const box = document.querySelector( '.js-search-box' )
        const close = document.querySelector( '.js-search-close' )

        for( const i of searchs ) {
            i.addEventListener( 'click', function() {
                box.classList.add( 'is-active' )
            })
        }

        close.addEventListener( 'click', function() {
            box.classList.remove( 'is-active' )
        })
    }
})()