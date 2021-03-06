USE [WEBSHOP]
GO

DELETE PRODUCT_GERELATEERD_PRODUCT
DELETE PRODUCT
DELETE GEBRUIKER
DELETE PRODUCT
DELETE MERK

INSERT [dbo].[MERK] ([MERKNAAM]) VALUES ('Calvin Klein')
INSERT [dbo].[MERK] ([MERKNAAM]) VALUES ('Ralph Lauren')
INSERT [dbo].[MERK] ([MERKNAAM]) VALUES ('Hugo Boss')

SET IDENTITY_INSERT PRODUCT ON

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (10, 'FITTED PANTALON ANTRACIET','Deze fitted pantalon van Calvin Klein is gemaakt van een hoogwaardige katoenblend. Het slank gesneden model is uitgevoerd in een stijlvolle antracietkleur met een zeer subtiele glans. Verder is de broek voorzien van een ritssluiting met een blinde sluiting, twee steekzakken aan de voorzijde en twee paspelzakken met een knoop aan de achterzijde.', 'Calvin Klein', CAST(189.00 AS Numeric(8, 2)), NULL, 'images/calvin-pantalon.jpg', 'plaatjes/afbeeldingA-klein.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (11, 'DONKERBLAUW BOMBERJACK', 'Het donkerblauwe bomberjack van Calvin Klein heeft een stijlvolle uitstraling door het gebruik van satijn. Daarbij is het glanzende model uitgerust met bijzondere details, zoals de getapete ritssluiting. Het jack is afgewerkt met een geribde V-halslijn.', 'Calvin Klein', CAST(329.00 AS Numeric(8, 2)), 33, 'images/calvin-bomberjack.jpg', 'images/calvin-bomberjack.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (13, 'EXTRA SLIM FIT OVERHEMD', 'Dit tijdloos zwarte overhemd van Calvin Klein is gemaakt van katoenstretch voor optimaal comfort. Het luchtige Rome-model heeft een extra slim fit en is uitgerust met een cut away-boord en uitneembare baleinen. Verder is het kledingstuk afgewerkt met glanzende knopen en een verstevigd manchet.', 'Calvin Klein', CAST(69.00 AS Numeric(8, 2)), 3, 'images/calvin-overhemd.jpg', 'images/calvin-overhemd.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (14, 'OVERHEMD MET ROOD RUITDESSIN', 'Flanellen overhemd met rood ruitdessin van Polo Ralph Lauren. Dit slim fit model is vervaardigd uit een comfortabele katoenkwaliteit en is uitgevoerd met een geborstelde finish. Het overhemd heeft een casual button down-kraag, verstevigde mouwboorden, een flatterend afgeronde zoom en een stijlvolle stolpplooi aan de achterzijde.', 'Ralph Lauren', CAST(119.00 AS Numeric(8, 2)), 993, 'images/ralph-overhemd.jpg', 'images/ralph-overhemd.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (15, 'HOODED SWEATVEST IN ROOD', 'Hooded sweatvest van Polo Ralph Lauren in rood. Het casual model is voorzien van een ruime capuchon met trekkoorden, sluit met een blinde ritssluiting en is uitgerust met twee schuine steekzakken. Het sweatvest is vervaardigd uit hoogwaardig katoen en is afgewerkt met een geborduurd merklogo aan de voorzijde.', 'Ralph Lauren', CAST(139.00 AS Numeric(8, 2)), 45, 'images/ralph-sweatvest.jpg', 'images/ralph-sweatvest.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (16, 'CUSTOM FIT T-SHIRT IN BLAUW', 'Custom fit T-shirt van Polo Ralph Lauren in blauw. Het basic model is vervaardigd uit hoogwaardig katoen, is voorzien van een ronde halslijn met geribde boord en afgewerkt met een geborduurd merklogo ter hoogte van de borst.', 'Ralph Lauren', CAST(49.00 AS Numeric(8, 2)), 47, 'images/ralph-shirt.jpg', 'images/ralph-shirt.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (17, 'MORGANY CROSSBODYTAS ZWART', 'Echte leren tas uit onze nieuwe lente collectie. zowel voor mannen als vrouwen. past perfect bij jouw neppe Barce trainingspak en neppe Gucci pet.', 'Hugo Boss', CAST(79.00 AS Numeric(8, 2)), 996, 'images/hugo-tas.jpg', 'images/hugo-tas.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (34, 'HERENHORLOGE', 'Herenhorloge van BOSS met een zwarte leren band. Model: HB1512919.', 'Hugo Boss', CAST(299.00 AS Numeric(8, 2)), 5, 'images/hugo-horloge.jpg', 'images/hugo-horloge.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (35, 'Nox-T slim fit colbert ', 'Nox-T slim fit colbert van BOSS in donkerblauw. Dit model is gemaakt van katoenstretch voor extra comfort. Het bijzondere jasje is uitgerust met een single breasted-sluiting en twee knopen. Daarbij is het kledingstuk voorzien van een gilet met fijn motief. Deze is niet uitneembaar. Verder is het model afgewerkt met een strookzak voor het pochet en een tweetal klepzakken.', 'Hugo Boss', CAST(429.00 AS Numeric(8, 2)), 33, 'images/hugo-colbert.jpg', 'images/hugo-colbert.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (36, 'Arpino 45 slim fit polo', 'De slim fit polo met de merknaam Arpino 45 van BOSS is gemaakt van gemerceriseerd katoen voor een extra gladde en luxe uitstraling. Daarbij is het rode model uitgerust met een ingeweven motief in een witte contrastkleur. Het kledingstuk is afgewerkt met een uni kraag, twee knopen en een inkeping aan weerszijden.', 'Hugo Boss', CAST(129.00 AS Numeric(8, 2)), 25, 'images/hugo-polo.jpg', 'images/hugo-polo.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (37, 'Katoenen pullover', 'Van katoen gemaakte pullover van Calvin Klein Jeans. Het fijn gebreide model is vervaardigd uit hoogwaardig materiaal en hierdoor voelt de pullover erg zacht aan. Langs de uiteinden is de pullover voorzien van ribgebreide boorden en het exemplaar is afgewerkt met een merkapplicatie aan de linker onderzijde.', 'Calvin Klein', CAST(109.00 AS Numeric(8, 2)), NULL, 'images/calvin-pullover.jpg', 'images/calvin-pullover.jpg')
INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [MERK], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) VALUES (38, 'Unisex Zonnebril', 'Deze tijdloze aviator van Calvin Klein Jeans is randloos en heeft de kenmerkende aviator neusbrug. De metalen veren hebben een vintage finish gekregen en de Calvin Klein Jeans initialen staan op beide veren vermeld. De zonnebril wordt geleverd in een opbergetui met een brillendoekje. Model: CKJ1028.','Calvin Klein',  CAST(119.00 AS Numeric(8, 2)), NULL, 'images/calvin-zonnebril.jpg', 'images/calvin-zonnebril.jpg')

SET IDENTITY_INSERT PRODUCT OFF

INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 13)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 13)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 16)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (17, 36)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 34)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 35)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (36, 37)

INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'barabas', N'Professor', NULL, N'Barabas', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', N'teletijdmachine')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'franka', N'Frank', NULL, N'Francesca Victoria', N'Museumstraat', 1, N'4920DD', N'Groterdam', N'franka@striphelden.eu', N'v', N'Bars')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'pietjepuk', N'Pietje', NULL, N'Puk', N'Postlaan', 6, N'3453AA', N'Keteldorp ', N'pietjepuk@pttpost.nl', N'm', N'spitsoor')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'wdviking', N'Wicky', N'de', N'Viking', N'Whalhalla', 87, N'4326BB', N'Flake', N'wicky@halmar.com', N'm', N'ylvi')

INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 17)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (37, 17)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 37)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 36)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (38, 35)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 17)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 10)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (35, 34)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 37)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 38)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (34, 15)

USE MASTER
GO
