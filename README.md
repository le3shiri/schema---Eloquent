# 📦 Livrable : Schéma & Relations Eloquent

## 🎯 Description

Livrable complet du cours **"Migrations & modèles Eloquent"** pour Laravel 11.  
Ce repository contient un blog fonctionnel avec système de tags, relations et données de test.

---

## 🚀 Démarrage Ultra-Rapide

```bash
# 1. Aller dans le projet
cd blog-aljadida

# 2. Exécuter les migrations
php artisan migrate

# 3. Peupler la base de données
php artisan db:seed

# 4. Vérifier
php artisan tinker
>>> App\Models\Article::count()
=> 5
```

**Temps total : 2 minutes ⏱️**

---

## 📂 Structure du Projet

```
sch-ma---Eloquent/
│
├── blog-aljadida/                    ← Projet Laravel principal
│   ├── app/Models/                   ← 3 modèles Eloquent
│   ├── database/migrations/          ← 3 migrations
│   ├── database/seeders/             ← Données de test
│   ├── LIVRABLE_ELOQUENT.md         ← 📘 Documentation complète
│   ├── GUIDE_VERIFICATION.md        ← ✅ Tests & validation
│   ├── AIDE_MEMOIRE.md              ← 📝 Référence rapide
│   └── DEMARRAGE_RAPIDE.md          ← ⚡ Installation express
│
└── LIVRABLE_RESUME.md               ← 📊 Résumé exécutif
```

---

## 📚 Documentation

| Document | Description | Pour Qui ? |
|----------|-------------|------------|
| **[DEMARRAGE_RAPIDE.md](blog-aljadida/DEMARRAGE_RAPIDE.md)** | Installation en 5 min | Débutants pressés |
| **[LIVRABLE_ELOQUENT.md](blog-aljadida/LIVRABLE_ELOQUENT.md)** | Tutoriel complet | Étudiants |
| **[GUIDE_VERIFICATION.md](blog-aljadida/GUIDE_VERIFICATION.md)** | 10 tests de validation | Formateurs |
| **[AIDE_MEMOIRE.md](blog-aljadida/AIDE_MEMOIRE.md)** | Référence des commandes | Tous |
| **[LIVRABLE_RESUME.md](LIVRABLE_RESUME.md)** | Vue d'ensemble | Tous |

---

## 🎓 Contenu du Livrable

### ✅ Migrations (3 fichiers)

- `create_articles_table.php` - Table des articles
- `create_tags_table.php` - Table des tags
- `create_article_tag_table.php` - Table pivot (N:N)

### ✅ Modèles Eloquent (3 modèles)

- `Article.php` - Relations : `user()`, `tags()`
- `Tag.php` - Relations : `articles()`
- `User.php` - Relations : `articles()`

### ✅ Seeder de Données

- 2 utilisateurs
- 6 tags (Laravel, PHP, JavaScript, etc.)
- 5 articles avec relations

### ✅ Documentation (5 fichiers)

- 1200+ lignes de documentation
- 50+ exemples Tinker
- 10 tests de validation

---

## 🔗 Schéma Relationnel

```
┌─────────────┐        ┌──────────────┐        ┌─────────────┐
│    users    │        │   articles   │        │    tags     │
├─────────────┤        ├──────────────┤        ├─────────────┤
│ id (PK)     │───┐    │ id (PK)      │        │ id (PK)     │
│ name        │   │    │ user_id (FK) │───┐    │ name        │
│ email       │   └───→│ title        │   │    │ slug        │
│ password    │        │ slug         │   │    └─────────────┘
└─────────────┘        │ excerpt      │   │           ↑
                       │ content      │   │           │
   1 : N               └──────────────┘   │           │
                              │           │           │
                              └───────────┼───────────┘
                                          ↓
                              ┌────────────────────┐
                              │   article_tag      │
                              ├────────────────────┤
                              │ article_id (FK)    │
                              │ tag_id (FK)        │
                              └────────────────────┘
                                    N : N
```

---

## 🎯 Objectifs Pédagogiques

✅ Créer un schéma relationnel complet  
✅ Définir les relations physiques (PK/FK)  
✅ Appliquer les contraintes d'intégrité  
✅ Générer les modèles Eloquent  
✅ Vérifier avec Tinker  

---

## 📊 Statistiques

- **Fichiers créés :** 9
- **Lignes de code :** ~500
- **Lignes de documentation :** ~1200
- **Exemples Tinker :** 50+
- **Tests :** 10 vérifications

---

## 🆘 Aide Rapide

### Problème : "Table already exists"

```bash
php artisan migrate:fresh --seed
```

### Problème : "Class 'Article' not found"

```bash
composer dump-autoload
```

### Problème : "Access denied"

Vérifiez le fichier `.env` :
```env
DB_USERNAME=root
DB_PASSWORD=votre_mot_de_passe
```

---

## 👨‍🏫 Formation

**Cours :** Laravel 11 - Eloquent ORM  
**Chapitre :** 2.1.1 - Migrations & modèles Eloquent  
**Institution :** Solicode  
**Année :** 2025  

---

## 📄 Licence

Livrable pédagogique - Usage éducatif uniquement

---

## ✨ Quick Links

- 📘 [Documentation complète](blog-aljadida/LIVRABLE_ELOQUENT.md)
- ⚡ [Démarrage rapide](blog-aljadida/DEMARRAGE_RAPIDE.md)
- ✅ [Guide de vérification](blog-aljadida/GUIDE_VERIFICATION.md)
- 📝 [Aide-mémoire](blog-aljadida/AIDE_MEMOIRE.md)

**Prêt à commencer ? → [DEMARRAGE_RAPIDE.md](blog-aljadida/DEMARRAGE_RAPIDE.md)** 🚀
