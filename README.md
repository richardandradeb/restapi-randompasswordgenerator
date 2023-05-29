# restapi-randompasswordgenerator
Simple PHP random password generator using Object Oriented Programming (OPP)

To use this API, all you need to do is to make a GET request to the server, it will return a random generated password as well as an error status (true or false). If you use any request method other than GET, the API will return an error status as TRUE and no password will be generated.

There are two get params you can define in order to change the length or the keyspace of your password, ?length and ?keyspace

In Length param you can define any number going from 6 to 64. In Keyspace param you can define any set of characters you want EXCEPT spaces.

Of course if you don't want to define any param, the API will use the standard defined params as shown bellow:

```
Length = 8
Keyspace = 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
```
After making a GET request to the API, it will return a JSON as follows the example:
```
{ "password": "KTQeP5lB", "error": "false" }
```
