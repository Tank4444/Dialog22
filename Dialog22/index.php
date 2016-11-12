<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="mdl/material.min.css">
        <script src="mdl/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/MainStyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>AChat - просто чат)</title>
        <script src="js/Scripts.js"></script>

    </head>
    <body>
        <div>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">AChat</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                      <a class="mdl-navigation__link" href="">
                      
                        <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button>
                        <dialog class="mdl-dialog">
                          <h4 class="mdl-dialog__title">Allow data collection?</h4>
                          <div class="mdl-dialog__content">
                            <p>
                              Allowing us to collect data will let us get you the information you want faster.
                            </p>
                          </div>
                          <div class="mdl-dialog__actions">
                            <button type="button" class="mdl-button">Agree</button>
                            <button type="button" class="mdl-button close">Disagree</button>
                          </div>
                        </dialog>
                      </a>
                    </nav>
                  </div>
                </header>
                <div class="mdl-layout__drawer">
                  <span class="mdl-layout-title">Menu</span>
                  <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Main</a>
                  </nav>
                </div>
                <main class="mdl-layout__content">
                  <div class="page-content"><!-- Your content goes here -->
                  
                  <form action="api.php" method="get" accept-charset="UTF-8">
                      test<br>
                    <input type="text"  size="40" name="name">
                    <input type="submit" >
                  </form>
                  
                  
                  
                  </div>
                </main>
              </div>
        </div>
    </body>
</html>
