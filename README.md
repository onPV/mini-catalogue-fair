# Mini-catalogue FAIR

# 📘 Mini-catalogue FAIR – Aide-mémoire de lancement

Ce projet contient un backend Symfony (API Platform) et un frontend React (Next.js), chacun dans un conteneur Docker.

---

## 🧱 BACKEND – Symfony + API Platform + PostgreSQL



▶️ Démarrer le serveur Symfony dans le conteneur

docker exec -it symfony-backend bash
php -S 0.0.0.0:8000 -t public
Cela lance le serveur PHP intégré sur le port 8000.


🌐 Accès API Platform
	Swagger UI : http://localhost:8000/api/docs
	Liste des protocoles (JSON-LD) : http://localhost:8000/api/protocols
	frontend : http://localhost:3000/


Relancer les conteneurs :
	docker compose down
	docker compose up -d --build


shell du conteneur frontend : 
    docker exec -it mini-catalogue-fair-frontend-1 sh

shell du conteneur backend :
	docker exec -it symfony-backend bash