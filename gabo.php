<?php
// Frases y excusas clásicas de desarrollador
$memes = [
    "«En mi máquina sí funcionaba...» 💻🤷‍♂️",
    "«No es un bug, es una feature no documentada.» ✨",
    "«Hice un commit directo a main a las 18:00 un viernes... ¿qué podría malir sal?» 🔥",
    "«El código se autocomenta solo si tienes la fe suficiente.» 🙏",
    "«Borré node_modules y el error cambió de color, vamos progresando.» 📈",
    "«Solo cambié una línea de CSS, ¿por qué la base de datos se borró?» 💥",
    "«Git push --force y a dormir, mañana dios dirá.» 🚀"
];

$frase_aleatoria =$memes[array_rand($memes)];$timestamp = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚨 Commit Crítico de Producción 🚨</title>
    <!-- Tailwind CSS para que se vea moderno sin esfuerzo -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }
        .meme-card {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 font-sans selection:bg-rose-500 selection:text-white">

    <div class="max-w-md w-full bg-slate-900/80 backdrop-blur-xl border border-slate-800 rounded-3xl p-8 shadow-2xl text-center meme-card relative overflow-hidden">
        <!-- Decoración de fondo -->
        <div class="absolute -top-12 -left-12 w-32 h-32 bg-rose-500/20 rounded-full blur-2xl pointer-events-none"></div>
        <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-amber-500/20 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-500/10 border border-rose-500/30 text-rose-400 text-xs font-mono tracking-wider mb-6">
            <span class="w-2 h-2 rounded-full bg-rose-500 animate-ping"></span>
            PIPELINE STATUS: GOD BLESS YOU
        </div>

        <!-- Título -->
        <h1 class="text-3xl font-black tracking-tight text-white mb-2">
            ¿Quién rompió el build? 🤡
        </h1>
        <p class="text-slate-400 text-sm mb-6">
            Si estás viendo esto, alguien acaba de mergear sin correr los tests.
        </p>

        <!-- Quote dinámico PHP -->
        <div class="bg-slate-950/60 border border-slate-800 rounded-2xl p-4 mb-6">
            <p class="text-base font-medium text-amber-300 italic">
                <?= htmlspecialchars($frase_aleatoria) ?>
            </p>
            <div class="text-[11px] text-slate-500 font-mono mt-2">
                Commit timestamp: <?= $timestamp ?>
            </div>
        </div>

        <!-- Botones interactivos -->
        <div class="flex flex-col gap-3 relative min-h-[110px] justify-center">
            <button onclick="culparAlOtro()" class="w-full bg-gradient-to-r from-rose-600 to-amber-600 hover:from-rose-500 hover:to-amber-500 text-white font-semibold py-3 px-6 rounded-xl transition-all shadow-lg shadow-rose-600/25 active:scale-95">
                👉 Culpar al que hizo el commit
            </button>

            <!-- Botón que huye del cursor -->
            <button id="btn-reclamar" class="w-full bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium py-2.5 px-4 rounded-xl text-sm transition-all border border-slate-700">
                Poner ticket en Jira / Reclamar
            </button>
        </div>

        <p id="msg-troll" class="mt-4 text-xs text-slate-400 font-mono hidden"></p>
    </div>

    <script>
        // Mensaje sorpresa
        function culparAlOtro() {
            const culpableMsg = document.getElementById('msg-troll');
            const respuestas = [
                "Error 418: El culpable ya apagó su Slack y está inubicable 🏃💨",
                "Revisando git blame... resulta que fuiste tú hace 6 meses 💀",
                "Ticket creado con prioridad P0 asignado a ti mismo 🥳",
                "El PR ya fue aprobado con LGTM sin mirar el diff 👀"
            ];
            culpableMsg.innerText = respuestas[Math.floor(Math.random() * respuestas.length)];
            culpableMsg.classList.remove('hidden');
        }

        // El botón de reclamar escapa del mouse
        const btn = document.getElementById('btn-reclamar');
        btn.addEventListener('mouseover', () => {
            const x = (Math.random() - 0.5) * 200;
            const y = (Math.random() - 0.5) * 120;
            btn.style.transform = `translate(${x}px, ${y}px)`;
            btn.style.transition = 'transform 0.15s ease-out';
        });
    </script>
</body>
</html>