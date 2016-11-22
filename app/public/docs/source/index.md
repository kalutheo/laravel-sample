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
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "elyse48@example.net",
        "name": "Prof. Bernardo Marquardt"
    },
    {
        "id": 2,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "mona34@example.net",
        "name": "Katlynn Wisoky"
    },
    {
        "id": 3,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "eleonore.kshlerin@example.com",
        "name": "Prof. Tatum Stokes DVM"
    },
    {
        "id": 4,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "madison.brown@example.net",
        "name": "Rodrick Littel"
    },
    {
        "id": 5,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "monahan.dimitri@example.com",
        "name": "Claudia Altenwerth"
    },
    {
        "id": 6,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "dagmar.wunsch@example.com",
        "name": "Mr. Hudson Murray"
    },
    {
        "id": 7,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "adams.marlon@example.com",
        "name": "Dora Waters"
    },
    {
        "id": 8,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "clarissa.boyer@example.net",
        "name": "Prof. Wade Lowe"
    },
    {
        "id": 9,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "darryl.leannon@example.com",
        "name": "Tevin Fisher"
    },
    {
        "id": 10,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "hilbert95@example.net",
        "name": "Jeff Marvin"
    },
    {
        "id": 11,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "brad11@example.com",
        "name": "Mr. Edd Hoppe"
    },
    {
        "id": 12,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "knitzsche@example.net",
        "name": "Logan Wilkinson"
    },
    {
        "id": 13,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "jeromy65@example.com",
        "name": "Shanelle Labadie DVM"
    },
    {
        "id": 14,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "jacobi.rosario@example.org",
        "name": "Prof. Wiley Skiles"
    },
    {
        "id": 15,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "adriel.labadie@example.net",
        "name": "Mrs. Gabrielle Runte DDS"
    },
    {
        "id": 16,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "feest.bert@example.com",
        "name": "Teagan McGlynn"
    },
    {
        "id": 17,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "ibailey@example.com",
        "name": "Prof. Felipa Simonis"
    },
    {
        "id": 18,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "dwight.stroman@example.com",
        "name": "Nayeli Bode"
    },
    {
        "id": 19,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "zernser@example.net",
        "name": "Jaylan Lubowitz"
    },
    {
        "id": 20,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "uherzog@example.org",
        "name": "Prof. Annie Christiansen III"
    },
    {
        "id": 21,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "gusikowski.marco@example.org",
        "name": "Adah Kuphal IV"
    },
    {
        "id": 22,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "bridgette09@example.com",
        "name": "Mrs. Beth Rath"
    },
    {
        "id": 23,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "maximillia.jenkins@example.org",
        "name": "Prof. Anika Berge"
    },
    {
        "id": 24,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "estrella.padberg@example.net",
        "name": "Edwina Hettinger"
    },
    {
        "id": 25,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "cristobal69@example.org",
        "name": "Mr. Sammy Ledner DDS"
    },
    {
        "id": 26,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "miller92@example.org",
        "name": "Lynn Thiel"
    },
    {
        "id": 27,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "dangelo39@example.org",
        "name": "Glennie Quitzon"
    },
    {
        "id": 28,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "morissette.giovani@example.net",
        "name": "Fausto Gaylord"
    },
    {
        "id": 29,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "ike52@example.com",
        "name": "Mrs. Kaycee Kunze"
    },
    {
        "id": 30,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "haley.raquel@example.com",
        "name": "Jeffery Boyer I"
    },
    {
        "id": 31,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "oconner.maude@example.net",
        "name": "Jaylin Bahringer"
    },
    {
        "id": 32,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "leopoldo.senger@example.net",
        "name": "Arielle Treutel"
    },
    {
        "id": 33,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "angeline.murazik@example.net",
        "name": "Randy Oberbrunner"
    },
    {
        "id": 34,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "kemmer.reese@example.com",
        "name": "Camilla Bins Jr."
    },
    {
        "id": 35,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "goyette.seamus@example.net",
        "name": "Edna Purdy"
    },
    {
        "id": 36,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "rene67@example.net",
        "name": "Reagan Keeling"
    },
    {
        "id": 37,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "jerrold.cartwright@example.net",
        "name": "Mossie Balistreri"
    },
    {
        "id": 38,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "waelchi.yasmeen@example.com",
        "name": "Mr. Maximus Brekke"
    },
    {
        "id": 39,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "ereichel@example.com",
        "name": "Aron Pacocha"
    },
    {
        "id": 40,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "bcole@example.org",
        "name": "Libbie Schulist"
    },
    {
        "id": 41,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "carmella.sanford@example.com",
        "name": "Dr. Kennedy Bednar"
    },
    {
        "id": 42,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "kmurray@example.org",
        "name": "Prof. Libby Murazik"
    },
    {
        "id": 43,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "brenda05@example.com",
        "name": "Viva Corkery"
    },
    {
        "id": 44,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "dubuque.gilberto@example.org",
        "name": "Ibrahim Daugherty"
    },
    {
        "id": 45,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "durgan.neal@example.net",
        "name": "Vaughn VonRueden Jr."
    },
    {
        "id": 46,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "atillman@example.com",
        "name": "Walker Kuhn"
    },
    {
        "id": 47,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "corine24@example.com",
        "name": "Prof. Dalton Dickens"
    },
    {
        "id": 48,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "kassandra37@example.net",
        "name": "Ms. Luisa Roob"
    },
    {
        "id": 49,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "sigmund.bernhard@example.com",
        "name": "Mr. Amari Hettinger PhD"
    },
    {
        "id": 50,
        "created_at": "2016-11-22 19:43:39",
        "updated_at": "2016-11-22 19:43:39",
        "email": "streich.joyce@example.org",
        "name": "Heloise Hartmann"
    },
    {
        "id": 51,
        "created_at": "2016-11-22 19:44:13",
        "updated_at": "2016-11-22 19:44:13",
        "email": "clarus@fai.fr",
        "name": "clarus"
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
    "created_at": "2016-11-22 19:43:39",
    "updated_at": "2016-11-22 19:43:39",
    "email": "madison.brown@example.net",
    "name": "Rodrick Littel"
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->
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
