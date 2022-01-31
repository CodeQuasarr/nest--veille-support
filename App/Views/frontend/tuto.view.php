<div style="background-color:#171923" class="right col-12 col-md-9 ms-auto pb-5">
            <div style="background-color:#12141C" class="d-block d-md-none d-lg-none col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <img height="50" width="50" src="pulic/web/logo/nest.svg" alt="">
                        <a class="navbar-brand next-text-color" target="_blank" href="https://NestJS.com/">
                            NestJS
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <h2><a class="nav-link active" aria-current="page" href="#about">Quoi de neuf</a>
                                    </h2>
                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#install">Installation</a></h2>

                                </li>
                                <li class="nav-item">
                                    <h2> <a class="nav-link" href="#base">Composant de base</a></h2>

                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#tuto">Tuto</a></h2>
                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#conclure">Fin</a></h2>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="content col-12 p-5">
                <div class="content col-12 text-end ">
                    <a class="text-secondary display-6" href=""><i class="fas fa-home"></i></a>
                </div>

                <div class="content col-12">
                    
                <h1>Tuto</h1>
                    <div class="col-md-10">
                        <p class="paragraph ms-4">
                            Hey! Vous commencez à maîtriser Node js et vous souhaitez ajouter
                            plus de cordes à l'arc, vous souhaitez approfondir vos connaissances
                            et acquérir des compétences dans le développement backend de Node ? <br>
                            NestJS est un cadre de développement d'applications Web utilisé par des milliers
                            d'entreprises.
                            <br> <br> Je vais vous montrer quelques astuces que j'ai apprises dans NestJs,
                            en particulier sur la façon de créer des API Crud
                        </p>
                        <p class="paragraph ms-4">
                            Voici ce que nous allons faire
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/projet.png" alt="">
                        </div>
                        <h2 class="title py-4"> <span class="next-text-color">1- </span> Préparez le terrain pour NestJS
                        </h2>
                        <p class="paragraph ms-4">
                            comme décrit dans le support, il vous faudra quelques outils indispensables pour du
                            développement de Nest.
                            À savoir déjà installer node et le gestionnaire de pakage npm. À l'installation, Nest vous
                            proposera d'utiliser d'autres packages mais pour de souci de popularité, j'utilisai Nest
                            dans tout notre tuto
                        </p>
                        <h4 class="title py-4 ms-4"> <span class="next-text-color"># </span>Installez le CLI de NestJS
                        </h4>

                        <p class="paragraph ms-4">
                            Vous devez installer le CLI Nest avec la commande :
                        <div class="alert alert-secondary" role="alert">
                            $ npm i -g @nestjs/cli <br>
                            $ nest new project-name
                        </div>
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/terminal.png" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            Il vous sera demandé de choisir votre gestionnaire de
                            package. Dans ce tuto, mon gestionnaire sera le
                            gestionnaire npm. vous êtes libre de choisir un
                            gestionnaire que vous maitriser le mieux.

                            <br>Une fois la commande exécutée, votre projet est prêt,
                            et vous pouvez l'ouvrir d'ores et déjà dans votre IDE !
                        </p>

                        <h4 class="title py-4 ms-4"> <span class="next-text-color"># </span>Lancement du serveur de
                            développement</h4>
                        <div class="col-12">
                            <img class="w-100" src="public/web/ide.png" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            Ouvrez une ligne de commande dans le dossier du projet et exécutez :
                        <div class="alert alert-secondary" role="alert">
                            $ npm run start
                        </div>
                        </p>
                        <p class="paragraph ms-4">
                            Cette commande du gestionnaire va compiler l'application et lancer un serveur de
                            développement sur <a href="http://localhost:3000">localhost:3000</a> : vous pouvez ouvrir
                            votre navigateur à cette adresse pour voir tourner l'application.
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/HELLOwORLD.PNG" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            À chaque fois que vous enregistrerez des modifications dans un fichier de l'application, le
                            serveur de développement les prendra en compte
                        </P>

                        <h2 class="title py-4"> <span class="next-text-color">2- </span> Initialisation de notre projet
                        </h2>
                        <p class="paragraph ms-4">
                            Une application NestJS contient beaucoup de fichiers
                            qui ne nous intéresseront pas dans le cadre de ce cours.
                            Vous allez majoritairement travailler dans le dossier <span class="text-danger">src</span>
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/files.PNG" alt="">
                        </div>

                        <p class="paragraph ms-4">
                            Nous allons pas entrer en details sur ces fichiers mais
                            je vous invite a regarder le <a href="">Support</a> ou
                            la <a href="">documentation</a> pour plus d'information.
                        </p>

                        <p id="module" class="paragraph ms-4">
                            Tout d'abord, nous allons faire un peu de netoyage.
                            <br>
                            Si vous regardez dans le fichier <span class="text-danger">app.module.ts</span> , vous y
                            trouverez :
                            - On importe un Module; Tout s'implement NestJS est tres opinionated avec des decisions tres
                            fortes niveau décisionnal donc vous etes tres fortement encourager a créer des modules
                            <br>
                            - On importe un controle ( <span class="text-danger">AppController</span> ) depuis un
                            fichier local. Ce
                            controller est le composant de notre application NestJS qui est charger d'écouter les
                            requettes entrantes et ensuite vous retournera une réponse
                            <br>
                            - On importe un service <span class="text-danger">AppService</span> ) qui est charger de
                            fournir des
                            fonctionnalités à votre controlleur
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/sup1.PNG" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            <br> Nous n'avons pas vraiment besoin de certain fichiers comme le <span
                                class="text-danger">"AppController.ts", "AppService.ts" </span> notre app Controller et
                            de ces
                            services dans le cas de ce projet.
                            <br> Je vous invite à supprimer ces fichier ainsi que dans le <span
                                class="text-danger">app.module.ts</span>
                        </p>
                        <p class="paragraph ms-4">
                            Maintenant que nous avons un module vide, nous allons générer nos propres modele grace à la
                            commande:
                        <div class="alert alert-secondary" role="alert">
                            $ nest g module < NOM-DU-Module>
                        </div>
                        <div class="alert alert-primary d-flex align-items-center ms-4" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                                Les modules sont utilisés pour structurer le code et séparer les fonctionnalités en
                                morceaux logiques et réutilisables
                            </div>
                        </div>
                        </p>

                        <h2 class="title py-4"> <span class="next-text-color">1- </span> Construiction de notre
                            application Crud </h2>
                        <p class="paragraph ms-4">
                            Nous allons maintenant générer notre propre modules <span class="text-danger">Dawin</span>
                            simplement en tapant dans un terminal
                        <div class="alert alert-secondary" role="alert">
                            $ nest g module dawins
                        </div>
                        </p>

                        <p class="paragraph ms-4">
                            vous remarquerez que cela vous crée un module <span
                                class="text-danger">dawin.module.ts</span> et met a jour automatiquement notre <span
                                class="text-danger">app.module.ts</span>
                        <div class="alert alert-secondary" role="alert">
                            $ nest g module dawins
                        </div>
                        </p>
                        <p class="paragraph ms-4">
                            Nous allons creer les composant qui permettront à notre application de fonctionner
                        <div class="alert alert-secondary" role="alert">
                            $ nest g co dawins <br>
                            $ nest g s dawins
                        </div>
                        <div class="alert alert-primary d-flex align-items-center ms-4" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                                g = generate <br>
                                co = controller <br>
                                s = service
                            </div>
                        </div>
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/dawin.PNG" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            Vous remarquerez que cela vous crée un répertoire dans lequel se trouvent tous les
                            fonctionnalités lier au nom de ce repectoire comme expliquer <a href="#module">ici</a>
                            <br>
                            testons Maintenant nos fonctionnalités
                        </p>
                        <p class="paragraph ms-4">
                            Dans <span class="text-danger">dawins.module.ts</span> rajoutez le code ci-dessou
                        </p>
                        <div class="col-12 text-white bg-dark">
                            <pre tabindex="0">
                                <code class="">
                                    <span class="keyword">import</span> <span class="punctuation">{</span> Controller, Get <span class="punctuation">}</span> <span class="keyword">from</span> <span class="string">'@NestJS/core'</span><span class="punctuation">;</span>
                                    <font></font>
                                    <span class="punctuation">@</span><span class="keyword">Controller</span><span class="punctuation">(</span><span class="string">'dawins'</span><span class="punctuation">)</span>
                                    <span class="keyword">export</span> <span class="keyword">class</span> <span class="function">DawinsController</span> <span class="punctuation">{</span>
                                        <span class="punctuation">@</span><span class="keyword">Get</span><span class="punctuation">(</span><span class="punctuation">)</span>
                                        <span class="punctuation">@</span><span class="keyword">getDwins</span><span class="punctuation">(</span><span class="punctuation">)</span> <span class="punctuation">{</span>
                                            <span class="keyword">return</span> <span class="string">"the dawins"</span> <span class="punctuation">;</span>
                                        <span class="punctuation">}</span>
                                    <span class="punctuation">}</span>
                                </code>
                            </pre>
                        </div>

                        <p class="paragraph ms-4">
                            si nous retournons dans notre navigateur avec <span class="text-danger">npm run start</span>
                            vous verrez
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/dawinShow.PNG" alt="">
                        </div>

                        <p class="paragraph ms-4">
                            Maintenant que tout fonctionne convenablement, nous allons ajouter un <span
                                class="text-danger">swagger</span> dans notre fichier <span
                                class="text-danger">main.ts</span>.
                            <br>
                            <a href="https://docs.nestjs.com/openapi/introduction">Voir la documentation ici</a>
                        </p>

                        <p class="paragraph ms-4">
                        <div class="alert alert-secondary" role="alert">
                            $ npm install --save @nestjs/swagger swagger-ui-express
                        </div>
                        </p>
                        <p class="paragraph ms-4">
                            Je vous invite à initialisez <span class="text-danger">Swagger</span> à l'aide de la <span
                                class="text-danger">SwaggerModuleclasse</span> dans le fichier <span
                                class="text-danger">main.ts</span> de la sorte
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/crud.PNG" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            Ouvrez votre navigateur et accédez à <a
                                href="http://localhost:3000/">http://localhost:3000/</a>. Vous devriez voir l'interface
                            utilisateur Swagger.
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/sawager.PNG" alt="">
                        </div>

                        <p class="paragraph ms-4">
                            Maintenant nous allons faire notre configuration pour la base de donnée.
                            <br> Pour ce tuto j'utiliserai Mysql comme base de donnée.Vous pouvez absolument utiliser la
                            base de donne=ée que vous souhaitez mais nous somme pour la simpliciter, je vais utilser
                            MySQL
                        </p>
                        <p class="paragraph ms-4">
                            Une fois de plus je vais vous montrer la <a
                                href="https://docs.nestjs.com/techniques/database">documentation</a> afin que vous
                            sachier comment initialiser votre base de donnée dans notre application NestJS
                        </p>

                        <p class="paragraph ms-4">
                        <div class="alert alert-secondary" role="alert">
                            $ npm install --save @nestjs/typeorm typeorm mysql2
                        </div>
                        </p>

                        <p class="paragraph ms-4">
                            Je vous invite à initialisez la connection a la base de donnée fichier <span
                                class="text-danger">app.module.ts</span> de la sorte
                        </p>

                        <div class="col-12">
                            <img class="w-100" src="public/web/bd.PNG" alt="">
                        </div>

                        <p class="paragraph ms-4">
                            La prochaine chose à faire est de créer un fichier d'entité <span
                                class="text-danger">dawin.entity.ts</span> dans notre répectoire dawins
                        </p>

                        <div class="col-12">
                            <img class="w-100" src="public/web/crudapi.PNG" alt="">
                        </div>
                        <p class="paragraph ms-4">
                            <span class="text-danger">dawin.entity.ts</span> represnente la classe Dawin que nous avon
                            créer dans notre base de donnée.
                            <br>
                            Maintenant, nous avont notre classe entité, lorsque vous executer votre application, il
                            devra vous créer une nouvelle table dawin dans la base de donnée
                        </p>
                        <p class="paragraph ms-4">
                            une autre maniere plus rapide de le faire est d'excuter la commande
                        <div class="alert alert-secondary" role="alert">
                            $ nest g resource dawins
                        </div>
                        </p>

                        <p class="paragraph ms-4">
                            Mais nous allons decider d'utiliser plutot un autre library NestJS disponible sur <a
                                href="https://github.com/nestjsx/crud/wiki/Controllers#description">GitHub</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>