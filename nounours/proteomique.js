{
    function clickOnProtSuccess(elt) {
        elt.classList.toggle("list-group-item-success");
    }

    function clickOnProtFailed(elt) {
        elt.classList.toggle("list-group-item-danger");
    }

    function clickOnProt(elt, regle) {
        var coude = ["1", "3", "4", "5"];
        var membrane = ["1", "3", "5"];
        var nocontact = ["1", "2", "3", "4", "5"];
        var contact = ["1", "3", "4"];
        var demitour = ["1", "4", "5", "6"];

        switch (regle) {
            case "coude":
                    if (coude.indexOf(elt.value) == -1) {
                        clickOnProtFailed(elt);
                    } else {
                        clickOnProtSuccess(elt);
                    }
                break;
            
            case "membrane":
                if (membrane.indexOf(elt.value) == -1) {
                    clickOnProtFailed(elt);
                } else {
                    clickOnProtSuccess(elt);
                }
            break;

            case "nocontact":
                if (nocontact.indexOf(elt.value) == -1) {
                    clickOnProtFailed(elt);
                } else {
                    clickOnProtSuccess(elt);
                }
            break;
            
            case "contact":
                if (contact.indexOf(elt.value) == -1) {
                    clickOnProtFailed(elt);
                } else {
                    clickOnProtSuccess(elt);
                }
            break;

            case "demitour":
                if (demitour.indexOf(elt.value) == -1) {
                    clickOnProtFailed(elt);
                } else {
                    clickOnProtSuccess(elt);
                }
            break;
        
            default:
                break;
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

    function activeButton(regle, nextRegle) {
        if (isValid(regle)) {
            window.location = "proteomique_regle.php?r=" + nextRegle;
        } else {
            document.getElementById("warningDiv").style.display = "block";
            window.location = "#warningDiv";
        }
    }
}