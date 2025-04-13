<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Multimedia Link Technology</title>
    
    <!-- External CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <style>
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .animated-gradient {
            background: linear-gradient(
                -45deg, 
                #2563eb,  /* Biru */
                #3b82f6,  /* Biru Muda */
                #60a5fa,  /* Biru Lebih Muda */
                #93c5fd   /* Biru Paling Muda */
            );
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
            position: absolute;
            inset: 0;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .login-button {
            transition: all 0.3s ease;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(37, 99, 235, 0.3);
        }

        .form-container {
            transition: all 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="animated-gradient opacity-80"></div>

        <!-- Login Container -->
        <div class="max-w-md w-full mx-4 relative z-10" data-aos="fade-up" data-aos-delay="100">
            <div class="form-container bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl p-8 md:p-10 border border-white/20">
                <!-- Logo or Company Name -->
                <div class="text-center mb-10">
                    <div class="inline-block p-3 rounded-full bg-blue-50 mb-4">
                        <i class="fas fa-user-shield text-2xl text-blue-600"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">
                        Welcome Back
                    </h2>
                    <p class="text-gray-600">Sign in to your admin account</p>
                </div>

                <!-- Login Form -->
                <form class="space-y-6" action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-blue-500"></i>
                            </div>
                            <input id="email" 
                                   name="email" 
                                   type="email" 
                                   required 
                                   class="input-focus w-full pl-11 pr-4 py-3.5 rounded-xl border border-gray-200 
                                          focus:ring-2 focus:ring-blue-500 focus:border-transparent 
                                          transition-all placeholder-gray-400 bg-gray-50/50"
                                   placeholder="admin@example.com">
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-blue-500"></i>
                            </div>
                            <input id="password" 
                                   name="password" 
                                   type="password" 
                                   required 
                                   class="input-focus w-full pl-11 pr-4 py-3.5 rounded-xl border border-gray-200 
                                          focus:ring-2 focus:ring-blue-500 focus:border-transparent 
                                          transition-all placeholder-gray-400 bg-gray-50/50"
                                   placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="bg-red-50 text-red-500 text-sm rounded-xl p-4 border border-red-100">
                            @foreach ($errors->all() as $error)
                                <p class="flex items-center">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $error }}
                                </p>
                            @endforeach
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="login-button w-full bg-gradient-to-r from-blue-600 to-blue-500 text-white 
                                   py-4 rounded-xl hover:opacity-90 transition-all flex items-center 
                                   justify-center space-x-2 font-semibold text-lg">
                        <span>Sign In</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </form>

                <!-- Security Note -->
                <div class="mt-8 text-center">
                    <div class="inline-flex items-center justify-center space-x-2 px-4 py-2 rounded-full bg-blue-50">
                        <i class="fas fa-shield-alt text-blue-500"></i>
                        <span class="text-sm text-blue-700 font-medium">Secure Admin Access</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out'
        });
    </script>
</body>
</html>