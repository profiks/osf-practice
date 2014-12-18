--
-- add_client(integer, character varying, character varying, character varying, character varying, character varying, character varying); Type: FUNCTION;
--

CREATE FUNCTION add_client(_number integer, _name character varying, _last_name character varying, _email character varying, _adress character varying, _city character varying, _country character varying) RETURNS void
    LANGUAGE plpgsql
    AS $$

      BEGIN

        INSERT INTO clients(

          number,

          name, 

          last_name, 

          email, 

          adress, 

          city,

          country

        )

        VALUES(

          _number,

          _name, 

          _last_name, 

          _email, 

          _adress, 

          _city,

          _country

        

        );

      END;

  $$;


--
-- Name: del_client(integer); Type: FUNCTION;
--

CREATE FUNCTION del_client(id integer) RETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$



BEGIN

     

     DELETE FROM clients WHERE clients.id = del_client.id;

     IF FOUND THEN

         RETURN 1;

  ELSE

        RETURN 0;

     END IF;

END;

$$;


--
-- Name: clients; Type: TABLE;
--

CREATE TABLE clients (
    id integer NOT NULL,
    number integer,
    name character varying(100) NOT NULL,
    last_name character varying(100) NOT NULL,
    email character varying(200) NOT NULL,
    adress character varying(255) NOT NULL,
    city character varying(150) NOT NULL,
    country character varying(100) NOT NULL
);



--
-- Name: list; Type: VIEW;
--

CREATE VIEW list AS
 SELECT clients.id,
    clients.number,
    clients.name,
    clients.last_name,
    clients.email,
    clients.adress,
    clients.city,
    clients.country
   FROM clients;


--
-- Name: get_client(integer); Type: FUNCTION;
--

CREATE FUNCTION get_client(id integer) RETURNS SETOF list
    LANGUAGE plpgsql
    AS $$  

    DECLARE  

     rec record;  

    BEGIN  

     FOR rec IN (SELECT * FROM list WHERE list.id = get_client.id LIMIT 1) LOOP  

      RETURN NEXT rec;  

     END LOOP;  

    END;  

    $$;



--
-- Name: list_all_clients(); Type: FUNCTION;
--

CREATE FUNCTION list_all_clients() RETURNS SETOF list
    LANGUAGE plpgsql
    AS $$  

    DECLARE  

     rec record;  

    BEGIN  

     FOR rec IN (SELECT * FROM list ORDER BY id DESC) LOOP  

      RETURN NEXT rec;  

     END LOOP; 

    END;  

    $$;



--
-- update_client(integer, integer, character varying, character varying, character varying, character varying, character varying, character varying); Type: FUNCTION;
--

CREATE FUNCTION update_client(id integer, number integer, name character varying DEFAULT NULL::character varying, last_name character varying DEFAULT NULL::character varying, email character varying DEFAULT NULL::character varying, adress character varying DEFAULT NULL::character varying, city character varying DEFAULT NULL::character varying, country character varying DEFAULT NULL::character varying) RETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$



BEGIN

    UPDATE clients

       SET number        = COALESCE(update_client.number,   clients.number),

           name          = COALESCE(update_client.name,     clients.name),

           last_name     = COALESCE(update_client.last_name,    clients.last_name),

           email         = COALESCE(update_client.email,    clients.email),

           adress        = COALESCE(update_client.adress,     clients.adress),

           city          = COALESCE(update_client.city,     clients.city),

           country       = COALESCE(update_client.country,    clients.country)

     WHERE clients.id = update_client.id;

    RETURN FOUND;

END;

$$;



--
-- Name: clients_id_seq; Type: SEQUENCE;
--

CREATE SEQUENCE clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



--
-- Name: clients_id_seq; Type: SEQUENCE OWNED BY;
--

ALTER SEQUENCE clients_id_seq OWNED BY clients.id;


--
-- Name: id; Type: DEFAULT;
--

ALTER TABLE ONLY clients ALTER COLUMN id SET DEFAULT nextval('clients_id_seq'::regclass);





--
-- Name: clients_pkey; Type: CONSTRAINT; 
--

ALTER TABLE ONLY clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);



--
-- PostgreSQL database dump complete
--

