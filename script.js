document.getElementById('language-toggle').addEventListener('change', function() {
  const selectedLang = this.value;
  // මෙහිදී multi-language support එක ක්‍රියාත්මක කර ගැනීමට dynamic translation logic එකක් backend හෝ JSON file එකකින් connect කරන්න පුළුවන්.
  alert('Selected language: ' + selectedLang);
});

document.getElementById("loginForm").addEventListener("submit", function(e) {
  const user = document.getElementById("username").value.trim();
  const pass = document.getElementById("password").value.trim();
  if (!user || !pass) {
    alert("Please fill in both fields.");
    e.preventDefault();
  }
});