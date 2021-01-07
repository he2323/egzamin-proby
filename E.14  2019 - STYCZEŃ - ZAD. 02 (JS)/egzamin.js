const setColor = (event) => {
    const editParagraph = document.getElementById("format");
    const size = document.getElementById("prc").value;
    const family = document.getElementById("styl").value != "line" ? "italic" : "normal";
    editParagraph.style.fontStyle = family;
    editParagraph.style.fontSize = size + "%";
    editParagraph.style.color = event.target.value;
  };