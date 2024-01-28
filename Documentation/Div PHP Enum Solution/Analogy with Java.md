You actually can switch on enums, but you can't switch on Strings until Java 7. You might consider using polymorphic method dispatch with Java enums rather than an explicit switch. Note that enums are objects in Java, not just symbols for ints like they are in C/C++. You can have a method on an enum type, then instead of writing a switch, just call the method - one line of code: done!

```java
public enum Temperature {
    HOT {
        @Override
        public void whatShouldIdo() {
            System.out.println("Drink a bear!");
        }
    },
    COLD {
        @Override
        public void whatShouldIdo() {
             System.out.println("Wear a coat!");
        }
    };

    public abstract void whatShouldIdo();
}

// ...

void aMethodSomewhere(final Temperature temperature) {
    doSomeStuff();
    temperature.whatShouldIdo(); // here is where the switch would be, now it's one line of code!
    doSomeOtherStuff();
}
```

One of the nice things about this approach is that it is simply impossible to get certain types of errors. You can't miss a switch case (you can incorrectly implement a method for a particular constant, but there's nothing that will ever totally prevent that from happening!). There's no switch "default" to worry about. Also, I've seen code that puts enum constants into arrays and then indexes into the arrays - this opens the possibility of array index out of bounds exceptions - just use the enum! Java enums are very, very powerful. Learn all that you can about them to use them effectively.

Also note if you have several enum constants that all have the same behavior for a particular method (like days of the week, in which weekend days have the same behavior and the weekdays Tuesday through Thursday also share the same behavior), you can simply gather that shared code in an enum method that is not overridden by every constant (final protected) and then call that method from the appropriate methods. So, add "final protected void commonMethod() { ... }" and then the implementation of method() in each constant would just call commonMethod().

And.... what about PHP ? This is a similar solution ...

```php
<?php

abstract class Temperature extends divengine\enum {
  public function whatShouldIdo() {}
}

class HOT extends Temperature {
  public function whatShouldIdo() {
    echo "Drink a bear!";
  }
}

class COLD extends Temperature {
  public function whatShouldIdo() {
    echo "Wear a coat!";
  }
}

// ....

function someStuff(Temperature $t) {
  $t->whatShouldIdo();
}

someStuff( new HOT() );
```