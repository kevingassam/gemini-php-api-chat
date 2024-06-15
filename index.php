<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/google-gemini-icon.webp" type="image/x-icon">
    <title>KEV GPT</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-6 mx-auto card p-2">
                <div class="d-flex justify-content-between">
                    <h3 class="my-auto">
                        KEV GPT
                        <img src="img/Google_Gemini_logo.svg.png"
                            height="20" alt="" srcset="">
                    </h3>

                    <select name="" id="langue" class="lang">
                        <option value="Français">Fr</option>
                        <option value="Englais">En</option>
                    </select>
                </div>
                <br>
                <p class="small">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, reiciendis aliquid voluptas debitis
                    pariatur eligendi excepturi, dolores tempora facere, ad nobis. Hic, dicta! Accusantium, possimus
                    reprehenderit fugiat sapiente beatae perferendis.
                </p>
                <div class="response-main-div">
                    <div id="response"></div>
                    <div class="text-center p-5" id="loading">
                        <img src="kOnzy.gif" height="20" width="20" alt="" srcset="">
                    </div>
                </div>
                <br>
                <textarea id="text" class="form-control" placeholder="Veuillez taper du texte"></textarea>
                <button onclick="generateResponse()" class="btn w-100 btn-perso mt-2">
                    <img src="img/google-gemini-icon.webp" height="20" alt="" srcset="">
                    Generate response
                </button>
                <script src="script.js"></script>
            </div>
            <div class="p-2 text-center small auteur">
                <i>By Kevin Gassam</i>
            </div>
        </div>
    </div>
</body>

</html>