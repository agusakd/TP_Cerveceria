Todos los DAOS son clases que contienen listas, estas reciben y
devuelven objetos, hay un dao por cada model.


Interfaz dao posee los siguientes metodos:

-insertan (recibe un $dato)
-buscan (recibe un $valor)
-eliminan (recibe un $dato a eliminar)
-actualizan (recibe un $dato)

TODOS los DAO usan(heredan) el patron simpleton e implenentan la interfaz
