# ⚡ Démarrage Rapide - 5 Minutes

Guide ultra-rapide pour installer et tester le livrable.

---

## 📋 Prérequis

- ✅ PHP 8.2+
- ✅ Composer
- ✅ MySQL / MariaDB
- ✅ Laravel 11 installé

---

## 🚀 Installation en 4 Étapes

### Étape 1 : Configuration `.env`

Vérifiez votre fichier `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Étape 2 : Créer la Base de Données

```sql
mysql -u root -p
CREATE DATABASE blog_laravel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

### Étape 3 : Migrations

```bash
php artisan migrate
```

**✅ Sortie attendue :**
```
2025_01_24_000001_create_articles_table ........ DONE
2025_01_24_000002_create_tags_table ............ DONE
2025_01_24_000003_create_article_tag_table ..... DONE
```

### Étape 4 : Seeding

```bash
php artisan db:seed
```

**✅ Sortie attendue :**
```
Database\Seeders\DatabaseSeeder ................ DONE
```

---

## ✅ Vérification Rapide (30 secondes)

```bash
php artisan tinker
```

```php
// Test 1 : Compter
App\Models\User::count();       // => 2
App\Models\Article::count();    // => 5
App\Models\Tag::count();        // => 6

// Test 2 : Relations
$user = App\Models\User::first();
$user->articles()->count();     // => 3

$article = App\Models\Article::first();
$article->tags()->count();      // => 2

// Test 3 : Données
$article->title;                // => "Introduction à Laravel 11"
$article->user->name;           // => "Ahmed El Fassi"

// Quitter
exit
```

---

## 🎉 C'est Terminé !

Si tous les tests passent, votre installation est **réussie** ! ✅

---

## 📚 Et Maintenant ?

| Document | Pour Quoi Faire ? |
|----------|-------------------|
| `LIVRABLE_ELOQUENT.md` | Comprendre la théorie complète |
| `GUIDE_VERIFICATION.md` | Tester en profondeur (10 vérifications) |
| `AIDE_MEMOIRE.md` | Référence rapide des commandes |

---

## 🆘 Problème ?

### Erreur : "Access denied for user"

```bash
# Vérifier les identifiants MySQL dans .env
DB_USERNAME=root
DB_PASSWORD=votre_mot_de_passe
```

### Erreur : "Base table or view already exists"

```bash
# Réinitialiser
php artisan migrate:fresh --seed
```

### Erreur : "Class 'Article' not found"

```bash
composer dump-autoload
```

---

## 📊 Résumé de l'Installation

```
✅ Étape 1 : Configuration .env
✅ Étape 2 : Créer la base de données
✅ Étape 3 : php artisan migrate
✅ Étape 4 : php artisan db:seed
✅ Vérification : php artisan tinker
```

**Temps total :** ~5 minutes ⏱️

---

## 🎯 Commandes Essentielles

```bash
# Réinitialiser tout
php artisan migrate:fresh --seed

# Voir les tables
php artisan tinker
>>> DB::select('SHOW TABLES');

# Compter les données
>>> App\Models\Article::count();
>>> App\Models\Tag::count();

# Quitter Tinker
>>> exit
```

---

## ✨ Données Générées

Après le seeding, vous aurez :

- **2 utilisateurs** : Ahmed El Fassi, Fatima Zahra
- **6 tags** : Laravel, PHP, JavaScript, Vue.js, Base de données, Eloquent ORM
- **5 articles** : Avec titres, slugs, contenus et relations

---

## 📝 Note Importante

Ce livrable est **prêt à l'emploi**. Tous les fichiers sont déjà créés :

- ✅ 3 migrations
- ✅ 2 modèles (Article, Tag)
- ✅ 1 modèle mis à jour (User)
- ✅ 1 seeder complet

**Vous n'avez qu'à exécuter les migrations et le seeder !**

---

**Bon code ! 🚀**
