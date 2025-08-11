@extends('layouts.app2')

@section('title', 'My Profile')

@section('style')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: white;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

        .profile {
            max-width: 1165px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            min-height: 600px;
            margin-top: 120px;
        }
        

        .sidebar {
            width: 250px;
            background: #f8fafc;
            border-radius: 12px 0 0 12px;
            padding: 30px 20px;
            border-right: 1px solid #e2e8f0;
        }

        .profile-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 15px;
            position: relative;
            overflow: hidden;
            background: #e2e8f0;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .edit-icon {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 24px;
            height: 24px;
            background: #ff6b35;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            cursor: pointer;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .profile-role {
            font-size: 14px;
            color: #64748b;
        }

        .menu-items {
            list-style: none;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            color: #64748b;
            cursor: pointer;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.2s;
        }

        .menu-item:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .menu-item.active {
            background: #fff4ed;
            color: #ff6b35;
            font-weight: 500;
        }

        .menu-icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex: 1;
            padding: 40px;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 30px;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .radio-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .radio-option label {
            font-size: 14px;
            color: #475569;
            cursor: pointer;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            background: #f9fafb;
            transition: all 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #ff6b35;
            background: white;
        }

        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            background: #f9fafb;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%236B7280' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 50px;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            color: #10b981;
            margin-top: 5px;
        }

        .verified-icon {
            width: 16px;
            height: 16px;
            fill: #10b981;
        }

        .delete-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6b7280;
            cursor: pointer;
            padding: 5px;
        }

        .date-input-wrapper {
            position: relative;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .btn {
            flex: 1;
            padding: 14px 24px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            border: 2px solid transparent;
        }

        .btn-secondary {
            background: white;
            color: #ff6b35;
            border-color: #ff6b35;
        }

        .btn-secondary:hover {
            background: #fff4ed;
        }

        .btn-primary {
            background: #ff6b35;
            color: white;
            border-color: #ff6b35;
        }

        .btn-primary:hover {
            background: #e55a2b;
        }
    </style>
    @endsection
@section('content')

    <div class="profile">
        <div class="sidebar">
            <div class="profile-section">
                <div class="profile-image">
                    <img src="data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='40' cy='40' r='40' fill='%23e2e8f0'/%3E%3Ccircle cx='40' cy='30' r='12' fill='%236b7280'/%3E%3Cpath d='M20 65c0-11 9-20 20-20s20 9 20 20' fill='%236b7280'/%3E%3C/svg%3E" alt="Profile">
                    <div class="edit-icon">✏️</div>
                </div>
                <div class="profile-name">Roland Donald</div>
                <div class="profile-role">Cashier</div>
            </div>
            
            <ul class="menu-items">
                <li class="menu-item active">
                    <div class="menu-icon">👤</div>
                    Personal Information
                </li>
                <li class="menu-item">
                    <div class="menu-icon">🔒</div>
                    Login & Password
                </li>
                <li class="menu-item">
                    <div class="menu-icon">🚪</div>
                    Log Out
                </li>
            </ul>
        </div>

        <div class="main-content">
            <div class="form-header">
                <h1 class="form-title">Personal Information</h1>
                
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="male" name="gender" value="male" checked>
                        <label for="male">Male</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                </div>
            </div>

            <form class="personal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-input" value="Roland">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input type="text" id="lastName" class="form-input" value="Donald">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-input" value="rolandDonald@mail.com">
                    <div class="verified-badge">
                        <svg class="verified-icon" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Verified
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" id="address" class="form-input" value="3605 Parker Rd.">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-input" value="(405) 555-0128">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="birthDate">Date of Birth</label>
                        <div class="date-input-wrapper">
                            <input type="text" id="birthDate" class="form-input" value="1 Feb, 1995">
                            <button type="button" class="delete-btn">🗑️</button>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="location">Location</label>
                        <select id="location" class="form-select">
                            <option value="atlanta">Atlanta, USA</option>
                            <option value="new-york">New York, USA</option>
                            <option value="los-angeles">Los Angeles, USA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="postalCode">Postal Code</label>
                        <input type="text" id="postalCode" class="form-input" value="30301">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary">Discard Changes</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Simple form interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Menu item interactions
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    menuItems.forEach(mi => mi.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Form submission
            const form = document.querySelector('.personal-form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Changes saved successfully!');
            });

            // Discard changes button
            const discardBtn = document.querySelector('.btn-secondary');
            discardBtn.addEventListener('click', function() {
                if (confirm('Are you sure you want to discard all changes?')) {
                    form.reset();
                    // Reset to original values
                    document.getElementById('firstName').value = 'Roland';
                    document.getElementById('lastName').value = 'Donald';
                    document.getElementById('email').value = 'rolandDonald@mail.com';
                    document.getElementById('address').value = '3605 Parker Rd.';
                    document.getElementById('phone').value = '(405) 555-0128';
                    document.getElementById('birthDate').value = '1 Feb, 1995';
                    document.getElementById('postalCode').value = '30301';
                }
            });

            // Delete date button
            const deleteBtn = document.querySelector('.delete-btn');
            deleteBtn.addEventListener('click', function() {
                document.getElementById('birthDate').value = '';
            });
        });
    </script>
@endsection
