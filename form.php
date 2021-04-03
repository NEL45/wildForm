<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action='thanks.php' method='post'>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="user_email">
    </div>
    <div>
        <label for="téléphone">Tel:</label>
        <input type="text" id="tel" name="user_tel">
    </div>
    <label for="Choix de carrière">Choose a job:</label>
<select id="job" name="subject_job">
  <option value="banquier">Banker</option>
  <option value="jardinier">Green</option>
  <option value="boxeur">Boxe</option>
  <option value="Wilder">Dev</option>
</select>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button input type="submit" value="Envoyer le formulaire">Envoyer le message </button>

    </div>
    </form>
    
</body>
</html>
