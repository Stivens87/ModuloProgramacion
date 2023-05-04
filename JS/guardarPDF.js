// function exportarAPDF() {

//     const doc = new jsPDF();
    
//     var art = document.getElementById('cont_export').innerHTML;
    
//     alert(art);
//     const content = document.getElementById('cont_export').innerHTML;
    
//     doc.text(content, 10, 10);
//     doc.saveAs('texto.pdf');
//   }

document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos el click del botón
    const $boton = document.querySelector("#btnCrearPdf");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.getElementById('main').innerHTML; // <-- Aquí puedes elegir cualquier elemento del DOM
        // const $elementoParaConvertir = document.getElementById('cont_export').innerHTML;
        html2pdf()
            .set({
                margin: 1,
                filename: 'documento.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'portrait' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));
            // .finally()
            // .then(( )=>{
            //     console.log("Guardado!")
            // })
    });
});