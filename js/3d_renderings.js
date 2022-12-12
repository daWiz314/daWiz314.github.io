function change_viewed(img) {
    var old_img = $(img).parentsUntil('figure').parent().find("img.parent_object").attr('src')
    var new_img = $(img).attr('src')
    $(img).attr('src', old_img)
    $(img).parentsUntil('figure').parent().find("img.parent_object").attr('src', new_img)
}