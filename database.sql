-- reg{ date+month+year+hour+min+sec }
-- create database mcq2_db;
use mcq2_db;
CREATE TABLE `subjects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO subjects (subject_name) VALUES
("GK"),
("Computer"),
("History"),
("Maths"),
("PHP");

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


create table register(
  id BIGINT Primary Key
  ,name varchar(255)
  ,regestration_no varchar(255)
  ,section varchar(10)
);


CREATE TABLE `questions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `ans` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO questions (question, subject_id, option1, option2, option3, option4, ans) VALUES
("What is the capital of France?", 1, "Paris", "London", "Rome", "Berlin", 1),
("Which planet is known as the Red Planet?", 1, "Earth", "Mars", "Jupiter", "Venus", 2),
("Who wrote 'Romeo and Juliet'?", 1, "Mark Twain", "Charles Dickens", "William Shakespeare", "Leo Tolstoy", 3),
("What is the largest mammal?", 1, "Elephant", "Blue Whale", "Giraffe", "Polar Bear", 2),
("Which is the smallest continent?", 1, "Australia", "Europe", "Antarctica", "South America", 1),
("Who painted the Mona Lisa?", 1, "Pablo Picasso", "Vincent van Gogh", "Leonardo da Vinci", "Claude Monet", 3),
("What is the hardest natural substance on Earth?", 1, "Gold", "Iron", "Diamond", "Silver", 3),
("What is the boiling point of water?", 1, "90�C", "100�C", "120�C", "80�C", 2),
("Which ocean is the largest?", 1, "Atlantic", "Indian", "Arctic", "Pacific", 4),
("Who discovered penicillin?", 1, "Marie Curie", "Albert Einstein", "Alexander Fleming", "Isaac Newton", 3),
("What is the square root of 64?", 1, "6", "7", "8", "9", 3),
("Which country has the largest population?", 1, "India", "United States", "China", "Russia", 3),
("In which year did World War I begin?", 1, "1914", "1918", "1939", "1945", 1),
("What is the chemical symbol for gold?", 1, "Ag", "Au", "Fe", "Pb", 2),
("Which planet is closest to the Sun?", 1, "Mercury", "Venus", "Earth", "Mars", 1),
("Who invented the telephone?", 1, "Albert Einstein", "Alexander Graham Bell", "Thomas Edison", "Nikola Tesla", 2),
("What is the longest river in the world?", 1, "Amazon", "Nile", "Yangtze", "Mississippi", 2),
("Which element has the atomic number 1?", 1, "Oxygen", "Carbon", "Hydrogen", "Nitrogen", 3),
("Who was the first man to step on the Moon?", 1, "Yuri Gagarin", "Neil Armstrong", "Buzz Aldrin", "Michael Collins", 2),
("How many continents are there?", 1, "5", "6", "7", "8", 3),
("Which gas do plants absorb from the atmosphere?", 1, "Oxygen", "Carbon Dioxide", "Nitrogen", "Methane", 2),
("What is the smallest unit of life?", 1, "Organ", "Tissue", "Cell", "Organism", 3),
("Which is the largest desert in the world?", 1, "Sahara", "Gobi", "Arabian", "Kalahari", 1),
("Who is known as the father of computers?", 1, "Charles Babbage", "Alan Turing", "Bill Gates", "Steve Jobs", 1),
("Which is the fastest land animal?", 1, "Lion", "Cheetah", "Horse", "Eagle", 2),
("What is the capital of Japan?", 1, "Seoul", "Tokyo", "Beijing", "Shanghai", 2),
("What is the largest bone in the human body?", 1, "Femur", "Skull", "Spine", "Rib", 1),
("Which planet is known as the Earth's twin?", 1, "Mars", "Venus", "Jupiter", "Saturn", 2),
("Who developed the theory of relativity?", 1, "Isaac Newton", "Galileo Galilei", "Albert Einstein", "Nikola Tesla", 3),
("Which vitamin is produced when a person is exposed to sunlight?", 1, "Vitamin A", "Vitamin B", "Vitamin C", "Vitamin D", 4),
("What is the primary language spoken in Brazil?", 1, "Spanish", "French", "Portuguese", "English", 3),
("Which country is the largest in the world by area?", 1, "United States", "China", "Russia", "Canada", 3),
("How many colors are there in a rainbow?", 1, "5", "6", "7", "8", 3),
("What is the process by which plants make their food?", 1, "Osmosis", "Respiration", "Photosynthesis", "Transpiration", 3),
("What is the most spoken language in the world?", 1, "English", "Mandarin", "Spanish", "Hindi", 2),
("In which continent is Egypt located?", 1, "Asia", "Africa", "Europe", "South America", 2),
("Who was the first President of the United States?", 1, "George Washington", "Thomas Jefferson", "Abraham Lincoln", "John Adams", 1),
("__ Mosquito Bites",1,"Female","Male","Both","knowledgeable",1),
("What is the capital of Canada?", 1, "Toronto", "Vancouver", "Ottawa", "Montreal", 3),
("How many bones are there in the human body?", 1, "204", "206", "208", "210", 2),
("Who discovered gravity?", 1, "Albert Einstein", "Isaac Newton", "Galileo Galilei", "Nicolaus Copernicus", 2),
("What is the largest island in the world?", 1, "Greenland", "Australia", "Borneo", "Madagascar", 1),
("Which metal is liquid at room temperature?", 1, "Gold", "Mercury", "Silver", "Iron", 2),
("Which is the largest organ in the human body?", 1, "Heart", "Liver", "Brain", "Skin", 4),
("How many players are there in a soccer team?", 1, "9", "10", "11", "12", 3),
("What is the currency of Japan?", 1, "Won", "Yen", "Yuan", "Ringgit", 2),
("Who painted the ceiling of the Sistine Chapel?", 1, "Leonardo da Vinci", "Michelangelo", "Raphael", "Donatello", 2),
("Which is the tallest mountain in the world?", 1, "K2", "Mount Everest", "Kangchenjunga", "Makalu", 2),
("Who invented the light bulb?", 1, "Albert Einstein", "Nikola Tesla", "Alexander Graham Bell", "Thomas Edison", 4),
("Full Form Of G.K", 1, "General Known Answers", "General Knowledge", "General Knock", "Good Known", 2);

INSERT INTO questions (question, subject_id, option1, option2, option3, option4, ans) VALUES
("Who is known as the father of computers?", 2, "Charles Babbage", "Alan Turing", "Bill Gates", "Steve Jobs", 1),
("Which device is used to input data into a computer?", 2, "Monitor", "Mouse", "Keyboard", "Printer", 3),
("What does CPU stand for?", 2, "Central Processing Unit", "Computer Personal Unit", "Control Processing Unit", "Central Print Unit", 1),
("Which of these is an example of an operating system?", 2, "Windows", "Photoshop", "Oracle", "Microsoft Office", 1),
("Which company developed the iPhone?", 2, "Google", "Microsoft", "Apple", "Samsung", 3),
("What does RAM stand for?", 2, "Read Access Memory", "Random Access Memory", "Randomly Accessed Memory", "Run Access Memory", 2),
("Which language is primarily used for web development?", 2, "Java", "Python", "HTML", "C++", 3),
("What is the brain of the computer?", 2, "Motherboard", "CPU", "RAM", "Hard Drive", 2),
("What does USB stand for?", 2, "Universal Serial Bus", "Universal System Bus", "Universal Service Board", "Universal Serial Board", 1),
("Which company is known for making the Windows operating system?", 2, "Apple", "Microsoft", "Google", "IBM", 2),
("What is the main function of the computer's operating system?", 2, "Managing hardware", "Running applications", "Networking", "All of the above", 4),
("Which programming language is used for artificial intelligence?", 2, "Python", "HTML", "CSS", "SQL", 1),
("Which key combination is used to copy text?", 2, "Ctrl + P", "Ctrl + V", "Ctrl + X", "Ctrl + C", 4),
("Which device is used to store data?", 2, "Monitor", "Keyboard", "Hard Drive", "Mouse", 3),
("Who founded Microsoft?", 2, "Steve Jobs", "Elon Musk", "Bill Gates", "Larry Page", 3),
("Which part of a computer is considered its 'memory'?", 2, "CPU", "RAM", "Motherboard", "Hard Drive", 2),
("What does HTTP stand for?", 2, "Hyper Text Transfer Protocol", "Hyper Text Transmission Protocol", "Hyper Text Transfer Platform", "Hyper Text Transfer Procedure", 1),
("Which storage device has the highest speed?", 2, "Hard Disk", "Solid State Drive (SSD)", "DVD", "USB", 2),
("What does GUI stand for?", 2, "General User Interface", "Graphical User Interface", "Graph User Interface", "Graphical Use Interface", 2),
("Which of the following is a search engine?", 2, "Linux", "Google", "Windows", "Yahoo", 2),
("What is the function of a compiler?", 2, "Runs a program", "Deletes files", "Translates code to machine language", "Saves files", 3),
("Which of these is NOT an input device?", 2, "Keyboard", "Mouse", "Printer", "Scanner", 3),
("Which company developed Android OS?", 2, "Apple", "Microsoft", "Google", "IBM", 3),
("What does IP stand for in computer networking?", 2, "Internet Protocol", "Internal Process", "Instant Protocol", "Internet Program", 1),
("Which technology is used to make telephone calls over the internet?", 2, "Fiber optics", "VoIP", "Modem", "Bluetooth", 2),
("What is the full form of Wi-Fi?", 2, "Wireless Fidelity", "Wired Fidelity", "Wireless Fiber", "Wide Fidelity", 1),
("Which file format is used for images?", 2, ".exe", ".jpg", ".docx", ".ppt", 2),
("What is the main page of a website called?", 2, "URL", "Home Page", "Server", "Index", 2),
("What is phishing?", 2, "Email scam", "Virus", "Firewall", "Antivirus software", 1),
("Which of these is a mobile operating system?", 2, "Linux", "Android", "Photoshop", "Windows", 2),
("Which device connects a computer to a network?", 2, "Modem", "Mouse", "Printer", "Keyboard", 1),
("What is BIOS?", 2, "Basic Input Output System", "Binary Internet Operating System", "Best Input Output System", "Basic Internal Output System", 1),
("Which programming language is used for Android development?", 2, "Swift", "Python", "Java", "Ruby", 3),
("What is the function of a firewall?", 2, "Enhances speed", "Protects against viruses", "Manages emails", "Blocks unauthorized access", 4),
("Which is a type of malware?", 2, "Windows", "Virus", "Mac", "Linux", 2),
("What is the binary equivalent of the decimal number 10?", 2, "1010", "1100", "1110", "1001", 1),
("Which device is used to output sound?", 2, "Monitor", "Speaker", "Keyboard", "Printer", 2),
("What does URL stand for?", 2, "Universal Resource Locator", "Uniform Resource Locator", "Uniform Reference Link", "Universal Reference Locator", 2),
("Which company owns the browser Chrome?", 2, "Microsoft", "Apple", "Mozilla", "Google", 4),
("What is the shortcut for pasting text?", 2, "Ctrl + C", "Ctrl + X", "Ctrl + V", "Ctrl + Z", 3),
("What type of file is a .mp3?", 2, "Video file", "Image file", "Audio file", "Text file", 3),
("Which is a command-line operating system?", 2, "Windows", "Linux", "iOS", "Android", 2),
("What is the main function of an IP address?", 2, "Identify a device on a network", "Store data", "Encrypt files", "Run applications", 1),
("Which language is primarily used for iOS development?", 2, "Python", "Swift", "Java", "C#", 2),
("What is the primary function of a router?", 2, "Store data", "Process data", "Direct network traffic", "Create graphics", 3),
("What does SSL stand for?", 2, "Secure Sockets Layer", "Secure System Level", "System Security Layer", "System Socket Level", 1),
("Which component is responsible for graphics?", 2, "CPU", "RAM", "GPU", "Motherboard", 3),
("What does FTP stand for?", 2, "File Transfer Protocol", "File Transmission Platform", "File Tracking Program", "Fast Transfer Process", 1),
("Which of these is an email protocol?", 2, "HTTP", "SMTP", "HTML", "FTP", 2),
("Which device is necessary for the internet connection?", 2, "Keyboard", "Modem", "Printer", "Monitor", 2),
("Which language is primarily used for database queries?", 2, "SQL", "Python", "HTML", "JavaScript", 1);

INSERT INTO questions (question, subject_id, option1, option2, option3, option4, ans) VALUES
("Who was the first President of the United States?", 3, "George Washington", "Thomas Jefferson", "Abraham Lincoln", "John Adams", 1),
("In which year did World War II end?", 3, "1941", "1945", "1950", "1939", 2),
("Who was the queen of England during the Spanish Armada?", 3, "Queen Victoria", "Queen Anne", "Queen Elizabeth I", "Mary, Queen of Scots", 3),
("Who was the first emperor of the Roman Empire?", 3, "Julius Caesar", "Nero", "Augustus", "Caligula", 3),
("Which ancient civilization built the pyramids?", 3, "Babylonians", "Egyptians", "Greeks", "Romans", 2),
("Who was assassinated on the Ides of March?", 3, "Alexander the Great", "Julius Caesar", "Augustus", "Nero", 2),
("Where did the Renaissance begin?", 3, "France", "Italy", "England", "Spain", 2),
("Who was the first person to circumnavigate the globe?", 3, "Christopher Columbus", "Ferdinand Magellan", "Vasco da Gama", "Marco Polo", 2),
("What was the name of the ship on which the Pilgrims traveled to America?", 3, "Santa Maria", "Mayflower", "Endeavour", "Victoria", 2),
("Which war was fought between the North and South regions in the United States?", 3, "American Revolution", "World War I", "The Civil War", "War of 1812", 3),
("Who was the main author of the Declaration of Independence?", 3, "John Adams", "Thomas Jefferson", "George Washington", "Benjamin Franklin", 2),
("Which empire was known as the 'land of the rising sun'?", 3, "China", "Egyptian Empire", "Roman Empire", "Japanese Empire", 4),
("Who led the famous march to the sea during the American Civil War?", 3, "Ulysses S. Grant", "Robert E. Lee", "William T. Sherman", "Stonewall Jackson", 3),
("Who was known as the 'Iron Lady'?", 3, "Angela Merkel", "Golda Meir", "Margaret Thatcher", "Indira Gandhi", 3),
("In what year did the Berlin Wall fall?", 3, "1987", "1989", "1991", "1993", 2),
("Who discovered America in 1492?", 3, "Marco Polo", "Leif Erikson", "Christopher Columbus", "Amerigo Vespucci", 3),
("Which civilization is known for its ziggurats?", 3, "Ancient Egypt", "Mesopotamia", "Ancient Greece", "Ancient China", 2),
("Who was the last queen of France before the French Revolution?", 3, "Marie Antoinette", "Catherine de Medici", "Eleanor of Aquitaine", "Joan of Arc", 1),
("Which empire was ruled by Genghis Khan?", 3, "Roman Empire", "Byzantine Empire", "Mongol Empire", "Ottoman Empire", 3),
("Who was the British Prime Minister during most of World War II?", 3, "Neville Chamberlain", "Winston Churchill", "Clement Attlee", "Anthony Eden", 2),
("What was the name of the ancient trade route between China and the Mediterranean?", 3, "The Silk Road", "The Spice Route", "The Amber Road", "The Royal Road", 1),
("Which war was fought between the British and the Zulu Kingdom in the late 19th century?", 3, "Boer War", "Zulu War", "Opium War", "Boxer Rebellion", 2),
("Who was the first ruler of a unified China?", 3, "Kublai Khan", "Mao Zedong", "Qin Shi Huang", "Sun Yat-sen", 3),
("Which city was the capital of the Byzantine Empire?", 3, "Rome", "Athens", "Constantinople", "Alexandria", 3),
("Which country gifted the Statue of Liberty to the United States?", 3, "France", "England", "Spain", "Italy", 1),
("Who was the longest-reigning British monarch before Queen Elizabeth II?", 3, "Queen Victoria", "King George III", "Queen Mary I", "King Henry VIII", 1),
("What was the primary purpose of the Great Wall of China?", 3, "Religious rituals", "Flood control", "Defense", "Trade", 3),
("Who was the leader of the Soviet Union during World War II?", 3, "Vladimir Lenin", "Leon Trotsky", "Joseph Stalin", "Nikita Khrushchev", 3),
("What event started World War I?", 3, "Treaty of Versailles", "Assassination of Archduke Franz Ferdinand", "German invasion of Poland", "Russian Revolution", 2),
("Which king of England had six wives?", 3, "King Henry V", "King Henry VI", "King Henry VIII", "King Edward VI", 3),
("Where was Napoleon Bonaparte finally defeated?", 3, "Leipzig", "Austerlitz", "Moscow", "Waterloo", 4),
("Who was the founder of the Ottoman Empire?", 3, "Osman I", "Suleiman the Magnificent", "Mehmed II", "Bayezid I", 1),
("What was the name of the first successful English colony in America?", 3, "Plymouth", "Jamestown", "Roanoke", "Salem", 2),
("Who was the Egyptian queen who had a relationship with Julius Caesar?", 3, "Nefertiti", "Hatshepsut", "Cleopatra", "Merneith", 3),
("What was the ancient Greek city known for its militaristic society?", 3, "Athens", "Sparta", "Corinth", "Thebes", 2),
("Who was the first female Prime Minister of the United Kingdom?", 3, "Theresa May", "Indira Gandhi", "Angela Merkel", "Margaret Thatcher", 4),
("Which city was destroyed by a volcanic eruption in AD 79?", 3, "Rome", "Pompeii", "Athens", "Carthage", 2),
("Which explorer is credited with discovering the Pacific Ocean?", 3, "Christopher Columbus", "Ferdinand Magellan", "Vasco Núñez de Balboa", "Hernán Cortés", 3),
("Who was known as the 'Sun King'?", 3, "Philip II of Spain", "Louis XIV of France", "Henry VIII of England", "Frederick the Great", 2),
("What was the capital of ancient Egypt?", 3, "Giza", "Thebes", "Alexandria", "Memphis", 2),
("Who invented the printing press?", 3, "Leonardo da Vinci", "Johannes Gutenberg", "Isaac Newton", "Galileo Galilei", 2),
("Which country was divided by a wall from 1961 to 1989?", 3, "South Korea", "Vietnam", "Germany", "Poland", 3),
("What is the name of the ship Charles Darwin traveled on for his research?", 3, "HMS Victory", "HMS Beagle", "HMS Endeavour", "HMS Resolution", 2),
("What year did the American Revolution officially end?", 3, "1776", "1781", "1783", "1791", 3),
("Who was the famous leader of the Mongol Empire?", 3, "Alexander the Great", "Genghis Khan", "Attila the Hun", "Kublai Khan", 2),
("Which civilization built the Machu Picchu?", 3, "Aztec", "Mayan", "Incan", "Olmec", 3),
("Which country was formerly known as Persia?", 3, "Iran", "Iraq", "Afghanistan", "Saudi Arabia", 1),
("Who was the first female Prime Minister of the United Kingdom?", 3, "Margaret Thatcher", "Golda Meir", "Indira Gandhi", "Ellen Johnson Sirleaf", 1),
("Which war was fought between the North and South regions of the United States?", 3, "World War I", "The Civil War", "Vietnam War", "The Revolutionary War", 2),
("In which year did the French Revolution begin?", 3, "1776", "1789", "1800", "1792", 2);

INSERT INTO questions (question, subject_id, option1, option2, option3, option4, ans) VALUES
("What is the square root of 16?", 4, "2", "4", "6", "8", 2),
("What is the result of 15 + 9?", 4, "24", "22", "23", "21", 2),
("What is the value of pi up to two decimal places?", 4, "3.12", "3.14", "3.16", "3.10", 2),
("What is 7 multiplied by 8?", 4, "54", "56", "58", "60", 2),
("What is 100 divided by 5?", 4, "15", "20", "25", "30", 2),
("What is the area of a rectangle with length 5 and width 10?", 4, "50", "55", "60", "45", 1),
("How many sides does a triangle have?", 4, "3", "4", "5", "6", 1),
("What is the sum of the angles in a triangle?", 4, "180°", "90°", "270°", "360°", 1),
("What is the perimeter of a square with a side length of 4?", 4, "12", "14", "16", "18", 3),
("What is the square of 11?", 4, "121", "110", "100", "111", 1),
("What is 20% of 50?", 4, "5", "10", "15", "20", 2),
("How many degrees are in a right angle?", 4, "90°", "180°", "360°", "45°", 1),
("What is the product of 12 and 12?", 4, "144", "120", "1440", "126", 1),
("What is 45 minus 9?", 4, "34", "35", "36", "37", 1),
("What is the value of 5 raised to the power of 2?", 4, "10", "25", "20", "30", 2),
("What is the sum of the first 10 prime numbers?", 4, "129", "130", "131", "132", 1),
("What is the area of a circle with radius 7?", 4, "49π", "44π", "50π", "48π", 1),
("What is the circumference of a circle with radius 3?", 4, "6π", "7π", "8π", "9π", 1),
("What is the value of 3 × 5 × 2?", 4, "28", "30", "32", "33", 2),
("What is the volume of a cube with side length 4?", 4, "64", "48", "60", "70", 1),
("What is the square root of 81?", 4, "9", "8", "7", "6", 1),
("What is the value of 7 raised to the power of 3?", 4, "343", "512", "196", "128", 1),
("What is the median of the numbers 3, 8, 5, 12, 7?", 4, "7", "8", "5", "6", 1),
("What is the greatest common divisor of 18 and 24?", 4, "6", "8", "12", "4", 1),
("What is the least common multiple of 4 and 6?", 4, "12", "18", "24", "30", 1),
("What is the sum of the angles in a quadrilateral?", 4, "360°", "180°", "270°", "450°", 1),
("What is the result of 100 minus 25?", 4, "50", "60", "75", "70", 3),
("What is 3 factorial (3!)?", 4, "6", "3", "9", "12", 1),
("What is the value of 5 + 5 × 5?", 4, "30", "35", "40", "45", 1),
("What is the area of a triangle with base 10 and height 4?", 4, "20", "25", "30", "35", 1),
("What is the sum of 45 and 55?", 4, "100", "90", "110", "120", 1),
("What is the result of 12 ÷ 4?", 4, "2", "3", "4", "5", 2),
("What is the value of 2 cubed?", 4, "6", "8", "10", "12", 2),
("What is the slope of a line with the equation y = 2x + 3?", 4, "2", "3", "1", "4", 1),
("What is the solution to the equation 3x = 12?", 4, "3", "4", "5", "6", 2),
("What is the square root of 49?", 4, "7", "8", "6", "5", 1),
("What is 15 × 15?", 4, "225", "150", "200", "175", 1),
("What is the area of a triangle with base 8 and height 5?", 4, "20", "30", "40", "50", 1);
INSERT INTO questions (question, subject_id, option1, option2, option3, option4, ans) VALUES
("What is the square root of 16?", 4, "2", "4", "6", "8", 2),
("What is the result of 15 + 9?", 4, "24", "22", "23", "21", 2),
("What is the value of pi up to two decimal places?", 4, "3.12", "3.14", "3.16", "3.10", 2),
("What is 7 multiplied by 8?", 4, "54", "56", "58", "60", 2),
("What is 100 divided by 5?", 4, "15", "20", "25", "30", 2),
("What is the area of a rectangle with length 5 and width 10?", 4, "50", "55", "60", "45", 1),
("How many sides does a triangle have?", 4, "3", "4", "5", "6", 1),
("What is the sum of the angles in a triangle?", 4, "180°", "90°", "270°", "360°", 1),
("What is the perimeter of a square with a side length of 4?", 4, "12", "14", "16", "18", 3),
("What is the square of 11?", 4, "121", "110", "100", "111", 1),
("What is 20% of 50?", 4, "5", "10", "15", "20", 2),
("How many degrees are in a right angle?", 4, "90°", "180°", "360°", "45°", 1),
("What is the product of 12 and 12?", 4, "144", "120", "1440", "126", 1),
("What is 45 minus 9?", 4, "34", "35", "36", "37", 1),
("What is the value of 5 raised to the power of 2?", 4, "10", "25", "20", "30", 2),
("What is the sum of the first 10 prime numbers?", 4, "129", "130", "131", "132", 1),
("What is the area of a circle with radius 7?", 4, "49π", "44π", "50π", "48π", 1),
("What is the circumference of a circle with radius 3?", 4, "6π", "7π", "8π", "9π", 1),
("What is the value of 3 × 5 × 2?", 4, "28", "30", "32", "33", 2),
("What is the volume of a cube with side length 4?", 4, "64", "48", "60", "70", 1),
("What is the square root of 81?", 4, "9", "8", "7", "6", 1),
("What is the value of 7 raised to the power of 3?", 4, "343", "512", "196", "128", 1),
("What is the median of the numbers 3, 8, 5, 12, 7?", 4, "7", "8", "5", "6", 1),
("What is the greatest common divisor of 18 and 24?", 4, "6", "8", "12", "4", 1),
("What is the least common multiple of 4 and 6?", 4, "12", "18", "24", "30", 1),
("What is the sum of the angles in a quadrilateral?", 4, "360°", "180°", "270°", "450°", 1),
("What is the result of 100 minus 25?", 4, "50", "60", "75", "70", 3),
("What is 3 factorial (3!)?", 4, "6", "3", "9", "12", 1),
("What is the value of 5 + 5 × 5?", 4, "30", "35", "40", "45", 1),
("What is the area of a triangle with base 10 and height 4?", 4, "20", "25", "30", "35", 1),
("What is the sum of 45 and 55?", 4, "100", "90", "110", "120", 1),
("What is the result of 12 ÷ 4?", 4, "2", "3", "4", "5", 2),
("What is the value of 2 cubed?", 4, "6", "8", "10", "12", 2),
("What is the slope of a line with the equation y = 2x + 3?", 4, "2", "3", "1", "4", 1),
("What is the solution to the equation 3x = 12?", 4, "3", "4", "5", "6", 2),
("What is the square root of 49?", 4, "7", "8", "6", "5", 1),
("What is 15 × 15?", 4, "225", "150", "200", "175", 1),
("What is the area of a triangle with base 8 and height 5?", 4, "20", "30", "40", "50", 1),
("What is 14 + 27?", 4, "41", "42", "43", "44", 1),
("What is the value of 6 × 6?", 4, "32", "36", "40", "44", 2),
("What is the perimeter of a rectangle with length 9 and width 4?", 4, "26", "28", "30", "32", 1),
("What is 84 ÷ 7?", 4, "10", "11", "12", "13", 3),
("What is the value of 4 raised to the power of 3?", 4, "64", "56", "48", "40", 1),
("What is the sum of the first 4 perfect squares?", 4, "30", "35", "40", "45", 2),
("What is the volume of a cylinder with radius 3 and height 7?", 4, "63π", "54π", "70π", "72π", 1),
("What is 3 × 6 × 2?", 4, "35", "36", "37", "38", 2),
("What is the area of a triangle with base 12 and height 5?", 4, "30", "32", "36", "40", 1),
("What is the result of 1000 ÷ 10?", 4, "100", "200", "300", "400", 1),
("What is the value of 7 × 9?", 4, "63", "64", "65", "66", 1),
("What is the square of 15?", 4, "225", "240", "210", "200", 1);
