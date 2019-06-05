1)
SELECT e.*, s.*
from elemento e, serietv s
WHERE e.idElemento=s.idSerietv and e.idElemento="X"			-- inserire valore

2)
SELECT e.titolo, r.*
FROM elemento e, recensione r
WHERE e.idElemento = r.FK_elemento and e.idElemento="X"		-- inserire valore

3)
SELECT e.*, s.*
from elemento e, serietv s
WHERE e.idElemento=s.idSerietv and e.titolo="X"				-- inserire valore
