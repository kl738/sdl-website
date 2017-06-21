<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lab Members</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome & Pixeden Icon Stroke icon font-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Google fonts - Roboto Condensed & Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
        <!-- lightbox-->
        <link rel="stylesheet" href="css/lightbox.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <?php 
            require_once 'php/config.php'; 
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $activePage = "members";
            include 'php/nav.php';
            include 'php/title.php';

        ?>
        <section id="papers" class="section--no-padding background-white ">
            <div class="container">
                <h2>Current Members</h2>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/michael.jpg" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Michael Macy</h3>
                        <h4 class="text-center">Goldwin Smith Professor of Arts and Sciences</h4>
                        <h5 class="text-center">Department of Sociology; Department of Information Science</h5>
                        <p>Michael Macy left the farm in Tennessee where he grew up to attend Harvard, where he received his B.A. and later Ph.D, along with an M.A. from Stanford. He is currently Goldwin Smith Professor of Arts and Sciences in Sociology and Director of the Social Dynamics Laboratory at Cornell, where he has worked since 1997. With support from the National Science Foundation, the Department of Defense, and Google, his research team has used computational models, online laboratory experiments, and digital traces of device-mediated interaction to explore familiar but enigmatic social patterns, such as circadian rhythms, the emergence and collapse of fads, the spread of self-destructive behaviors, cooperation in social dilemmas, the critical mass in collective action, the spread of high-threshold contagions on small-world networks, the polarization of opinion, segregation of neighborhoods, and assimilation of minority cultures. Recent research uses 509 million Twitter messages to track diurnal and seasonal mood changes in 54 countries, and telephone logs for 12B calls in the UK to measure the economic correlates of network structure. His research has been published in leading journals, including Science, PNAS, American Journal of Sociology, American Sociological Review, and Annual Review of Sociology.</p>
                        <p><a href="mwm14@cornell.edu">Email</a> | <a href="https://sites.google.com/site/michaelmacy14/home">Website</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/minsu.png" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Minsu Park</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Information Science</h5>
                        <p>My main research interest is how to measure and explain collective behaviors within a group or society. Among broad interests, the core areas that I am currently focusing on are (1) the role of social media —defined broadly as technologies that facilitate social behavior among people— in localized social contexts; (2) the ways that people use culture to make connections with one another; and (3) the relationships between one's cultural tastes, their social structure, and technological meeting points of those.</p>
                        <p><a href="mp867@cornell.edu">Email</a> | <a href="https://sites.google.com/site/mansumansu/">Website</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/rediet.jpg" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Rediet Abebe</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Computer Science</h5>
                        <p>Rediet Abebe is a Computer Science PhD student at Cornell University, advised by Professor Jon Kleinberg. Her research focuses on algorithms, computational social science, and applications to social good. She is interested in using techniques and insights from theoretical computer science and data science to better understand and implement interventions for problems related to socioeconomic inequality and opinion dynamics. She has organized several activities aimed at promoting research in these topics, including co-chairing the <a href="http://md4sg.com/">First Workshop on Mechanism Design for Social Good</a> at the ACM Conference on Economics and Computation. She is a recipient of the Facebook Emerging Scholars Program (2017) and Google Generation Scholarship (2016). She has interned in the Microsoft Research-New England and New York City labs in the theory and computational social science groups. Prior to Cornell, she completed an M.S. in Applied Mathematics from Harvard University, an M.A. in Mathematics from the University of Cambridge, and a B.A. in Mathematics from Harvard University. She was born and raised in Addis Ababa, Ethiopia.</p>
                        <p><a href="rediettes@gmail.com">Email</a> | <a href="http://www.cs.cornell.edu/~red/">Website</a></p>
                    </div>                    
                </div>              
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Thomas Davidson</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Sociology</h5>
                        <p>Tom is a fourth-year PhD student in the Department of Sociology. He is interested in using social network analysis and natural language processing to study the dynamics of social and cultural systems over time. His dissertation uses computational methods to study millions of interactions between political parties, social movements, and their supporters on social media. His work has been published in Social Forces, ICWSM, and the ACL. You can find more information on his <a href="t-davidson.github.io">website</a> and follow him on Twitter @thomasrdavidson.</p>
                        <p><a href="trd54@cornell.edu">Email</a> | <a href="t-davidson.github.io">Website</a></p>
                    </div>                    
                </div>              
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/fernando.jpg" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Fernando Plascencia</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of City and Regional Planning</h5>
                        <p>I am Fernando Plascencia, PhD. Candidate in Regional Science at the Department of City and Regional Planning. My interest are Behavioral Economics and Social Networks. My current research topics are based on social computing research to study complex social interactions and behavioral responses to crises, particularly to violence produced by Armed Conflicts, exploring experimental measures of subjective well-being to track national well-being in locations affected by violence, in addition, to use experimental approaches to measure risk perception and policy preferences.</p>
                        <p><a href="jp975@cornell.edu">Email</a> | <a href="http://www.fernandoplascencia.net/about">Website</a> | <a href="https://github.com/ferplascencia">Github</a></p>
                    </div>                    
                </div>         
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/alexander.png" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Alexander Ruch</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Sociology</h5>
                        <p>Alexander Ruch is a second-year graduate student at Cornell University pursuing a PhD in sociology with a graduate minor in information science. His research links culture and cognition, social psychology, and politics using computational, network, experimental, and quantitative methods. Across these areas, he has studied morality, identity, risk, biases, group dynamics, and conflicts between science, technology, and culture. Going forward, he intends to study the diffusion of complex social contagion over networks and organizations by bridging network analysis with computational and experimental methods. Alexander has also earned a MA in sociology from the University of Iowa and a Master of Public Health degree from the State University of New York at Buffalo.</p>
                        <p>Alexander's current research interests relate to the role of social identity in political polarization, how activism and industry mobilization have shaped the adoption of policies favoring genetic engineering, and co-review networks among contentious science products. Alexander has previously published research on morality's role in corruption disputes as well as new opportunities for studying emotion management. He has also presented work on risk perceptions' and reputations' relationships with individuals' decisions to eat genetically engineered foods, identities' effects on biasing moral judgments, farmers' markets influence on communities' diets over time, and online educational materials' abilities to help daycare workers learn about children's nutritional needs.
                        </p>
                        <p><a href="amr442@cornell.edu">Email</a> | <a href="alexruch.weebly.com">Website</a></p>
                    </div> 
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Sebastian Deri</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Social Psychology</h5>
                        <p>Hey! I’m a PhD student in social psychology, with a minor in information science. I’m interested in the many varieties of false beliefs that we often come to have. Why is it for example that some people believe the earth is flat, that President Obama was not born in the US, or “bad things happen in threes”? In seeking answers to these questions, I draw from research on biases &amp; heuristics, motivated reasoning, social influence, and social networks in the fields of psychology, sociology, and occasionally political science and economics. I primarily use in-lab and online experiments, in terms of methods. But I am equally passionate about the burgeoning field of computational social science, and aim to increasing incorporate in my research computational models, analyses from large-scale datasets, and experiments in real world digital environments (e.g. Twitter). As a result, I have also worked on research with organizations like Nokia Bell Labs. This adventure, which I am grateful to be on, is made possible through support from Cornell’s Sage Fellowship and the Department of the Defense’s Air Force Research Laboratory.
                        </p>
                        <p><a href="sebastian.deri@gmail.co">Email</a></p>
                    </div>                    
                </div> 
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center"></h3>
                        <h4 class="text-center"></h4>
                        <h5 class="text-center">Department of </h5>
                        <p>
                        </p>
                        <p><a href="">Email</a> | <a href="">Website</a></p>
                    </div>                    
                </div>                            
                <h2>Past Members</h2>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center"></h3>
                        <h4 class="text-center"></h4>
                        <h5 class="text-center">Department of </h5>
                        <p>
                        </p>
                        <p><a href="">Email</a> | <a href="">Website</a></p>
                    </div>                    
                </div>                  
            </div>
        </section>



        <?php include 'php/footer.php'; ?>
    </body>
</html>