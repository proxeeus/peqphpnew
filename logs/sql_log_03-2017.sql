INSERT INTO merchantlist SET merchantid=60005, slot=2, item=5004, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:41:30)
INSERT INTO merchantlist SET merchantid=60005, slot=3, item=5008, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:41:46)
INSERT INTO merchantlist SET merchantid=60005, slot=4, item=5011, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:41:54)
INSERT INTO merchantlist SET merchantid=60005, slot=5, item=7001, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:42:11)
INSERT INTO merchantlist SET merchantid=60005, slot=6, item=Long sword, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535 - Error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Long sword, faction_required=-100, level_required=0, alt_currency_cost=0, classe' at line 1; -- admin (25-Mar-17  11:42:17)
INSERT INTO merchantlist SET merchantid=60005, slot=6, item=5002, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:42:27)
INSERT INTO merchantlist SET merchantid=60005, slot=7, item=7002, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:42:37)
INSERT INTO merchantlist SET merchantid=60005, slot=8, item=5009, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:42:58)
INSERT INTO merchantlist SET merchantid=60005, slot=9, item=5001, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:43:12)
INSERT INTO merchantlist SET merchantid=60005, slot=10, item=5005, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:43:25)
DELETE FROM merchantlist WHERE merchantid=60005 AND slot=1 AND item=1001; -- admin (25-Mar-17  11:43:31)
INSERT INTO merchantlist SET merchantid=182190, slot=2, item=2050, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:45:26)
DELETE FROM merchantlist WHERE merchantid=60000 AND slot=1 AND item=2159; -- admin (25-Mar-17  11:46:28)
DELETE FROM merchantlist WHERE merchantid=60000 AND slot=2 AND item=13008; -- admin (25-Mar-17  11:46:30)
DELETE FROM merchantlist WHERE merchantid=60000 AND slot=3 AND item=13009; -- admin (25-Mar-17  11:46:31)
DELETE FROM merchantlist WHERE merchantid=60000 AND slot=4 AND item=17005; -- admin (25-Mar-17  11:46:33)
DELETE FROM merchantlist WHERE merchantid=60000 AND slot=5 AND item=81824; -- admin (25-Mar-17  11:46:35)
INSERT INTO merchantlist SET merchantid=60000, slot=1, item=17005, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:46:47)
INSERT INTO merchantlist SET merchantid=60000, slot=2, item=13009, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:46:57)
INSERT INTO merchantlist SET merchantid=60000, slot=3, item=5004, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:47:07)
INSERT INTO merchantlist SET merchantid=60000, slot=4, item=5003, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:47:19)
INSERT INTO merchantlist SET merchantid=60000, slot=5, item=9004, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:47:28)
INSERT INTO merchantlist SET merchantid=60000, slot=6, item=5002, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:47:39)
INSERT INTO merchantlist SET merchantid=60000, slot=7, item=9002, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:47:52)
INSERT INTO merchantlist SET merchantid=60000, slot=8, item=5001, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:48:02)
INSERT INTO merchantlist SET merchantid=60000, slot=9, item=7003, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:48:14)
INSERT INTO merchantlist SET merchantid=60000, slot=10, item=5005, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:48:24)
INSERT INTO merchantlist SET merchantid=60000, slot=11, item=6006, faction_required=-100, level_required=0, alt_currency_cost=0, classes_required=65535; -- admin (25-Mar-17  11:48:35)
SELECT * FROM starting_items ORDER BY race, class, deity, start_zone - Error: Unknown column 'deity' in 'order clause'; -- admin (25-Mar-17  14:52:07)
SELECT * FROM starting_items ORDER BY race, class, deity, start_zone - Error: Unknown column 'deity' in 'order clause'; -- admin (25-Mar-17  14:55:11)
SELECT * FROM starting_items ORDER BY race, class, deity, start_zone - Error: Unknown column 'deity' in 'order clause'; -- admin (25-Mar-17  14:55:12)
SELECT * FROM starting_items ORDER BY race, class, deity, start_zone - Error: Unknown column 'deity' in 'order clause'; -- admin (25-Mar-17  14:55:14)
select starting_items.id, starting_items.race, starting_items.class, starting_items.deityid, 
starting_items.zoneid, starting_items.itemid, starting_items.item_charges,
starting_items.gm,starting_items.slot, items.Name 
from starting_items where starting_items.id =  inner join items on starting_items.itemid = items.id ORDER BY id, race, class, deityid, zoneid - Error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'inner join items on starting_items.itemid = items.id ORDER BY id, race, class, d' at line 4; -- admin (25-Mar-17  18:16:45)
select starting_items.id, starting_items.race, starting_items.class, starting_items.deityid, 
starting_items.zoneid, starting_items.itemid, starting_items.item_charges,
starting_items.gm,starting_items.slot, items.Name 
from starting_items where starting_items.id =  inner join items on starting_items.itemid = items.id ORDER BY id, race, class, deityid, zoneid - Error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'inner join items on starting_items.itemid = items.id ORDER BY id, race, class, d' at line 4; -- admin (25-Mar-17  18:18:25)
select starting_items.id, starting_items.race, starting_items.class, starting_items.deityid, 
starting_items.zoneid, starting_items.itemid, starting_items.item_charges,
starting_items.gm,starting_items.slot, items.Name 
from starting_items where starting_items.id = 1 inner join items on starting_items.itemid = items.id ORDER BY id, race, class, deityid, zoneid - Error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'inner join items on starting_items.itemid = items.id ORDER BY id, race, class, d' at line 4; -- admin (25-Mar-17  18:19:45)
select starting_items.id, starting_items.race, starting_items.class, starting_items.deityid, 
starting_items.zoneid, starting_items.itemid, starting_items.item_charges,
starting_items.gm,starting_items.slot, items.Name 
from starting_items where starting_items.id = 1 inner join items on starting_items.itemid = items.id ORDER BY id, race, class, deityid, zoneid - Error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'inner join items on starting_items.itemid = items.id ORDER BY id, race, class, d' at line 4; -- admin (25-Mar-17  18:23:29)
