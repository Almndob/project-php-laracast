const msg = document.getElementById('success-message');

        // تشغيل تأثير الدخول
        setTimeout(() => {
            msg.classList.remove('opacity-0', 'translate-y-[-20px]');
            msg.classList.add('opacity-100', 'translate-y-0');
        }, 100);

        // إخفاء الرسالة بعد 3 ثواني
        setTimeout(() => {
            msg.classList.remove('opacity-100');
            msg.classList.add('opacity-0');
        }, 3000);


          const errorMsg = document.getElementById('error-message');

        // تأثير الظهور
        setTimeout(() => {
            errorMsg.classList.remove('opacity-0', '-translate-y-5');
            errorMsg.classList.add('opacity-100', 'translate-y-0');
        }, 100);

        // يختفي بعد 4 ثواني
        setTimeout(() => {
            errorMsg.classList.remove('opacity-100');
            errorMsg.classList.add('opacity-0');
        }, 4000);