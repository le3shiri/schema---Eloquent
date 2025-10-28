<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer des utilisateurs
        $user1 = User::factory()->create([
            'name' => 'Ahmed El Fassi',
            'email' => 'ahmed@example.com',
        ]);

        $user2 = User::factory()->create([
            'name' => 'Fatima Zahra',
            'email' => 'fatima@example.com',
        ]);

        // Créer des tags
        $tags = [
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'JavaScript', 'slug' => 'javascript'],
            ['name' => 'Vue.js', 'slug' => 'vuejs'],
            ['name' => 'Base de données', 'slug' => 'base-de-donnees'],
            ['name' => 'Eloquent ORM', 'slug' => 'eloquent-orm'],
        ];

        $createdTags = [];
        foreach ($tags as $tagData) {
            $createdTags[] = Tag::create($tagData);
        }

        // Créer des articles pour l'utilisateur 1
        $article1 = Article::create([
            'user_id' => $user1->id,
            'title' => 'Introduction à Laravel 11',
            'slug' => 'introduction-a-laravel-11',
            'excerpt' => 'Découvrez les nouvelles fonctionnalités de Laravel 11 et comment commencer votre premier projet.',
            'content' => 'Laravel 11 apporte de nombreuses améliorations et nouvelles fonctionnalités. Dans cet article, nous allons explorer les bases de ce framework PHP moderne...',
        ]);
        $article1->tags()->attach([$createdTags[0]->id, $createdTags[1]->id]);

        $article2 = Article::create([
            'user_id' => $user1->id,
            'title' => 'Eloquent ORM : Guide complet',
            'slug' => 'eloquent-orm-guide-complet',
            'excerpt' => 'Maîtrisez Eloquent ORM pour gérer vos relations de base de données avec élégance.',
            'content' => 'Eloquent est l\'ORM (Object-Relational Mapping) de Laravel. Il permet de manipuler les données de la base avec une syntaxe simple et expressive...',
        ]);
        $article2->tags()->attach([$createdTags[0]->id, $createdTags[4]->id, $createdTags[5]->id]);

        $article3 = Article::create([
            'user_id' => $user1->id,
            'title' => 'Les migrations Laravel',
            'slug' => 'les-migrations-laravel',
            'excerpt' => 'Gérez votre schéma de base de données avec les migrations versionnées.',
            'content' => 'Les migrations permettent de versionner votre base de données comme vous le faites avec Git pour votre code...',
        ]);
        $article3->tags()->attach([$createdTags[0]->id, $createdTags[4]->id]);

        // Créer des articles pour l'utilisateur 2
        $article4 = Article::create([
            'user_id' => $user2->id,
            'title' => 'Construire une API REST avec Laravel',
            'slug' => 'construire-api-rest-laravel',
            'excerpt' => 'Apprenez à créer une API RESTful robuste avec Laravel et Eloquent.',
            'content' => 'Dans ce tutoriel, nous allons construire une API REST complète en utilisant les routes API de Laravel...',
        ]);
        $article4->tags()->attach([$createdTags[0]->id, $createdTags[1]->id]);

        $article5 = Article::create([
            'user_id' => $user2->id,
            'title' => 'Vue.js et Laravel : Le duo parfait',
            'slug' => 'vuejs-laravel-duo-parfait',
            'excerpt' => 'Combinez la puissance de Laravel backend avec la réactivité de Vue.js frontend.',
            'content' => 'Laravel et Vue.js forment une combinaison parfaite pour créer des applications web modernes et réactives...',
        ]);
        $article5->tags()->attach([$createdTags[0]->id, $createdTags[2]->id, $createdTags[3]->id]);
    }
}
