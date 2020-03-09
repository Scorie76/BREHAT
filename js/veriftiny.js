// Returns text statistics for the specified editor by id
function getStats(textarea) {
    var body = tinymce.get(id).getBody(), text = tinymce.trim(body.innerText || body.textContent);

    return {
        chars: text.length,
        words: text.split(/[\w\u2019\'-]+/).length
    };
}

function submitForm() {
    // Check if the user has entered less than 1000 characters
    if (getStats('content').chars < 10) {
        alert("You need to enter 1000 characters or more.");
        return;
    }

    // Check if the user has entered less than 100 words
    if (getStats('content').words < 1) {
        alert("You need to enter 100 words or more.");
        return;
    }

    // Submit the form
    document.forms[0].submit();
}