window.addEventListener('load', () => {
    const user=JSON.parse(localStorage.getItem('user'))
    if (!user)
        window.location.href = 'http://localhost:8000/login';
})