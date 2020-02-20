<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ATech</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header class="header">
            <div class="main_container">
                <div class="flex-space-between">
                    <div class="logo">
                        <img src="img/logo_small3.png" height="40" alt="">
                    </div>
                    <div class="redes_sociais">
                        <img class="header_icon" src="img/facebook.svg">
                        <img class="header_icon" src="img/twitter.svg">
                        <img class="header_icon" src="img/linkedin.svg">
                    </div>
                </div>
            </div>
        </header>
        <menu class="menu">
            <div class="main_container menu-bar">
                <div class="menu_container" id="menu-item-container">
                    <a class="bold" href="index.php">Home</a>
                    <a href="">Sobre Nós</a>
                    <a href="services.php">Cursos</a>
                    <a href="">Páginas</a>
                    <a href="">Blog</a>
                    <a href="">Contacte-nos</a>
                </div>
                <div class="center-content search-bar">
                    <form action="search.php" method="get">
                        <input type="text" name="search" id="bar" placeholder="Procurar...">
                    </form>
                </div>
                <script>
                    var search_bar = document.getElementById('bar')
                    search_bar.addEventListener('mouseenter',m_entrar)
                    search_bar.addEventListener('mouseout',m_sair)
                    search_bar.addEventListener('focus',m_entrar)
                    search_bar.addEventListener('blur',m_sair)
                    function m_entrar(){
                        if (window.innerWidth <= 830){
                            document.getElementById("menu-item-container").style.visibility = "hidden";
                            document.getElementById("menu-item-container").style.width = '10%';
                        }
                    }

                    function m_sair(){
                        if (window.innerWidth <= 830){
                            document.getElementById("menu-item-container").style.visibility = "visible";
                            document.getElementById("menu-item-container").style.width = '100%';
                        }
                    }
                    
                </script>
            </div>
        </menu>
            <div class="main-baner">
                <div class="main-baner-filter">
                    <div>
                        <h1 class="baner-text">Plataforma de Cursos Online de TI</h1>
                        <p class="txt_center txt_light">Tenha acesso aos cursos por apenas R$20,00 por mes!</p>
                        <div class="center-content"><button class='btn l-gray md-margin sm-padding bold'>Matricular-se</button></div>
                    </div>
                </div>
            </div>
        <section class="main_container">
            <div class="grid-container">
                <div class="grid-block">
                    <div>
                        <p class='txt_center'>Teste</p>
                        <hr>
                        <p class="txt_center"> 
                        Odio accumsan nec ornare, faucibus donec quisque ut, convallis tristique fbyua  wkerifg yaerbv gfhqa vhya rbv aerb hyvarqbeh gbfaerl gbreqa bgyhaervb fhyla bfghuab gtuyhlaqeb hgulaber go. 
                        </p>
                        <hr>
                        <ul class="ul-undecored">
                            <li>Ano: <div>2019</div></li>
                            <li>N° de Aulas:<div>40</div></</li>
                            <li>Carga Horária:<div>34</div></</li>
                        </ul>
                        <div class="center-content md-padding" ><button>Matricular</button></div>
                    </div>
                </div>


                <div class="grid-block"><div><p class='txt_center'>Teste</p><hr></div></div>
                <div class="grid-block"><div><p class='txt_center'>Teste</p><hr></div></div>
                <div class="grid-block"><div><p class='txt_center'>Teste</p><hr></div></div>
                <div class="grid-block"><div><p class='txt_center'>Teste</p><hr></div></div>
                <div class="grid-block"><div><p class='txt_center'>Teste</p><hr></div></div>
            </div>
            <div>
                <p class='txt_dark'><p>
                Lorem ipsum senectus tortor etiam quis dui suscipit enim congue laoreet ornare, ut primis facilisis nullam scelerisque eu vehicula ut ad arcu litora, est turpis mattis risus etiam quis conubia netus fames mattis. 
                velit dictum primis ullamcorper ad aliquet phasellus cras vel in sociosqu, facilisis ultricies gravida inceptos risus lacinia dictum habitasse pharetra. 
                venenatis est fusce scelerisque ultricies mattis pretium ligula donec, tempus litora magna gravida donec hendrerit libero ac curae, suscipit non lorem nam ullamcorper integer porta. 
                pretium feugiat malesuada aliquet auctor ac tincidunt aliquet senectus pulvinar, congue sem mollis metus scelerisque aenean netus ac, nibh vivamus nisi conubia lectus netus lacinia facilisis. 
                </p>
                <p>
                Velit aliquet lacinia nam at ante etiam nulla felis litora integer vel, aenean viverra etiam vitae placerat sodales purus pretium litora viverra, mauris sodales molestie feugiat sollicitudin faucibus lorem leo sodales placerat. 
                dictumst eros himenaeos dictum maecenas quisque velit ut, elit ac euismod hendrerit molestie iaculis, adipiscing pellentesque facilisis aliquam viverra aenean. 
                aliquam volutpat sapien orci fusce molestie sed dictumst blandit, porttitor pharetra vulputate condimentum netus hac feugiat, mattis ipsum dictumst lacus auctor duis dictum. 
                potenti torquent proin nisi habitant lacus rutrum, venenatis vulputate dui fames dictum tristique, class dui nullam condimentum elit. 
                </p>
                <p>
                Dictum velit tincidunt risus vestibulum nulla per sed, metus vitae curabitur lacus fermentum pretium, in felis proin risus massa venenatis. 
                aliquam egestas tempus nam nunc viverra lectus ornare vestibulum blandit tortor erat et, molestie a ipsum cubilia odio non feugiat leo eu duis tristique. 
                orci hendrerit platea aptent consectetur ultricies elementum maecenas mauris at sollicitudin accumsan sit ultricies, senectus tristique ultricies etiam quisque malesuada lectus facilisis porttitor integer dictumst diam, congue fusce cursus imperdiet egestas erat aenean cursus pulvinar eget nam per. 
                scelerisque tellus enim arcu porta facilisis nisl luctus litora senectus, ut tempus commodo etiam dapibus senectus consectetur mi suspendisse, metus a dictumst mauris fringilla sociosqu non scelerisque. 
                </p>
                <p>
                Rhoncus himenaeos aptent massa facilisis ligula tellus aptent scelerisque metus odio quisque netus nostra, eleifend vestibulum vitae class inceptos orci ligula phasellus netus tempus risus hendrerit. 
                libero nulla aliquet fusce dictumst semper id tempus risus, sociosqu pretium iaculis ullamcorper potenti ac ultricies amet nullam, sodales phasellus eleifend lacus etiam egestas erat. 
                elementum sociosqu imperdiet sollicitudin habitant tempor sed, dictumst mattis pretium orci neque. 
                auctor curabitur sagittis rhoncus aptent cursus dolor proin libero ornare dictum netus lacinia, turpis odio amet sapien interdum duis euismod feugiat nisi ante habitasse, ultrices quisque ante condimentum ipsum viverra a faucibus duis arcu at. 
                </p>
                <p>
                Quis vel est vitae mattis volutpat maecenas ligula cursus tempor scelerisque malesuada, condimentum lectus sapien vitae aenean elementum integer nulla a pellentesque. 
                quisque semper lacus vulputate nisl quisque praesent curae, aliquet imperdiet curabitur libero himenaeos vestibulum aliquam, iaculis risus augue integer et velit, dictum taciti auctor tincidunt metus arcu. 
                porta metus arcu fringilla massa sociosqu torquent cursus egestas aliquet, donec elit rhoncus condimentum semper cras mauris eleifend fames congue, netus enim ornare mi pretium morbi nulla blandit. 
                libero suspendisse aliquam ante amet etiam ad, nulla nam facilisis ante ullamcorper nec, magna pharetra luctus platea fusce. 
                </p>
                <p>
                Nam nibh curabitur convallis ultrices ut ac praesent sed tempor, platea placerat litora tempus malesuada metus sem torquent, eget vestibulum vel massa sodales imperdiet curabitur class. 
                sagittis nisl sociosqu sem consequat elit pellentesque sociosqu bibendum vivamus diam, habitasse duis mi lacus curabitur orci varius praesent nisi. 
                suscipit nostra torquent per porttitor habitasse duis phasellus placerat, sit feugiat sagittis libero platea ornare quis imperdiet arcu, egestas quisque himenaeos posuere quam sapien quis. 
                mi pellentesque risus at himenaeos arcu sagittis ligula sollicitudin donec, diam ornare ad non sem sapien condimentum primis ultricies, quisque urna per odio mattis bibendum mi laoreet. 
                </p>
                <p>
                Fames nunc fermentum tellus varius senectus nunc cubilia ullamcorper enim facilisis lacinia, proin neque vehicula etiam metus litora quam inceptos curae. 
                facilisis varius taciti ut neque non dolor netus a aliquam hendrerit, porta suspendisse ligula ultricies maecenas metus euismod quisque sit adipiscing fermentum, fames interdum vivamus commodo suscipit phasellus sagittis phasellus suspendisse. 
                hendrerit tempus suspendisse blandit sollicitudin gravida netus, erat aliquet scelerisque nibh eget interdum vitae, quisque congue sit felis torquent. 
                magna velit proin sit porttitor porta eros morbi, in felis per quis malesuada ipsum, semper curae porttitor interdum nullam massa. 
                </p>
                <p>
                Nostra diam ornare etiam mattis aenean, hac quis mollis orci consequat purus, ultricies aptent ut enim. 
                cubilia lacinia phasellus iaculis faucibus cras iaculis libero tempus amet litora dolor sed, class feugiat suscipit sapien justo odio curae ut tincidunt commodo ad faucibus torquent, iaculis bibendum porta luctus dolor quis suspendisse cubilia augue netus euismod. 
                ultrices ac cursus hac fringilla cursus augue ut adipiscing litora torquent convallis, aenean cubilia integer pellentesque eu ultricies orci ac facilisis. 
                laoreet class amet condimentum auctor aliquam fringilla sed et, pretium condimentum nam sapien sem pellentesque proin a, litora faucibus vehicula est vivamus donec inceptos. 
                </p>
                <p>
                Mattis vivamus eros velit rhoncus aptent aliquam enim fusce nam, aptent praesent ante habitasse senectus libero cubilia placerat faucibus torquent, taciti leo hendrerit in cursus elit fringilla ut. 
                arcu non integer velit donec orci suscipit lorem nullam, sapien sed feugiat nunc dictumst at quisque iaculis, inceptos integer pellentesque vel commodo sem aenean. 
                donec ante posuere ante nunc imperdiet mattis fermentum suscipit, pretium himenaeos ultricies eleifend fringilla aliquam proin. 
                imperdiet convallis nibh tempor lectus potenti at congue, dolor etiam ipsum viverra inceptos orci himenaeos tortor, sed potenti integer curae dictumst pulvinar. 
                </p>
                <p>
                Venenatis dui adipiscing tellus faucibus praesent donec ligula eros, sit mauris in mauris molestie donec posuere habitasse, porttitor morbi est convallis neque cubilia mi. 
                litora amet bibendum taciti eget nunc sem imperdiet hendrerit volutpat aliquet, diam vitae sapien porta rhoncus curabitur adipiscing placerat imperdiet, euismod lobortis sit augue nibh habitant etiam felis ullamcorper. 
                rhoncus massa cursus etiam habitant enim scelerisque donec, et torquent inceptos purus donec morbi dictum, vivamus blandit auctor sollicitudin dictum pellentesque. 
                elit cursus nec placerat vestibulum nulla urna turpis augue, ligula morbi curabitur ut fringilla nostra dapibus, venenatis fames cubilia felis elementum pharetra metus. 
                </p>
                <p>
                Sed diam class mollis nibh quisque sollicitudin, amet eget fermentum taciti praesent, odio at aenean pharetra aptent. 
                hendrerit quam nullam posuere cras imperdiet, lorem tempus suspendisse viverra. 
                </p></p>
            </div>
        </section>
        <footer class="footer">
            <div class="main_container">
                <div class="credits">
                <p class="txt_light">Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> e <a href="https://www.flaticon.com/br/autores/those-icons" title="Those Icons">Those Icons</a> em <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></p><br><hr><br>
                <div class="redes_sociais">
                    <img class="header_icon" src="img/facebook.svg">
                    <img class="header_icon" src="img/twitter.svg">
                    <img class="header_icon" src="img/linkedin.svg">
                </div>
                <p class="txt_light">hgfantonio@gmail.com</p>
                </div>
            </div>
        </footer>
    </body>
</html>