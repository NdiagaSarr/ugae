UGAE ZIP DIRECTORY STRUCTURE

/
  index.html
  about.html
  services.html
  team.html
  partners.html
  contact.html
/css
  style.css
/images
  (can remain empty for now or be created with placeholder image references in HTML files)

Each HTML file must use English and French sections with a language toggle button. All references to images will remain but the /images directory may remain empty for deployment.

-- Content for index.html --
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UGAE – Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <img src="images/logo-placeholder.png" alt="UGAE Logo" height="60">
    <button class="lang-toggle" onclick="toggleLang('en')">EN</button>
    <button class="lang-toggle" onclick="toggleLang('fr')">FR</button>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.html">About Us</a>
      <a href="services.html">Services</a>
      <a href="team.html">Team</a>
      <a href="partners.html">Partners</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>
  <main>
    <div class="lang-en">
      <h1>Universal Green Accelerator Ecosystem (UGAE PTE. LTD.)</h1>
      <p>Empowering Clean Tech Innovation in Africa and Asia-Pacific</p>
      <img src="images/banner-placeholder.jpg" alt="Clean Technology Banner" width="100%">
    </div>
    <div class="lang-fr">
      <h1>Ecosystème Universel des Accélérateurs Verts (UGAE PTE. LTD.)</h1>
      <p>Favoriser l’innovation en technologie propre Afrique et Asie-Pacifique</p>
      <img src="images/banner-placeholder.jpg" alt="Bannière Technologie Propre" width="100%">
    </div>
  </main>
  <footer>
    <p>&copy; 2025 UGAE PTE. LTD.</p>
  </footer>
  <script>
    function toggleLang(lng) {
      document.querySelector('.lang-en').style.display = (lng==='en'?'block':'none');
      document.querySelector('.lang-fr').style.display = (lng==='fr'?'block':'none');
    }
  </script>
</body>
</html>
--
-- Repeat similar bilingual structure for about.html, services.html, team.html, partners.html, contact.html. --
-- Place style.css code in /css/style.css. --