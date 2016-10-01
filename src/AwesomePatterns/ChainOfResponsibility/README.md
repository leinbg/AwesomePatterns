Chain of Responsibility Pattern
================================
Decoupling the sender of a request to its many receivers.
Chain the receivers and pass the request along the chain, so that each can handle it separately.

Example
---------
System Health Checking requires multiple Checkers,
chain all of them together by implementing same interface and calling the next one right after current checking method 

comparison with others
----------------------
- Chain of Responsibility, Command, Mediator, and Observer, address how you can decouple senders and receivers, 
but with different trade-offs. Chain of Responsibility passes a sender request along a chain of potential receivers.
- Chain of Responsibility can use Command to represent requests as objects.
- Chain of Responsibility is often applied in conjunction with Composite. There, a component's parent can act as its successor.