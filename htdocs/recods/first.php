<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'responsiveform';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
<?php
$services = [
    'Bathroom and kitchen',
    'classica cleaning 2 bathroom',
    'intense cleaning 2 bathroom',
    'classica cleaning 3 bathroom',
    'intense cleaning 3 bathroom',
    'classica bathroom cleaning',
    'moving-in bathroom cleaning',
    'kitchen cleaning',
    'moving-in kitchen cleaning',
    'complete kitchen cleaning',
    'chimney cleaning',
    'fridge dip cleaning',
    'mini deep cleaning',
    'ceiling fan cleaning',
    'Exhaust fan cleaning',
    'kitchen sink cleaning',
    'utensil removal & placing back',
    'Gas stove cleaning',
    'microwave cleaning',
    'trolley & shelves cleaning',
    'balcony cleaning',
    'NEW CATEGORY LAUNCHED',
    'LASER DR CONSUTATION',
    'book a consultation',
    'AIR PURIFIER SERVICE',
    'filter Cleaning service',
    'Deep Cleaning service',
    'REPAIR',
    'air purifier Repairs',
    'RO WATER PURIFIER',
    'NATIVE RO WATER PURIFIER',
    'native m2',
    'native m1',
    'APPLICANCES',
    'GEYSER REPAIR',
    'geyser Checkup',
    'SERVICING',
    'geyser service',
    'GEYSER INSTALLATION',
    'GEYSER installation',
    'WATER PURIFIFER REPAIR SERVICE',
    'service Checkup',
    'NATIVE regular service',
    'native full service',
    'REPAIR',
    'repair',
    'INSTALLATION/UNINSTALLATION',
    'installation',
    'uninstallation',
    'AIR PURIFIER SERVICE',
    'filter cleaning service',
    'deep cleaning service',
    'REPAIR',
    'air purifier repair',
    'SALON,SPA,MASSAGE SERVICE',
    'SALON PRIME',
    'WEDDING SPECIAL',
    'cheryl by l\'oreal glovite facial',
    'o3+ shine & glow facial',
    'elysian firming glow wine facial',
    'sara fruit cleanup',
    'elysian pinolada fruit cleanup',
    'wax & glow',
    'full body waxing',
    'beatseller',
    'face detox',
    'full body indulgence',
    'wax & glow[honey regular]',
    'mani pedi deight',
    'full chochlate, chochlate roll-up waxing',
    'full RICA roll-ON waxing',
    'complete honey waxing',
    'complete RICA chochalte waxing',
    'wax & glow roll-ON',
    'MAKE YOUR PACKAGE',
    'make your own package',
    'make your own package[special roll-on]',
    'WAXING',
    'waxing',
    'full arm+ underarm waxing',
    'full leg waxing',
    'Stomach waxing',
    'back waxing',
    'full body waxing',
    'half leg waxing',
    'half arm waxing',
    'underarm waxing',
    'bikini waxing',
    'bikini leg waxing',
    'face waxing',
    'FACIAL & CLEANUP',
    'full arm',
    'underarm',
    'leg',
    'head',
    'elyisan saundary multi-mask facial',
    '03+ power brightning',
    '03+ feel youthful facial',
    'cherly by oreal',
    '03+ shine & gloww'
];
?>
<?php
$table = 'content';
$column = 'services';

foreach ($services as $service) {
    $service = $conn->real_escape_string($service); // Sanitize the string before inserting
    $query = "INSERT INTO $table ($column) VALUES ('$service')";
    
    if ($conn->query($query) === false) {
        echo 'Error inserting record: ' . $conn->error;
    }
}

$conn->close();
?>
