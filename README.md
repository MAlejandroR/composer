# Proyecto Composer – Evolución por Branches

Proyecto didáctico para comprender cómo funciona el **autoload en PHP** usando Composer, evolucionando progresivamente la configuración a través de distintos branches.

La idea es que puedas descargar el repositorio y cambiar de rama para observar cómo evoluciona el proyecto en cada etapa.

---

## Branch: `base`

Este branch contiene únicamente:

- La estructura completa de carpetas del proyecto.
- Todas las clases organizadas en sus respectivos directorios.
- Un `index.php` que intenta instanciar todas las clases.
- Ningún sistema de autoload configurado.

### Objetivo de este branch

Mostrar el problema inicial:

- PHP no sabe dónde están las clases.
- El proyecto no funciona porque no existe carga automática.
- Es necesario introducir un mecanismo que resuelva la localización de clases.

Este branch representa el punto de partida antes de usar Composer.

---

##  Branch: `classmap`

En este branch se introduce Composer por primera vez.

Contiene:

- Fichero `composer.json`.
- Configuración del autoload mediante **classmap**.
- Generación de la carpeta `vendor/`.
- Inclusión del fichero `vendor/autoload.php` en el proyecto.

### Qué se aprende aquí

- Cómo Composer escanea directorios completos.
- Cómo genera un mapa estático clase → ruta.
- Por qué es necesario ejecutar `composer dumpautoload` cuando se añaden nuevas clases.
- Ventajas e inconvenientes del método clásico.

Este branch permite entender cómo funciona internamente el sistema de carga basado en mapeo estático.

---

## Branch: `psr4`

En este branch se sustituye la estrategia `classmap` por **PSR-4**.

Contiene:

- Configuración PSR-4 en `composer.json`.
- Introducción formal de namespaces en las clases.
- Relación directa entre namespace y estructura de directorios.
- Eliminación del uso de classmap.

### Qué se aprende aquí

- Cómo PSR-4 transforma automáticamente namespace en ruta de archivo.
- Por qué no es necesario regenerar el autoload al añadir nuevas clases (si no cambia `composer.json`).
- La importancia de mantener coherencia estructural.
- Por qué PSR-4 es el estándar moderno utilizado por frameworks como Laravel y Symfony.

Este branch muestra la evolución hacia una arquitectura profesional y escalable.

---

## Branch: `librerias`

En este branch se introduce la gestión real de dependencias externas.

Contiene:

- Instalación de la librería **Faker** mediante Composer.
- Creación de una nueva clase `Persona`.
- Uso de Faker para generar datos simulados (nombre, email, etc.).
- Ejemplo práctico de cómo Composer gestiona dependencias externas.

### Qué se aprende aquí

- Cómo instalar librerías con Composer.
- Cómo Composer resuelve versiones compatibles.
- Cómo se integran dependencias externas en el proyecto.
- Cómo el autoload también funciona para las librerías instaladas.

Este branch representa el uso real de Composer en un proyecto profesional.

---

# Cómo usar el proyecto

1. Clonar el repositorio.
2. Cambiar de branch según la evolución que se quiera analizar:
   - `base`
   - `classmap`
   - `psr4`
   - `librerias`
3. Ejecutar `composer install` en cada rama que lo requiera.

---

#  Objetivo pedagógico global

Este proyecto permite entender progresivamente:

- El problema de la carga manual de clases.
- El funcionamiento del autoload.
- La diferencia entre classmap y PSR-4.
- La gestión de dependencias externas.
- La evolución hacia una estructura profesional en PHP.

Cada branch representa una etapa conceptual distinta en el aprendizaje de Composer.