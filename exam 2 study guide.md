BIT4444, Winter
Test 2 Review
1. Format:

- Closed-book, closed-notes
- 20 multiple-choice/true-false questions (40%)
- 10 short answer questions (20%)
    - 2 JavaScript/jQuery/Bootstrap fill-in-the-blanks questions (20%)
    - 2 JavaScript/jQuery programming questions (20%)


4. Major Topics

1) DOM
• What is DOM
  - Document Object Model
    - Both HTML and XML are specified in DOM
    - Is an internal map of the HTML/XML document
      - the root element is still <html>
    - it allows us to access or manipulate a document's elements when writing programs (e.g., JavaScript)

• Node relations (parent, child, sibling, ancestor)
- DOM has a hierarchical tree structure
  - The top level is the document object
  - Each element name is represented by a node
  - A node that contains other nodes is called a parent node
  - A parent node can have many children, but a child node can have only one parent node 
  - Nodes that are peers are called sibling nodes
  - A node’s descendant nodes include its children, its children’s children and so on
  - A node’s ancestor nodes include its parent, its parent’s parent and so on

2) JavaScript
• Differences between JavaScript and Java
  
  - JavaScript
      - needs a browser
      - client side execution
      - HTML element used to specify JavaScript code is script
   
    - Main Differences:
      - no graphical UI
      - No read/write file access on clients
      - Not a class-based object model
      - No multithreading
      - Do not need the Java VM (needs a browser to operate)
      
• What JavaScript can do and when to use JavaScript
  - Client-side:
       Control browser features
       Modify document appearance
       Modify document content
       Store & use information about user
       Manipulate images
       React to state of browser and client system
       More

  
• Where to put JavaScript code
  - Embedded into HTML
    - can be inserted anywhere in the HTML file, including the body
    - There are no limits on how many ```<script>``` tags can be embedded in the HTML code of a web page.
    - Example: 
    ``` HTML
    <head>
      <title>JavaScriptEx</title>
      <script type="text/javascript">
            ***Where the code goes***
      </script>
    </head>
    <body>
    ```

  - Putting the JavaScript in its own local file
      - THIS IS THE BEST WAY FOR CODE REUSE
      - use of src: src = specify URL of external code source
      - use of type: type = specifies scripting language
      
Example:
```JavaScript
<head>
  <title>JavaEx</title>
  <scrpit src="inputValidator.js"
          type="text/javascript"></script>
</head>
```             
  
• JavaScript language essentials (variables, dynamic data types, operators, 
strings, control structures, input and output)
  - Valid variable names
        - Consist of letters, digits, underscores, and dollar signs
        - Do not begin with a digit
        - Not a reserved JavaScript keyword
    - JavaScript is CASE SENSITIVE
    - A var statement example: var varName=1;

  - JavaScript variables have Dynamic Data Types
           var length = 16;    //Number
           var lastname = "Johnson:;    //String
           var cars = ["Saab", "Volvo", "BMW"];    //Array
           var x = {firstname:"John", lastname:"Doe"}; //Object

  - Arithmetic Operators
           + addition
           - subtraction
           * multiplication
           / division
           % modulus (remainder)
           ++ increment
           -- decrement
          - Example
               var a=10;
               b=a++; (b=10,a=11)
               b=++a; (b=11,a==11)
               b=a--; (b=10, a=9)
               b=--a; (b=9, a=9)

  - Comparison Operators
           equal                ==    (x==y)
           strict equal        ===    (x===y)
           not equal            !=    (x!=y)
           strict not equal    !==    (x!==y)
           greater than          >    (x>y)
             (or equal)          >=    (x>=y)
           less than            <      (x<y)
             (or equal)          <=    (x<=y)
          -   Example
                 var a=3;
                 var b="3";
                 var c=(a==b);    (c=true)
                 var d=(a===b);   (d=false)
         
  - Logical Operators
           And    &&    (A<B)&&(C>D)
           Or    ||    (A<B)||(C>D)
           Not    !    !(E>F)

  - Assignment Operators
           =    x=y    same as x=y
           +=    x+=y    same as x=x+y
           -=    x-=y    x=x-y
           *=    x*=y    x=x*y
           /=    x/=y    x=x/y
    
  - Control Structures
    
               - if(condition){
                   //area when condition is true
               }
               else{
                   //area when condition is false
               };

        
               - switch(expression){
                   case n;
                       //code when case is ture
                       break;
                   ...
                   default:
                       //default code
                       break;
                   };

        
               - while(condition)
               {
                   //loop code goes here
               };

        
               - do
               {
                   //loop code goes here
               } while(condition);

        
               - for(statement 1; condition; statement 2){
                   //loop code goes here
               };

  - String Operators
      - string concatenation (+)
   
    
  - Input/Output in JavaScript
      - Output
            - window.alert() - popup message box
            - document.writeIn() or document.write()
      - Input
            - window.prompt() - input box
            - confirm() - ok/cancel box
      - Debug
            - console.log()
            - console.error()
        
  - Comment Tags
  ```
      - //JavaScript comment
      - /* Multiple line Java comment */
      - <!-- HTML comment -->
      - <!-- Multiple line HTML comment -->
  ```
   

• JavaScript functions, arrays, events, the window object, and the document 
object
  
• JavaScript and DOM (finding HTML elements and attributes, DOM 
collections, making changes to HTML elements, adding event handlers)


3. jQuery
• What is jQuery and its advantages over JavaScript?
  - Simpler and easier to read code
  
• How to use jQuery (only those keywords shown in the slides)
  - ```$(selector:Filter).action()```

  
• selectors, filters, HTML manipulation methods
  - ```$("tagname") ``` all tag name
  - ```$("tag1, tag2")``` tag1 and tag2
  
• events
  - has the same events as regular JS
  - the only difference is the format
  ```JavaScript
  $("p").event(function(){...})

  ```
  
• manipulating CSS
  - 
  

## DOM and intro to JavaScript study material:

You can use the (.) operator to access element attribute values
```HTML
<html>...
    <img id=“myImage” src=“oldpic.jpg”> ...
</html>
<script>
    var x=document.getElementById(‘myImage’);
    x.src = “newpic.jpg”;
</script>
```
### **Legacy Form Input Shortcute Accessor**
```JavaScript
var x = document.getElementsByTagName("form")[0]
x.fullName //references the fullName text input
x.address//refrences the address textarea input
```

### DOM Collections
-  groups of related objects on a page
    - images, forms, and anchors
- can access each individual item and use functions on them
    ```JavaScript
        documents.forms.length //number of forms in the page
        documents.images[1] //second image in the page
    ```
To add css classes to an element you can use the ```classList``` property which has an add property
```HTML
<!DOCTYPE html> 
<html> 
<head> 
	<style> 
		.geek { 
			background-color: green; 
			font-size: 50px; 
		} 
	</style> 
</head> 
<body> 
	<button onclick="myClass()">Try it</button> 
	<div id="gfg">Geeks for Geeks</div> 
	<script> 
		function myClass() { 
			var elem = document.getElementById("gfg"); 
			// Adding class to div element 
			elem.classList.add("geek"); 
		} 
	</script> 
</body> 
</html> 
<!--Note: This was taken from GeeksForGeeks website-->
```

_____________ documents are specified in the Document Object Model (DOM).
  - HTML and XML 
 
Which of the following statement is wrong?
  - Both JavaScript and Java can access local files 
  
A JavaScript variable name cannot have a/an _______________.
  - space 
  
What is the value of b after executing the following code?
var a = 8;
var b=++a;
  - 9 
 
What is the value of b after executing the following code?
var a = 8
var b = "2" + 8
  - "28" 
 
JavaScript is mainly used for _________________.
  - client side execution 
  
The HTML element used to specify JavaScript code is __________.
  - script 
 
JavaScript can replace CSS because it can achieve more advanced functionalities. 
  - False 
  
XML tags are case insensitive.
  - False 
 
JavaScript is case-sensitive.
  - True 

Which one of the following is not a JavaScript object that provides a rich collections of method?
  - form 
  
Which of the following keyword is used to define a JavaScript function?
  - function 
  
A JavaScript function without a name is called a _____________.
  - anonymous function 
 
In JavaScript, when we refer an array element, we use the array's name followed by the position index of the element in ____________.
  - [ ] 

Which one of the following array methods removes the last element in array and returns the removed element?
  - pop() 

In JavaScript, the window object's load event fires ________ all its children elements are loaded and all external files references are loaded.
  - after 
 
Which one of the following event registration method can register more than one event handler for the load event?
  - addEventListener("load", start, false) 
 
When the user puts the mouse cursor over an image element, the image's ___________ event will fire.
  - mouseover 
  
In JavaScript, a variable cannot be used to reference a function.
  - False 
 
In JavaScript, a function can be defined within another function.
  - True 


## Javascript and Jquery study material:

The Document Object Model provides scripting access to _________ on a web page.
  - all the elements 

In DOM, an element is a/an ____________ and an attribute is a/an ___________.
  - object, propety 

In an html page's DOM tree, a node can have _____________ child node(s) and ___________ parent node(s). 
  -  multiple, one 
  
Which of the following document methods returns a single element object?
  - getElementById() 

Given this html page:
```HTML
<html>
   ...
   <img id="myImage" src="oldpic.jpg">
   ...
</html>
```
What of the following statements can correctly access the <img> element's src attribute value?
  - document.getElementById("myImage").src 

What is the correct way to access the first <p>element in this html page?
```HTML
<html>
   ...
   <p> Monday </p>
   <p> Tuesday </p>
   <p> Wednesday </p>
   ...
</html>
```

  - ```document.getElementsByTagName("p")[0] ```
  
In the following html DOM tree, the ```<h1>``` element is the ____________ of the ```<a>``` element.
```
<html> element
|-----<head> element
|            |-----<title> element
|
|-----<body> element
             |-----<a> element
             |-----<h1> element
```
   - nextSibling 
  
 Which of the following is not a valid DOM collection?
  - tables 

Which of the following is the correct syntax for modifying the content of this ```<p>``` element?

```HTML
<html>
   <p id="newp"> content to be modified </p>
</html>
```
  - ```getElementById("newp").innerHTML = "new content" ```
 
The html node in a DOM tree is the parent or ancestor node of any HTML element within the page. 
  - True 

 jQuery is a _______________.
  - JavaScript library 
  
Which one of the following is not a core feature in jQuery?
  - storing structured data 
  
In the jQuery syntax, ```$(selector:filter).action()```, the $ sign represents _____________.
  - a jQuery object 
 
In the jQuery syntax, ```$(selector:filter).action()```, the selector is used to _____________.
  - select html elements 
   
A jQuery, ```$("p")```, selects ______________.
  - all paragraph elements 
  
A jQuery, ```$(":text")```, selects _______________.
  - all form elements with type="text" 
 
Which of the following event handlers can correctly handle a click event on an element with an id value="starter"?
  - ```$("#starter").click(function(){ ... }) ```
 
jQuery can achieve what JavaScript can do with less coding.
  - True 
   
The html ```<style>``` tag is used to reference the jQuery library.
   - False 
 
jQuery can completely separate JavaScript from HTML.
   - True 
  



  

