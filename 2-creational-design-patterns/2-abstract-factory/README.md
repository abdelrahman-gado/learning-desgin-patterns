# Abstract Factory Pattern

- The abstract factory provides an interface for creating families of related or dependent objects without specifying concrete classes. It is a "factory of factories".
- It is a super factory that creates factories.
- there is often one concrete class implemented for each family.

## When to use this pattern?
- when a system should be independent of how its products are created, composed, and represented.
- when you need to deal with multiple factories.
- when the problem domain has different families of objects present and each family is used under different circumstances.
- when a family of related product objects is designed to be used together, and you need to enforce this constraint.

## Advantages
- isolates the clients from concrete implementation classes.
- makes exchanging product family easy.
- can support a complete family of products.

## Disadvantage
- supporting new kinds of products is difficult.

## Relationship to the factory method
- the abstract factory delegates the responsibility of object instantiation to another object via composition.
- provides an abstract type for creating a family of products.


- Factory Method relies on inheritance
  - object creation is delegated to subclasses, which implement the factory method to create objects.

- Abstract Factory relies on object composition.
  - object creation is implemented in methods exposed in the factory interface.

- the intent of factory is to allow a class to defer instantiation to its subclass.

- the intent of abstract factory is to create families of related objects without having to depend on their concrete classes.

## Tips for implementation
- an application typically needs only one instance of a ConcreteFactory per product family.
- AbstractFactory only declares an interface for creating products.
- up to ConcreteProduct subclasses to actually create them.
- most common way to do this is to define a factory method for each product.
- concrete factory will specify its products by overriding the factory method for each.
- requires a new concrete factory subclass for each product family, even if the product family differ slightly.