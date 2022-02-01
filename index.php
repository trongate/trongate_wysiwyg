<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1 class="container">Here is a headline</h1>
<?php
/*
<div id="trongate-editor">
    <button onclick="boldify()">B</button>
    <button onclick="italicify()">I</button>
</div>
*/
?>


<div class="container" contenteditable>




    Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis. Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.
</div>

<h2 class="container">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. In dolore illo quos labore modi asperiores dignissimos explicabo itaque, facere consequatur beatae alias libero quaerat cumque. Eaque, quasi odit rerum fuga!</h2>

<div class="container">
    Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis. Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Sit sint perferendis a totam repellendus vitae architecto sunt obcaecati doloribus deserunt, unde, molestiae maxime. Enim adipisci officiis sit. Quasi, aliquam, facilis.
</div>


<script>
var activeEl;

function boldify() {
    document.execCommand('bold');
}

function italicify() {
    document.execCommand('italic');
}

function boldifyX() {
    sel = window.getSelection();
    if (sel.rangeCount) {
        var selectedText = sel.toString();
        selectedText.style.fontWeight = "bold";
        // console.log('cheerio');
        // var replacementText = '<b>' + selectedText + '<b>';
        // range = sel.getRangeAt(0);
        // range.deleteContents();
        // range.insertNode(document.createTextNode(replacementText));


    }


}

function removeEditables() {

//need work!

// document.querySelectorAll("span[contenteditable]").forEach(function(el){
//   el.removeAttribute("contenteditable");
// })
}

function addEditor(targetEl) {

    if (document.getElementById("trongate-editor")) {
        document.getElementById("trongate-editor").remove();

        removeEditables();

    }

    var editor = document.createElement("div");

    var boldBtn = document.createElement("button");
    boldBtn.setAttribute("onclick", "boldify()");
    boldBtn.innerHTML = "B";
    editor.appendChild(boldBtn);

    var italicBtn = document.createElement("button");
    italicBtn.setAttribute("onclick", "italicify()");
    italicBtn.innerHTML = "I";
    editor.appendChild(italicBtn);


    editor.setAttribute("id", "trongate-editor");
    targetEl.setAttribute("contenteditable", "true");

    var body = document.getElementsByTagName("body")[0];
    body.append(editor);

    var rect = targetEl.getBoundingClientRect();
    var editorRect = editor.getBoundingClientRect();
    var targetYPos = (rect.top - editorRect.height) - 7;
    editor.style.top = targetYPos + 'px';
}

//selection = window.getSelection();

window.addEventListener("click", (ev) => {

    if ((ev.target.tagName == "DIV") || (ev.target.tagName == "H1") || (ev.target.tagName == "H2")) {
        activeEl = ev.target;
        addEditor(ev.target);
    }

});

</script>

<style>
body {
    margin-top: 82px;
}

.container {
    width: 96%;
    max-width: 820px;
    margin: 1em auto;
}

#trongate-editor {
    background-color: #d8dbf2;
    border: 3px solid #989787;
    display:flex;
    flex-direction: row;
    padding: 4px;
    width: 96%;
    margin: 0 auto;
    max-width: 820px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;

    -webkit-box-shadow: 2px 3px 13px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 2px 3px 13px 0px rgba(0,0,0,0.75);
    box-shadow: 2px 3px 13px 0px rgba(0,0,0,0.75);

}

#trongate-editor button {
    font-family: Georgia;
    font-size: 18px;
    margin-right:4px;
    min-width: 2em;
    font-weight: bold;
}

h1, h2 {
    margin: 0 auto!important;
    padding:0;
}
</style>

</body>
</html>