PSQLOPTS = -A -q -F '	'  --pset=format=unaligned

blexbot.png: blexbot.dat blexbot.load
	gnuplot < blexbot.load

blexbot.dat: blexbot.sql
	psql  $(PSQLOPTS) -d access_log -f blexbot.sql -o blexx.dat
	sed -e '1d' -e '/rows)$$/d' blexx.dat > blexbot.dat
	rm -rf blexx.dat
