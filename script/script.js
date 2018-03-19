

function saveHoroscope(){
    $.ajax({
        url: "./php/addhoroscope.php",
        method: "POST",
        data: {
            "socialnumber": $("#input").val()
        },
    success: function(results){
        if(results == "false"){
            $("#content").html("Invalid Date!");
        }
        else{
            viewHoroscope();
        }},
        error: function(err){
            alert("shit");
    }})
}


    function updateHoroscope(){
        $.ajax({
            url: "./php/updatehoroscope.php",
            method: "PUT",
            data: {
                "socialnumber": $("#input").val()
            },
        success: function(results){
            if(results == true){
                viewHoroscope();
            }
            else{
                $("#content").html(results);
            }},
        error: function(err){
            alert("shit");
        }})
        
    }


    function deleteHoroscope(){
        $.ajax({
            url: "./php/deletehoroscope.php",
            method: "DELETE",
        success: function(results){
            $("#content").html(results)
        },
        error: function(err){
            alert("shit");
        }})
    }

    
    function viewHoroscope(){
        $.ajax({
            url: "./php/viewhoroscope.php",
            method: "GET",
        success: function(results){
            $("#content").html(results)
        },
        error: function(err){
            alert("shit");
        }
        })
    }
