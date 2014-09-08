php-user-role-design-pattern
============================

**Object Oriented Design Pattern to address Role Based User Management for PHP or any other OOP language**



You will need previous understanding about **Strategy**, **Decorator**, **Singleton** and **Factory** design pattern to understand the design. 

*I have added basic object creation in my index.php to get you started..*

Class Diagram
![Class-Diagram](https://github.com/caztial/php-user-role-design-pattern/blob/master/ClassDiagram.jpeg)


I’m still learning design patterns and I’m not 100% correct, Improvements and Enhancements are welcome. 

Sample var_dump of a Admin object
```
object(Admin)#5 (4) {
  ["admin"]=>
  string(9) "Admin Obj"
  ["user"]=>
  object(Customer)#4 (4) {
    ["customer"]=>
    string(12) "Customer Obj"
    ["user"]=>
    object(Visitor)#3 (3) {
      ["Visitor"]=>
      string(11) "Visitor Obj"
      ["communication"]=>
      object(Email)#2 (0) {
      }
      ["dbms"]=>
      object(Mysql)#1 (0) {
      }
    }
    ["communication"]=>
    object(Email)#2 (0) {
    }
    ["dbms"]=>
    object(Mysql)#1 (0) {
    }
  }
  ["communication"]=>
  object(Email)#2 (0) {
  }
  ["dbms"]=>
  object(Mysql)#1 (0) {
  }
}
```
Speical thanks to www.genmymodel.com
