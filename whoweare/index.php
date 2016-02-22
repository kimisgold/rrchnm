<?php $bodyClass = 'who-we-are'; ?>
<?php include('../header.php'); ?>

<div id="intro">
    <div class="container">
        <h1>We are <em>Multifaceted</em></h1>
        <p>Our team includes scholars, researchers, developers, programmers, designers, project managers, educators, multimedia producer, and graduate and undegraduate students. Our backgrounds include history, English, museum studies, computer science, graphic design, teaching, and journalism.</p>
    </div>
</div>

<div id="content">
    <p>RRCHNM is part of the Department of History and Art History at George Mason University. Center directors are faculty in the department, and students from the PhD program work as research assistants and undertake practicums as part of the Digital History Fellowship program.</p>

    <p>The Center is organized into three divisions: Educational Projects, Public Projects, and Research.</p>

    <nav>
    <h2>Meet Us</h2>

    <ul>
        <li>By Position
            <ul>
                <li><a href="#">Any</a></li>
                <li><a href="#">Director</a></li>
                <li><a href="#">Research Faculty</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">DH Fellow</a></li>
                <li><a href="#">GRA</a></li>
                <li><a href="#">Affiliate</a></li>
            </ul>
        </li>
        <li>By Role
            <ul>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Content Development/Editing</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Media Production</a></li>
                <li><a href="#">Outreach</a></li>
                <li><a href="#">Project Management</a></li>
                <li><a href="#">Research</a></li>
            </ul>
        </li>
        <li>By Division
            <ul>
                <li><a href="#">BY DIVISION</a></li>
                <li><a href="#">Educational Projects</a></li>
                <li><a href="#">Public Projects</a></li>
                <li><a href="#">Research</a></li>
            </ul>
        </li>
    </ul>
</nav>

    <div class="staff">

        <?php
        $personTemplate = '
            <div class="person">
                <div class="image"></div>
                <span class="name"><a href="#">Employee Name</a></span>
                <span class="position">Position</span>
            </div>';
        echo str_repeat($personTemplate, 50);
        ?>

    </div>

</div>

<?php include('../footer.php'); ?>