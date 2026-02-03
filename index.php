<?php
$createdAt= tiem();

// strttotime
$revealAt = strtotime(+'10 years', $createdAt);
echo "<h1>🕰️ Time Capsule Experiment</h1>";

if (time() < $ revealAt) {
	echo  "⏳ De capsule is nog verzegeld. Kom terug op: " . date('d/m/Y', $revealAt);
} else { echo "📦 De capsule is geopend! Hier is je bericht uit 2026.";
}
?>
