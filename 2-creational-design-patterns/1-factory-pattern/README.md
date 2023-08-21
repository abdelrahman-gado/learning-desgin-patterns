# Factory Pattern

- one of the creational patterns that handle the details of object creation.
- use it when a class needs to instantiate a subclass of another class, but doesn't know which one to use.
- creates objects without exposing the creation logic to the client (Creator) and refer to the newly created objects using a common interface (Product)

## Advantages
- Decouples the business logic of creation of a class from the actual logic of the class [Decouples implementation of the product from its use]
- you can add additional products or change the product implementation and it will not affect your Creator.
- The Creator is not tightly coupled to any ConcreteProduct.

## Disadvantages
- clients might have to subclass the Creator class just to create a particular ConcreteProduct object.

## Three Common Implementation of Factory Pattern
1. **Abstract Creator**
    - strictest implementation of the pattern.
    - the creator class is abstract.
    - you create a subclass of the creator class for each product type.
    - to use the factory method (create objects), you simply specify an instance of that type.

2. **Concrete Creator**
   - includes creating a single concrete creator class.
   -  you add implementation code to one factory method to create your product type based on a parameter passed to the method.
   -  to use the factory method (create objects), you create an instance of the creator class and invoke the factory method with an argument for your "class type"
   -  the advantage of this approach is that you do not need to create a new subclass of the abstract creator class and implement a new factory method.

3. **Static Method**
   - includes the use of a static method.
   - define a factory as a static method is a common technique called a static factory.
   - this technique is sometimes used so that you do not need to instantiate an object to make use of the create method.
   - this technique has the disadvantage that you cannot subclass and change the behavior of the create method.