<style>
      footer {
        background-color: #2B2929;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
        color: white;
      }
      .faq-section {
        max-width: 600px;
        display: flex;
        flex-direction: column;
      }

      .faq-question {
        font-weight: bold;
        cursor: pointer;
        margin-bottom: 10px;
      }
      .faq-answer {
        display: none;
        margin-left: 15px;
      }
  </style>


<footer>
      <div class="faq-section">
        <div class="faq-question" onclick="toggleAnswer(1, this)">What are we?</div>
        <div class="faq-answer" id="answer1">
          We are a gaming website that helps new and existing players to educate themselves in gaming world.
        </div>

        <div class="faq-question" onclick="toggleAnswer(2, this)">What do we offer?</div>
        <div class="faq-answer" id="answer2">
          We offer the best user-friendly information about the game.
        </div>

        <div class="faq-question" onclick="toggleAnswer(3, this)">Do we have socials?</div>
        <div class="faq-answer" id="answer3">
          No, we do not have socials right now.
        </div>
      </div>

      <div>
        &copy; 2023 Roberts Savickis
      </div>
    </footer>

  <script>
      var answers = document.getElementsByClassName("faq-answer");

function toggleAnswer(answerId) {
  var answer = answers[answerId - 1];
  var display = window.getComputedStyle(answer).getPropertyValue("display");

  if (display === "none") {
    answer.style.display = "block";
  } else {
    answer.style.display = "none";
  }
}
  </script>