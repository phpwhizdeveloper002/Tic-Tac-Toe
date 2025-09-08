<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .gap-2{
            margin-left: 25%;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h2 class="mb-4">🎮 Tic Tac Toe</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div id="board" class="d-grid gap-2" style="grid-template-columns: repeat(3, 100px); grid-template-rows: repeat(3, 100px);">
                    @for($i = 0; $i < 9; $i++)
                        <button class="cell btn btn-outline-primary fw-bold fs-3" data-index="{{ $i }}"></button>
                    @endfor
                </div>
                <h4 class="mt-4" id="status">Player X's turn</h4>
                <button class="btn btn-danger mt-3" onclick="resetGame()">🔄 Restart</button>
            </div>
        </div>
    </div>

<script>
    let board = ["", "", "", "", "", "", "", "", ""];
    let currentPlayer = "X";
    let gameOver = false;

    const cells = document.querySelectorAll(".cell");
    const status = document.getElementById("status");

    cells.forEach(cell => {
        cell.addEventListener("click", () => {
            const index = cell.getAttribute("data-index");

            if (board[index] === "" && !gameOver) {
                board[index] = currentPlayer;
                cell.textContent = currentPlayer;
                if (checkWinner()) {
                    status.textContent = `🎉 Player ${currentPlayer} Wins!`;
                    gameOver = true;
                } else if (board.every(cell => cell !== "")) {
                    status.textContent = "🤝 It's a Draw!";
                    gameOver = true;
                } else {
                    currentPlayer = currentPlayer === "X" ? "O" : "X";
                    status.textContent = `Player ${currentPlayer}'s turn`;
                }
            }
        });
    });

    function checkWinner() {
        const winPatterns = [
            [0,1,2],[3,4,5],[6,7,8], // rows
            [0,3,6],[1,4,7],[2,5,8], // columns
            [0,4,8],[2,4,6]          // diagonals
        ];

        return winPatterns.some(pattern => {
            const [a,b,c] = pattern;
            return board[a] && board[a] === board[b] && board[a] === board[c];
        });
    }

    function resetGame() {
        board = ["", "", "", "", "", "", "", "", ""];
        currentPlayer = "X";
        gameOver = false;
        cells.forEach(cell => cell.textContent = "");
        status.textContent = "Player X's turn";
    }
</script>
</body>
</html>