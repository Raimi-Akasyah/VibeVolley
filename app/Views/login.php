<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Volleyball Club</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="wrapper">
    <form id="loginForm">
      <h2>Login</h2>
      <div class="input-field">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="/signup">Register</a></p>
      </div>
      <div id="loginMessage" style="margin-top:15px;color:#fff;"></div>
    </form>
  </div>
  <script>
    document.getElementById('loginForm').addEventListener('submit', async function(e) {
      e.preventDefault();
      const form = e.target;
      const email = form.email.value;
      const password = form.password.value;
      const msg = document.getElementById('loginMessage');
      msg.textContent = '';
      try {
        const res = await fetch('/api/login', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ email, password })
        });
        const data = await res.json();
        if (res.ok && data.redirect) {
          localStorage.setItem('token', data.token);
          msg.style.color = '#0f0';
          msg.textContent = 'Login successful! Redirecting...';
          setTimeout(() => window.location.href = data.redirect, 1200);
        } else {
          msg.style.color = '#f00';
          msg.textContent = data.message || data.error || 'Login failed.';
        }
      } catch (err) {
        msg.style.color = '#f00';
        msg.textContent = 'Network error.';
      }
    });
  </script>
</body>
</html> 