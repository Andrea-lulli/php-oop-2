<?php
include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/giocattoli.php';


$Category = [

    'cane' => new category('Cane', 'fa-solid fa-dog'),
    'uccello' => new category('Uccello', 'fa-solid fa-dove'),
    'gatto' => new category('Gatto', 'fa-solid fa-cat'),

];

// var_dump($Category);

$Prodotti = [
    'cibo' => new cibo('Royal Canin', 'data:image/jpeg;base64,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', 43.99, $Category['cane'], '545', 'prosciutto,riso'),
    'cibo1' => new cibo('Almo Nature', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofUI2n3RK1M9okyFvGjIXflD_6dUURqlIwA&usqp=CAU', 44.99, $Category['cane'], '600', 'manzo,cereali'),
     
    'accessori' => new accessori('Voliera ferplast Bella casa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu1H7d8krWA0bfARwJ2lM7Z9uaB9Cwvs6Dsw&usqp=CAU', 184.99, $Category['uccello'], 'Legno', 'L83 x P 67 x H 153 cm'),
    'giocattoli' => new giocattoli('Topini di peluche Trixie', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQSEhUSExMWFhUXFxUXFhgXFhUbGxgdFxUXGBUXGRgYHSghGBslGxgVITEjJS4rLi4uGCAzODMtNygtLisBCgoKDg0OFxAQGysdHiUrKy4rNys1LS4tMTcrLS0tKys1Li4rKy0xLSstLS0vLTUrLS0tLS0tLTUtMSsrLS0rLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAYDBQcCAf/EADsQAAEDAgQEBAMHAwQCAwAAAAEAAhEDBAUSITEGQVFxImGBkQcTMhRCobHB0fAzUuEjYnLxU5IVFiT/xAAaAQEBAAMBAQAAAAAAAAAAAAAAAQIDBAUG/8QAIxEBAAICAgEEAwEAAAAAAAAAAAECAxEEEiEFMUFREyKxYf/aAAwDAQACEQMRAD8A7iiIgIiICIiDy54Gi9LFWoh2+h5EbqLdVH0xO7eZG49Onmgnooljcl+87AyRE+iloCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiwX15TosNSq8MY3dzjACDOi01hxVZ1nNZTuabnOJDWzBJAmIOswtygIiIMVWjOo0PVeM7xuJHUKQiCObsDcEd16bctPNZl4dSad2g9wEH1rgdivSjus28pb2P6HRYhbVBtV082/5QTVHq3QGg1KhPu6mokcxMLzQnmUEv7Q7yXqncHnqsMLx84KjYNqg80q1WtaXOIDQJJJgADckrX7habims80RTAJBPijmBs3tP5Jpsw4/yXivttamPBAIMg6gjmvSr/BV6KlDJs6m4tIPn4h+ceisCkmXHOO81n4EREaxERAREQEREBERBzninh3Fat1VqW1draRLflg3FZkAMaCC1rYHizHnuoV18Ob6sxoq3wJGuRzq1RmblBcRHSY5rqaIOGW/w1xJtRtTLRzMdnaRV+812ZpEs3nXXoreOKMVtR/8Aqw/5zRAdUpET/wAsrM0g9mx5LoiIKLbfFWxLslUVqDulSkZnpDMxHqArVheN29yJoVqdTSYa4SO7dx6hZr3DqVYFtWkyoDoQ9jXT7hVHE/hdZ1Dmo/Mt3TP+k7w/+rwY9IQXhFzWjwzjFo8ut7xldsfTWLxtsA12YA+YcF9dxPjVD+thwqDxf0gSZ5f03vgb7jXTVB0lFzN3xUqUyPn4dVpAyBLngkjoH0hPutxR4t+1U2vptfTB5GM2hIOoOyC0XOIsYYJk+Swsxlh5OHoq8yuD185UkNaRyCD0671PcqZbV5H6rXilpvK8U3OadDp0KK3mcdV4yAmVrX4hyiFU7zF67qpOctaNmjaAdCepO/qrEOnjca2eZiJ0vF5iVKjHzKrKc6DO9rZ7SVFx6hVq27jbVWtqw11NxDXNdBBgzoQ4aT5rn/xM4XuroW9e2a2oA0tcwQHjOQc0u0IgAHXSOfK58I4bUtrGhbVHzUYDmMyG5nF2UHSQJj0RzTGpTOG7JuZtYh1KpEPpgmCY8Uz9Qnb0VnWkHhcDMn+St010iVFta1p3M7fUREYiIiAiIgIiIPjnQJRrp1CESozrctByHsDt2lBKRay3vXSZDuQIIiOq2aAiIgIiICIiBCode4z1Hujdx9p0/CFfFSMYtPlVHSIaSS08oPKeo6IMTKka8u38lSqdbp+Oi0WI40y3AL3SDsOfpC0NXjdpOxaOo/VHXi4eXJXtWPC+vuwN9P55LGyvmJAO25Wgw3HWVwAHSToIUjGMTFlbvq6lrYmdS4kwGg6AE+eiNWXDfFOrxpsnOM9Y/n5LVXFoajwGB0uMGeXmI5ALzwvj1G/aXUg4PYR8xhyzBmCCDqN1koUalG/p1qbiaLyG1ac6tds17fxBA6zyViVwZ7YbdqrWXfdGgGnslJ5Ogknst0KLHa5R7LJTpBuwhNtMztq7e3c4yQQBofNbWmwNAA2XpFEEREBERAREQEREBERB5e0HQrD8tzfpMjoVIRBg+eRu0+i+C8b2UhfCEHhtZp5rIsLrVh+6B20/JYX2R+7UcPY/sUExY6tYN3UGu+owgZp9P8rBmcTJMlBON0eULHWcHjK9rXA7ghfGheH1AFRQOKeEH5y+m0up8gDLm8yI3I7Kl3mCEToexH5ruYfJWqx3C21WyQcw2I0J8ieiyifiXscP1PpFcd48fblfCdkxtTMWmfu6kDTSdN+asHF+A1L+1NJmUPDmvZmmJEgtkbAgn1UzCsPDq7KTx8uc2UxMmNuUf9KxV8Irt8LGS0bEEQfSZWMxpp9Tnebce2lG+H3CFTDxUfXe01KkNysdLWtaTGu5JlWau2DI0ncQpLsMrTpTdIHP9I0XnD8Iq1XnMMgAB1HWNO/foo85YOFqznUyHalrt+42W6UDCcOFEOEySZJ/JT0QREQEREBERAREQEREBERAREQEREBERBpscqljmnkRHtyUW2upOy3OI2fzWZeYMhaA0shg6EeyK2oqBfHweagfaiI006qqcScaMoEsD/LwiT5xCrdgwWyzqF3r12U2lznNaAJJJAAHmVgw3FKNyC6jWZUaIDsjw6J2mNpVSZZ1MQw2q1rwx1VpDHPEzDgTPQGCFrvhVwrc2T61a5AYXtFNrA8OmHSXGNI6a8zsjDLTpeaz8LJh2E1DVqUrp+dmcuoVgAHBh1+WSNJadj07K7sbAA1MCJO/qtJ8vSS73H4LaYfUlg6jT9lGM2mYiJlIcF8p0wNu5XpEYiIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAod7Yh+o389itFxFx3b2dY0arahcGtcS0NgB231OEqv4z8WaLaR+TTf8w/QagYGDzOVxnsg2/E+EXLqDm0R4j/AGkbcxrzhc4tOD61WoBkeXzrmaR7k7KZafFO8a9od8qq3OM3gykjZwBGg8vRdcwrHbe5ANGsx/OAfEO7D4h6hV6HF9Qtx6TWKxO2qsbX5FJlECMoj9/xXtpMwJJVhcwHcAo2mBsAOwTbhtabTMz7tSy2qO0II8ytnQoBu28CT1hZUUYiIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIg1WI8NWlw81K1tSqPIALnsaSQNgSQs9rg1vTaG06FJjRsG02AewCnIgrp4Fw6S77HRkzMNjfyGgWtxL4Y2NWSxj6Lt2upvd4T1DXSPRXREHPKnBmJUTNpijyANGVwXD/jJzADzyyFi/8As+LWcC7shXZP9SjJJ8zkBA9WtXSEQUfC/ijZVX5H56J5moBlB/tJaSQe4CstnxBa1TFO5ovOsBtRhJgSYE66SV9xLAba41rW9KoermNJ94lVu9+FmH1PpZUpGZllVx9IqZhHogujXg7EFYby8bTEu57Ablc8q/CKm2DQu6rHA7uax0DoMuUg+ay2uFvtpouuHVspPidmB11gS4wB3QWW5xR7z4SWjl59ysDa9UbPPutdTcQYn31U2k/t5/8ASKnW+LvH1DMPYqbQxmm7Qy0+e3uFqFgfH8CC3ArU4jxJb0KgpPf4zqQATlnbNGy0n2pw0D3Dykj+clWsVt4qucZJcZJPMnnPaB6KxG3XwsFM2TrefDqzHAgEGQdQRzX1QcCaRb0Qd/lt/JTlHLaOtpgRERiIiICIiAiIgIiICIiCM+o5rtRLTzHL9l9+2N6qQodewa52YEtPONAe6CWDOy+qLSd8vQjTr3Uhrwdig9IiICIiAqJiDC2tUnfO46+ZkfgQr2tNjeD/ADPGxwa/nOzu/Q+aCsscDz19F9fdtb9Tp9vyWmx+1vSA2nRfMmXDxbdFRr8XNJ0PNRjv9wIP+VdPT4vA/NXt21/nvLqv2kESx2g9V8ta2pe85QNADpPnBVA4axS4c8U8pcNMxGmnnKsPHeIOo2VWoyc4yN0dGXO4NJHXfyiZ5KOfl8f8ForvawPnePCdNOq1Tq9P7Uy1rBwL8rmTEO18bQeRA1M8lTPhDjdWpVqUHl9SiKYdq4kMcHANAJOmYTp/tV9xCg17ml4EscH03HcEbQfcdkc9bTWd1nUuiNGi+rX4Pfis0kcoB1nktgjAREQEREBERAREQERR8QvqdCm6rVcGMaJJP4dzOkIJCKrWnxBsKjmsFfK5zg0B7Ht1dtJIgA6azzVpQEREAhYTbN5CO37bLMiCObY8nn1/xC+FlQbOB76fupKIIjrlzfqYfTX8pRmIsPUd1LUe/dFMz2QYq9+2PCZPYrC106yogqBS6eiD1Cw3lnTqty1GNe3o4A+3RZX6rFTBKqxMxO4VapwZTpONSg5zeZYdQfIHcesqJcgNinUYHNcCKjXAQWnTKQeZV5cRzVR4jpUTXZRcS2rWa40pkNcW7jNsHRrHOFYdeLLXJkic878aYbG0oUG5aFBlJrjJyiAT+pXqtcTp5jn2/FbvBcIa+mPnMeHNgEzo/TRw5qfh2A06by+DtAzGd9z5LGXLaOszCPwkwj5mhA8MHXXf3ViXlrQNgvSMRERAREQEREBERBQuM+Crm7uDWpXLKbcrWhrg+WkTJBB/KP1Wtb8KHvYBVvTm1nJTMeznn3XT0QcYf8I7suM17dwkkT8wE9JGUx7+6sTKmOWjdWUrtjd/F4yJ+79DiR5gnuuiog58fieKJDbuxuaBjU5ZHfxBvh81YcH41srmBTuGBx0yv8Dp6Q7f0lb9zQRBEg7gqsYxwBYXGrqApu/uo/6Z9Q3wn1BQWdpnUL6ubD4c3Nu/5ljiDmcstRs6dCR4XerV9fU4goaltC41OjcnQx/4zE69UHSEXMqnG2K0sprYaYmDkZUMmORaXAD3WztuKqtzTGeg6gZILCTJjY+JrSB5Qgtt3iTWGNXHnHLuVBq4u17S0tOoI3C0tOv5EH3UthBGqCPSBnUraW9TRQhTHJYXUjtPoitrVuw0SXCOqhU8ca5+Rgk9eS0eO21aq0Mp1G0x1LSfXceyrVnY1bd2tVzntM59ue4HIb6dFlH09Hi8bHmrrf7fxiv/AImXNPEH0GspvpsrCkWZHZiA7K6DP1a6adF0/FrenVyte2cpDmGNWkbEHkVp6WF21apSvalBjrgNb/qFvONDA0J6HcLeMqRz1U08+0dZmJT8OuJGU8ojzCmrVWQcXFwG2hnTQraqMRERAREQEREBERAREQEREBERAREQEREBUfErgurVCf7iB2boPyV4VR4isjTqOqR4HayBoDGs9JMlBBa47wf5+Kk06xO2nfktBieMtoNDiZ6Deew5Ku3HGpJ+ggeW6OzDw8uWvaseHQ33Ubg+mqx0q+d0CYjUqq4RxOyqMuYknQdQStri1820oVKwMNaJMkS4nQAT5lGrNgvinVobF7tYla27tzVd4W+MkDfQzoOy1vBnFbMQmnkyVmgP+qWubMGDAIgx7hTcQsnNuqdzRdlLSG1mTo9kyPVpMj25qxKYc1sVu1V5Zg5a0NDhAAHsIUqnhrBvJ9f2UmjUzCR+n6LIo1TO53LzTYGiAIC9IiIIiICIiAiIgIiICIiAiIgIiICIiAiIgL4ROhX1EHMOPsDays1zWQx4J8g6fEB00gqn3OC6EgFdvxrCm3NM03aGZa7+09VRL3hq5YSPl5h1aQZ9N/wWyJjWn0Pp3NpGKMdpiJj7Urhu1pitL2SQYE8vP3VuxvBjfW1SgSG5w2HRIaWuDm+kjWOqmcP8FPdUFWsDTaJgaZnHt90d1vrnAaoOWmWlvmYPqFhLg9UyUvm/Sdxpz/gfgf8A+Pe+tVqtqVXNLG5JytaSC7uSQO0K0XO8gwdPYqa7A60jwa9cwj89PZY7PA6r6hD4aACeR7D1hR5zbcI1DD2k7QR6zP6KwqBhmGNo5oJJMany8lPRBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB8IXxjANl6RAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH//2Q==', 4.99, $Category['gatto'], 'Morbido con codina in corda', '8,5 cm x 10 cm'),

];
// var_dump($Prodotti);

// foreach ($Prodotti as $elem) {
//     echo get_class($elem);
//     echo "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Boolshop</title>

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- link mio css -->
    <link rel="stylesheet" href="style.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="conteiner">
        <div>
            <h2>Boolshop</h2>
            <h5>I nostri prodotti</h5>
        </div>

        <div class="conteiner-card">


            <?php foreach ($Prodotti as $key => $elem) { ?>
            <div class="card">
                <div>
                    <img class="img" src="<?php echo $elem->immagine ?>" alt="">
                </div>
                <div class="testo">
                    <h5>
                        <?php echo $elem->nome ?>
                    </h5>
                    <span class="categoria">
                        <i class="<?php echo $elem->category->icon?>"></i>
                        <?php echo $elem->category->name?>
                    </span>
                    <p>
                        <?php  echo "Prezzo: Euro $elem->prezzo" ?>
                    </p>



                    <?php if ($key == 'accessori'){?>
                    <p>
                        <?php echo  "Meteriale: $elem->materiale"?>
                    </p>
                    <p>
                        <?php echo "Dimensioni:M: $elem->dimensioni"?>
                    </p>

                    <?php }?>
                    <?php if ($key == 'cibo' || $key == 'cibo1'){?>
                    <p>
                        <?php echo" Peso netto: $elem->peso g"?>
                    </p>
                    <p>
                        <?php echo "Ingredienti: $elem->ingredienti"?>
                    </p>

                    <?php }?>

                    <?php if ($key == 'giocattoli'){?>
                    <p>
                        <?php echo "Dimensioni: $elem->dimensioni"?>
                    </p>
                    <p>
                        <?php echo "Caratteristiche: $elem->caratteristiche"?>
                    </p>

                    <?php }?>



                </div>




            </div>
            <?php } ?>



        </div>
    </div>



















    <!-- script Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>