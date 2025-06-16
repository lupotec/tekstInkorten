 
<?php
  echo"
  <style>
  .text-container {
    position: relative;
    max-height: 3em;
    overflow: hidden;
    transition: max-height 0.5s ease;
  }
  .text-container::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1.5em;
    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
    pointer-events: none;
    transition: opacity 0.5s ease;
  }
  .text-container.expanded {
    max-height: 1000px;
  }
  .text-container.expanded::after {
    opacity: 0;
  }
  .read-more {
    cursor: pointer;
    color: #337ab7;
    text-decoration: none;
    margin-top: 10px;
    display: inline-block;
  }
</style>";


function fadeout_text($tekst, $id = "textBox") {
    return <<<HTML
<div id="$id" class="text-container">
  $tekst
</div>
<div id="toggleBtn_$id" class="read-more">Lees meer</div>
<script>
  document.getElementById("toggleBtn_$id").onclick = function () {
    var box = document.getElementById("$id");
    var btn = document.getElementById("toggleBtn_$id");
    box.classList.toggle("expanded");
    if (box.classList.contains("expanded")) {
      btn.textContent = "Lees minder";
    } else {
      btn.textContent = "Lees meer";
    }
  };
</script>
HTML;
}

$inhoud = "Je lange tekst hihoi jio jio joi joi joik joi jok
k jio jio jipo jkl jkl jkl jkl jkl jkl jkl jkl 
jlk nkl njk njk o lnkl jkl jnkl jklkl 
 jkl jl j hjio jio joi j lange jh jo ho hion ho hoi hoier, bijvoorbeeld met <strong>HTML</strong> tags en meer inhoud...";
echo fadeout_text($inhoud);
