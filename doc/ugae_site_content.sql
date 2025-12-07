-- UGAE Static Page Content for CMS (SQL Export)
CREATE DATABASE IF NOT EXISTS ugae_site_content CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ugae_site_content;

-- Pages table
CREATE TABLE pages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(50) NOT NULL UNIQUE,
  title_en VARCHAR(100) NOT NULL,
  title_fr VARCHAR(100) NOT NULL,
  content_en TEXT NOT NULL,
  content_fr TEXT NOT NULL
);

INSERT INTO pages (slug, title_en, title_fr, content_en, content_fr) VALUES
('home',
 'Home',
 'Accueil',
 '<h1>Universal Green Accelerator Ecosystem (UGAE PTE. LTD.)</h1><p>Empowering Clean Tech Innovation in Africa and Asia-Pacific</p>',
 '<h1>Ecosystème Universel des Accélérateurs Verts (UGAE PTE. LTD.)</h1><p>Favoriser l’innovation en technologie propre Afrique et Asie-Pacifique</p>'
),
('about',
 'About Us',
 'À propos',
 '<h2>About UGAE</h2><p>Established in 2025 and registered as UGAE PTE. LTD. (UEN 202518071R), UGAE is a Singapore-based intermediary for clean technology startups in emerging markets. Our phased launch begins in West Africa and expands via our Singapore hub into Asia-Pacific.</p>',
 '<h2>À propos d’UGAE</h2><p>Créé en 2025 sous le nom UGAE PTE. LTD. (UEN 202518071R), UGAE est une société singapourienne d’intermédiation pour startups en technologies propres dans les marchés émergents. Notre lancement commence en Afrique de l’Ouest puis s’étend en Asie-Pacifique depuis Singapour.</p>'
),
('services',
 'Services',
 'Nos services',
 '<ul><li>Due Diligence & Technical Assessment</li><li>ESG Compliance Support</li><li>Pre-Acceleration Programs</li><li>Digital Matchmaking Platform</li><li>Advisory & Facilitation</li></ul>',
 '<ul><li>Due Diligence et Évaluation Technique</li><li>Support Conformité ESG</li><li>Programmes de Pré-accélération</li><li>Plateforme de Mise en Relation</li><li>Conseil et Facilitation</li></ul>'
),
('team',
 'Team',
 'Équipe',
 '<p>Our leadership team brings decades of cross-continental experience in clean energy, finance, and sustainable development.</p>',
 '<p>Notre équipe de direction apporte des décennies d’expérience transcontinentale en énergie propre, finance et développement durable.</p>'
),
('partners',
 'Partners',
 'Partenaires',
 '<ul><li>New Energy Nexus</li><li>EIT InnoEnergy</li><li>Elemental Excelerator</li><li>Clean Technology Fund</li><li>Shell Foundation</li></ul>',
 '<ul><li>New Energy Nexus</li><li>EIT InnoEnergy</li><li>Elemental Excelerator</li><li>Clean Technology Fund</li><li>Shell Foundation</li></ul>'
),
('contact',
 'Contact Us',
 'Contact',
 '<p>Email: investors@ugae.org<br>Address: 160 Robinson Road, #24-09, Singapore 068914</p>',
 '<p>Email : investors@ugae.org<br>Adresse : 160 Robinson Road, #24-09, Singapore 068914</p>'
);

-- Configuration for static rendering
CREATE TABLE config (
  id INT AUTO_INCREMENT PRIMARY KEY,
  site_name VARCHAR(100) NOT NULL,
  logo_path VARCHAR(255),
  banner_path VARCHAR(255)
);

INSERT INTO config (site_name, logo_path, banner_path) VALUES
('UGAE PTE. LTD.', 'images/logo-placeholder.png', 'images/banner-placeholder.jpg');
