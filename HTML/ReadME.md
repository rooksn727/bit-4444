# Notes for BIT 4444 HTML

https://validator.w3.org/

^ This is a good validator of web standards
can validate using 2 diff methods
1. URI
2. File upload
3. direct input

The reason for the web standards is:
- Cross browser compatability
- Accessability
- Future proofing
- Search Engine Optimization (SEO)

- Simple HTML forms
    - Input types: 
        - text
        - submit and reset
        - TextArea, password
        - select checkbox
        - radio
    - Form attributes: Method, action
    - Hidden input types
- Advanced forms
    - Input types: color, date, date, month, week, time, range, email, number, url, search
    - Attributes: autofocus, placeholder, required, autocomplete
    - Elements: datalist
- Page structure elements:
    - Header, time, nav, figure and figurecaption, article, summary and details, section, aside, meter, footer, mark and wbr


## Basic Html format examples
Here is an example of the code and the format
```html
<h1>This is a header</h1>
<ul>
    <li>One </li>
    <li>Two </li>
    <li>Three </li>
    <li><a href= "https://www.google.com/">This is a link </a></li>
</ul>
```

<h1>This is a header</h1>
<ul>
    <li>One </li>
    <li>Two </li>
    <li>Three </li>
    <li><a href= "https://www.google.com/">This is a link </a></li>
</ul>

```html
This is an ordered list
<ol>
    <li>First </li>
    <li>Second </li>
    <li>Third</li>
</ol>
```

<ol>
    <li>First </li>
    <li>Second </li>
    <li>Third</li>
</ol>

## HTML Tables

```html
This is how we do a table
each tr stands for table row
and td stands for table data which is essentially a row

<table border = "1">
    <tr>
        <td><p>Row 1Cell1</p></td>
        <td><p>Row 1Cell2</p></td>
    </tr> 
    <tr>
        <td><p>Row 2 Cell1</p></td>
        <td><p>Row 2 Cell2</p></td>
    </tr> 

</table>
```
<table border = "1">
    <tr>
        <td><p>Row 1 Cell 1</p></td>
        <td><p>Row 1 Cell 2</p></td>
    </tr> 
    <tr>
        <td><p>Row 2 Cell 1</p></td>
        <td><p>Row 2 Cell 2</p></td>
    </tr> 
</table>

<br>
You can also just create a box and have it look like a quote box
br is a line break 
em is italisized text 
can also have an image in another cell

```html
<table border = "2">
    <tr>
        <td><h1>Something</h1>
            <ul>
                <li>Create tables with columns of data</li>
                <li>Can create a displat as well</li>
            </ul>
            <em>Italisized text quote about something meaningful.</em>
            <br>
            by Someone
        </td>
        <td>
            <img src = "camel.png" alt = "Camel Picture" Height = "410" width = "410">
        </td>
    </tr>
</table>
```

<table border = "2">
    <tr>
        <td><h1>Something</h1>
            <ul>
                <li>Create tables with columns of data</li>
                <li>Can create a displat as well</li>
            </ul>
            <em>Italisized text quote about something meaningful.</em>
            <br>
            by Someone
        </td>
        <td>
            <img src = "camel.png" alt = "Camel Picture" Height = "410" width = "410">
        </td>
    </tr>
</table>


Now here are a couple of other things you can do with html:

```html
<h1>Level 1 Header</h1>
<p>This is a <a href = "http://www.vt.edu">paragraph </a></p>
<p>
    <strong>This is a strong text </strong>
</p>
```

<h1>Level 1 Header</h1>
<p>This is a <a href = "http://www.vt.edu">paragraph </a></p>
<p>
    <strong>This is a strong text </strong>
</p>

You can also nest lists and change the type of list
```html
<h2 id="Level2">Level 2 Header </h2>
<ol type = "circle">
    <li>ACIS</li>
    <li>BIT
        <ul>
            <li>DSS </li>
            <li>OSM </li>
            <li>CMA</li>
        </ul>
     </li>
     <li>Departments</li>
</ol>
```

<h2 id="Level2">Level 2 Header </h2>
<ol type = "circle">
    <li>ACIS</li>
    <li>BIT
        <ul>
            <li>DSS </li>
            <li>OSM </li>
            <li>CMA</li>
        </ul>
     </li>
     <li>Departments</li>
</ol>

This makes it so that you can have a link reference on to an image

```html
<h3 id="Level 3">Level 3 Header</h3>
<a href = "https://www.google.com/">
<img src = "Hokies.jpg">
</a>
```

<h3 id="Level 3">Level 3 Header</h3>
<a href = "https://www.google.com/">
<img src = "Hokies.jpg">
</a>


Here is how you go to different html pages
the # after the name of the file goes to a header
```html
<a href = "/HW1/index.html#Level3"> Go to index </a>
```

Here is a cool implementation of a table elements such as headers and captions
- th is a table header
- it also has a footer that goes automatically to the bottom
- caption that goes at the top and middle of the table
- body, head and footer of table are thead, tbody and tfoot

```html
<table border = "1">
    <caption>BIT Student list</caption>
    <thead>
        <tr>
            <th>Student Name </th>
            <th>Gender </th>
            <th>Age</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Total:</th>
            <th>3</th>
            <th>Students</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>Male</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Jane Doe</td>
            <td>Female</td>
            <td>30</td>
        </tr>
    </tbody>
</table>
```
<table border = "1">
    <caption>BIT Student list</caption>
    <thead>
        <tr>
            <th>Student Name </th>
            <th>Gender </th>
            <th>Age</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Total:</th>
            <th>3</th>
            <th>Students</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>Male</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Jane Doe</td>
            <td>Female</td>
            <td>30</td>
        </tr>
    </tbody>
</table>

Inputs are done as such
the type can be determined
you can either leave it hidden so the user does not see it or it can be visible to the user.

```html
<input type = "hidden" name = "Something" value="25"/>

<label>Name</label>
<input name = "name" type="text" size="25"/>
```

<label>Name:</label>
<input name = "name" type="text" size="25"/>

Another cool way to format an input box is by using textarea as seen below

```html
<label>Comments:<br>
    <textarea name="Comments"
    rows="4 " cols="36">Enter Text Here</textarea>
</label>
```
<label>Comments:<br>
    <textarea name="Comments"
    rows="4 " cols="36">Enter Text Here</textarea>
</label>

Here is an example of checkboxes

```html
<strong>Things you liked</strong> <br>
<label>Site Design
    <input name="Thingsliked" type="checkbox" value="design"/>
</label>
<label>Links
    <input name="Links" type="checkbox" value="links"/>
</label>
<label>Ease of use
    <input name="Usage" type="checkbox" value="Usage"/>
</label>
<label>Images
    <input name="Img" type="checkbox" value="Img"/>
</label>
```
<strong>Things you liked</strong> <br>
<label>Site Design
    <input name="Thingsliked" type="checkbox" value="design"/>
</label>
<label>Links
    <input name="Links" type="checkbox" value="links"/>
</label>
<label>Ease of use
    <input name="Usage" type="checkbox" value="Usage"/>
</label>
<label>Images
    <input name="Img" type="checkbox" value="Img"/>
</label>


Here is an example of radio boxes!!

```html 
<strong>How did you get to our website?</strong> <br>
<label>Search Engine
    <input name="howToSite" type="radio" value="search engine" checked="checked"/>
</label>
<label>Links from another site
    <input name="howToSite" type="radio" value="other site" />
</label>
<label>Deital Website
    <input name="howToSite" type="radio" value="Main website"/>
</label>
<label>Other
    <input name="howToSite" type="radio" value="Other"/>
</label>
```

<strong>How did you get to our website?</strong> <br>
<label>Search Engine
    <input name="howToSite" type="radio" value="search engine" checked="checked"/>
</label>
<label>Links from another site
    <input name="howToSite" type="radio" value="other site" />
</label>
<label>Deital Website
    <input name="howToSite" type="radio" value="Main website"/>
</label>
<label>Other
    <input name="howToSite" type="radio" value="Other"/>
</label>



