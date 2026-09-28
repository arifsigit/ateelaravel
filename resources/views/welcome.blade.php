<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haii, Selamat Datang</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-color: #080808;
            
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(212, 175, 55, 0.15) 0%, transparent 60%),
                radial-gradient(circle at 80% 80%, rgba(184, 134, 11, 0.08) 0%, transparent 50%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #e2e8f0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .container {
            position: relative;
            max-width: 560px;
            width: 100%;
            background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(10, 10, 10, 0.95));
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
           
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 20px;
            padding: 52px 40px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.8),
                        0 0 15px rgba(212, 175, 55, 0.1);
            animation: fadeIn 0.9s ease-out;
        }

       
        .badge {
            display: inline-block;
            padding: 6px 18px;
            background: rgba(212, 175, 55, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.4);
            border-radius: 50px;
            color: #d4af37;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.75rem;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 18px;
            background: linear-gradient(135deg, #fff6d6 0%, #d4af37 50%, #aa7c11 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(212, 175, 55, 0.2);
        }

        p {
            color: #a1a1aa;
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .btn-wrapper {
            display: flex;
            gap: 16px;
            justify-content: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        
        .btn-primary {
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            color: #000000;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
            border: 1px solid #e6ca65;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5);
            background: linear-gradient(135deg, #e6ca65 0%, #d4af37 100%);
        }

        
        .btn-secondary {
            background: transparent;
            color: #d4af37;
            border: 1px solid rgba(212, 175, 55, 0.4);
        }

        .btn-secondary:hover {
            background: rgba(212, 175, 55, 0.1);
            color: #fff6d6;
            border-color: #d4af37;
            transform: translateY(-3px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 36px 24px;
            }
            h1 {
                font-size: 2.2rem;
            }
            .btn-wrapper {
                flex-direction: column;
            }
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h1>Haii! Selamat Datang</h1>
        <p>Ini web portofolio aku, silahkan lanjut ke halaman selanjutnya</p>
        
        <div class="btn-wrapper">
            
            <a href="/jelajah" class="btn btn-primary">Mulai Jelajah &rarr;</a>
            
        </div>
    </div>

</body>
</html>