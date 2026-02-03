<?php
// Tijd is in de basis een nummer: de Unix timestamp
$createdAt = time(); 

// Bereken 10 jaar in de toekomst
$revealAt = strtotime('+10 years', $createdAt); 

echo "<h1>🕰️ Time Capsule Experiment</h1>";

// Vergelijk timestamps (getallen) voor de veiligheid
if (time() < $revealAt) {
    // Gebruik date() alleen voor de presentatie
    echo "⏳ De capsule is nog verzegeld. Kom terug op: " . date('d/m/Y', $revealAt);
} else {
    echo "📦 De capsule is geopend! Hier is je bericht uit 2026.";
}
?><?php
$createdAt= tiem();

// strttotime
$revealAt = strtotime(+'10 years', $createdAt);
echo "<h1>🕰️ Time Capsule Experiment</h1>";

if (time() < $ revealAt) {
	echo  "⏳ De capsule is nog verzegeld. Kom terug op: " . date('d/m/Y', $revealAt);
} else { echo "📦 De capsule is geopend! Hier is je bericht uit 2026.";
}
?>
