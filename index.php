<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SkyPad</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <style>
    </style>
</head>
<body>
    <div class="holder">
    <h1>SKy's Playground</h1>
    <p>My playground. Hosted in a Raspberry Pi...</p>
    <ul>
		<li><a href="http://wdss.eap.gr/">DSS for wastewater and biosolid reuse</a>. Part of the research projects implemented through the Special Account for Research Funds, Hellenic Open University (Self-financed project).</li>
		<li><a href="/sudoku">JS Sudoku Solver</a>. Backtracking Algorithm implemented in JavaScript.</li>
        
        <li><a href="/old_projects_list">Some Older Projects</a>.</li>
    </ul>
    <p>
    <?php
    echo 'Date: ' . date(DATE_RSS);
    ?>
    </p>
    </div>
</body>
</html>