// Keyboard shortcuts for headings 1-6, p, unbreakable space
( function() {
    CKEDITOR.plugins.add( 'keystrokes', {
        init: function( editor ) {
            editor.addCommand( 'h1', {
                exec: function( editor ) {
                    var format = { element: 'h1' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'h2', {
                exec: function( editor ) {
                    var format = { element: 'h2' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'h3', {
                exec: function( editor ) {
                    var format = { element: 'h3' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'h4', {
                exec: function( editor ) {
                    var format = { element: 'h4' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'h5', {
                exec: function( editor ) {
                    var format = { element: 'h5' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'h6', {
                exec: function( editor ) {
                    var format = { element: 'h6' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'p', {
                exec: function( editor ) {
                    var format = { element: 'p' };
                    var style = new CKEDITOR.style(format);
                    style.apply(editor.document);
                }
            } );
            editor.addCommand( 'EspaceInscable', {
					exec: function( editor ) {
						editor.insertHtml( '&nbsp;' );
					}
            } );

            editor.setKeystroke( CKEDITOR.ALT + 49 , 'h1' ); // ALT + 1 ... un titre 1
            editor.setKeystroke( CKEDITOR.ALT + 50 , 'h2' ); // ALT + 2 ... un titre 2
            editor.setKeystroke( CKEDITOR.ALT + 51 , 'h3' ); // ALT + 3 ... un titre 3
            editor.setKeystroke( CKEDITOR.ALT + 52 , 'h4' ); // ALT + 4 ... un titre 4
            editor.setKeystroke( CKEDITOR.ALT + 53 , 'h5' ); // ALT + 5 ... un titre 5
            editor.setKeystroke( CKEDITOR.ALT + 54 , 'h6' ); // ALT + 6 ... un titre 6
            editor.setKeystroke( CKEDITOR.ALT + 55 , 'p' );  // ALT + 7 ... un paragraphe
            editor.setKeystroke( CKEDITOR.CTRL + 32 , 'EspaceInscable' );  // ALT + (espace) ... un lien
        }


    });
} )();
