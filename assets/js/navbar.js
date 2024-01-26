const navBar = document.getElementById("header")
navBar.innerHTML += `
<div class="container-fluid navigation">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <img src="assets/images/lemohbrand/LG Logo.png" alt="Lemoh Graphics" height="100em" width="100em"></a>
            <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-expanded="false">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </div>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#header">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">SERVICES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DESIGNS
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Logo Design</a></li>
                    <li><a class="dropdown-item" href="#">Social Media Design</a></li>
                    <li><a class="dropdown-item" href="#">Branding</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">CONTACT US</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>          
</div>

`