# Liskov Substitution Principle (LSP)

- the principle defines that objects of a superclass can be replaceable with objects of its subclasses without breaking the application.
- requires that the objects of your subclasses to behave the same way as the objects of the superclasses.
- methods which use a superclass type must be able to work with the subclass without any issues.

- This principle tries to make the parent and child objects are substitutable by each other.

- **Problem**: When a child class inherits a parent class, then tries to add its own behaviors and override the parent's behaviors by its own behaviors, then we cannot ensure here that the child and parent are substitutable by each other.

- **Solution**: So Liskov introduces a 5 rules that we can apply to child class to ensure that the child class objects and parent class objects are substitutable.These rules are:
    1. Child function arguments must match arguments of parent.
    2. Child function return type must match parent function return type.
    3. Child pre-conditions cannot be greater than parent function pre-condition.
    4. Child function post-condition cannot be lesser than parent function post-condition.
    5. Exception thrown by child method must be the same as or inherit from an exception thrown by the parent method.

- If a base class has more functionality than a subclass might not support some of the functionality and does violate LSP.