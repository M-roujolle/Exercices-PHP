  <?php


    // MODE TERNAIRE

    // function test($age, $gender)
    // {
    //     $adult = $age >= 18 ? "majeur(e)" : "mineur(e)";
    //     $sex = $gender == "homme" ? "un homme." : "une femme.";

    //     return "Bonjour, vous êtes $adult ($age) ans, et vous êtes $sex";
    // }

    // echo test(54, "femme");

    // METHODE IF ELSE
    function test2($age1, $gender1)
    {
        if ($age1 < 18) {
            $adult1 = "mineur";
        } else {
            $adult1 = "majeur";
        }

        if ($gender1 == "homme") {
            $sex1 = "un homme";
        } else {
            $sex1 = "une femme";
        }

        return "bonjour, vous etes $sex1 , et vous êtes $adult1.";
    }

    echo test2(17, "femme");
    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>

  <body>

  </body>

  </html>