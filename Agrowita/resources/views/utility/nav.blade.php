<style>
    .navcolor{
        background: linear-gradient(to bottom, #1A1A1A, #0003 75%, #0000) !important;
        transition: background .5s;
    }
    .nav-scroll{
        background-color: #2D2D2D;
        /* transition: background-color 200ms linear; */
    }
    /* .navbutton{
        color: #9FD534;
    } */

    .nav-indicator a::after{
        content:attr(navbutton);
        color: #9FD534;
    }
    .nav-indicator a.active{
        filter: brightness(150%);
    }
    .nav-indicator a:hover{
        filter: brightness(150%);
    }
    
</style>

<nav class="navbar fixed-top navcolor" arialabel="Main navigation">
    <div class="container-fluid">
        <img src="assets/logo/agrowita.png" width=10%/>
        
        <div class="navbar navbar-expand-sm nav-indicator">
     
            <a class="nav-link" href="#home" navbutton="Beranda"></a>

            <a class="nav-link" href="#paket" navbutton="Paket"></a>

            <a class="nav-link" href="#about" navbutton="Tentang Kami"></a>

        </div>
    </div>
</nav>

<script defer src="{{url('./assets/js/activenav.js')}}"></script>

<script>
    const navbar = document.querySelector('.navcolor');
    window.onscroll = () => {
        if (window.scrollY < 300) {
            navbar.classList.remove('nav-scroll');
            navbar.classList.add('navcolor');
        } else {
            navbar.classList.add('nav-scroll');
            navbar.classList.remove('navcolor');
        }
    };
</script>   

