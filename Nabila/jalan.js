const startBtn = document.querySelector('.start-btn');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
const main = document.querySelector('.main');
const continueBtn = document.querySelector('.continue-btn');
const quizSection = document.querySelector('.quiz-section');
const quizBox = document.querySelector('.quiz-box');
const resultBox = document.querySelector('.result-box');
const tryAgainBtn =  document.querySelector('.tryAgain-btn');
const goHomeBtn =  document.querySelector('.goHome-btn');

startBtn.onclick = () => {
    popupInfo.classList.add('active');
    main.classList.add('active');
}

exitBtn.onclick = () => {
    popupInfo.classList.remove('active');
    main.classList.remove('active');
}

continueBtn.onclick = () => {
    quizSection.classList.add('active');
    popupInfo.classList.remove('active');
    main.classList.remove('active');
    quizBox.classList.add('active');

    showQuestions(0);
    questionCounter(1);
    headerScore();
}

tryAgainBtn.onclick = () => {
    quizBox.classList.add('active');
    nextBtn.classList.remove('active');
    resultBox.classList.remove('active');
    
    questionCount = 0;
    questionNumb = 1;
    userScore = 0;
    showQuestions(questionCount);
    questionCounter(questionNumb);

    headerScore();
}

goHomeBtn.onclick = () => {
    quizSection.classList.remove('active');
    nextBtn.classList.remove('active');
    resultBox.classList.remove('active');
    window.location.href = 'home.html';
    
    questionCount = 0;
    questionNumb = 1;
    userScore = 0;
    showQuestions(questionCount);
    questionCounter(questionNumb);

    headerScore();
}

let questionCount = 0;
let questionNumb = 1;
let userScore = 0;
let attemptsLeft = 1; 

const nextBtn = document.querySelector('.next-btn');

nextBtn.onclick = () => {
    if (questionCount < questions.length -1){
        questionCount++;
        showQuestions(questionCount);

        questionNumb++;
        questionCounter(questionNumb);

        nextBtn.classList.remove('active');
    }
    else {
        showResultBox();
    }
}

const optionList = document.querySelector('.option-list');

function showQuestions(index) {
    const questionText = document.querySelector('.question-text');
    questionText.textContent = `${questions[index].numb}. ${questions[index].question}`;

   
    let options = questions[index].options.filter(option => option !== undefined && option !== null);

    
    let optionTag = '';
    options.forEach(option => {
        optionTag += `<div class="option"><span>${option}</span></div>`;
    });

    optionList.innerHTML = optionTag;

    const option = document.querySelectorAll('.option');
    for (let i = 0; i < option.length; i++) {
        option[i].setAttribute('onclick', 'optionSelected(this)');
    }
}

function optionSelected(answer) {
   
    let userAnswer = answer.textContent.trim().toLowerCase();
    let correctAnswer = questions[questionCount].answer.trim().toLowerCase();
    let allOptions = optionList.children.length;
    console.log(correctAnswer);

    if (userAnswer === correctAnswer) {
        
        answer.classList.add('correct');
        userScore += 1; 
        headerScore(); 
    } else {
       
        answer.classList.add('incorrect');
    }

    for (let i = 0; i < allOptions; i++) {
        if (optionList.children[i].textContent.trim().toLowerCase() === correctAnswer) {
            optionList.children[i].classList.add('correct');
        }

        nextBtn.classList.add('active');
    }

    for (let i = 0; i < allOptions; i++) {
        optionList.children[i].classList.add('disabled');
    }

    nextBtn.classList.add('active');
}


function questionCounter(index) {
    const questionTotal = document.querySelector('.question-total');
    questionTotal.textContent = `${index} of ${questions.length} Questions`;
}

function headerScore() {
    const headerScoreText = document.querySelector('.header-score');
    headerScoreText.textContent = `Score: ${userScore} / ${questions.length}`;
}

function showResultBox() {
    quizBox.classList.remove('active');
    resultBox.classList.add('active');

    const scoreText = document.querySelector('.span-score-text');
    scoreText.textContent = `Nilai Anda ${userScore} dari ${questions.length}`; // Menampilkan nilai

    const starIcon = document.querySelector('.star-icon');
    const progressValue = document.querySelector('.progress-value');
    let progressStartValue = -1; 
    let progressEndValue = Math.round((userScore / questions.length) * 100); // Hitung persentase skor
    let speed = 20;

    let starColor;
    if (progressEndValue >= 80) {
        starColor = "#d9a300"; 
    } else if (progressEndValue >= 50) {
        starColor = "#fff"; 
    } else {
        starColor = "#24024a"; 
    }

    let progress = setInterval(() => {
        progressStartValue++;
        progressValue.textContent = `${progressStartValue}%`;

        if (progressStartValue >= progressEndValue) {
            clearInterval(progress);

            starIcon.style.color = starColor;
            starIcon.classList.add('active'); // Zoom-in efek
        }
    }, speed);

}



