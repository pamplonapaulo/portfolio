$(document).ready(function(){
    var token = '4455866.1677ed0.e4f00522e8ef4458a364094f4eb74d23',
        userID = 4455866, //only numbers, we don't need between quotes.
        numPhotos = 30;
    $.ajax({
        url:'https://api.instagram.com/v1/users/' + userID + '/media/recent/', 
        dataType: 'jsonp', // "jsonp" makes you able to get data from another URL, which isn't the default behavior of JSON.
        type: 'GET',
        data: {access_token:token,
              count: numPhotos },
        success: function(data){
            console.log(data);
            for(x in data.data){
                $('#instaFeed').append('<li><a href="' + data.data[x].link  + '" target="_blank"><img src="' + data.data[x].images.low_resolution.url + '"/></a></li>');
            }   
        },
        error: function(data){
            console.log(data);
        }
    })        
});