# Singleton Pattern

- ensures a class only has one instance, and provide a global point of access to it.
- we are taking a class and letting it manage a single instance of itself and prevent any other class from creating a new instance of itself.
- To get an instance, you have got to go through the class itself.

## Advantages
- Because the singleton class encapsulates its sol instance, it can have strict control over how and when clients access it.
- reduced name space.
- makes it easy to change your mind and allow more than one instance.


## Disadvantages
- might cause issues for writing testable code if the object and the methods associated with it are so tightly coupled that it becomes impossible to test without writing a fully-functional class dedicated to the singleton.
- singleton create hidden dependencies.

## Notes
- To ensure that this is the only way to instantiate an object of this type, you should define the constructor of this class to be protected or private.

## Singleton vs Dependency Injection

### When to use DI over Singleton?
- when you want your software to be under unit test. It is much easier to write unit tests for your code when using DI.
- when you want to avoid using statics
- when you have a non-stable dependency.

### When to use a Singleton over DI?
- ambient dependencies -> meaning that it is used by many classes and/or multiple layers.
- like a logger service.

## Implementation Details
- To implement the singleton pattern, there are different approaches but all of them have the following common concepts:
  - private constructor to restrict instantiation of the class from other classes.
  - private static variable of the same class that is the only instance of the class.
  - public static method that return the instance of the class.

- There are 5 approaches when implementing the singleton:

1. Lazy evaluation approach
   - it is not multi-thread safe
   - use this approach if you are not worried about multiple threads.

2. Synchronized approach
   - thread safe
   - use when performance is not critical to your application, but it is multi-threaded.
   - straightforward and safe. 

3. Double-check locking principle approach
   - thread safe
   - increase performance from the synchronized approach.

4. Eager evaluation approach
    - if your app always creates and uses an instance of singleton
    - does not use a lot of resources
    - thread safe
    - the instance is created even though client application might not be using it.
     - If your singleton class is not using a lot of resources.

5. Bill Puagh approach
   -  thread safe
   -  high performance
   -  ensures that the instance is only created if a client needs it.
   -  create singleton class using inner static helper class.