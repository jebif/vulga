{
    function clickOnProtSuccess(elt) {
        elt.classList.toggle("list-group-item-success");
    }

    function clickOnProtFailed(elt) {
        elt.classList.toggle("list-group-item-danger");
    }

    function clickOnProtSecondary(elt) {
        elt.classList.toggle("list-group-item-secondary");
    }

    function clickOnProt(elt, regle, easy = false) {
        var regles = {
            coude: ["1", "3", "4", "5"],
            membrane: ["1", "3", "5"],
            nocontact: ["1", "2", "3", "4", "5"],
            contact: ["1", "3", "4"],
            demitour: ["1", "4", "5", "6"]
        };
        var regle = regles[regle];
        
        if (! easy) {
            clickOnProtSecondary(elt)
        } else if (regle.indexOf(elt.value) == -1) {
            clickOnProtFailed(elt);
        } else {
            clickOnProtSuccess(elt);
        }
    }

    function isValid(regle) {
        let success = "list-group-item-success";
        let buttons = document.getElementsByTagName("button");
        let nbSuccess = {
            coude : 4,
            membrane : 3,
            nocontact : 3,//5,
            contact : 2,//2,
            demitour : 1,//4
        };
        let count = 0;

        for (let index = 0; index < buttons.length; index++) {
            const button = buttons[index];
            
            let classname = button.className.split(" ");
            if (classname.indexOf(success) != -1) {
                count++;
            }
        }
        
        if (nbSuccess[regle] == count) {
            return true;
        } else {
            return false;
        }
    }

    function getUnselectdProtein() {
        var items = document.getElementsByClassName("list-group-item");
        var length = 1;
        var defaultValue = "0";

        for (let index = 0; index < items.length; index++) {
            const item = items[index];
            
            if (item.classList.length == length) {
                return item.value;
            }
        }
        return defaultValue;
    }

    function isItTheGoodAnswer() {
        var numberSelected = $(".list-group-item-secondary").length;
        var total = $(".list-group-item").length;
        var alertDiv = document.getElementById("alertDiv");
        var differenceValue = 1;
        var goodAnswer = "1";
        var defaultAnswer = "0";

        var difference = total - numberSelected;
        var unselectedProtein = getUnselectdProtein();

        alertDiv.style.display = "block";

        if (numberSelected == total) {
            alertDiv.className = "alert alert-danger";
            alertDiv.innerHTML = "Tu as sélectionné toutes les protéines alors qu'on veut connaître celle qui rend Nounours malade.";
            window.location = "#alertDiv";
            return false;
        } else if (difference != differenceValue) {
            alertDiv.className = "alert alert-danger";
            alertDiv.innerHTML = "Il n'y a qu'une protéine qui rend Nounours malade.";
            window.location = "#alertDiv";
            return false;
        } else if (unselectedProtein == goodAnswer) {
            window.location = "proteomique_regle.php?r=success";
            return true;
        } else if (unselectedProtein == defaultAnswer) {
            alertDiv.className = "alert alert-warning";
            alertDiv.innerHTML = "Il y a eu un problème contactez l'administration du site !";
            window.location = "#alertDiv";
            return false;
        } else {
            alertDiv.className = "alert alert-danger";
            alertDiv.innerHTML = "La protéine restante vérifie au moins une des règles.";
            window.location = "#alertDiv";
            return false;
        }
    }

    function activeButton() {
        if (isValid(regle)) {
            window.location = "proteomique_regle.php?r=" + nextRegle;
        } else {
            document.getElementById("warningDiv").style.display = "block";
            window.location = "#warningDiv";
        }
    }

    function getActiveCarouselItem() {
        return $(".carousel-item.active")[0].id;
    }
}