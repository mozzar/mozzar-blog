
<div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <!--<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">-->
                Agregator
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Główna
                </a>

                <a class="navbar-item">
                    Posty
                </a>


            </div>

            <div class="navbar-end">

                @if(!Auth::check())
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>

                </div>
                <!-- logged -->
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span class="fas fa-user" style="margin-right:2px;"></span> {{ Auth::user()->name  }}
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <i class="fas fa-address-card"></i>  Mój profil
                        </a>
                        <a class="navbar-item">
                            <i class="fas fa-list"></i> Moje posty
                        </a>
                        <a class="navbar-item">
                            <i class="fas fa-plus"></i> Dodaj post
                        </a>
                        <a class="navbar-item">
                            <i class="fas fa-cog"></i> Ustawienia
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" id="logout">
                            <i class="fas fa-sign-out-alt"></i> Wyloguj się
                        </a>

                    </div>
                </div>
                @endif


            </div>


        </div>
    </nav>
</div>
<script>
    $('#logout').click(function(){

        $.post( "/logout", function() {

        }).done(function() {
                alert( "second success" );
            })
            .fail(function() {
                alert( "error" );
            })
            .always(function() {
                alert( "finished" );
            });

    });






</script>
