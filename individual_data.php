<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/pubchem.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Individual Data</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Outer grid container */
        .grid-container {
            display: grid;
            grid-template-areas:
                'header header header'
                'main main right'
                'footer1 footer1 footer1'
                'footer2 footer2 footer2';
            gap: 10px;
            background-color: #FFFFFF;
            padding: 0px;
        }

        /* Inner grid container */
        .inner-grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns */
            gap: 20px;
        }

        /* Section styling */
        .section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .main {
            grid-area: main;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        .header {
            grid-area: header;
            background-color: #1a446e;
            color: #FFFFFF;
            padding: 20px;
            text-align: left;
            font-size: 30px;
            position: relative;
            justify-content: space-between;
            display: flex;

        }
        
        .header-logo {
            display: flex;
            align-items: center;
            flex-grow: 1; /* Add flex-grow: 1; */
        }
        .header-logo img {
            max-height: 50px;
            margin-right: 15px;

        }
        .home-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .home-button:hover {
            background-color: #0056b3;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .nav {
            grid-area: nav;
            background-color: #e9ecef;
            padding: 20px;
        }
        .footer {
            grid-area: footer;
            background-color: #1a446e;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer1 {
            grid-area: footer1;
        }
        .footer2 {
            grid-area: footer2;
            background-color: #1f2937;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding-left: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .nav-list {
            padding: 0;
            margin: 0;
        }
        .nav-button {
            display: grid;
            margin-bottom: 10px;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 8px;
        }
        .nav-item {
            margin-bottom: 10px;
        }
        .nav-link {
            display: block;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
        }
        .nav-link:hover {
            background-color: #0056b3;
        }
        .nav-button:hover {
            background-color: #0056b3;
        }

        /* Collapsible panel styles */
        /*.panel-heading.collapsed .fa-chevron-down,
        .panel-heading .fa-chevron-right {
            display: none;
        }
        .panel-heading.collapsed .fa-chevron-right,
        .panel-heading .fa-chevron-down {
            display: inline-block;
        }*/
        i.fa {
            cursor: pointer;
            margin-right: 5px;
        }
        .collapsed ~ .panel-body {
            padding: 0;
        }
        .collapse {
            display: none;
        }

        /* Button style for collapsible */
        .panel-heading {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 15px;
            border: none;
            text-align: left;
            outline: none;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .panel-heading:hover {
            background-color: #0056b3;
        }

        .panel-heading.collapsed {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .panel-body .collapse {
            border: 1px solid #ddd;
            border-top: none;
            padding: 20px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .right-sidebar {
         grid-area: right;
         background-color: #ffffff;
         padding: 20px;
         display: flex;
         flex-direction: column;
        align-items: flex-start;
        position: sticky;
        top: 10px; /* Adjust this value as needed */
        height: fit-content; /* Ensure the sidebar doesn't take up full height */
}

        .nav-button {
        display: block;
        margin-bottom: 10px;
        padding: 8px 12px; /* Reduced padding for slimmer buttons */
        text-align: center;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 14px; /* Slightly reduced font size */
        border-radius: 4px; /* Optional: Add border radius for rounded corners */
}

        .nav-button:hover {
        background-color: #0056b3;
}

        .search-bar {
            display: flex;
            align-items: center;
        }
        .search-input {
            flex: 1;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
            background-color: #0056b3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }


    </style>
</head>
<body>
<div class="grid-container">
    <div class="header" id="header">
    <div class="header-logo">
        <img src="images/Chemistry Lab Chemical Logo.png" alt="headerLogo">
        <div>Individual Data</div>
    </div>
    <form action="search.php" method="get" class="search-bar">
            <input type="text" name="query" class="search-input" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
    </form>
    </div>
    <div class="right-sidebar">
    <button class="home-button" onclick="location.href='index.php'">Home</button>
    <button class="nav-button" onclick="scrollToElement('pubchem-id')">PubChem ID</button>
    <button class="nav-button" onclick="scrollToElement('structure-image')">Structure Image</button>
    <button class="nav-button" onclick="scrollToElement('physicochemical-properties')">Physicochemical Properties</button>
    <button class="nav-button" onclick="scrollToElement('lipophilicity')">Lipophilicity</button>
    <button class="nav-button" onclick="scrollToElement('water-solubility')">Water Solubility</button>
    <button class="nav-button" onclick="scrollToElement('pharmacokinetics')">Pharmacokinetics</button>
    <button class="nav-button" onclick="scrollToElement('druglikeness')">Druglikeness</button>
    <button class="nav-button" onclick="scrollToElement('medicinal-chemistry')">Medicinal Chemistry</button>

    </div>
    <div class="main">
    <?php
    include 'conn.php';

    if (isset($_GET['pubchem_id'])) {
        $pubchem_id = mysqli_real_escape_string($conn, $_GET['pubchem_id']);
        $sql = "SELECT * FROM adme_table WHERE `PubChem ID` = '$pubchem_id'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            echo "<h1>{$data['Name']}</h1>";

            // Inner grid container
            echo '<div class="inner-grid-container">';

            // Left side sections
            echo '<div id="pubchem-id" class="section" style="grid-row: 1;">';
            echo "<h2>PubChem ID</h2>";
            echo "<p><strong>PubChem ID:</strong> {$data['PubChem ID']}</p>";
            echo "<p><strong>Canonical SMILES:</strong> {$data['Canonical SMILES']}</p>";
            echo '</div>';

            echo '<div id="physicochemical-properties" class="section" style="grid-row: 2;">';
            echo "<h2>Physicochemical Properties</h2>";
            echo "<p><strong>Formula:</strong> {$data['Formula']}</p>";
            echo "<p><strong>Molecular Weight:</strong> {$data['MW']}</p>";
            echo "<p><strong>#Heavy atoms:</strong> {$data['#Heavy atoms']}</p>";
            echo "<p><strong>#Aromatic heavy atoms:</strong> {$data['#Aromatic heavy atoms']}</p>";
            echo "<p><strong>Fraction Csp3:</strong> {$data['Fraction Csp3']}</p>";
            echo "<p><strong>#Rotatable bonds:</strong> {$data['#Rotatable bonds']}</p>";
            echo "<p><strong>#H-bond acceptors:</strong> {$data['#H-bond acceptors']}</p>";
            echo "<p><strong>#H-bond donors:</strong> {$data['#H-bond donors']}</p>";
            echo '</div>';

            echo '<div id="water-solubility" class="section" style="grid-row: 3;">';
            echo "<h2>Water Solubility</h2>";
            echo "<p><strong>ESOL Log S:</strong> {$data['ESOL Log S']}</p>";
            echo "<p><strong>ESOL Solubility (mg/ml):</strong> {$data['ESOL Solubility (mg/ml)']}</p>";
            echo "<p><strong>ESOL Solubility (mol/l):</strong> {$data['ESOL Solubility (mol/l)']}</p>";
            echo "<p><strong>ESOL Class:</strong> {$data['ESOL Class']}</p>";
            echo "<p><strong>Ali Log S:</strong> {$data['Ali Log S']}</p>";
            echo "<p><strong>Ali Solubility (mg/ml):</strong> {$data['Ali Solubility (mg/ml)']}</p>";
            echo "<p><strong>Ali Solubility (mol/l):</strong> {$data['Ali Solubility (mol/l)']}</p>";
            echo "<p><strong>Ali Class:</strong> {$data['Ali Class']}</p>";
            echo "<p><strong>Silicos-IT LogSw:</strong> {$data['Silicos-IT LogSw']}</p>";
            echo "<p><strong>Silicos-IT Solubility (mg/ml):</strong> {$data['Silicos-IT Solubility (mg/ml)']}</p>";
            echo "<p><strong>Silicos-IT Solubility (mol/l):</strong> {$data['Silicos-IT Solubility (mol/l)']}</p>";
            echo "<p><strong>Silicos-IT class:</strong> {$data['Silicos-IT class']}</p>";
            echo '</div>';

            echo '<div id="druglikeness" class="section" style="grid-row: 4;">';
            echo "<h2>Druglikeness</h2>";
            echo "<p><strong>Lipinski #violations:</strong> {$data['Lipinski #violations']}</p>";
            echo "<p><strong>Ghose #violations:</strong> {$data['Ghose #violations']}</p>";
            echo "<p><strong>Veber #violations:</strong> {$data['Veber #violations']}</p>";
            echo "<p><strong>Egan #violations:</strong> {$data['Egan #violations']}</p>";
            echo "<p><strong>Muegge #violations:</strong> {$data['Muegge #violations']}</p>";
            echo "<p><strong>Bioavailability Score:</strong> {$data['Bioavailability Score']}</p>";
            echo '</div>';

            // Right side sections
            echo '<div id="structure-image" class="section" style="grid-row: 1; grid-column: 2;">';
            echo "<h2>Structure Image</h2>";
            // Assuming you have an image URL or source to display
            echo "<img src='path_to_structure_image.jpg' alt='Structure Image' />";
            echo '</div>';

            echo '<div id="lipophilicity" class="section" style="grid-row: 2; grid-column: 2;">';
            echo "<h2>Lipophilicity</h2>";
            echo "<p><strong>iLOGP:</strong> {$data['iLOGP']}</p>";
            echo "<p><strong>XLOGP3:</strong> {$data['XLOGP3']}</p>";
            echo "<p><strong>WLOGP:</strong> {$data['WLOGP']}</p>";
            echo "<p><strong>MLOGP:</strong> {$data['MLOGP']}</p>";
            echo "<p><strong>Silicos-IT Log P:</strong> {$data['Silicos-IT Log P']}</p>";
            echo "<p><strong>Consensus Log P:</strong> {$data['Consensus Log P']}</p>";
            echo '</div>';

            echo '<div id="pharmacokinetics" class="section" style="grid-row: 3; grid-column: 2;">';
            echo "<h2>Pharmacokinetics</h2>";
            echo "<p><strong>GI absorption:</strong> {$data['GI absorption']}</p>";
            echo "<p><strong>BBB permeant:</strong> {$data['BBB permeant']}</p>";
            echo "<p><strong>Pgp substrate:</strong> {$data['Pgp substrate']}</p>";
            echo "<p><strong>CYP1A2 inhibitor:</strong> {$data['CYP1A2 inhibitor']}</p>";
            echo "<p><strong>CYP2C19 inhibitor:</strong> {$data['CYP2C19 inhibitor']}</p>";
            echo "<p><strong>CYP2C9 inhibitor:</strong> {$data['CYP2C9 inhibitor']}</p>";
            echo "<p><strong>CYP2D6 inhibitor:</strong> {$data['CYP2D6 inhibitor']}</p>";
            echo "<p><strong>CYP3A4 inhibitor:</strong> {$data['CYP3A4 inhibitor']}</p>";
            echo "<p><strong>log Kp (cm/s):</strong> {$data['log Kp (cm/s)']}</p>";
            echo '</div>';

            echo '<div id="medicinal-chemistry" class="section" style="grid-row: 4; grid-column: 2;">';
            echo "<h2>Medicinal Chemistry</h2>";
            echo "<p><strong>PAINS #alerts:</strong> {$data['PAINS #alerts']}</p>";
            echo "<p><strong>Brenk #alerts:</strong> {$data['Brenk #alerts']}</p>";
            echo "<p><strong>Leadlikeness #violations:</strong> {$data['Leadlikeness #violations']}</p>";
            echo "<p><strong>Synthetic Accessibility:</strong> {$data['Synthetic Accessibility']}</p>";
            echo '</div>';

            echo '</div>'; // Close inner-grid-container
        } else {
            echo "<h1>Data Not Found</h1>";
        }
    } else {
        echo "<h1>No PubChem ID Provided</h1>";
    }
    ?>
</div>
    <div class="footer footer2"><p>© 2024 ChemViewer. All rights reserved.</p>
</div>

<script>
    function scrollToElement(elementId) {
        var element = document.getElementById(elementId);
        if (element) {
            element.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    }

   /* document.addEventListener('DOMContentLoaded', function() {
        var coll = document.querySelectorAll('.panel-heading');
        coll.forEach(function (heading) {
            heading.addEventListener('click', function () {
                this.classList.toggle('collapsed');
                var content = this.nextElementSibling.querySelector('.collapse');
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        });
    }); */
</script>

</body>
</html>
