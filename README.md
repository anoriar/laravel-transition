## Install project
make install

## API

Mutation for creating short url:
```
POST http://10.0.4.1/graphql
 mutation {
     generateShortUrl(long_url:"https://10.0.4.1/t222ewf6111")
 }
```

Get all transitions:

```
POST http://10.0.4.1/graphql
{
    transitions {
        long_url
        token
        clicks
    }
}
```

To redirect to a long url by token, try this:
```
GET http://10.0.4.1/wEz6mAm
```
