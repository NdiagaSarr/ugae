<?php require APP . '/Views/partials/header.php'; ?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="lang-en">
                <h1>Universal Green Accelerator Ecosystem</h1>
                <p>Empowering Clean Tech Innovation in Africa and Asia-Pacific. We bridge the gap between high-growth regions and global foundations.</p>
                <div class="hero-buttons">
                    <a href="<?php echo BASE_URL; ?>/services" class="btn btn-primary">Our Services</a>
                    <a href="<?php echo BASE_URL; ?>/contact" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
            <div class="lang-fr">
                <h1>Écosystème Universel des Accélérateurs Verts</h1>
                <p>Favoriser l’innovation en technologie propre en Afrique et Asie-Pacifique. Nous faisons le lien entre les régions à forte croissance et les fondations mondiales.</p>
                <div class="hero-buttons">
                    <a href="<?php echo BASE_URL; ?>/services" class="btn btn-primary">Nos Services</a>
                    <a href="<?php echo BASE_URL; ?>/contact" class="btn btn-outline">Contactez-nous</a>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo BASE_URL; ?>/images/green-tech-hero.jpg" alt="Green Tech Architecture">
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="section-header">
            <div class="lang-en">
                <h2>About UGAE</h2>
            </div>
            <div class="lang-fr">
                <h2>À propos d'UGAE</h2>
            </div>
        </div>
        <div class="card" style="border:none; box-shadow:none; background:transparent;">
             <div class="lang-en">
                <p style="text-align:center; max-width:800px; margin:0 auto; font-size:1.1rem; color:var(--text-light);">
                    Established in 2025 and registered as UGAE PTE. LTD. (UEN 202518071R), a Singapore-based intermediary dedicated to closing the innovation and finance gap for clean technology startups.
                </p>
             </div>
             <div class="lang-fr">
                <p style="text-align:center; max-width:800px; margin:0 auto; font-size:1.1rem; color:var(--text-light);">
                    Créé en 2025 et enregistré sous le nom UGAE PTE. LTD. (UEN 202518071R), un intermédiaire basé à Singapour dédié à combler le fossé de l'innovation et du financement pour les startups de technologies propres.
                </p>
             </div>
        </div>
    </div>
</section>

<section class="section" style="background-color: var(--light-bg);">
    <div class="container">
        <div class="section-header">
            <div class="lang-en">
                <h2>Our Services</h2>
            </div>
            <div class="lang-fr">
                <h2>Nos Services</h2>
            </div>
        </div>
        <div class="card-grid">
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-file-contract"></i></div>
                <div class="lang-en">
                    <h3>Due Diligence</h3>
                    <p>Technical and regulatory evaluation for clean technology startups.</p>
                </div>
                <div class="lang-fr">
                    <h3>Due Diligence</h3>
                    <p>Évaluation technique et réglementaire pour les startups clean tech.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-leaf"></i></div>
                <div class="lang-en">
                    <h3>ESG Compliance</h3>
                    <p>Guidance to attain internationally recognized sustainability standards.</p>
                </div>
                <div class="lang-fr">
                    <h3>Conformité ESG</h3>
                    <p>Conseils pour atteindre les normes de durabilité internationalement reconnues.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-rocket"></i></div>
                <div class="lang-en">
                    <h3>Pre-Acceleration</h3>
                    <p>Structured training and capacity building to prepare for investment.</p>
                </div>
                <div class="lang-fr">
                    <h3>Pré-accélération</h3>
                    <p>Formation structurée et renforcement des capacités pour l'investissement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APP . '/Views/partials/footer.php'; ?>
