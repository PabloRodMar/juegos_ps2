<?php
/*
Template Name: Consola
*/
?>

<?php get_header(); ?> 

<!-- Bloque de Contenido: Características Técnicas -->
<div class="caracteristicas-ps2">

    <!-- Título Principal -->
    <h1 class="titulo-caracteristicas">CARACTERÍSTICAS TÉCNICAS</h1>

    <!-- 1. Procesador -->
    <section>
        <h2>Procesador</h2>
        <ul>
            <li>CPU: Emotion Engine (desarrollado por Sony y Toshiba)</li>
            <li>Arquitectura: 128-bit</li>
            <li>Velocidad de reloj: 294.9 MHz (las versiones posteriores llegaron hasta 299 MHz)</li>
            <li>Coprocesadores:
                <ul>
                    <li>Unidad de coma flotante (FPU)</li>
                    <li>Dos unidades de vector (VU0 y VU1) para gráficos 3D</li>
                    <li>Ancho de bus interno: 3.2 GB/s</li>
                </ul>
            </li>
        </ul>
    </section>

    <!-- 2. Gráficos -->
    <section>
        <h2>Gráficos</h2>
        <ul>
            <li>GPU: Graphics Synthesizer</li>
            <li>Velocidad: 147.5 MHz</li>
            <li>Memoria: 4 MB de VRAM eDRAM (integrada) y 32 MB de RAM eDRAM</li>
            <li>Resolución máxima: Hasta 1280×1024 píxeles (aunque la mayoría de juegos iban a 320x224 o 640x480)</li>
            <li>Colores: 16.7 millones</li>
            <li>Capacidad de polígonos: Hasta 75 millones por segundo (teórico)</li>
        </ul>
    </section>

    <!-- 3. Memoria y Almacenamiento -->
    <section>
        <h2>Memoria y Almacenamiento</h2>
        <ul>
            <li>RAM principal: 32 MB RDRAM (Rambus DRAM)</li>
            <li>Medios de disco: CD-ROM y DVD-ROM (doble capa en DVD)</li>
            <li>Disco: CD-ROM y DVD-ROM (también lee DVD de video y CD de música)</li>
            <li>Tarjetas de memoria:
                <ul>
                    <li>CD-DA (3.6 MB/s)</li>
                    <li>DVD x4 (5.2 MB/s)</li>
                </ul>
            </li>
        </ul>
    </section>

    <!-- 4. Sonido -->
    <section>
        <h2>Sonido</h2>
        <ul>
            <li>Chip de audio: SPU2 (Sound Processing Unit 2)</li>
            <li>Canales: 48 canales, efectos adicionales</li>
            <li>Frecuencia de muestreo: hasta 48 kHz</li>
            <li>Compatibilidad: Dolby Digital 5.1 (salida óptica)</li>
            <li>Más silenciosa.</li>
        </ul>
    </section>

    <!-- 5. Conectividad y puertos -->
    <section>
        <h2>Conectividad y puertos</h2>
        <ul>
            <li>2 puertos para mandos DualShock 2</li>
            <li>2 ranuras para Memory Cards</li>
            <li>2 puertos USB 1.1</li>
            <li>1 puerto FireWire (solo en los modelos originales)</li>
            <li>Salida AV Multi-Out (para cable compuesto, RGB o componentes)</li>
            <li>Salida digital óptica (audio)</li>
            <li>Puerto de expansión (para HDD o adaptador de red en algunos modelos)</li>
        </ul>
    </section>

    <!-- 6. Diseño y alimentación -->
    <section>
        <h2>Diseño y alimentación</h2>
        <ul>
            <li>Tamaño (modelo original): 301 mm × 182 mm × 78 mm</li>
            <li>Peso: 2.2 kg</li>
            <li>Consumo eléctrico: Aproximadamente 45 W</li>
            <li>Colores: Negro estándar, con ediciones especiales (plateado, azul, blanco, etc.)</li>
        </ul>
    </section>

    <!-- 7. Compatibilidad -->
    <section>
        <h2>Compatibilidad</h2>
        <ul>
            <li>Compatible con juegos y mandos de PlayStation 1</li>
            <li>Compatible con DVD/CD-ROM</li>
            <li>Compatible con EyeToy, Multitap y micrófonos USB</li>
        </ul>
    </section>

    <!-- Versiones -->
    <section class="versions-section">
        <h2 class="titulo-versiones">Versiones</h2>
        <div class="versions-grid">

            <!-- Versión 1 -->
            <div class="version-card">
                <h3>Serie 10000 / 15000 / 18000 (Japón, 2000-2001)</h3>
                <ul>
                    <li>Primeros modelos de producción en Japón.</li>
                    <li>Firmware muy básico; no leían DVD-R.</li>
                </ul>
            </div>

            <!-- Versión 2 -->
            <div class="version-card">
                <h3>Serie 30001 (2001)</h3>
                <ul>
                    <li>Primera versión lanzada globalmente (Europa y América).</li>
                    <li>Mejorada compatibilidad de DVD y la compatibilidad con discos grabables.</li>
                </ul>
            </div>

            <!-- Versión 3 -->
            <div class="version-card">
                <h3>Serie 50000 (2003)</h3>
                <ul>
                    <li>Primera versión de la PS2 "fat".</li>
                    <li>Eliminado completamente el puerto FireWire.</li>
                </ul>
            </div>

            <!-- Versión 4 (Slim) -->
            <div class="version-card">
                <h3>Serie 70000 (2004) – Primera PS2 Slimline</h3>
                <ul>
                    <li>Gran rediseño físico: 70% más pequeña y más ligera.</li>
                    <li>Fuente de poder externa (ya no integrada).</li>
                </ul>
            </div>

            <!-- Versión 5 (Slim Mejorada) -->
            <div class="version-card">
                <h3>Serie 75000 / 77000 (2005-2006)</h3>
                <ul>
                    <li>Mismo tamaño que la 70000, pero con cambios internos.</li>
                    <li>Componentes más integrados (CPU + GPU en un solo chip).</li>
                    <li>Menor consumo y calor.</li>
                    <li>Más silenciosa.</li>
                </ul>
            </div>

            <!-- Versión 6 (Última Slim) -->
            <div class="version-card">
                <h3>Serie 90000 (2007-2013)</h3>
                <ul>
                    <li>Última revisión oficial de la PS2.</li>
                    <li>Fuente de poder vuelve a ser interna.</li>
                    <li>Aún más ligera y con menos chips (coste reducido).</li>
                </ul>
            </div>

        </div>
    </section>

</div>

<?php get_footer(); ?> 