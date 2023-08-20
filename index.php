<?php require_once 'partials/head.php';?>

        <main>
            <h2 class="uvod">Vítejte na mé stránce! Specializuji se na tetování obočí a aplikaci umělých řas přímo v pohodlí mého domova. Prohlédni si mé práce. Těším se na spolupráci!</h2>
            <br>
            <!-- Miniatury fotek -->
            <img class="preview" src="img/oboci1.jpg" onclick="openModal();currentSlide(1)" alt="Obočí 1">
            <img class="preview" src="img/oboci2.jpg" onclick="openModal();currentSlide(2)" alt="Obočí 2">
            <img class="preview" src="img/oboci3.jpg" onclick="openModal();currentSlide(3)" alt="Obočí 3">
            <img class="preview" src="img/oboci1.jpg" onclick="openModal();currentSlide(1)" alt="Obočí 1">
            <img class="preview" src="img/oboci2.jpg" onclick="openModal();currentSlide(2)" alt="Obočí 2">
            <img class="preview" src="img/oboci3.jpg" onclick="openModal();currentSlide(3)" alt="Obočí 3">
            <br>
            <!-- Modální okno -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                    <div class="mySlides">
                        <img src="img/oboci1.jpg" alt="Obočí 1" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="img/oboci2.jpg" alt="Obočí 2" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="img/oboci3.jpg" alt="Obočí 3" style="width:100%">
                    </div>
                    <button class="next" onclick="plusSlides(1)">&#10095;</button>
                </div>
            </div>
        </main>
        <?php require_once 'partials/footer.php';?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
