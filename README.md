# 🛎️ RezevSys

**Samoobslužný príjem zákazníkov na dotykovej obrazovke s automatickým poradovníkom na druhom displeji.**

![Rok](https://img.shields.io/badge/rok-2019-blue) ![PHP](https://img.shields.io/badge/PHP-MySQL-777bb3) ![UI](https://img.shields.io/badge/UI-touchscreen-orange)

> **Rok realizácie:** 2019 · **Tagy:** `php` `mysql` `queue-management` `reception` `touchscreen` `self-service` `web-app` `linux` `apache`

## O projekte

RezevSys vznikol pre predajňu a showroom **ForLED.sk**. Zákazník príde, na dotykovej obrazovke vyberie dôvod návštevy a systém ho zaradí do poradia. Na druhej obrazovke sa v reálnom čase ukazuje, kto je na rade, takže odpadá papierovanie aj preklikávanie sa k zamestnancovi.

## Ako to vyzerá v praxi

1. **Registrácia:** zákazník klepne na kategóriu: veľkoobchod, existujúci zákazník alebo odporúčanie, vyzdvihnutie podľa objednávky, zákazník bez objednávky, konzultácia osvetlenia pre firmy, konzultácia pre domácnosť, iné, kuriér alebo pošta.
2. **Zaradenie:** každá kategória má svoju prioritu a vlastný PHP skript, údaje sa ukladajú do tabuľky `Zakaznici` v MySQL.
3. **Poradovník:** `Zobraz.php` zobrazuje päť aktuálnych pozícií, kategórie sú farebne odlíšené. Skript `posun.php` posúva záznamy, keď sa uvoľní miesto.
4. **Stav prevádzky:** jednoduchý stav (otvorené / iné stavy) s farbami sa ukladá do `oznamTab` a ovláda sa zo správcovskej časti.

## Technológie

PHP · MySQL (MySQLi) · HTML5 / CSS3 / JavaScript · Apache · Linux · Bash (`Update.sh` pre nasadenie)

## Nasadenie

```bash
# na serveri (Linux + Apache + PHP + MySQL)
cd /var/www
sudo rm -r html
git clone https://github.com/VRDragon/RezevSys
mv RezevSys/html /var/www/html
```

Skript `Update.sh` robí tieto kroky automaticky pri aktualizácii. Prístupové údaje k databáze sú v `html/config.php`, pred nasadením ich zmeňte.

## Poznámky

Projekt je navrhnutý pre lokálnu sieť. Dopyty do databázy by dnes patrilo prepísať na pripravené príkazy (prepared statements). Podrobný technický opis je v [docs/README.en.md](docs/README.en.md).

## Autor

**Vratislav Režo** ([@VRDragon](https://github.com/VRDragon))
