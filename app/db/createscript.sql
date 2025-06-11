     -- Step: 01
     -- ***************************************************************
     -- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408B
     -- ***************************************************************
     -- Versie       Datum           Auteur              Omschrijving
     -- ******       *****           ******              ************
     -- 01           13-11-2024      Arjan de Ruijter    Smartphones
     -- ***************************************************************

     -- Verwijder database Mvc_smartphone_2408B
     DROP DATABASE IF EXISTS `Mvc_smartphone_2408B`;

     -- Maak een nieuwe database aan Mvc_smartphone_2408B
     CREATE DATABASE `Mvc_smartphone_2408B`;

     -- Gebruik database Mvc_smartphone_2408B
     USE `Mvc_smartphone_2408B`;

-- Step: 04
     -- *****************************************************************************************************
     -- Doel : Maak een nieuwe tabel aan met de naam Sneakers
     -- *****************************************************************************************************
     -- Versie       Datum           Auteur              Omschrijving
     -- ******       *****           ******              ************
     -- 01           18-02-2025      Arjan de Ruijter    Tabel Sneakers
     -- *****************************************************************************************************
     -- Onderstaande velden toevoegen aan de tabel Sneakers
     -- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
     -- *****************************************************************************************************

     CREATE TABLE Sneakers
     (
          Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
     ,Merk               VARCHAR(50)                 NOT NULL
     ,Model              VARCHAR(50)                 NOT NULL
     ,Type               VARCHAR(25)                 NOT NULL	
     ,Prijs              DECIMAL(6,2)                NOT NULL
     ,IsActief           BIT                         NOT NULL        DEFAULT 1
     ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
     ,DatumAangemaakt    DATETIME(6)                 NOT NULL
     ,DatumGewijzigd     DATETIME(6)                 NOT NULL
     ,CONSTRAINT         PK_Sneakers_Id    PRIMARY KEY     CLUSTERED(Id)
     ) ENGINE=InnoDB;

     -- Step: 05
     -- *****************************************************************
     -- Doel : Vul de tabel Sneakers met gegevens
     -- *****************************************************************
     -- Versie       Datum           Auteur              Omschrijving
     -- ******       *****           ******              ************
     -- 01           18-02-2025      Arjan de Ruijter    Vulling Sneakers
     -- *****************************************************************

     INSERT INTO Sneakers
     (
          Merk
          ,Model
          ,Type
          ,Prijs
          ,IsActief
          ,Opmerking
          ,DatumAangemaakt
          ,DatumGewijzigd
     )
     VALUES
          ('Nike', 'Air Jordan 1', 'Basketbal', 180, 1, NULL, SYSDATE(6), SYSDATE(6)),
          ('Adidas', 'Yeezy Boost 350', 'Casual', 220, 1, NULL, SYSDATE(6), SYSDATE(6)),
          ('New Balance', 'Fresh Foam 1080', 'Hardloop', 160, 1, NULL, SYSDATE(6), SYSDATE(6));
