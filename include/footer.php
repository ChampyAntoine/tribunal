        <footer>
            <div class="reseaux">
                <figure>
                    <img src="" alt="">
                </figure>
                <figure>
                    <img src="" alt="">
                </figure>
                <figure>
                    <img src="" alt="">
                </figure>
            </div>
        </footer>
        <script>
            var height = window.innerHeight;
            var header = document.querySelector("header");
            var previousScroll = height;

            function scroll() {
                if (previousScroll > window.scrollY) {
                    header.classList.remove('hidden');
                } else if (window.scrollY > 150) {
                    header.classList.add('hidden');
                }
                previousScroll = window.scrollY;
            }
            
            window.onscroll = document.ontouchmove = scroll; 
        </script>
    </body>
</html>