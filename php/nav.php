<div class="container-fluid navContainer">
    <nav class="navbar navbar-expand-md navbar-dark myNav">
        <!--<a href="#" class="navbar-brand">JULZ</a>-->

        <button class="navbar-toggler myNavButton" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse myNavElements" id="toggleMobileMenu">
            <ul class="navbar-nav text-center">
                <li>
                    <a class="nav-link" id="nav1" href="#aboutMe">About Me</a>
                </li>
                <li>
                    <a class="nav-link" id="nav2" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="nav-link" id="nav3" href="#contact">Contact</a>
                </li>
                <li class="modeToggler">
                    <p class="modeP">Select Theme</p>
                    <div class="radios">
                        <label title="lofi">
                            <input type="radio" onclick="mode1()" id="mode1" name="mode1-mode2-mode3-mode4" checked>
                        </label>
                        <label title="tree">
                            <input type="radio" onclick="mode2()" id="mode2" name="mode1-mode2-mode3-mode4">
                        </label>
                        <label title="fire">
                            <input type="radio" onclick="mode3()" id="mode3" name="mode1-mode2-mode3-mode4">
                        </label>
                        <label title="grey">
                            <input type="radio" onclick="mode4()" id="mode4" name="mode1-mode2-mode3-mode4">
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>