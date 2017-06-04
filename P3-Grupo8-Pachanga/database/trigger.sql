
create or replace trigger puntuar
  after update on partidos
  for each row

  BEGIN
    DECLARE jugador VARCHAR(20);
    DECLARE equipo1 CURSOR FOR
    select usuario from participantes
    where partido = NEW.id and equipo = '1';
    DECLARE equipo2 CURSOR FOR
    select usuario from participantes
    where partido = NEW.id and equipo = '2';

    OPEN equipo1;
    OPEN equipo2;

    if NEW.goles1 > NEW.goles2 then
      read_loop: LOOP
        FETCH equipo1 INTO jugador;
        if(equipo1%NOTFOUND) then
          LEAVE read_loop;
        end if;
          UPDATE usuarios SET skill = skill + '10' WHERE id = jugador;
      END LOOP;

      read_loop: LOOP
        FETCH equipo2 INTO jugador;
        if(equipo2%NOTFOUND) then
          LEAVE read_loop;
        end if;
          UPDATE usuarios SET skill = skill - '10' WHERE id = jugador;
      END LOOP;
    end if;
    if NEW.goles1 < NEW.goles2 then
      read_loop: LOOP
        FETCH equipo1 INTO jugador;
        if(equipo1%NOTFOUND) then
          LEAVE read_loop;
        end if;
          UPDATE usuarios SET skill = skill - '10' WHERE id = jugador;
      END LOOP;

      read_loop: LOOP
        FETCH equipo2 INTO jugador;
        if(equipo2%NOTFOUND) then
          LEAVE read_loop;
        end if;
          UPDATE usuarios SET skill = skill + '10' WHERE id = jugador;
      END LOOP;
    end if;

    CLOSE equipo1;
    CLOSE equipo2;
  END;


UPDATE partidos SET goles1 = '2', goles2 = '1' WHERE id = '4';
