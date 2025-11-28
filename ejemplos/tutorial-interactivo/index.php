<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Interactivo - SyntaxSanctuary</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1a1a1a;
            color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        h1 {
            font-family: 'Roboto Mono', monospace;
            color: #00c853;
            text-align: center;
        }
        .interactive-area {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
        }
        .form-container, .result-container {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #555;
            background-color: #333;
            color: #f0f0f0;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            background-color: #00c853;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
        }
        #rendered-output {
            border: 1px solid #555;
            padding: 20px;
            min-height: 100px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        pre {
            background-color: #000;
            padding: 15px;
            border-radius: 4px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tutorial Interactivo de SyntaxSanctuary</h1>
        <div class="interactive-area">
            <div class="form-container">
                <h2>Generador de Elementos</h2>
                <form id="element-generator-form">
                    <label for="element-type">Tipo de Elemento:</label>
                    <select id="element-type" name="element-type">
                        <option value="Tituloh1">Título H1</option>
                        <option value="H">Subtítulo H2-H6</option>
                        <option value="Parrafo">Párrafo</option>
                    </select>
                    <div id="h-level-container" style="display: none;">
                        <label for="h-level">Nivel de Subtítulo (2-6):</label>
                        <input type="number" id="h-level" name="h-level" min="2" max="6" value="2">
                    </div>
                    <label for="content">Contenido:</label>
                    <textarea id="content" name="content" rows="4">Hola Mundo!</textarea>
                    <label for="attributes">Atributos (JSON):</label>
                    <input type="text" id="attributes" name="attributes" value='{"class": "mi-clase"}'>
                    <button type="submit">Generar</button>
                </form>
            </div>
            <div class="result-container">
                <h2>Resultado</h2>
                <h3>Elemento Renderizado:</h3>
                <div id="rendered-output"></div>
                <h3>Código HTML Generado:</h3>
                <pre><code id="code-output"></code></pre>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('element-generator-form');
        const elementType = document.getElementById('element-type');
        const hLevelContainer = document.getElementById('h-level-container');
        const renderedOutput = document.getElementById('rendered-output');
        const codeOutput = document.getElementById('code-output');

        elementType.addEventListener('change', () => {
            hLevelContainer.style.display = elementType.value === 'H' ? 'block' : 'none';
        });

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            const response = await fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (result.html) {
                renderedOutput.innerHTML = result.html;
                codeOutput.textContent = result.html;
            } else if (result.error) {
                renderedOutput.innerHTML = `<p style="color: red;">${result.error}</p>`;
                codeOutput.textContent = result.error;
            }
        });
    </script>
</body>
</html>
