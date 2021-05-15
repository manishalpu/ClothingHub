


create table fashion_designers
    (id int primary key auto_increment, 
    designer_name varchar(100) not null, 
    designer_address varchar(200) not null);
insert into 
    fashion_designers(designer_name, designer_address ) 
    values('Coco Chanel', 'California');
insert into 
    fashion_designers(designer_name, designer_address )
    values('Calvin Klein', '2, Nelson Mandela Marg, Vasant Kunj II, Vasant Kunj, New Delhi');
insert into 
    fashion_designers(designer_name, designer_address ) 
    values('Tom Ford', 'New York City');







create table collections
    (id int primary key auto_increment, 
        collectionName varchar(100) not null
    );
insert into collections
    (collectionName) 
        values('Summer';
insert into 
    collections(collectionName, setofCloths ) 
        values('Spring');
insert into 
    collections(collectionName, setofCloths ) 
        values('winter');
insert into 
    collections(collectionName, setofCloths ) 
        values('Off Season');
insert into 
    collections(collectionName, setofCloths ) 
        values('Rainy');



create table customers(id int primary key auto_increment, CustomerName varchar(100) not null, address varchar(200) not null, city char(20) not null, phoneNumnber BigInt not null);

create table users(id int primary key auto_increment, email varchar(100), password varchar(10), customerId int not null, FOREIGN KEY(customerId) references customers(id));

create table orders(id int primary key auto_increment, userId int, clothId int,
    foreign key(userId) references users(id), foreign key(clothId) references clothing(id));



create table gender_enum(id int primary key auto_increment, gender_name varchar(10));
insert into gender_enum(gender_name) values('Male');
insert into gender_enum(gender_name) values('Female');
insert into gender_enum(gender_name) values('Unisex');

create table wear_category(id int primary key auto_increment, category_name varchar(100));
insert into wear_category(category_name) values ('Top Wear');
insert into wear_category(category_name) values ('Bottom Wear');
insert into wear_category(category_name) values ('Suits');
insert into wear_category(category_name) values ('Winter Wear');
insert into wear_category(category_name) values ('Ethnic Wear');
insert into wear_category(category_name) values ('Foot Wear');
insert into wear_category(category_name) values ('Dresses');
insert into wear_category(category_name) values ('Jeans');

create table clothing
	(id int primary key auto_increment, wear_name varchar(100), wear_description varchar(300),
    Gender int, collectionId int, fashion_designer_id int, price int,
    categoryId int, available_pieces int,
    foreign key(categoryId) references wear_category(id),
    foreign key(Gender) references gender_enum(id), foreign key(collectionId) references collections(id), 
    foreign key(fashion_designer_id) references fashion_designers(id));



insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('aadiCasualLongBoots.jpeg', 'Awesome boots for wearing during winter season high neck boots',
        1, 3, 3, 1500, 6, 20);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values   
        ('BlackberrysSuitSolidMenSuit.jpeg', 'Black Suit with Formal look and style',
        1, 4, 2, 2500, 3, 10);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('BlackPantsBottomWear.jpeg', 'Black Pants, good looking and fit style.',
        1, 2, 1, 1000, 2, 20);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('CoatsSet.jpg', 'The Collection of Simple but stylish Designer Coats which can be wear for casual event or formal event',
        3, 3, 2, 3000, 3, 10);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('ElepantsMenSolidCottonBlendStraightKurta.jpeg', 'White kurta to wear for the formal or ethnic events.',
        1, 1, 3, 600, 5, 9);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('FullSleeveSolidMenSweatshirt.jpeg', 'Grey color sweat shirt to make a look better and ever',
        3, 3, 1, 800, 4, 7);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('ParkAvenueBandhgalaSuitSolidMenSuit.jpeg', 'Formal and stylish look with Ethinic Taste',
        1, 3, 2, 1500, 4, 4);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('ParkRunningShoes.jpeg', 'for Running and Casual, these boots can help you walk smoothly',
        3, 1, 2, 1200, 6, 5);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('ProEthicMenSolidCottonBlend.jpeg', 'The Red Ethnic Wear for marriage or such formal Events.',
        1, 2, 3, 2000, 5, 6);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('SlimMenDarkBlueJeansBottomWear.jpeg', 'Jeans for men to wear.',
        1, 1, 3, 700, 8, 10);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('StripedMenHoodedTopWear.jpeg', 'Top Wear for men/women to wear.',
        1, 5, 1, 500, 1, 5);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('TRIPRSweatShirtBlue.jpeg', 'Blue coloured Sweat Shirt for look and style',
        1, 4, 2, 850, 1, 5);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('CasualRegularSleeveCheckeredWomenWhite,Black,GreyTop.jpeg', 'Beautiful Stylish Top wear for ladies to wear',
        2, 1, 2, 450, 1, 10);

insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('DaevishWomenSkaterBlackDress.jpeg', 'Black Dress for casual wear, to be wear on formal or casual look',
        2, 2, 1, 650, 7, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('DillingerPrintedWomenRoundNeckDarkBlueT-Shirt.jpeg', 'T-Shirt with style and with accent of casual wear.',
        2, 4, 3, 350, 1, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Flip Flops.jpeg', 'High Sandals, good looking.',
        2, 4, 1, 550, 6, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Full Sleeve Self Design Women Quilted Jacket.jpeg', 'Black Jacker which can be work in winters or summer.',
        2, 2, 3, 750, 3, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Full Sleeve Solid Women Denim Jacket.jpeg', 'Full Sleave Solid Jacket, stylish and awesome .',
        2, 3, 1, 680, 4, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('GodBlessCasualPetalSleeveSolidWomenMaroonTop.jpeg', 'God Bless, Casual Look petal sleeve Top for women .',
        2, 3, 2, 500, 1, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Jogger Fit Women Dark Blue Jeans.jpeg', 'Dark blue jeans for women dressing casual or events.',
        2, 1, 3, 400, 8, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('MissChaseWomen Maxi Brown Dress.jpeg', 'Maxi Dress for Events or formal occasions.',
        2, 2, 2, 900, 7, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Perfect Stylish Girls Casual Shoes Sneakers For Women  (White).jpeg', 'White Boots for Jogging or Casual.',
        2, 1, 1, 300, 6, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Printed, Floral Print Fashion Lycra Blend Saree  (Maroon, Black).jpeg', 'Printed Floarat Design Saree',
        2, 2, 2, 1200, 5, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Skinny Women Blue Jeans.jpeg', 'Skinny Jeans for women, can be worn casual.',
        2, 3, 3, 800, 8, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Slim Women Black Jeans.jpeg', 'Jeans for Slim Fitting.',
        2, 2, 2, 600, 8, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Solid Fashion Lycra Blend Saree  (Purple).jpeg', 'Solid Fashion Saree for formal events.',
        2, 1, 1, 800, 5, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('SolidWomenRoundNeckRedT-Shirt.jpeg', 'Solid Coloured Top Shirt for women.',
        2, 1, 2, 300, 1, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Street9WomenSolidMaxiDress.png', 'Dress for Women, Stylish and Beautiful looking dress.',
        2, 2, 2, 500, 7, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('WhiteSneekerForWomen.jpeg', 'Stylish Casual Sports Shoe Sneakers For Women Sneakers For Women  (White).',
        2, 3, 3, 700, 6, 10);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Women Fit and Flare Black Dress.jpeg', 'Women Fit and Flare Black Dress For Women  (Black).',
        2, 2, 2, 600, 7, 2);
insert into clothing(wear_name, wear_description, Gender, collectionId, fashion_designer_id, price, categoryId, available_pieces) values 
		('Women Straight Half Sleeve Multicolor Shrug.jpeg', 'Women Straight Half Sleeve Multicolor Shrug For Women  (Red).',
        2, 4, 3, 800, 5, 2);

