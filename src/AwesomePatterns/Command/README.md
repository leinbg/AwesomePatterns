Command Pattern
==================
Encapsulate each command as an object
and decouples the object that invokes the operation from the one that knows how to perform it

Example
---------
File Actions are captured into classes, implemented the same interface and will be assigned by invocation,
therefore decouple the real actions and the calling client

comparison with others
----------------------
- Chain of Responsibility, Command, Mediator, and Observer, address how you can decouple senders and receivers, but with different trade-offs.
Command normally specifies a sender-receiver connection with a subclass.
- Chain of Responsibility can use Command to represent requests as objects.
- Command and Memento act as magic tokens to be passed around and invoked at a later time.
    - In Command, the token represents a request; 
    - in Memento, it represents the internal state of an object at a particular time.
    - Polymorphism is important to Command, but not to Memento because its interface is so narrow that a memento can only be passed as a value.
- Command can use Memento to maintain the state required for an undo operation.
- MacroCommands can be implemented with Composite.
- A Command that must be copied before being placed on a history list acts as a Prototype.
- Two important aspects of the Command pattern: 
    - interface separation (the invoker is isolated from the receiver),
    - time separation (stores a ready-to-go processing request that's to be stated later).