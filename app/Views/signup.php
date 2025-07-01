<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Volleyball Club</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="wrapper">
        <form id="signupForm">
            <h2>Sign Up</h2>
            <div class="input-field">
                <input type="text" name="full_name" required>
                <label>Full Name</label>
            </div>
            <div class="input-field">
                <input type="tel" name="phone_num" required>
                <label>Phone Number</label>
            </div>
            <div class="input-field">
                <input type="text" name="address" required>
                <label>Address</label>
            </div>
            <div class="input-field">
                <input type="date" name="DOB" required>
                <label>Date of Birth</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="input-field">
                <select name="tier" required>
                    <option value="">Select Tier</option>
                    <option value="Normal">Normal</option>
                    <option value="Plus">Plus</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>
                </select>
            </div>
            <button type="submit">Sign Up</button>
            <div class="register">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
            <div id="signupMessage" style="margin-top:15px;color:#fff;"></div>
        </form>
    </div>
    <script>
        document.getElementById('signupForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const data = {
                full_name: form.full_name.value,
                phone_num: form.phone_num.value,
                address: form.address.value,
                DOB: form.DOB.value,
                email: form.email.value,
                password: form.password.value,
                tier: form.tier.value
            };
            const msg = document.getElementById('signupMessage');
            msg.textContent = '';
            try {
                const res = await fetch('/api/signup', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                });
                const result = await res.json();
                if (res.ok && result.redirect) {
                    msg.style.color = '#0f0';
                    msg.textContent = 'Sign up successful! Redirecting...';
                    setTimeout(() => window.location.href = result.redirect, 1200);
                } else {
                    msg.style.color = '#f00';
                    msg.textContent = result.message || result.error || 'Sign up failed.';
                }
            } catch (err) {
                msg.style.color = '#f00';
                msg.textContent = 'Network error.';
            }
        });
    </script>
</body>
</html> 