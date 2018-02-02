# PROTOTIP CSO
- Autors: S. Busquets, L. Bosch (02-02-2018)

L'objectiu d'aquest document és descriure què necessita ICRA per poder 
desenvolupar el paquet de treball 2 relacionat amb el prototip-cso juntament 
amb en Fèlix, i poder establir un pressupost.

## REQUERIMENTS ICRA
- Prototip amb LoRa, que enviï dades a un gateway LoRa.
- Bateria
- 5 rèpliques validades i enviant dades.
- Instal·lació a Peñíscola.
- Fitxers resultants (per poder fer més rèpliques en un futur):
  - Llistat material
  - Fitxers CAD (esquema electrònic)
  - Codi Arduino

## CONDICIONS
- A partir de l'1 de juny no podrem instal·lar res a Peñíscola.
- Que s'instal·li durant l'abril.
- Cal compilar/testejar el codi Arduino tenint un gateway LoRa a mà (a ICRA), sinó no es pot validar el prototip.
- Quan rebem les 5 plaques, les posarem en marxa a ICRA, i farem un test. Si no funcionen, 
caldrà una revisió conjunta de Fèlix i Lluís.

## TASQUES
### Fèlix
- Disseny electrònic: afegir LoRa i bateria.
- Soldar components al circuit imprès.
- Manteniment/reparació per incidència de hardware durant 1 any.
### Lluís
- Vetllar pel funcionament del codi Arduino / enviament dades / manteniment gateway LoRa.
- Configuració gateway LoRa (Raspberry) per llegir dades des d'internet.
- Montar plaques de circuit imprès dins de caixes de plàstic
### Sílvia
- Demanar material (fer comandes).
- Fer llista bateries que podríem utilitzar.
- Comanda fer fer les plaques PCB
- Montar plaques de circuit imprès dins de caixes de plàstic
