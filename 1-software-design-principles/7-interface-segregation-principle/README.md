# Interface Segregation Principle

- Interface = contract
- Segregation = divide up or split
- Clients should not be forced to depend upon interfaces that they do not use
- A client should not implement an interface, if it does not use a method in that interface.
- No class should be forced to implement an interface that contractually binds that class to implement methods that this class will never use.


<hr>

- If we have a multiple functionality and multiple clients that use these functionality and we put these functionality in a single interface "Fat Interface" even if some client will never use all the functionality, we must implement all to make them work, when we introduce a change in the Fat Interface, that enforce us to change the other clients to make them work.
-  The interface segregation principle avoids the design drawbacks associated with a fat interface by refactoring the interface into multiple segregated interfaces
-  each segregated interface is a "lean interface" as it only contains methods which are required for a specific client.
-  A lean interface does not mean one method per interface.