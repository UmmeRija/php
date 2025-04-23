<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" /></head>
<style>
      .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .card-body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
            color: #555;
        }
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .card-container .col-md-4 {
            margin-bottom: 20px;
        }
</style>
<body>
<?php include 'navbar.php'; ?>
<section>
<div class="container mt-5">
    <div class="row" id="mobilecontainer"></div>
</div>
</section>
<?php include 'footer.php'; ?>
</body>
<script>
        let product = [
        ["Panda", 12001, "Pandas, with their black-and-white charm, are the gentle giants of the animal kingdom, embodying peace and playfulness in every move.", "http://localhost/rija/images/panda.webp"],
        ["Dog", 12002, "Dogs are loyal, loving companions that bring joy and comfort to the lives of those they meet.", "http://localhost/rija/images/dog.jpg"],
        ["Yumna", 12003, "Cats are independent yet affectionate creatures, offering a perfect balance of companionship and mystery.", "http://localhost/rija/images/cat.jpg"],
        ["Rabbit", 12004, "Rabbits are gentle, curious animals, known for their playful nature and soft, fluffy fur.", "http://localhost/rija/images/rabbit.avif"],
        ["Monkey", 12005, "Monkeys are intelligent, playful creatures, known for their curious nature and strong social bonds within their groups.", "http://localhost/rija/images/monkey.jpg"],
        ["Horse", 12006, "Horses are majestic and graceful animals, known for their strength, intelligence, and deep connection with humans.", "http://localhost/rija/images/horse.jpg"]
    ];

    let html = "";
    for (let data of product) {
        html += `
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <img src="${data[3]}" class="card-img-top" alt="${data[0]}">
                <div class="card-body text-center">
                    <h5 class="card-title">${data[0]}</h5>
                    <p class="card-text">${data[2]}</p>
                    <p class="card-text"><strong>Price:</strong> $${data[1]}</p>
                </div>
            </div>
        </div>`;
    }

    document.getElementById("mobilecontainer").innerHTML = html;
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</script>
</html>
