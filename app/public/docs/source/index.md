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
        "id": 4,
        "name": "clarus",
        "email": "clarus@fai.fr",
        "created_at": "2016-11-22 12:28:43",
        "updated_at": "2016-11-22 12:28:43"
    },
    {
        "id": 5,
        "name": "Joelle Rau",
        "email": "pstark@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 6,
        "name": "Prof. Ricky Zboncak",
        "email": "trevion.orn@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 7,
        "name": "Adela Kilback",
        "email": "wschimmel@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 8,
        "name": "Millie Schowalter",
        "email": "ckuhic@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 9,
        "name": "Lucinda Ryan",
        "email": "yesenia.ward@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 10,
        "name": "Amina Kohler",
        "email": "ferry.damon@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 11,
        "name": "Jimmy Kohler",
        "email": "corwin.giovanni@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 12,
        "name": "Deangelo Kemmer",
        "email": "javonte56@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 13,
        "name": "Mr. Connor Jones IV",
        "email": "tromp.raleigh@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 14,
        "name": "Dr. Ulises Hackett",
        "email": "barrett.mosciski@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 15,
        "name": "Prof. Lela Nitzsche",
        "email": "prince.kiehn@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 16,
        "name": "Adonis Rutherford",
        "email": "deanna46@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 17,
        "name": "Macy Rodriguez",
        "email": "ocarter@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 18,
        "name": "Tad Hills",
        "email": "roger.lind@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 19,
        "name": "Dianna Zemlak",
        "email": "chasity.rodriguez@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 20,
        "name": "Johnny Ullrich",
        "email": "ebert.carolanne@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 21,
        "name": "Christine Wisoky",
        "email": "ahmad.mann@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 22,
        "name": "Dr. Edmond Schimmel",
        "email": "bkoepp@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 23,
        "name": "Eudora Roberts MD",
        "email": "roman20@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 24,
        "name": "Eloy Rohan",
        "email": "ubreitenberg@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 25,
        "name": "Christopher Roob",
        "email": "ahilpert@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 26,
        "name": "Laurel Hudson",
        "email": "hand.vada@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 27,
        "name": "Prof. Ernest Jerde",
        "email": "tcollins@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 28,
        "name": "Mrs. Leanne Leuschke",
        "email": "pstark@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 29,
        "name": "Karelle Altenwerth",
        "email": "xrau@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 30,
        "name": "Chloe Wilderman",
        "email": "schumm.hope@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 31,
        "name": "Mrs. Raegan Daniel DVM",
        "email": "rosalee.bogan@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 32,
        "name": "Adriel Kuvalis MD",
        "email": "rahsaan32@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 33,
        "name": "Mr. Clifton Fritsch",
        "email": "wilkinson.christiana@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 34,
        "name": "Aniya Lebsack DDS",
        "email": "henry.oconnell@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 35,
        "name": "Catalina Zieme",
        "email": "jkiehn@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 36,
        "name": "Zelda Crona",
        "email": "zoila46@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 37,
        "name": "Prof. Juanita Halvorson III",
        "email": "skunde@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 38,
        "name": "Dayana Abbott",
        "email": "marianne90@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 39,
        "name": "Shakira Conn",
        "email": "maxwell.dooley@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 40,
        "name": "Hubert Robel",
        "email": "lwiza@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 41,
        "name": "Abigale Lakin II",
        "email": "enolan@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 42,
        "name": "Evan Marquardt",
        "email": "amir25@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 43,
        "name": "Dr. Jayme Kozey",
        "email": "brannon80@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 44,
        "name": "Mrs. Dixie Raynor DVM",
        "email": "rodriguez.roger@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 45,
        "name": "Barney Pfannerstill",
        "email": "lgrady@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 46,
        "name": "Toney Durgan",
        "email": "xkilback@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 47,
        "name": "Prof. Trent Smitham",
        "email": "sipes.clinton@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 48,
        "name": "Fatima Ratke",
        "email": "schumm.glenda@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 49,
        "name": "Nick Homenick V",
        "email": "gerlach.maya@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 50,
        "name": "Mr. Edmond Reilly",
        "email": "sonny32@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 51,
        "name": "Prof. Santos Stokes",
        "email": "rdamore@example.com",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 52,
        "name": "Tyra Wehner",
        "email": "lvon@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 53,
        "name": "Dr. Sanford Ratke III",
        "email": "edyth21@example.net",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
    },
    {
        "id": 54,
        "name": "Mrs. Carley Hickle DVM",
        "email": "annie.upton@example.org",
        "created_at": "2016-11-22 12:29:32",
        "updated_at": "2016-11-22 12:29:32"
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
    "name": "clarus",
    "email": "clarus@fai.fr",
    "created_at": "2016-11-22 12:28:43",
    "updated_at": "2016-11-22 12:28:43"
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->
#Session
<!-- START_58c384f5feb39519d65ee06b60303903 -->
## Get Token

> Example request:

```bash
curl "http://localhost/api/session/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/session/token",
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
null
```

### HTTP Request
`GET api/session/token`

`HEAD api/session/token`


<!-- END_58c384f5feb39519d65ee06b60303903 -->
<!-- START_25f6a051eecd0d8ef44c7c46480d61d0 -->
## Authentification

> Example request:

```bash
curl "http://localhost/api/session/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/session/authenticate",
    "method": "POST",
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


<!-- END_25f6a051eecd0d8ef44c7c46480d61d0 -->
