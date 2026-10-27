# Portfolio PHP + Docker

Jednoduchý PHP projekt spuštěný v Dockeru jako moje testovací a vývojové prostředí pro webové projekty.

Tento repozitář používám jako praktické cvičení pro:
- práci s **Dockerem**
- spuštění **PHP aplikace v kontejneru**
- pochopení základního lokálního vývoje webových projektů
- práci s **Git / GitHub**

---

## Co projekt obsahuje

- PHP aplikaci
- Docker konfiguraci
- Apache web server
- lokální vývojové prostředí

Projekt slouží hlavně jako moje **vývojová laboratoř**, kde si zkouším:
- jak rozběhnout PHP projekt v kontejneru
- jak funguje mapování souborů
- jak pracovat s kontejnery, logy a strukturou projektu
- jak verzovat a publikovat kód přes GitHub

---

## Použité technologie

- PHP
- Docker
- Docker Compose
- Apache
- Git
- GitHub

---

## Spuštění projektu

### 1. Naklonování repozitáře
```bash
git clone https://github.com/ZanetSabad/Portfolio-Docker-.git
cd Portfolio-Docker-
```

### 2. Spuštění v Dockeru
```bash
docker compose up -d --build
```

- Portfolio: http://localhost:8080
- WordPress: http://localhost:8081

Zastavení: `docker compose down`

### 3. Spuštění bez Dockeru (jen PHP)
```bash
php -S localhost:8000 router.php
```

Pak otevřete http://localhost:8000