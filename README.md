-   Kas ir API?
API nozīmē Application Programming Interface, API kontekstā, lietojumprogramma attiecas uz jebkuru programmatūru ar noteiktu funkciju.
-   Kā deklarēt mainīgo PHP valodā?
PHP valodā tu izveido mainīgo ar dolārzīmes simbolu ($) kam pēc tam seko mainīgā nosaukums.
-   Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā?
Laravel izmanto Model-View-Controller (MVC) arhitektūru, kas ietver modeļu izveidi un arī attēlo datu bāzes tabulas, skatus lietotāja saskarnēm un kontrolierus, lai pārvaldītu lietojumprogrammu loģiku.
-   Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object Relational Mapping) ir programmēšanas tehnika, kas ļauj izstrādātājiem mijiedarboties ar datu bāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot neapstrādātus SQL vaicājumus.
-   Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
$users = User::where('rating', '>', 4)->get();
