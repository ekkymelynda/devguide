/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 10                       */
/* Created on:     6/30/2016 2:46:56 PM                         */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_POST_MEMILIKI_STATUS') then
    alter table POST
       delete foreign key FK_POST_MEMILIKI_STATUS
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_MEMPUNYAI_KATEGORI') then
    alter table POST
       delete foreign key FK_POST_MEMPUNYAI_KATEGORI
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_MENGELOLA_PENGGUNA') then
    alter table POST
       delete foreign key FK_POST_MENGELOLA_PENGGUNA
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_TERDIRI_BAB') then
    alter table POST
       delete foreign key FK_POST_TERDIRI_BAB
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_TERDIRI1_SUBBAB1') then
    alter table POST
       delete foreign key FK_POST_TERDIRI1_SUBBAB1
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_TERDIRI2_SUBBAB2') then
    alter table POST
       delete foreign key FK_POST_TERDIRI2_SUBBAB2
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POST_TERDIRI3_SUBBAB3') then
    alter table POST
       delete foreign key FK_POST_TERDIRI3_SUBBAB3
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='BAB_PK'
     and t.table_name='BAB'
) then
   drop index BAB.BAB_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='BAB'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table BAB
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='KATEGORI_PK'
     and t.table_name='KATEGORI'
) then
   drop index KATEGORI.KATEGORI_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='KATEGORI'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table KATEGORI
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='USER_PK'
     and t.table_name='PENGGUNA'
) then
   drop index PENGGUNA.USER_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PENGGUNA'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PENGGUNA
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TERDIRI3_FK'
     and t.table_name='POST'
) then
   drop index POST.TERDIRI3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TERDIRI2_FK'
     and t.table_name='POST'
) then
   drop index POST.TERDIRI2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TERDIRI1_FK'
     and t.table_name='POST'
) then
   drop index POST.TERDIRI1_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TERDIRI_FK'
     and t.table_name='POST'
) then
   drop index POST.TERDIRI_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='MEMILIKI_FK'
     and t.table_name='POST'
) then
   drop index POST.MEMILIKI_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='MEMPUNYAI_FK'
     and t.table_name='POST'
) then
   drop index POST.MEMPUNYAI_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='USER_MENGELOLA_FK'
     and t.table_name='POST'
) then
   drop index POST.USER_MENGELOLA_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POST_PK'
     and t.table_name='POST'
) then
   drop index POST.POST_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='POST'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table POST
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='STATUS_PK'
     and t.table_name='STATUS'
) then
   drop index STATUS.STATUS_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='STATUS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table STATUS
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SUBBAB1_PK'
     and t.table_name='SUBBAB1'
) then
   drop index SUBBAB1.SUBBAB1_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SUBBAB1'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SUBBAB1
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SUBBAB2_PK'
     and t.table_name='SUBBAB2'
) then
   drop index SUBBAB2.SUBBAB2_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SUBBAB2'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SUBBAB2
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SUBBAB3_PK'
     and t.table_name='SUBBAB3'
) then
   drop index SUBBAB3.SUBBAB3_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SUBBAB3'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SUBBAB3
end if;

/*==============================================================*/
/* Table: BAB                                                   */
/*==============================================================*/
create table BAB 
(
   ID_BAB               integer                        not null,
   NAMA_BAB             varchar(2147483647)            null,
   NO_BAB               varchar(555)                   null,
   constraint PK_BAB primary key (ID_BAB)
);

/*==============================================================*/
/* Index: BAB_PK                                                */
/*==============================================================*/
create unique index BAB_PK on BAB (
ID_BAB ASC
);

/*==============================================================*/
/* Table: KATEGORI                                              */
/*==============================================================*/
create table KATEGORI 
(
   ID_KTG               integer                        not null,
   NAMA_KTG             varchar(100)                   null,
   constraint PK_KATEGORI primary key (ID_KTG)
);

/*==============================================================*/
/* Index: KATEGORI_PK                                           */
/*==============================================================*/
create unique index KATEGORI_PK on KATEGORI (
ID_KTG ASC
);

/*==============================================================*/
/* Table: PENGGUNA                                              */
/*==============================================================*/
create table PENGGUNA 
(
   USERNAME_PGN         varchar(50)                    not null,
   PASSWORD_PGN         varchar(20)                    null,
   EMAIL_PGN            varchar(100)                   null,
   NOTLP_PGN            varchar(15)                    null,
   ALAMAT_PGN           varchar(200)                   null,
   JABATAN_PGN          varchar(50)                    null,
   constraint PK_PENGGUNA primary key (USERNAME_PGN)
);

/*==============================================================*/
/* Index: USER_PK                                               */
/*==============================================================*/
create unique index USER_PK on PENGGUNA (
USERNAME_PGN ASC
);

/*==============================================================*/
/* Table: POST                                                  */
/*==============================================================*/
create table POST 
(
   ID_PST               integer                        not null,
   ID_KTG               integer                        not null,
   ID_SBAB1             integer                        not null,
   ID_SBAB2             integer                        not null,
   ID_STS               integer                        not null,
   ID_BAB               integer                        not null,
   USERNAME_PGN         varchar(50)                    not null,
   ID_SBAB3             integer                        not null,
   JUDUL_PST            varchar(1000)                  null,
   ISI_PST              long varchar                   null,
   LINK_PST             varchar(1000)                  null,
   CREATE_PST           date                           null,
   UPDATE_PST           date                           null,
   constraint PK_POST primary key (ID_PST)
);

/*==============================================================*/
/* Index: POST_PK                                               */
/*==============================================================*/
create unique index POST_PK on POST (
ID_PST ASC
);

/*==============================================================*/
/* Index: USER_MENGELOLA_FK                                     */
/*==============================================================*/
create index USER_MENGELOLA_FK on POST (
USERNAME_PGN ASC
);

/*==============================================================*/
/* Index: MEMPUNYAI_FK                                          */
/*==============================================================*/
create index MEMPUNYAI_FK on POST (
ID_KTG ASC
);

/*==============================================================*/
/* Index: MEMILIKI_FK                                           */
/*==============================================================*/
create index MEMILIKI_FK on POST (
ID_STS ASC
);

/*==============================================================*/
/* Index: TERDIRI_FK                                            */
/*==============================================================*/
create index TERDIRI_FK on POST (
ID_BAB ASC
);

/*==============================================================*/
/* Index: TERDIRI1_FK                                           */
/*==============================================================*/
create index TERDIRI1_FK on POST (
ID_SBAB1 ASC
);

/*==============================================================*/
/* Index: TERDIRI2_FK                                           */
/*==============================================================*/
create index TERDIRI2_FK on POST (
ID_SBAB2 ASC
);

/*==============================================================*/
/* Index: TERDIRI3_FK                                           */
/*==============================================================*/
create index TERDIRI3_FK on POST (
ID_SBAB3 ASC
);

/*==============================================================*/
/* Table: STATUS                                                */
/*==============================================================*/
create table STATUS 
(
   ID_STS               integer                        not null,
   NAMA_STS             varchar(50)                    null,
   constraint PK_STATUS primary key (ID_STS)
);

/*==============================================================*/
/* Index: STATUS_PK                                             */
/*==============================================================*/
create unique index STATUS_PK on STATUS (
ID_STS ASC
);

/*==============================================================*/
/* Table: SUBBAB1                                               */
/*==============================================================*/
create table SUBBAB1 
(
   ID_SBAB1             integer                        not null,
   NAMA_SBAB1           varchar(2147483647)            null,
   NO_SBAB1             varchar(555)                   null,
   constraint PK_SUBBAB1 primary key (ID_SBAB1)
);

/*==============================================================*/
/* Index: SUBBAB1_PK                                            */
/*==============================================================*/
create unique index SUBBAB1_PK on SUBBAB1 (
ID_SBAB1 ASC
);

/*==============================================================*/
/* Table: SUBBAB2                                               */
/*==============================================================*/
create table SUBBAB2 
(
   ID_SBAB2             integer                        not null,
   NAMA_SBAB2           varchar(2147483647)            null,
   NO_SBAB2             varchar(555)                   null,
   constraint PK_SUBBAB2 primary key (ID_SBAB2)
);

/*==============================================================*/
/* Index: SUBBAB2_PK                                            */
/*==============================================================*/
create unique index SUBBAB2_PK on SUBBAB2 (
ID_SBAB2 ASC
);

/*==============================================================*/
/* Table: SUBBAB3                                               */
/*==============================================================*/
create table SUBBAB3 
(
   ID_SBAB3             integer                        not null,
   NAMA_SBAB3           varchar(2147483647)            null,
   NO_SBAB3             varchar(555)                   null,
   constraint PK_SUBBAB3 primary key (ID_SBAB3)
);

/*==============================================================*/
/* Index: SUBBAB3_PK                                            */
/*==============================================================*/
create unique index SUBBAB3_PK on SUBBAB3 (
ID_SBAB3 ASC
);

alter table POST
   add constraint FK_POST_MEMILIKI_STATUS foreign key (ID_STS)
      references STATUS (ID_STS)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_MEMPUNYAI_KATEGORI foreign key (ID_KTG)
      references KATEGORI (ID_KTG)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_MENGELOLA_PENGGUNA foreign key (USERNAME_PGN)
      references PENGGUNA (USERNAME_PGN)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_TERDIRI_BAB foreign key (ID_BAB)
      references BAB (ID_BAB)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_TERDIRI1_SUBBAB1 foreign key (ID_SBAB1)
      references SUBBAB1 (ID_SBAB1)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_TERDIRI2_SUBBAB2 foreign key (ID_SBAB2)
      references SUBBAB2 (ID_SBAB2)
      on update restrict
      on delete restrict;

alter table POST
   add constraint FK_POST_TERDIRI3_SUBBAB3 foreign key (ID_SBAB3)
      references SUBBAB3 (ID_SBAB3)
      on update restrict
      on delete restrict;

