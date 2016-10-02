Observer Pattern
==================
- one-to-many (Subject-to-Observer) dependency between objects so that when one object changes state,
all its dependents are notified and updated automatically.

Example
---------
using Event dispatch/listen behaviour to simulate Subject/Observer 
when user subscribe newsletters, system fire an event 
all the attached listeners capture the event and handle it.  

comparison with others
----------------------
- Chain of Responsibility, Command, Mediator, and Observer, address how you can decouple senders and receivers, 
but with different trade-offs.
    - Chain of Responsibility passes a sender request along a chain of potential receivers. 
    - Command normally specifies a sender-receiver connection with a subclass.
    - Mediator has senders and receivers reference each other indirectly.
    - Observer defines a very decoupled interface that allows for multiple receivers to be configured at run-time.
- Mediator and Observer are competing patterns. The difference between them is that  
    - Observer distributes communication by introducing "observer" and "subject" objects, 
    - whereas a Mediator object encapsulates the communication between other objects. 
- We've found it easier to make reusable Observers and Subjects than to make reusable Mediators.
On the other hand, Mediator can leverage Observer for dynamically registering colleagues and communicating with them.