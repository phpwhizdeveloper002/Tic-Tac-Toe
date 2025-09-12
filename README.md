# 🎮 Tic Tac Toe Game (Laravel 11)

A fun **Tic Tac Toe Game** built with **Laravel 11**.
This project allows two players to play Tic Tac Toe in the browser with a clean UI. It highlights the winner and provides a restart option.

---

## 🚀 Features

* 🎲 Classic Tic Tac Toe gameplay (2 players).
* ✅ Highlights the winning combination.
* 🎉 Displays the winner or draw message.
* 🔄 Restart button to play again.
* 📱 Responsive design (works on desktop & mobile).
* 🛠 Built using **Laravel 11**, **Blade Templates**, **JavaScript**, and **CSS**.

---

## 📂 Project Structure

```
tic-tac-toe/
│-- app/
│-- bootstrap/
│-- config/
│-- database/
│-- public/
│   └── screenshots/   # Project images/screenshots
│-- resources/
│   └── views/         # Blade templates
│-- routes/
│   └── web.php        # Game routes
│-- .env.example
│-- artisan
│-- composer.json
│-- package.json
│-- README.md
```

---

## ⚙️ Installation

### 1 Clone the repository

```bash
git clone https://github.com/phpwhizdeveloper002/Tic-Tac-Toe.git
cd Tic-Tac-Toe
```

### 2 Set up environment file

```bash
cp .env.example .env
php artisan key:generate
```

### 3 Install Composer

```bash
composer install
```

### 4 Run migrations (if needed)

```bash
php artisan migrate
```

### 5 Start the server

```bash
php artisan serve
```

Now visit 👉 `http://127.0.0.1:8000` to play the game.

---

## 🕹️ How to Play

1. Player **X** goes first.
2. Players take turns marking a square.
3. The first player to get **3 in a row** (horizontally, vertically, or diagonally) wins.
4. If all squares are filled with no winner, the game ends in a **draw**.
5. Click **Restart** to play again.

## 🖼️ Screenshot

<img width="1882" height="656" alt="tictactoe" src="https://github.com/user-attachments/assets/7d6c2a04-8061-4cb5-a8fd-36152e9c743f" />



