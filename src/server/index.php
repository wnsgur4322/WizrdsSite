<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
</head>
<body>
    <style>
        .contact-form > div {
            display: none;
        }
    </style>
    <section class="contact-form">
        <form action="/" onsubmit="sendData(event);" style="line-height: 2em;">
            <label for="organization">organization</label><br>
            <input type="text" name="organization"><br>
            <label for="name">name</label><br>
            <input type="text" name="name"><br>
            <label for="email">email</label><br>
            <input type="email" name="email"><br>
            <select name="projectType">
                <option value="" disabled selected>Choose a project type</option>
                <option value="website development">website development</option>
                <option value="app development">app development</option>
                <option value="design">design</option>
            </select><br>
            <textarea name="message" cols="30" rows="10" placeholder="Question or description of project"></textarea><br>
            <input type="submit" value="Send">
        </form>
        <p></p>
    </section>
    <script type="text/javascript">
        let resData;
        const form = document.querySelector(".contact-form > form");
        const errorLabel = document.querySelector(".contact-form > form > .error-label");
        async function sendData(event) {
            try {
                const p = document.querySelector(".contact-form > p");
                p.innerHTML = "<span style='color: blue;'>Waiting for response from server...</span>";
                // prevent the browser from refreshing 
                event.preventDefault();
                const elements = event.srcElement;
                const formData = new FormData();
                formData.append("organization", elements[0].value);
                formData.append("name", elements[1].value);
                formData.append("email", elements[2].value);
                formData.append("productType", elements[3].value);
                formData.append("message", elements[4].value);
                const data = await fetch("/routes/contact-form/submit-wizrds-contact-form.php", {
                    method: "POST",
                    body: formData
                });
                resData = await data.body.getReader().read();
                const text = [];
                resData.value.forEach(charCode => text.push(String.fromCharCode(charCode)));
                p.innerHTML = text.join("");
            } catch (err) {
                p.innerHTML = err.message;
            }
        }
    </script>
</body>
</html>