--TEST--
ReflectionClass::__toString() - verify 'inherits', 'overwrites' and 'prototype' parts of method representation with private methods
--CREDITS--
Robin Fernandes <robinf@php.net>
Steve Seear <stevseea@php.net>
--FILE--
<?php
Class A {
    private function f() {}
}
Class B extends A {
    private function f() {}
}
Class C extends B {

}
Class D extends C {
    private function f() {}
}
foreach (array('A', 'B', 'C', 'D') as $class) {
    echo "\n\n----( Reflection class $class: )----\n";
    $rc = new ReflectionClass($class);
    echo $rc;
}

?>
--EXPECTF--
----( Reflection class A: )----
Class [ <user> class A ] {
  @@ %s 2-4

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <user> private method f ] {
      @@ %s 3 - 3
    }
  }
}


----( Reflection class B: )----
Class [ <user> class B extends A ] {
  @@ %s 5-7

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <user> private method f ] {
      @@ %s 6 - 6
    }
  }
}


----( Reflection class C: )----
Class [ <user> class C extends B ] {
  @@ %s 8-10

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}


----( Reflection class D: )----
Class [ <user> class D extends C ] {
  @@ %s 11-13

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <user> private method f ] {
      @@ %s 12 - 12
    }
  }
}
