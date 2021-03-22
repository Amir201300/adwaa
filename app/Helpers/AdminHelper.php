<?php
/**
 * @return string
 */
function getLogo(){
    return '/Fronted/images/logo.png';
}

/**
 * @param $image
 * @return mixed|string
 */
function getAdminImage($image){
    if($image)
        return getImageUrl('Admin',$image);
    return defaultImages(2);
}


function getNameInIndexPage(){
    return 'جمعية اضواء';
}

function getCounts($model){
    return $model->count();
}

/**
 * @param $admin
 * @return array
 */
function adminsRoleArray($admin){
    if($admin->id != 1) {
        $array = [];
        foreach ($admin->roles as $row) {
            $array[] = $row->id;
        }
    }else{
        $array=[1,2,3,4,5,6,7,8,9,10,11,12,13];
    }
    return $array;
}

/**
 * @return array
 */
function slidersMainLinks(){
    return [
<<<<<<< HEAD
        ['icon-File-TextImage','صور السليدر','Slider.index'],
        ['ti-layout-media-right-alt','المركز الاعلامي','Media.index'],
        ['icon-Download-2','وحدة التطوع','Voulnter.index'],
        [' icon-Add-UserStar','اصحاب الهمم','Team.index'],
        ['icon-info','عن الجمعيه ','About_us.index'],
        ['icon-info','روابط التواصل الاجتماعي ','Socail.index'],
        ['icon-action-redo','انشطتنا','Activities.index'],
=======
        ['icon-File-TextImage','صور السليدر','Slider.index',7],
        ['ti-layout-media-right-alt','المركز الاعلامي','Media.index',8],
        ['icon-Download-2','وحدة التطوع','Voulnter.index',9],
        [' icon-Add-UserStar','اصحاب الهمم','Team.index',10],
        ['icon-info','عن الجمعيه ','About_us.index',11],
        ['icon-info','روابط التواصل الاجتماعي ','Socail.index',12],
>>>>>>> fef8f297029db495eba5825ee3c13e9f514de015
    ];
}



