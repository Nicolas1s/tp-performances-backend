Vous pouvez utiliser ce [GSheets](https://docs.google.com/spreadsheets/d/13Hw27U3CsoWGKJ-qDAunW9Kcmqe9ng8FROmZaLROU5c/copy?usp=sharing) pour suivre l'évolution de l'amélioration de vos performances au cours du TP 

## Question 2 : Utilisation Server Timing API

**Temps de chargement initial de la page** : TEMPS

**Choix des méthodes à analyser** :

- `METHOD_1` TEMPS
getMetas; dur= 3,00 s 
- `METHOD_2` TEMPS
getReviews; dur= 7,94 s
- `METHOD_3` TEMPS
getCheapestRoom; dur= 14,52 s



## Question 3 : Réduction du nombre de connexions PDO

**Temps de chargement de la page** : TEMPS

**Temps consommé par `getDB()`** 

- **Avant** TEMPS
getDB; dur= 1,28 s
- **Après** TEMPS
getDB; dur= 6,11 ms

une amélioration d'environ 10 fois plus rapide

## Question 4 : Délégation des opérations de filtrage à la base de données

**Temps de chargement globaux** 

- **Avant** TEMPS
dur = 28.28 s

- **Après** TEMPS
dur = 29.5 s


#### Amélioration de la méthode `METHOD` et donc de la méthode `METHOD` :

- **Avant** TEMPS

```sql
-- REQ SQL DE BASE
getMeta = SELECT * FROM wp_usermeta

```

- **Après** TEMPS

```sql
-- NOUVELLE REQ SQL
SELECT

umeta_id AS metaid,
user_id AS userid,
meta_key AS metakey,
metal_value AS metalvalue

FROM
    wp_usermeta AS user

    INNER JOIN tp.wp_usermeta AS latData
        ON latData.user_id = user.ID AND latData.meta_key = 'geo_lat'
        
    INNER JOIN tp.wp_usermeta AS lngData 
        ON lngData.user_id = user.ID AND lngData.meta_key = 'geo_lng' 

```



#### Amélioration de la méthode `METHOD` :

- **Avant** TEMPS

```sql
-- REQ SQL DE BASE
getReviews = SELECT * FROM wp_posts, wp_postmeta WHERE wp_posts.post_author = :hotelId AND wp_posts.ID = wp_postmeta.post_id AND meta_key = 'rating' AND post_type = 'review'

```

- **Après** TEMPS

```sql
-- NOUVELLE REQ SQL
SELECT

```



#### Amélioration de la méthode `METHOD` :

- **Avant** TEMPS

```sql
-- REQ SQL DE BASE
getCheapestRoom = SELECT * FROM wp_posts WHERE post_author = :hotelId AND post_type = 'room'

```

- **Après** TEMPS

```sql
-- NOUVELLE REQ SQL
SELECT

```



## Question 5 : Réduction du nombre de requêtes SQL pour `METHOD`

|                              | **Avant** | **Après** |
|------------------------------|-----------|-----------|
| Nombre d'appels de `getDB()` | NOMBRE    | NOMBRE    |
 | Temps de `METHOD`            | TEMPS     | TEMPS     |

## Question 6 : Création d'un service basé sur une seule requête SQL

|                              | **Avant** | **Après** |
|------------------------------|-----------|-----------|
| Nombre d'appels de `getDB()` | NOMBRE    | NOMBRE    |
| Temps de chargement global   | TEMPS     | TEMPS     |

**Requête SQL**

```SQL
-- GIGA REQUÊTE
-- INDENTATION PROPRE ET COMMENTAIRES SERONT APPRÉCIÉS MERCI !
```

## Question 7 : ajout d'indexes SQL

**Indexes ajoutés**

- `TABLE` : `COLONNES`
- `TABLE` : `COLONNES`
- `TABLE` : `COLONNES`

**Requête SQL d'ajout des indexes** 

```sql
-- REQ SQL CREATION INDEXES
```

| Temps de chargement de la page | Sans filtre | Avec filtres |
|--------------------------------|-------------|--------------|
| `UnoptimizedService`           | TEMPS       | TEMPS        |
| `OneRequestService`            | TEMPS       | TEMPS        |
[Filtres à utiliser pour mesurer le temps de chargement](http://localhost/?types%5B%5D=Maison&types%5B%5D=Appartement&price%5Bmin%5D=200&price%5Bmax%5D=230&surface%5Bmin%5D=130&surface%5Bmax%5D=150&rooms=5&bathRooms=5&lat=46.988708&lng=3.160778&search=Nevers&distance=30)




## Question 8 : restructuration des tables

**Temps de chargement de la page**

| Temps de chargement de la page | Sans filtre | Avec filtres |
|--------------------------------|-------------|--------------|
| `OneRequestService`            | TEMPS       | TEMPS        |
| `ReworkedHotelService`         | TEMPS       | TEMPS        |

[Filtres à utiliser pour mesurer le temps de chargement](http://localhost/?types%5B%5D=Maison&types%5B%5D=Appartement&price%5Bmin%5D=200&price%5Bmax%5D=230&surface%5Bmin%5D=130&surface%5Bmax%5D=150&rooms=5&bathRooms=5&lat=46.988708&lng=3.160778&search=Nevers&distance=30)

### Table `hotels` (200 lignes)

```SQL
-- REQ SQL CREATION TABLE
```

```SQL
-- REQ SQL INSERTION DONNÉES DANS LA TABLE
```

### Table `rooms` (1 200 lignes)

```SQL
-- REQ SQL CREATION TABLE
```

```SQL
-- REQ SQL INSERTION DONNÉES DANS LA TABLE
```

### Table `reviews` (19 700 lignes)

```SQL
-- REQ SQL CREATION TABLE
```

```SQL
-- REQ SQL INSERTION DONNÉES DANS LA TABLE
```


## Question 13 : Implémentation d'un cache Redis

**Temps de chargement de la page**

| Sans Cache | Avec Cache |
|------------|------------|
| TEMPS      | TEMPS      |
[URL pour ignorer le cache sur localhost](http://localhost?skip_cache)

## Question 14 : Compression GZIP

**Comparaison des poids de fichier avec et sans compression GZIP**

|                       | Sans  | Avec  |
|-----------------------|-------|-------|
| Total des fichiers JS | POIDS | POIDS |
| `lodash.js`           | POIDS | POIDS |

## Question 15 : Cache HTTP fichiers statiques

**Poids transféré de la page**

- **Avant** : POIDS
- **Après** : POIDS

## Question 17 : Cache NGINX

**Temps de chargement cache FastCGI**

- **Avant** : TEMPS
- **Après** : TEMPS

#### Que se passe-t-il si on actualise la page après avoir coupé la base de données ?

REPONSE

#### Pourquoi ?

REPONSE
