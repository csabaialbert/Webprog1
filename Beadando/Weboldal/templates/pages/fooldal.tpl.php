<body>

        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <img src="./images/1-szazalek-slide_2022-kolykok.webp" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="./images/1-szazalek-slide_2022.webp" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="./images/Chip-ellenőrzés.webp" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="./images/ivartalanítas-slide-2019-1.webp" style="width:100%">
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>

            <script>
                let slideIndex = 1;
                setInterval(timer, 5000);
                function timer()
                {
                    if (slideIndex < 4)
                    {   
                        slideIndex = slideIndex +1;
                        currentSlide(slideIndex)
                    }
                    else
                    {
                        slideIndex = 0;
                    }
                    
                    
                }
                showSlides(slideIndex);
                // Next/previous controls
                function plusSlides(n) 
                {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) 
                {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) 
                {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) 
                    {
                        slideIndex = 1
                    }
                    if (n < 1) 
                    {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) 
                    {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) 
                    {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                }
            </script>
        <table id="kedvenc">
            <tr id="honapkutya">
                <td ><div class="image__title">A hónap kutyái</div></td>
            </tr>
            <tr id="kepek">
                <td>
						<a href="<?= ("romeo" == '/') ? '.' : ('?oldal=' . "romeo") ?>">
                        <div class="image">
                            <img class="image__img" src="./images/Romeo-01-k.jpg" alt="Romeo">
                            <div class="image__overlay image__overlay--primary">
                                <div class="image__title">Rómeó</div>
                                <p class="image__description">
                                    Középkorú, aktív, de nyugodt, kedves,
                                    közepes testalkatú kutyaÚr vagyok, aki oltott,
                                    chipes és az ivartalanításon is átesett, 
                                    vagyis "csak" egy fantasztikus Gazdi
                                    hiányzik az életéből
                                 </p>
                            </div>
                        </div>
                     </a>
                </td>
                <td>
                    <a href="<?= ("julia" == '/') ? '.' : ('?oldal=' . "julia") ?>">
                        <div class="image">
                            <img class="image__img" src="./images/Julia-01-k.jpg" alt="Julia">
                            <div class="image__overlay image__overlay--primary">
                                <div class="image__title">Júlia</div>
                                 <p class="image__description">
                                    Én 1 év körüli, kedves, nyugodt, oltott, természetesen chipes, az ivartalanításon is átesett, kutyalány vagyok,
                                    aki nagyon vágyik arra, hogy ne fecséreljen több időt el az életéből, mindenféle rácsok mögött...
                                </p>
                            </div>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
    </div>
        <div>
            <!-- Bootstrap CSS file -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </div>
        <div class="d-flex justify-content-center">
                <iframe class="aligncenter" width=600 height=350 src="https://www.youtube.com/embed/lK9_ry9FE6c" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 80px;">
                <video width="350" height="350" controls>
                <source src="./gallery/best-short-funny-dog-videos-2017-20.mp4" type="video/mp4">
                </video>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 80px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21539.176677986343!2d19.199653!3d47.560062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8cc3ebdee62adbe!2sCs%C3%B6m%C3%B6ri%20kutyamenhely!5e0!3m2!1shu!2shu!4v1651172254764!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </body>