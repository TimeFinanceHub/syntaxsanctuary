# syntaxsanctuary

# 🏷️ Gestión de Títulos HTML: `<h1>` Único por Página

Es una **práctica recomendada (SEO y Accesibilidad)** limitar tus páginas web a **un solo título principal (`<h1>`)** por documento. Esto asegura una estructura semántica clara, ayudando a los motores de búsqueda y a las tecnologías de asistencia a entender el tema central de la página.

Para hacer cumplir esta regla, he creado dos clases PHP distintas dentro de este paquete:

---

## 🏗️ Clases para la Creación de Títulos

Hemos separado la responsabilidad de crear el título principal de los subtítulos.

### 1. `TituloH1` (Para el Título Principal)

Esta clase está **diseñada exclusivamente** para generar títulos de nivel 1 (`<h1>`).

* **Propósito:** Garantizar que solo exista un `<h1>` principal en el *output* de la página al usar esta clase.

### 2. `H` (Para los Subtítulos)

Esta clase maneja todos los títulos secundarios, desde el nivel 2 hasta el 6.

* **Propósito:** Permite crear `<h2>`, `<h3>`, `<h4>`, `<h5>`, y `<h6>`, asegurando que mantienes una jerarquía de contenido adecuada **sin introducir accidentalmente** un segundo `<h1>`.

---

De esta manera, facilitamos a los desarrolladores la creación de contenido **estructuralmente correcto**, evitando tener más de un título principal (`<h1>`) por página.