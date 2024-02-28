# 1. Kas ir API ?

API ir mehānismi, kas ļauj diviem programmatūras komponentiem sazināties vienam ar otru, izmantojot definīciju un protokolu kopu. 

Ja ar saviem vārdiem divi datori var sazināties un pārsūtīt datus, piemēram veidot pieprasījumus serverim utt.

# 2. Kā definēt mainīgo PHP valodā ?

$x = 10;

$ + nosaukums = vērtība;

# 3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

Laravel izmanto Model-View-Controller arhitektūru

Es nekad nebiju par tādu dzirdējis , bet

Modelis - atbild par datu saglabāšanu un no datu bāzes iegūšanu. Modelis definē tabulas nosaukumu, kolonnas un veidlapu attiecībām ar citām tabulām.

Izskats - Atbild par aplikācijas izskatu, ko redzams lietotājs. Views ir HTML, CSS un JavaScript kods, kas izveido lietotāja interfeisu. 

Controllers - Atbild par loģiku, ko izmanto, lai sazinātos ar modeli un izveidot views. Kontrolieri var sazināties ar modeli, lai iegūtu vai saglabātu datus, un tad izmantot views, lai izveidot atbildi. 

# 4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

ORM (Object Relational Mapping)

 ir tehnoloģija, kas sniedz objektu orientētu iekšējo lietotni, lai sazinātos ar relāciju datu bāzem. ORM palīdz pārtraukt datus starp objektiem un datu bāzes tabulām, sniegt dažādus pielāgojumus un papildfunkcijas, piemēram, automātisku datu validāciju un filtrēšanu.

ORM vienkāršo parastās darbības, nodrošina objektu kartēšanu un palīdz koda organizēšanā, savukārt neapstrādāti SQL vaicājumi piedāvā elastību, veiktspējas optimizāciju un piekļuvi uzlabotajiem datu bāzes līdzekļiem.

# 5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:


$users = User::where('rating', '>', 4)->get();