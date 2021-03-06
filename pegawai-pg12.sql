PGDMP     .                    y            pegawai    12.0    12.0 6    R           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            S           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            T           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            U           1262    24601    pegawai    DATABASE     ?   CREATE DATABASE pegawai WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
    DROP DATABASE pegawai;
                postgres    false            ?            1259    24665    document_file    TABLE     ?   CREATE TABLE public.document_file (
    file_id integer NOT NULL,
    file_name character varying(255),
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    deleted_at timestamp without time zone
);
 !   DROP TABLE public.document_file;
       public         heap    postgres    false            ?            1259    24663    document_file_file_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.document_file_file_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.document_file_file_id_seq;
       public          postgres    false    209            V           0    0    document_file_file_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.document_file_file_id_seq OWNED BY public.document_file.file_id;
          public          postgres    false    208            ?            1259    24645    employee    TABLE     7  CREATE TABLE public.employee (
    employee_id integer NOT NULL,
    name character varying(255),
    "position" character varying(255),
    join_date date,
    salary integer,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    deleted_at timestamp without time zone
);
    DROP TABLE public.employee;
       public         heap    postgres    false            ?            1259    24643    employee_employee_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.employee_employee_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.employee_employee_id_seq;
       public          postgres    false    207            W           0    0    employee_employee_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.employee_employee_id_seq OWNED BY public.employee.employee_id;
          public          postgres    false    206            ?            1259    24770    failed_jobs    TABLE     ?   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            ?            1259    24768    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    214            X           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    213            ?            1259    24604 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            ?            1259    24602    migrations_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    203            Y           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    202            ?            1259    24780    notifications    TABLE     `  CREATE TABLE public.notifications (
    id uuid NOT NULL,
    type character varying(255) NOT NULL,
    notifiable_type character varying(255) NOT NULL,
    notifiable_id bigint NOT NULL,
    data text NOT NULL,
    read_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.notifications;
       public         heap    postgres    false            ?            1259    24761    password_resets    TABLE     ?   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            ?            1259    24612    pegawai    TABLE     ?   CREATE TABLE public.pegawai (
    id bigint NOT NULL,
    nama character varying(255),
    alamat text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pegawai;
       public         heap    postgres    false            ?            1259    24610    pegawai_id_seq    SEQUENCE     w   CREATE SEQUENCE public.pegawai_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.pegawai_id_seq;
       public          postgres    false    205            Z           0    0    pegawai_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.pegawai_id_seq OWNED BY public.pegawai.id;
          public          postgres    false    204            ?            1259    24750    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            ?            1259    24748    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    211            [           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    210            ?
           2604    24668    document_file file_id    DEFAULT     ~   ALTER TABLE ONLY public.document_file ALTER COLUMN file_id SET DEFAULT nextval('public.document_file_file_id_seq'::regclass);
 D   ALTER TABLE public.document_file ALTER COLUMN file_id DROP DEFAULT;
       public          postgres    false    209    208    209            ?
           2604    24648    employee employee_id    DEFAULT     |   ALTER TABLE ONLY public.employee ALTER COLUMN employee_id SET DEFAULT nextval('public.employee_employee_id_seq'::regclass);
 C   ALTER TABLE public.employee ALTER COLUMN employee_id DROP DEFAULT;
       public          postgres    false    207    206    207            ?
           2604    24773    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    214    214            ?
           2604    24607    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203            ?
           2604    24615 
   pegawai id    DEFAULT     h   ALTER TABLE ONLY public.pegawai ALTER COLUMN id SET DEFAULT nextval('public.pegawai_id_seq'::regclass);
 9   ALTER TABLE public.pegawai ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            ?
           2604    24753    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    211    211            I          0    24665    document_file 
   TABLE DATA           _   COPY public.document_file (file_id, file_name, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    209   >       G          0    24645    employee 
   TABLE DATA           x   COPY public.employee (employee_id, name, "position", join_date, salary, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    207   ?>       N          0    24770    failed_jobs 
   TABLE DATA           [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    214   ??       C          0    24604 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    203   ??       O          0    24780    notifications 
   TABLE DATA           x   COPY public.notifications (id, type, notifiable_type, notifiable_id, data, read_at, created_at, updated_at) FROM stdin;
    public          postgres    false    215   =@       L          0    24761    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    212   Z@       E          0    24612    pegawai 
   TABLE DATA           K   COPY public.pegawai (id, nama, alamat, created_at, updated_at) FROM stdin;
    public          postgres    false    205   w@       K          0    24750    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    211   ,A       \           0    0    document_file_file_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.document_file_file_id_seq', 4, true);
          public          postgres    false    208            ]           0    0    employee_employee_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.employee_employee_id_seq', 1, false);
          public          postgres    false    206            ^           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    213            _           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 5, true);
          public          postgres    false    202            `           0    0    pegawai_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pegawai_id_seq', 6, true);
          public          postgres    false    204            a           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    210            ?
           2606    24670     document_file document_file_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.document_file
    ADD CONSTRAINT document_file_pkey PRIMARY KEY (file_id);
 J   ALTER TABLE ONLY public.document_file DROP CONSTRAINT document_file_pkey;
       public            postgres    false    209            ?
           2606    24653    employee employee_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.employee
    ADD CONSTRAINT employee_pkey PRIMARY KEY (employee_id);
 @   ALTER TABLE ONLY public.employee DROP CONSTRAINT employee_pkey;
       public            postgres    false    207            ?
           2606    24779    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    214            ?
           2606    24609    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    203            ?
           2606    24788     notifications notifications_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.notifications
    ADD CONSTRAINT notifications_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.notifications DROP CONSTRAINT notifications_pkey;
       public            postgres    false    215            ?
           2606    24620    pegawai pegawai_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.pegawai
    ADD CONSTRAINT pegawai_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.pegawai DROP CONSTRAINT pegawai_pkey;
       public            postgres    false    205            ?
           2606    24760    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    211            ?
           2606    24758    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    211            ?
           1259    24786 1   notifications_notifiable_type_notifiable_id_index    INDEX     ?   CREATE INDEX notifications_notifiable_type_notifiable_id_index ON public.notifications USING btree (notifiable_type, notifiable_id);
 E   DROP INDEX public.notifications_notifiable_type_notifiable_id_index;
       public            postgres    false    215    215            ?
           1259    24767    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    212            I   {   x?e˱
?0 ?9?
??ri?^V?n??r4?"X	U???H??Py?"??@99x?715??Ё?p8AH?j?>???B?BD׍Wy?z_NL?'????p?8s}?vas????c[??Z??<(?      G   ?   x?]????@ k?+?@IH??NH ^?DC?
֞?⍼??'???r;??3?#?b???&*?̏T??X)?i???b??P??????IK+???D?(??Ĭ???J?V???P?t???4?&?+??ck???-v-???f????EOg?/`e=6f??xi?;+WTb?VDr???{?lxN??????,H???7:???=??$y??\      N      x?????? ? ?      C   ?   x?U?K?0D??0??O?w?42`?T??$?/T?(^?f?ӘK?@
 ?;???Eb?Ʈ-{0?-?s??JU????*???5??8K)K?=????7??b˃2H??3?;?????u$?~??jb'5?i?'c??Bz      O      x?????? ? ?      L      x?????? ? ?      E   ?   x?m??
?@E뙯?Df?l???[(b?f%/م$???5p??9\?nh'?p?A?Y??q?@?'??ߞ?E?R??tB???l?a?{???&???Ψ?ja??o?On?/?ڮ???sCdH}?6ℕ??ceu86?.'[??,jl?)???l4?1?7????<?      K      x?????? ? ?     