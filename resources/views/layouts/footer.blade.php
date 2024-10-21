<script>
  AOS.init();
</script>
<script>
    $(".sidebaricon").on("click",function(){
   
        $('#sidebarid').toggleClass('visible');
        $("#idoverlay").toggleClass('sideoverlay');
       

    })
    $("#cross").on("click",function(){
        $('#sidebarid').toggleClass('visible');
        $("#idoverlay").toggleClass('sideoverlay');

    })
    document.querySelectorAll('.link').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all links
            document.querySelectorAll('.link').forEach(l => l.classList.remove('active'));
            // Add active class to the clicked link
            this.classList.add('active');
        });
    });
    document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                $('#sidebarid').toggleClass('visible');
                $("#idoverlay").toggleClass('sideoverlay');
                const target = document.querySelector(this.getAttribute('data-target'));
                if (target) {
                    // Calculate the offset position
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - 100; // Adjust 100px as needed
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth' // Smooth scroll
                    });
                }
            });
        });
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>