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
  -
  
• JavaScript functions, arrays, events, the window object, and the document 
object
  -
  
• JavaScript and DOM (finding HTML elements and attributes, DOM 
collections, making changes to HTML elements, adding event handlers)
  -
  

3) jQuery
• What is jQuery and its advantages over JavaScript?
  - Simpler and easier to read code
  
• How to use jQuery (only those keywords shown in the slides)
  - ```$(selector:Filter).action()```

  
• selectors, filters, HTML manipulation methods
  - ```$("tagname") ``` all tag name
  - ```$("tag1, tag2")``` tag1 and tag2
  
• events
  -
  
• manipulating CSS
  -
  







DOM and intro to JavaScript study material:

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








