<?php include_once 'includes/templates/header.php' ?>

<main>
    <div>
        <div class="tituloMaster2">
            <h1 class="tituloTextoMaster2">Máster Profesional en Seguridad Ofensiva</h1>
        </div>
    </div>

    <p class="description"> Este máster esta diseñado para formar a profesionales capaces de entender y aplicar técnicas ofensivas de ciberseguridad, con un enfoque práctico y actualizado. 
        A lo largo de sus 10 módulos, se abordan en profundidad las metodologías, herramientas y conocimientos clave para realizar auditorías de seguridad, pruebas de penetración y análisis de vulnerabilidades en entornos reales.  
    </p>

    <section>
        <div class="course-columns">
            <div class="course-column">
                <h3 id="primer-curso">Bloque del 1 al 5</h3>
                <details>
                    <summary> 🔍 Módulo 1 — Introducción al Hacking Ético</summary>
                    <p>Se establece la base teórica y legal del hacking ético, definiendo su rol dentro de la ciberseguridad. 
                        Se introduce el entorno de trabajo con herramientas fundamentales como Linux, Metasploit, Nmap, PowerShell o Python. 
                        El alumno aprende a configurar laboratorios seguros y a realizar sus primeras pruebas de intrusión controladas, adquiriendo una mentalidad crítica y profesional hacia la seguridad ofensiva.
                    </p>
                </details>
                <details>
                    <summary> 🔐 Módulo 2 — Criptografía</summary>
                    <p>En este módulo se exploran los principios fundamentales de la criptografía clásica y moderna. 
                        Se estudian algoritmos de cifrado simétrico (AES, DES) y asimétrico (RSA, ECC), funciones hash (SHA, MD5), firmas digitales, certificados y protocolos como TLS. 
                        Además, se analizan técnicas de ataque criptográfico (fuerza bruta, ataques por diccionario, Rainbow Tables) y se trabaja con herramientas como Hashcat o OpenSSL.
                    </p>
                </details>
                <details>
                    <summary> 🕵️ Módulo 3 — Ingeniería Social y OSINT</summary>
                    <p>Se abordan técnicas de recopilación de información a través de fuentes abiertas (OSINT), utilizando herramientas como Maltego o theHarvester. 
                        A su vez, se exploran métodos de ingeniería social —como phishing, vishing o pretexting— para manipular a las personas y obtener acceso a sistemas o información confidencial. 
                        El módulo destaca cómo el factor humano puede ser la mayor vulnerabilidad en un entorno tecnológico.
                    </p>
                </details>
                <details>
                    <summary> 🧭 Módulo 4 — Reconocimiento y Enumeración </summary>
                    <p>Este módulo profundiza en la fase previa a un ataque: la identificación de servicios, sistemas y usuarios mediante técnicas de reconocimiento pasivo (whois, DNS, redes sociales) y activo 
                        (scanning de puertos, fingerprinting de sistemas operativos, enumeración de servicios). Se aprenden herramientas como Nmap, Netcat y enum4linux, fundamentales para preparar cualquier pentest.
                    </p>
                </details>
                <details>
                    <summary> 🦠 Módulo 5 — Análisis de Vulnerabilidades, Malware y Reversing</summary>
                    <p>Se enseña a detectar y evaluar vulnerabilidades usando herramientas como Nessus o OpenVAS, así como a realizar ingeniería inversa sobre programas y malware. 
                        El análisis incluye tanto técnicas estáticas (sin ejecutar el código) como dinámicas (ejecución controlada). 
                        El alumno aprende a montar su propio entorno de laboratorio, utilizar depuradores como OllyDbg o Ghidra y detectar patrones maliciosos.
                    </p>
                </details>

            </div>

            <div class="course-column">
                <h3 id="segundo-curso">Bloque del 6 al 10</h3>
                <details>
                    <summary> 💻 Módulo 6 — Hacking de Sistemas y Ataques de Denegación de Servicio (DoS)  </summary>
                    <p>Este bloque se centra en vulnerar y proteger sistemas operativos como Windows y Linux. 
                        Se estudian técnicas para obtener privilegios, manipular servicios, evadir antivirus y defender mediante bastionado del sistema. 
                        También se analizan ataques de denegación de servicio (tanto DoS como DDoS), su detección y mitigación, así como el uso de herramientas como LOIC o scripts personalizados para simulaciones controladas.
                    </p> 
                </details>
                <details>
                    <summary> 🌐 Módulo 7 — Hacking en Redes </summary>
                    <p>Aquí se estudian los protocolos de red (TCP/IP, ARP, DNS, etc.) y sus debilidades. 
                        Se realizan ataques como sniffing, spoofing, ARP poisoning y man-in-the-middle, utilizando herramientas como Wireshark, Ettercap o Scapy. 
                        También se abordan técnicas para evadir sistemas de detección y prevención (IDS/IPS), analizar tráfico cifrado y mapear topologías de red.
                    </p> 
                </details>
                <details>
                    <summary> 🧱 Módulo 8 — Hacking Web </summary>
                    <p>Se exploran las vulnerabilidades más frecuentes en aplicaciones web: inyecciones (SQL, command injection), XSS, CSRF, fuga de información, gestión de sesiones insegura, etc. 
                        Se utilizan herramientas como Burp Suite, OWASP ZAP y navegadores configurados con extensiones para pentesting. 
                        El módulo también enseña cómo detectar y explotar estas debilidades, además de recomendar buenas prácticas de desarrollo seguro.
                    </p> 
                </details>

                <details>
                    <summary> 🧪 Módulo 9 — Preparación para la Certificación OSCP </summary>
                    <p>Este módulo se dedica a preparar al alumno para obtener la certificación OSCP (Offensive Security Certified Professional), una de las más reconocidas en el ámbito del hacking ético. 
                        Se realizan retos prácticos, simulacros de examen, explotación de vulnerabilidades reales y se enseña a documentar adecuadamente cada paso del ataque, cumpliendo con los estándares exigidos por Offensive Security.
                    </p>
                </details>
                <details>
                    <summary> 🎓 Módulo 10 — Proyecto Final de Máster </summary>
                    <p>En el proyecto final se integran todas las competencias adquiridas. 
                        El alumno desarrolla un caso real o simulado de auditoría de seguridad ofensiva, documentando el proceso completo: reconocimiento, explotación, post-explotación y recomendaciones. 
                        Se valora especialmente la creatividad, el rigor técnico y la capacidad de comunicación del informe final.
                    </p>
                </details>
            </div>

        </div>
    </section>
</main>

<?php include_once 'includes/templates/footer.php' ?>