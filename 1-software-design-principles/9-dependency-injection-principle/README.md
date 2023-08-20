# Dependency Injection Principle

## What is the dependency?

-   A class has a dependency on other class, if it uses an instance of this class.
-   Dependency is an object of another class that your class needs such in a method for example.
-   example: A class which accesses a logger service has a dependency on this service class.
-   classes should be independent as possible to increase the reusability and to be able to test them.
-   Dependency injection solves these "hard" dependencies.

## Problems with Hard Dependencies

-   The code is inflexible, it become harder to maintain, harder to extend and harder to reuse.
-   The code is hard to get under unit test, because we need to test other depending classes as well.

## Dependency Injection

-   It means that we inject the dependency.
-   It is a technique where one object supplies the dependencies of another object.
-   Inject the dependency means that we push an object of the class we depend on to our class from the outside. we should not instantiate the dependency using `new` from inside the our class. Instead we should take the dependency as a parameter in the constructor or via a setter method.
-   Dependency injection combined with dependency inversion principle make us should take a dependency abstraction (interface) and not a concrete dependency in constructor or setter method.

    ```php
    class Test {

      private ConnectionInterface $conn;

      public function __construct(ConnectionInterface $c) {
          $this->conn = $c;
      }
    }
    ```

-   If you want to use dependency injection, you need classes that fulfill four basic roles
    1. the service (dependency) you want to use
    2. the client that uses the service.
    3. an interface that is used by the client and implemented by the service.
    4. the injector which creates a service instance and injects it into the client.

### Injection Types

1. Constructor Injection

    - The dependencies are provided through a class constructor.

        ```php

        public function __construct(Service $s) {
            $this->service = $s;
        }

        ```

2. Setter injection

    - the client exposes a setter method that the injector uses to inject the dependency.

        ```php
        public function setService(Service $service) {
            $this->service = $service;
        }
        ```

3. interface injection

    - the dependency provides an injector method that will inject the dependency into any client passed to it.
    - clients must implement an interface that exposes a setter method that accepts the dependency.

        ```php
        interface ServiceSetter {
            public function setService(Service $s);
        }

        class Client implements ServiceSetter {
            private Service $s;

            public function setService (Service $s) {
                $this->s = $s;
            }
        }

        class Service {
            public function inject(Client $c) {
                $c->setService(this);
            }
        }
        ```
