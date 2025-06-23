function openFullscreenView(imgElement) {
    const imageUrl = imgElement.dataset.img;
    const title = imgElement.dataset.title;

    const newWin = window.open('', '_blank');
    if (!newWin) return;

    const doc = newWin.document;

    const html = doc.documentElement;
    const body = doc.body;

    doc.title = title;

    // Стили
    const style = doc.createElement('style');
    style.textContent = `
        body {
            margin: 0;
            background: #000;
            color: white;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }
        img {
            max-width: 100%;
            max-height: 100%;
            transform-origin: center center;
            transition: transform 0.2s ease-in-out;
        }
        .caption {
            margin: 10px;
            margin-top: 40px;
            font-size: 18px;
        }
    `;
    doc.head.appendChild(style);

    // Заголовок
    const caption = doc.createElement('div');
    caption.className = 'caption';
    caption.textContent = title;

    // Картинка
    const img = doc.createElement('img');
    img.src = imageUrl;
    img.alt = title;

    // Зум мышью
    let scale = 1;
    img.addEventListener('wheel', function (e) {
        e.preventDefault();
        scale += e.deltaY * -0.001;
        scale = Math.min(Math.max(.5, scale), 5);
        img.style.transform = `scale(${scale})`;
    });

    // Закрытие по клику
    body.addEventListener('click', () => newWin.close());

    body.appendChild(caption);
    body.appendChild(img);
}

function printSxema(buttonElement) {
    const imageUrl = buttonElement.dataset.img;
    const title = buttonElement.dataset.title;

    const newWin = window.open('', '_blank');
    if (!newWin) return;

    const doc = newWin.document;

    doc.title = title;

    const style = doc.createElement('style');
    style.textContent = `
        body {
            text-align: center;
            font-family: sans-serif;
            padding: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .caption {
            margin-top: 10px;
            font-size: 16px;
        }
    `;
    doc.head.appendChild(style);

    const caption = doc.createElement('div');
    caption.className = 'caption';
    caption.textContent = title;

    const img = doc.createElement('img');
    img.src = imageUrl;
    img.alt = title;
    img.onload = () => {
        newWin.print();
        setTimeout(() => newWin.close(), 1000);
    };

    doc.body.appendChild(img);
    doc.body.appendChild(caption);
}
