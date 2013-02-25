if (document.images) {
    gobuttonup       = new Image();
    gobuttonup.src   = "gobutton.png" ;
    gobuttondown     = new Image() ;
    gobuttondown.src = "gobuttondown.png" ;
}

function buttondown( buttonname )
{
    if (document.images) {
      document[ buttonname ].src = eval( buttonname + "down.src" );
    }
}

function buttonup ( buttonname )
{
    if (document.images) {
      document[ buttonname ].src = eval( buttonname + "up.src" );
    }
}

/*
if (document.images) {
    gobuttonup       = new Image();
    gobuttonup.src   = "gobutton.png" ;
    gobuttondown     = new Image() ;
    gobuttondown.src = "gobuttondown.png" ;
}

function buttondown( buttonname )
{
    if (document.images) {
      document[ buttonname ].src = eval( buttonname + "down.src" );
    }
}

function buttonup ( buttonname )
{
    if (document.images) {
      document[ buttonname ].src = eval( buttonname + "up.src" );
    }
}
*/
