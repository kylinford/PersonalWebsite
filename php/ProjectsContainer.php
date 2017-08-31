<div class="projectscontainer">
	    	    	 
<?php
function DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage){
echo "<hr/><p class='yeartag'>$year</p>";
$projectCount=count($projectNames_en);
for($i=0; $i<$projectCount; $i++){
	echo 
		"<div class='projectoverview'>
                    <div class='pic tall sidepan'>
                        <a href=$projectURL[$i]><img src=$projectImage[$i]></a>
                    </div>
                    <div class='projecttitle'>
                        <h2 lang='en'>$projectNames_en[$i]</h2>
                        <h2 lang='cn'>$projectNames_cn[$i]</h2>
                        <h4 lang='en'>$projectInstitues_en[$i]</h4>
                        <h4 lang='cn'>$projectInstitues_cn[$i]</h4>
                    </div>
                    <hr />
                </div>";
	}
}

$year = 2016;
$projectNames_en = array("MBAville Pre", "The Place You'll Go");
$projectNames_cn = array("MBA新手村Lite", "职业之路");
$projectInstitues_en = array("MBAville, LLC.", "Purdue University");
$projectInstitues_cn = array("MBAville, LLC.", "普渡大学科技学院与管理学院");
$projectURL = array("http://internaldemo.mbaville.com/", "Projects/TPYG");
$projectImage = array("image/MVP.jpg", "image/TPYG.jpg");
DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage);

$year = 2015;
$projectNames_en = array("MBAville v1", "TPYG Visualization", "Mountain Defense");
$projectNames_cn = array("MBA新手村 v1", "职业之路雷达图", "护山塔防");
$projectInstitues_en = array("MBAville, LLC.", "Purdue University", "ACM Siggd Game Jam");
$projectInstitues_cn = array("MBAville, LLC.", "普渡大学科技学院与管理学院", "普渡大学ACM Siggd比赛");
$projectURL = array("Projects/MBAville", "Projects/TPYG_Vis", "");
$projectImage = array("image/MBAVille.jpg", "image/TPYG_Vis.jpg", "image/IMG_2497.jpg");
DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage);

$year = "2014";
$projectNames_en = array("Project Name", "Project Name 2");
$projectNames_cn = array("项目名称", "项目名称2");
$projectInstitues_en = array("Company/Organization", "Company/Organization");
$projectInstitues_cn = array("公司/组织", "公司/组织");
$projectURL = array("","");
$projectImage = array("image/IMG_0260.JPG", "image/IMG_0253.JPG");
DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage);

$year = "2013";
DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage);

$year = "2012 and before";
DisplayProjectOverviewsThroughAYear($year, $projectNames_en, $projectNames_cn, $projectInstitues_en, $projectInstitues_cn, $projectURL, $projectImage);

?>

</div>