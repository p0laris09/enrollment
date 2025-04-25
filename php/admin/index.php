<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/wrlogo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
    <style>
        /* Reset default margin and padding */
        body {
            margin: 0;
            padding: 0;
            background-color: rgba(227, 223, 223, 1);
            font-family: 'Poppins', sans-serif;
        }

        a:hover {
            color: #0a0a0a; 
            background-color: rgba(227, 223, 223, 1); 
            border-radius: 5px;
        }

        /* Adjust container to align content beside the nav bar */
        .container {
            display: flex;
            flex-direction: row; /* Ensure content is aligned horizontally */
        }

        /* Vertical side section */
        .sidenav {
            height: cover;
            width: 250px;
            background-color: rgba(255, 255, 255, 1);
            color: rgb(0, 0, 0);
            padding: 20px;
            margin-right: 5px;
            padding-top: 30px;  
            padding-bottom: 18px;
        }

        .sidenav a {
            display: block;
            color: black;
            padding: 12px 10px ;
            text-decoration: none;
            border-radius: 0px;
            font-size: 20px;
        }

        .ident {
            display: flex;
        }

        .ident a {
            font-size: 16px;
        }

        .ident img {
            max-width: 50px;
	        height: 50px;
            padding-top: 15px;
        }

        /* Adjust horizontal sections to take up remaining space */
        .horizontal-sections {
            display: flex;
            flex-wrap: wrap; /* Allows multiple rows */
            gap: 10px;
            flex: 1; /* Allow horizontal sections to take up remaining space */
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 5px;
            overflow: hidden;
        }

        /* Individual horizontal section */
        .horizontal-section {
            width: 47.53%;/* Allow flex items to grow/shrink and set a base width of 300px */
            height: 200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            margin-right: 20px;
        }
        
        .horizontal-section2 {
            width: 99%;/* Allow flex items to grow/shrink and set a base width of 300px */
            height: fit-content;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        /* Full-width section below the rows */
        .full-width-section {
            width: 100%;
            background-color: #f9f9f9;
            margin-top: 8px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            
        }

        /* Section title styling */
        .section-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .scroll-container {
            position: relative; /* required to anchor .titlesss */
    overflow: hidden;
    cursor: grab;
    background: #f4f4f4;
    user-select: none;
    border-radius: 8px;
    padding-top: 20px;
    padding-bottom: 20px;
    
    
    }

    .scroll-track {
      display: flex;
      gap: 40px;
      padding-left: 20px;
      will-change: transform;
    }


    .scroll-track a img {
      width: auto;
      height: 170px;
      display: block;
      border-radius: 10px;
      transition: transform 0.3s ease;

    }

    .scroll-track a {
        display: inline-block; 
        line-height: 0;       
    }

    .scroll-track a img:hover {
      transform: scale(1.05);
    }

    .titlesss {
        width: 100%;
    background-size: cover;
    position: absolute;
    background: rgba(0, 0, 0, 0.2);
    color: white;
    padding-left: 10px;
    border-radius: 0px;
    font-weight: bold;
    z-index: 10;
    pointer-events: none; /* optional: allow mouse interactions to pass through */
    }

    </style>

<body>

<div class="container">
    <div class="sidenav">
        <div class="ident">
            <img src="../../images/adminpics/wrlogo.png">
            <a href="" class="Name">West Rembo Teacher's Compound Learning Center</a>
        </div>
        <a href="index.php">Dashboard</a>
        <a href="faculty.php">Faculties</a>
        <a href="students.php">Students</a>
        <a href="enrollees.php">Enrollees</a>
        <a href="news.php">News</a>
        <a href="gallery.php"> Gallery</a>
        <a href="emails.php">Emails</a>
        <a href="/index.php">Logout</a>
    </div>

        <!-- Horizontal sections (multiple rows) -->
        <div class="horizontal-sections">

            <!-- First row: Horizontal sections -->
            <div class="horizontal-section">
                <div class="titlesss">
                    <p>Faculties</p>
                  </div>
                <div class="scroll-container" id="carousel">
                    <div class="scroll-track" id="track">
                      <a href="faculty.php"><img src="../../images/adminpics/../../images/adminpics/pie-removebg-preview.jpg"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/imgchange.png"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/namechange.png"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/../../images/adminpics/pie-removebg-preview.jpg"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/imgchange.png"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/namechange.png"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/../../images/adminpics/pie-removebg-preview.jpg"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/imgchange.png"></a>
                      <a href="faculty.php"><img src="../../images/adminpics/namechange.png"></a>
                    </div>
                  </div>
            </div>

            <div class="horizontal-section">
                <div class="titlesss">
                    <p>Students</p>
                  </div>
                <div class="scroll-container" id="carousel">
                    <div class="scroll-track" id="track">
                        <a href="students.php"><img src="../../images/adminpics/students.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/population.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/male.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/female.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/studdata.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/status.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/students.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/population.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/male.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/female.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/studdata.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/status.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/students.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/population.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/male.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/female.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/studdata.png"></a>
                      <a href="students.php"><img src="../../images/adminpics/status.png"></a>
                    </div>
                  </div>
            </div>

            <!-- Second row: Horizontal sections -->
            <div class="horizontal-section2">
                <div class="titlesss">
                    <p>Enrollees</p>
                  </div>
                <div class="scroll-container" id="carousel">
                    <div class="scroll-track" id="track">
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollees.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollm.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollf.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/form.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/statusenroll.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollees.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollm.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollf.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/form.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/statusenroll.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollees.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollm.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/enrollf.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/form.png"></a>
                      <a href="enrollees.php"><img src="../../images/adminpics/statusenroll.png"></a>
                      
                    </div>
                  </div>
            </div>

            <div class="horizontal-section2">
                <div class="titlesss">
                    <p>News</p>
                  </div>
                <div class="scroll-container" id="carousel">
                    <div class="scroll-track" id="track">
                      <a href="news.php"><img src="../../images/adminpics/news.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/published.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/main.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/sub.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/news.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/published.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/main.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/sub.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/news.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/published.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/main.png"></a>
                      <a href="news.php"><img src="../../images/adminpics/sub.png"></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </body>
    <!-- Full-width section below -->
    <div class="full-width-section">
        <div class="titlesss">
            <p>Gallery</p>
          </div>
        <div class="scroll-container" id="carousel">
            <div class="scroll-track" id="track">
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
              <a href="gallery.php"><img src="../../images/adminpics/pie-removebg-preview.jpg"></a>
            </div>
          </div>
    </div>

    <script>
        // Auto-scroll and drag-to-scroll for multiple carousels
        const carousels = document.querySelectorAll('.scroll-container');

        carousels.forEach((carousel) => {
            const track = carousel.querySelector('.scroll-track');
            let autoScrollSpeed = 0.8; // pixels per frame
            let scrollPos = 8;

            function autoScroll() {
                scrollPos += autoScrollSpeed;

                const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                if (scrollPos >= maxScroll) {
                    scrollPos = 0; // Go back to start when it hits the end
                }

                carousel.scrollLeft = scrollPos;

                requestAnimationFrame(autoScroll);
            }

            autoScroll(); // start it

            // Drag to scroll
            let isDown = false;
            let startX;
            let scrollLeft;
            let isDragging = false;

            carousel.addEventListener('mousedown', (e) => {
                isDown = true;
                isDragging = false;
                startX = e.pageX - carousel.offsetLeft;
                scrollLeft = carousel.scrollLeft;
                carousel.style.cursor = 'grabbing';
            });

            carousel.addEventListener('mouseleave', () => {
                isDown = false;
                carousel.style.cursor = 'grab';
            });

            carousel.addEventListener('mouseup', (e) => {
                if (isDragging) {
                    e.preventDefault(); // stop link click if dragging
                }
                isDown = false;
                carousel.style.cursor = 'grab';
            });

            carousel.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - carousel.offsetLeft;
                const walk = (x - startX) * 2;
                if (Math.abs(walk) > 5) isDragging = true; // flag it as a drag if moved enough

                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                let newScroll = scrollLeft - walk;
                carousel.scrollLeft = Math.max(0, Math.min(newScroll, maxScroll));
                scrollPos = carousel.scrollLeft;

                document.querySelectorAll('.scroll-container a').forEach(link => {
                    link.addEventListener('click', (e) => {
                        if (isDragging) e.preventDefault();
                    });
                });
            });
        });
    </script>
</body>
</html>