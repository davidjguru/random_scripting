## Context

At first, we have done our first Drupal module, a basic model "Hello World" and now we're going to create a second version over the former Hello World Module for Drupal 8.

I want my users to be greeted a bit more dynamically, depending on the time of day, and that will increase the complexity, and I will want this greeting to be done elsewhere also (as, it turns out, I will do), and there is no
Now we're going to delegate the logic of constructing the greeting to a service and use that service in our Controller to simply output the greeting in a Drupal page.

## What is a service?

A service is an object that gets instantiated by a Service Container and is used to handle
operations in a reusable way, for example, performing calculations and interacting with the
database, an external API, or any number of things. Moreover, it can take dependencies
(other services) and use them to help out. Services are a core part of the dependency
injection (DI) principle that is commonly used in modern PHP applications and in Drupal
8.

I want my greetings to be more dynamic, that is, I want the salutation to depend on the time of day. So, we will create a ( HelloWorldSalutation ) class that is responsible for doing that and place it in the /src folder (or module’s namespace root).
