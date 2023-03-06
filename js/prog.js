$$ = (selektor) => {return document.getElementById(selektor);}

pokaż = (sekcja) => {
    $$('ŻÓŁĆ1').style.display = 'none';
    $$('ŻÓŁĆ2').style.display = 'none';
    $$(sekcja).style.display = 'block';
}