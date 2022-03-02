 

Menu: Acasă, Parteneri, Despre noi, Contacte.

 

Pagina Acasă: va conține:

Un slideshow/Carousel (Bootstrap) cu cîteva imagini la alegerea ta.

Mai jos ultimii 3 parteneri adăugați (folosește Bootstrap card)

Footer (la discreția ta cum va arăta)

 

Pagina Parteneri,  va conțină un grid (Bootstrap) cu imagine și titlu pentru fiecare partener unde vei afișa ultimii 9 parteneri adăugați, cînd apeși pe un partener, se va deschide o pagină unde va apărea detaliile partenerului care vor fi alcătuite din: Titlu, imagine, detalii (text).

 

Pagina:  Despre noi, va conține o pagină obișnuită cu o imagine mare cît lățimea paginii și mai jos o descriere ( text ).

 

Pagina:  Contacte, va conține o pagină cu un formular unde utilizatorul va introduce nume, adresa email, mesaj, la click pe butonul [Trimite mesaj] vei salva conținutul în baza de date într-o tabelă creată pentru această pagină.

 

In Footer vei adăuga un buton: Login,

La click pe acest buton se va deschide o pagină de login cu username și password (Pentru Login folosește sistemul de autentificare de la Laravel sau oricare la discreția ta) , după login utilizatorul va fi direcționat către un panel de administrare a site-ului:

 Panelul de administrare va conține un menu cu butoanele: Parteneri / Mesaje / Logout

 

Cînd faci click pe opțiunea Parteneri din menu se va deschide pagina parteneri din admin:

La începutul paginii să fie un buton: [ Adaugă partener ], la click se va deschide o pagină cu un formular unde vei adăuga un partener cu următoarele informații: Titlu, imagine, descriere.

Mai jos de acest de butonul [Adaugă partener] va fi lista de parteneri, în drept cu fiecare partener să fie butoanele [Edit] [Delete].

 - Dacă faci click pe DELETE să se șteargă din baza de date acel partener.

 - Dacă faci click pe EDIT, atunci se va deschide o pagină în care vei edita conținutul partenerului (titlu, imagine, descriere).

 

Cînd faci click pe opțiunea Mesaje din menu, vei afișa lista de mesaje adăugat de utilizatori în pagina: Contacte

 

Cînd faci click pe Logout, sesiunea se va încheia și utilizatorul va fi direcționat către prima Acasă.
