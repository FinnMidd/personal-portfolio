<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo to Flowchart</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>

    <!-- Mermaid.js -->
    <script src="https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.min.js"></script>

    <!-- Mermaid CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.css" />

</head>

<body>
    <header id="header">
        <h1><a href="../index.html" class="logo">Hello</a></h1>
        <nav>
            <ul>
                <li><a href=#hero>HOME</a></li>
                <li><a href=#about>ABOUT</a></li>
                <li><a href=#info>INFO</a></li>
                <li><a href=#services>SERVICES</a></li>
                <li><a href="contact.html" class="cta_buy">Click Me!</a></li>
            </ul>
        </nav>
        <button id="menuBurger">|||</button>
    </header>

    <section id="mobileMenu">
        <a href=#hero>HOME</a>
        <a href=#hero>HOME</a>
        <a href=#hero>HOME</a>
        <a href=#hero>HOME</a>
    </section>

    <div id="headerFill"></div>

    <br><br>

    <h1><a href='PseudoFlow.html' style="text-decoration: none; color: black;">Go Back</a></h1>

    <section id="pseudoContainer">
        <pre class="mermaid">
            graph TD
                <?php
                $ifCount = 0;
                $elseStr = 0;
                $testIf = 0;
                $counter = 'A';
                
                $debug = 0; //! DEBUG

                // Define functions
                function keywordCheck($str) {
                    $strLow = strtolower($str);
                    global $ifCount;
                    global $counter;
                    global $testIf;

                    if (preg_match('/\bif\b/', $strLow)) {
                        $counter++;
                        $ifCount = $counter;
                        $counter = chr(ord($counter) - 1);
                        $testIf = 1;
                        return 1;
                    }
                    elseif (preg_match('/\belse\b/', $strLow)) {
                        if ($ifCount !== 0) {
                            return 2;
                        } // else ignore

                    }
                    elseif (preg_match('/\binput\b/', $strLow)) {
                        return 3;
                    }

                    return 0; // No keywords found
                }

                function formatGraph($arr) {
                    global $ifCount;
                    global $elseStr;
                    global $testIf;
                    global $counter;
                    $output = "";

                    // create first line
                    $output .= "A([Start]) --> B";

                    foreach ($arr as $line) {
                        // string replace quotation marks
                        if (strpos($line, '"') !== false) {
                            $line = str_replace('"', "#quot;", $line);
                            $line = '"' . $line . '"';
                        }

                        if ($counter == 'A') {
                            switch (keywordCheck($line)) {
                                case 0: // no keywords
                                    $output .= "[".$line."]\n";
                                    break;
                                case 1: // if statement
                                    $output .= "{{".$line."}}\n";
                                    break;
                                case 2: // else statement
                                    $output .= "[".$line."]\n";
                                    break;
                                case 3: // input statement
                                    $output .= "[/".$line."/]\n";
                                    break;
                                default: // no keywords
                                    $output .= "[".$line."]\n";
                            }
                            $counter++;
                        } else {
                            if ($testIf === 0) {
                                switch (keywordCheck($line)) {
                                    case 0: // no keywords
                                        $output .= "$counter --> ";
                                        $counter++;
                                        $output .= "$counter"."[".$line."]\n";
                                        break;
                                    case 1: // if statement
                                        $output .= "$counter --> ";
                                        $counter++;
                                        $output .= "$counter"."{{".$line."}}\n";
                                        break;
                                    case 2: // else statement
                                        $elseStr = "$line";
                                        break;
                                    case 3: // input statement
                                        $output .= "$counter --> ";
                                        $counter++;
                                        $output .= "$counter"."[/".$line."/]\n";
                                        break;
                                    default: // no keywords
                                        $output .= "$counter --> ";
                                        $counter++;
                                        $output .= "$counter"."[".$line."]\n";
                                }
                            } else {
                                switch (keywordCheck($line)) {
                                    case 0: // no keywords
                                        $output .= "$counter --> |True| ";
                                        $counter++;
                                        $output .= "$counter"."[".$line."]\n";
                                        break;
                                    case 1: // if statement
                                        $output .= "$counter --> |True| ";
                                        $counter++;
                                        $output .= "$counter"."{{".$line."}}\n";
                                        break;
                                    case 2: // else statement
                                        $elseStr = "$line";
                                        break;
                                    case 3: // input statement
                                        $output .= "$counter --> |True| ";
                                        $counter++;
                                        $output .= "$counter"."[/".$line."/]\n";
                                        break;
                                    default: // no keywords
                                        $output .= "$counter --> |True| ";
                                        $counter++;
                                        $output .= "$counter"."[".$line."]\n";
                                }
                                $testIf = 0;
                            }
                        }
                    }

                    // Output End
                    $output .= "$counter --> ";
                    $counter++;
                    $output .= "$counter"."([End])\n";
                    
                    if ($elseStr !== 0) {
                        $counter++;
                        $output .= "$ifCount --> |False| $counter"."[".$elseStr."]\n";
                    }

                    return $output;
                }

                // -------------------- Code ------------------ //

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Define variables
                    // Validate and sanitize input
                    $pseudoContent = isset($_POST['pseudoContent']) ? $_POST['pseudoContent'] : "";
                    $lines = array_filter(array_map('trim', explode("\n", $pseudoContent))); // explode input, trim each item, filter empty items

                    // Format graph syntax
                    echo formatGraph($lines);
                }
                ?>
        </pre>
    </section>

</body>
</html>