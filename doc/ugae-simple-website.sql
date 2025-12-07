-- UGAE PTE. LTD. Simple Corporate Website (SQL Export)
-- MySQL format. Includes page structure, English content, and basic team and service listings.

CREATE DATABASE IF NOT EXISTS ugae_website CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ugae_website;

-- Main company info
CREATE TABLE company_info (
  id INT PRIMARY KEY AUTO_INCREMENT,
  company_name VARCHAR(255),
  uen VARCHAR(50),
  incorporation_date DATE,
  address VARCHAR(255),
  status VARCHAR(50),
  mission TEXT
);

INSERT INTO company_info (company_name, uen, incorporation_date, address, status, mission) VALUES
('Universal Green Accelerator Ecosystem (UGAE PTE. LTD.)', '202518071R', '2025-04-25', '160 Robinson Road, #24-09, Singapore 068914', 'Live Company',
'UGAE bridges clean technology innovators in high-growth regions with global foundations, accelerating the adoption of sustainable solutions through strategic intermediation, compliance, and capacity building.');

-- Simple pages structure
CREATE TABLE pages (
  id INT PRIMARY KEY AUTO_INCREMENT,
  slug VARCHAR(50) UNIQUE,
  title VARCHAR(100),
  content TEXT
);

INSERT INTO pages (slug, title, content) VALUES
('home', 'Home', 'Welcome to Universal Green Accelerator Ecosystem (UGAE). Empowering clean energy innovation across Africa and Asia-Pacific, with the first bridge to global investors and foundations.'),
('about', 'About Us', 'UGAE PTE. LTD. is a Singapore-based company founded in 2025, dedicated to closing the innovation and finance gap for clean technology startups in emerging markets. Our phased rollout starts in West Africa and expands across Asia-Pacific.'),
('services', 'Our Services', 'We offer due diligence, ESG compliance, pre-acceleration programs, digital matchmaking, advisory and facilitation for clean energy and clean technology ventures.'),
('team', 'Our Team', 'Our leadership brings decades of cross-continental experience in finance, technology, and sustainable project development.'),
('partners', 'Partners', 'UGAE partners with global foundations such as New Energy Nexus, EIT InnoEnergy, international DFIs, and regional accelerators to maximize impact.'),
('contact', 'Contact Us', 'For partnerships and opportunities, contact us at investors@ugae.org. Visit our registered office at 160 Robinson Road, #24-09, Singapore 068914.');

-- Team table
CREATE TABLE team (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  role VARCHAR(100),
  nationality VARCHAR(50),
  bio TEXT
);

INSERT INTO team (name, role, nationality, bio) VALUES
('Garcia Baltanas Johnny-Akim', 'Director & Shareholder', 'Spanish', 'Cross-continent entrepreneur with clean energy and emerging market experience.'),
('Baruela Mila Reyes', 'Director & Secretary', 'Filipino', 'Clean tech project governance and operational leadership.'),
('Velisarios Constantinos Kattoulas', 'Secretary', 'British', 'Compliance, institutional liaison, and Asia regional integration.');

-- Services table
CREATE TABLE services (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  summary TEXT
);

INSERT INTO services (name, summary) VALUES
('Due Diligence', 'Technical and regulatory evaluation for clean technology startups.'),
('ESG Compliance', 'Guidance and support to attain internationally recognized sustainability standards.'),
('Pre-Acceleration', 'Structured training and capacity building to prepare startups for investment.'),
('Digital Platform', 'Online pipeline, matchmaking, and impact tracking between startups and funders.'),
('Advisory & Facilitation', 'Strategic support on partnerships, market entry, and growth.');

-- Partners table
CREATE TABLE partners (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  focus_area VARCHAR(100),
  relationship VARCHAR(100)
);

INSERT INTO partners (name, focus_area, relationship) VALUES
('New Energy Nexus', 'Clean energy acceleration', 'Strategic partner and co-investor'),
('EIT InnoEnergy', 'EU clean tech platform', 'Technology and market transfer'),
('Elemental Excelerator', 'Asia-Pacific scaling', 'Foundation network'),
('Shell Foundation', 'Inclusive green energy', 'Funding and program partner');

-- Contact info
CREATE TABLE contact (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(100),
  address VARCHAR(255),
  website VARCHAR(100)
);

INSERT INTO contact (email, address, website) VALUES
('investors@ugae.org', '160 Robinson Road, #24-09, Singapore 068914', 'www.ugae.org');

-- End of export