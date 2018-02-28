```
query getUsers {
    users {
        name
        email
    }
}
```

```
mutation updateUser {
    updatePassword(id: 1, password: "14four") {
        id
        name
        updated_at
    }
}
```

```
mutation createUser {
    createUser(name: "dave", email: "dave@14four.com" password: "14four") {
        id
        name
        updated_at
    }
}
```