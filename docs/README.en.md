# RezevSys
### Customer Reception and Queue Management System

**RezevSys** is a web-based customer reception and queue management system developed by **Vratislav Režo (VRDRAGON)** for the ForLED.sk business environment.

The application was designed to simplify customer reception, organize incoming visitors and categorize their requests using a touchscreen-based interface.

Customers could register themselves by selecting the purpose of their visit. The system stored their information in a MySQL database, assigned priority categories and displayed the current customer queue on a separate screen.

The application also provided a management interface for controlling business availability and displaying operational announcements.

---

## Project Overview

The main objective of RezevSys was to create a simple self-service reception system that would reduce manual customer registration and improve the organization of visitors.

The system was designed around three main components:

1. **Customer Registration** – touchscreen interface for selecting the purpose of a visit.
2. **Queue Management** – database-based customer registration and priority categorization.
3. **Information Display** – continuously updated display showing the customer queue and business status.

The application was developed using PHP, MySQL, HTML and CSS and was intended to run on a local web server.

---

## Main Features

### Customer Self-Service Registration

Customers can select their visit category through a touchscreen interface.

Available categories include:

- Wholesale customer.
- Existing customer or customer recommendation.
- Scheduled appointment / personal collection.
- Customer without an existing order.
- Lighting consultation for commercial and industrial premises.
- Lighting consultation for residential properties.
- Other requests.
- Courier / postal service.

### Customer Queue Management

- Registration of incoming customers.
- Assignment of priority categories.
- Storage of customer information in MySQL.
- Automatic shifting of customer entries in the queue.
- Display of the five current queue positions.
- Time-based registration of selected customer requests.

### Business Status Management

The system provides a simple mechanism for displaying the current operational status of the business.

Three status states are implemented:

| Status | Description | Display color |
|---|---|---|
| 1 | Open – business available | Green |
| 2 | Closed | Red |
| 3 | Receiving goods | Yellow |

The status and announcement text are stored in the MySQL database and displayed on the customer-facing interface.

### Automatic Screen Refresh

The application periodically refreshes its pages to keep the displayed information synchronized with the database.

The queue display (`Zobraz.php`) refreshes every 2 seconds, while other interfaces use longer refresh intervals.

---

## Technologies

| Technology | Purpose |
|---|---|
| PHP | Backend application logic |
| MySQL | Customer queue and business status storage |
| MySQLi | Database communication |
| HTML5 | User interface structure |
| CSS3 | Interface styling and layout |
| JavaScript | Touchscreen interaction and navigation |
| Apache | Web server environment |
| Linux | Server operating system |
| Git | Source code version management |
| Bash | Application deployment and updates |

---

## System Architecture

The application uses a straightforward client-server architecture.

### 1. Customer Interface

The customer interacts with the application through a touchscreen display.

The main interface (`index2.php`) provides different visit categories. Based on the selected option, the application executes the corresponding PHP handler.

### 2. Registration Processing

Each visit category is processed by a separate PHP script.

The selected category is stored in the `Zakaznici` database table together with its priority value.

Some registration types also include the current time.

### 3. Queue Management

The `posun.php` script handles the shifting of customer entries.

The system maintains a limited queue structure using database records and moves existing entries to make room for new registrations.

### 4. Queue Display

The `Zobraz.php` interface retrieves customer names and priority values from MySQL.

It displays up to five customer entries, using different colors to visually distinguish their categories.

### 5. Business Status

The operational status is stored in the `oznamTab` database table.

The main interface reads this information and changes its appearance according to the current business state.

---

## Application Workflow

### Customer Registration

The typical customer workflow is:

1. Customer approaches the touchscreen.
2. The welcome screen displays the current business status.
3. Customer selects whether they are an existing or new customer.
4. The system presents additional visit categories.
5. Customer selects the appropriate reason for the visit.
6. PHP processes the selection and updates the MySQL database.
7. The queue is updated.
8. The customer receives an informational message on the display.

### Example Registration Categories

| Category | Priority value |
|---|---:|
| Wholesale customer | 1 |
| Scheduled collection / appointment | 2 |
| Project consultation | 3 |
| Existing customer / recommendation | 4 |
| Residential consultation | 5 |
| Purchase without an existing order | 6 |
| Other requests / complaints | 7 |
| Courier / postal service | 8 |

The priority values are used by the application to visually distinguish customer categories. The implementation does not provide a complete priority-based scheduling algorithm.

---

## Database Structure

The application uses a MySQL database named `RezSys`.

Two principal database tables are referenced by the application.

### 1. Zakaznici

Stores customer queue entries.

| Column | Description |
|---|---|
| id | Queue record identifier |
| klient | Customer category or description |
| priorita | Assigned priority/category value |

### 2. oznamTab

Stores the current business status and announcement.

| Column | Description |
|---|---|
| id | Announcement identifier |
| txt | Displayed announcement text |
| Status | Current operational status |

The database is accessed through PHP MySQLi connections.

---

## Project Structure

```text
RezevSys/
│
├── Update.sh
│
└── html/
    │
    ├── index.php          # Main welcome screen
    ├── index2.php         # Customer registration menu
    ├── Vyber.php          # Existing/new customer selection
    │
    ├── ExistZ.php         # Existing customer categories
    ├── NovyZ.php          # New customer categories
    │
    ├── Zobraz.php         # Customer queue display
    ├── posun.php          # Queue shifting mechanism
    │
    ├── Control.php        # Business status management
    ├── config.php         # Database configuration
    │
    ├── Otvor.php          # Set business status to open
    ├── Zatvor.php         # Set business status to closed
    ├── Vytaz.php          # Set receiving-goods status
    │
    ├── Vo.php             # Wholesale registration
    ├── Od.php             # Existing customer registration
    ├── Dt.php             # Appointment / collection
    ├── Po.php             # Project consultation
    ├── Ch.php             # Purchase request
    ├── ChN.php            # New customer purchase request
    ├── Pb.php             # Residential consultation
    ├── Ine.php            # Other requests
    ├── Rek.php            # Complaint registration
    ├── Kur.php            # Courier / postal service
    │
    ├── PDP.php            # Waiting for assistance screen
    ├── Odpor.php          # Customer entry information
    ├── Naku.php            # Purchase without order information
    ├── Dom.php             # Residential consultation information
    ├── Inet.php            # Other request information
    │
    └── background assets and additional files
```

---

## Installation and Deployment

The project was designed to run on a Linux-based web server with Apache, PHP and MySQL.

### Requirements

- Linux server.
- Apache HTTP Server.
- PHP with MySQLi support.
- MySQL Server.
- Git.

### Deployment

Clone the repository:

```bash
git clone https://github.com/VRDragon/RezevSys.git
```

The original deployment script is:

```bash
./Update.sh
```

The script performs the following operations:

1. Changes the working directory to `/var/www`.
2. Removes the existing `/var/www/html` directory.
3. Clones the GitHub repository.
4. Moves the application's `html` directory into `/var/www/html`.
5. Removes the temporary repository directory.

**Important:** The original deployment script deletes the existing web root before deploying the application. Review and modify this behavior before running it on an existing server.

### Database Configuration

The application uses a database named `RezSys`.

Database connection parameters are defined in `config.php` and are also directly specified in several PHP scripts.

The database and required tables must be created before the application can operate.

---

## Security Considerations

This project represents an earlier implementation of a web-based customer management system.

The original source code contains several practices that should be addressed before production deployment:

- Database credentials are hardcoded in PHP files.
- SQL queries use direct string interpolation.
- Database access is not consistently centralized.
- Administrative operations are not protected by a comprehensive authentication system.
- State-changing operations are triggered through HTTP GET requests.
- Input validation and output escaping are limited.
- The application does not implement CSRF protection.

The repository should therefore be considered a historical project and not deployed directly to a publicly accessible production environment without security modifications.

---

## Historical Context

RezevSys represents a practical application of web technologies to a real business process.

Instead of using a conventional paper-based reception or manual customer registration, the project introduced a touchscreen-based self-service interface connected to a centralized database.

The application combined:

- Web application development.
- Database-driven information management.
- Customer categorization.
- Queue management.
- Touchscreen user interaction.
- Real-time operational status display.
- Linux server administration.

It demonstrates how relatively simple technologies such as PHP and MySQL can be integrated to automate everyday business operations.

---

## Author

**Vratislav Režo (VRDRAGON)**

GitHub: [@VRDragon](https://github.com/VRDragon)

Repository: [RezevSys](https://github.com/VRDragon/RezevSys)

---

*Web-based customer reception and queue management system developed for ForLED.sk.*
