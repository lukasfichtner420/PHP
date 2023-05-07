# Jednoduchý PHP Blockchain

## Úvod

Tento projekt obsahuje jednoduchou implementaci blockchainu v PHP. Projekt obsahuje tři hlavní soubory - Block.php, Chain.php. Block třída reprezentuje jednotlivé bloky v blockchainu a Chain třída řídí celý blockchain.
## Popis

Blockchain je decentralizovaný a distribuovaný účetní systém, který umožňuje ukládání transakcí a jejich ověřování. Každá transakce je uložena v bloku a každý blok obsahuje hash předchozího bloku, takže se vytváří řetězec bloků. Pokud se některá transakce změní, hash bloku se změní a tím se poruší řetězec. To je důvod, proč blockchain je velmi bezpečný proti podvodům.

Tento projekt obsahuje jednoduchou implementaci blockchainu s názvy měst. Každý blok v řetězci reprezentuje jedno město.

![UML Class Diagram](https://github.com/lukasfichtner420/PHP/blob/main/Blockchain/UML%20Class%20Diagram.jpg)
