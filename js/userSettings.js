
function getForbiddenProjects()
{
    var forbiddenProjects = [];
    var userSettingsProjectCheckBoxes = document.getElementsByName("userSettingsProjectCheckBoxes");
    for(var i=0; i < userSettingsProjectCheckBoxes.length; i++)
    {
        if(userSettingsProjectCheckBoxes[i].checked)
            forbiddenProjects.push(userSettingsProjectCheckBoxes[i].id.split("_")[1]);
    }
    return forbiddenProjects;
}

$(document).ready(function()
{
    $('#userSettings-button-save').click(function ()
    {
        var username = $('#userSettings-input-userName').val();
        if(username != "admin" && username != "public")
        {
            var password = $('#userSettings-input-userPassword').val();
            var forbiddenProjects = getForbiddenProjects();
            var accountType = $('#toggle-user-is-admin').is(':checked');

            if (accountType)
            {
                accountType = "admin"
            }
            else
            {
                accountType = "user"
            }

            $.post("../helper/addUserToJSON.php",
                {
                    "username": username,
                    "password": password,
                    "forbiddenProjects": JSON.stringify(forbiddenProjects),
                    "accountType": accountType,
                    "isEditUser": true
                }, function (data, error)
                {

                    location.reload();
                })
        }
        else
        {
            alert("admin and public are reserved");
        }
    });


});