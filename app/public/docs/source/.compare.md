---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to my super sample API.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#User
<!-- START_da5727be600e4865c1b632f7745c8e91 -->
## Get all Users

> Example request:

```bash
curl "http://localhost/api/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Allen Ullrich",
        "email": "arnaldo.yost@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 2,
        "name": "Mr. Jace Bartell IV",
        "email": "dusty93@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 3,
        "name": "Neil Sporer",
        "email": "javonte.kutch@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 4,
        "name": "Jamie Hayes IV",
        "email": "kpagac@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 5,
        "name": "Kelly Beahan Sr.",
        "email": "harvey56@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 6,
        "name": "Juliet Johnson",
        "email": "ujohnson@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 7,
        "name": "Mrs. Anabelle Glover",
        "email": "cara.conn@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 8,
        "name": "Carrie Ondricka",
        "email": "bins.damon@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 9,
        "name": "Jessie Kuhlman",
        "email": "calista.kirlin@example.com",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 10,
        "name": "Virgie Abbott",
        "email": "uharvey@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 11,
        "name": "Gavin Hackett",
        "email": "pstanton@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 12,
        "name": "Valerie Friesen",
        "email": "adan81@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 13,
        "name": "Katheryn Jenkins",
        "email": "wjacobi@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 14,
        "name": "Devan Goldner",
        "email": "ykozey@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 15,
        "name": "Lempi Johns",
        "email": "constance31@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 16,
        "name": "Miss Katelin Ratke",
        "email": "pearl00@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 17,
        "name": "Bernice Cartwright",
        "email": "parker.darron@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 18,
        "name": "Norbert Cronin",
        "email": "ywolff@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 19,
        "name": "Tania Hartmann",
        "email": "ethelyn.borer@example.net",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 20,
        "name": "Lauretta Stoltenberg IV",
        "email": "winifred.gorczany@example.com",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 21,
        "name": "Oleta Fadel",
        "email": "mschaefer@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 22,
        "name": "Mr. Laverna Reynolds PhD",
        "email": "lysanne.lindgren@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 23,
        "name": "Adella Cronin",
        "email": "watson08@example.org",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 24,
        "name": "Mr. Jaime Barrows",
        "email": "hilpert.natalie@example.com",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 25,
        "name": "Foster Purdy",
        "email": "ansley.mcclure@example.com",
        "created_at": "2016-11-22 21:36:24",
        "updated_at": "2016-11-22 21:36:24"
    },
    {
        "id": 26,
        "name": "Alexane Tromp",
        "email": "hilpert.rogelio@example.org",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    },
    {
        "id": 27,
        "name": "Ottis Effertz",
        "email": "vwisoky@example.net",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    },
    {
        "id": 28,
        "name": "Isabella Nikolaus",
        "email": "tcasper@example.org",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    },
    {
        "id": 29,
        "name": "Jimmy Rowe",
        "email": "lacey.roob@example.net",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    },
    {
        "id": 30,
        "name": "Jessica Rosenbaum",
        "email": "casper.drew@example.org",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    },
    {
        "id": 32,
        "name": "theo",
        "email": "theo@fai.fr",
        "created_at": "2016-11-22 21:47:44",
        "updated_at": "2016-11-22 21:47:44"
    }
]
```

### HTTP Request
`GET api/users`

`HEAD api/users`


<!-- END_da5727be600e4865c1b632f7745c8e91 -->
<!-- START_8f99b42746e451f8dc43742e118cb47b -->
## Get specific User

> Example request:

```bash
curl "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 4,
    "name": "Jamie Hayes IV",
    "email": "kpagac@example.org",
    "created_at": "2016-11-22 21:36:24",
    "updated_at": "2016-11-22 21:36:24",
    "cars": []
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->
#Car
<!-- START_0c2d0c07b345a4735865c3a32941897b -->
## Get specific Car

> Example request:

```bash
curl "http://localhost/api/cars/{car}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cars/{car}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "user_id": 26,
    "description": "Quia odit eius veritatis a at repellat deleniti. Quo ut unde nobis. Laboriosam eum qui architecto recusandae.",
    "model": "optio",
    "manufacturer": "molestiae",
    "created_at": "2016-11-22 21:40:03",
    "updated_at": "2016-11-22 21:40:03",
    "user": {
        "id": 26,
        "name": "Alexane Tromp",
        "email": "hilpert.rogelio@example.org",
        "created_at": "2016-11-22 21:40:03",
        "updated_at": "2016-11-22 21:40:03"
    }
}
```

### HTTP Request
`GET api/cars/{car}`

`HEAD api/cars/{car}`


<!-- END_0c2d0c07b345a4735865c3a32941897b -->
<!-- START_48af790ae82208c5701318e46fb1fb10 -->
## Update specific Car

> Example request:

```bash
curl "http://localhost/api/cars/{car}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cars/{car}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/cars/{car}`

`PATCH api/cars/{car}`


<!-- END_48af790ae82208c5701318e46fb1fb10 -->
#Session
<!-- START_25f6a051eecd0d8ef44c7c46480d61d0 -->
## Authentification

> Example request:

```bash
curl "http://localhost/api/session/authenticate" \
-H "Accept: application/json" \
    -d "email"="wlakin@example.org" \
    -d "password"="debitis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/session/authenticate",
    "method": "POST",
    "data": {
        "email": "wlakin@example.org",
        "password": "debitis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/session/authenticate`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    password | string |  required  | Maximum: `255`

<!-- END_25f6a051eecd0d8ef44c7c46480d61d0 -->
