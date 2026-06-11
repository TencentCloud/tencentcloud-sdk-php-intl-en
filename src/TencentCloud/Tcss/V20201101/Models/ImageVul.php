<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a vulnerability in the image
 *
 * @method string getCVEID() Obtain Vulnerability ID
 * @method void setCVEID(string $CVEID) Set Vulnerability ID
 * @method string getPOCID() Obtain viewpoint validation program ID
 * @method void setPOCID(string $POCID) Set viewpoint validation program ID
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method array getComponents() Obtain Component Information
 * @method void setComponents(array $Components) Set Component Information
 * @method string getCategory() Obtain category
 * @method void setCategory(string $Category) Set category
 * @method string getCategoryType() Obtain Category 2
 * @method void setCategoryType(string $CategoryType) Set Category 2
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getDes() Obtain Description
 * @method void setDes(string $Des) Set Description
 * @method string getOfficialSolution() Obtain Solution
 * @method void setOfficialSolution(string $OfficialSolution) Set Solution
 * @method string getReference() Obtain Refer
 * @method void setReference(string $Reference) Set Refer
 * @method string getDefenseSolution() Obtain defense solution
 * @method void setDefenseSolution(string $DefenseSolution) Set defense solution
 * @method string getSubmitTime() Obtain Submission time
 * @method void setSubmitTime(string $SubmitTime) Set Submission time
 * @method string getCvssScore() Obtain CVSS Score
 * @method void setCvssScore(string $CvssScore) Set CVSS Score
 * @method string getCvssVector() Obtain CVSS information.
 * @method void setCvssVector(string $CvssVector) Set CVSS information.
 * @method string getIsSuggest() Obtain Whether repair is suggested.
 * @method void setIsSuggest(string $IsSuggest) Set Whether repair is suggested.
 * @method string getFixedVersions() Obtain Repair Version Number
 * @method void setFixedVersions(string $FixedVersions) Set Repair Version Number
 * @method array getTag() Obtain Vulnerability Tag: "CanBeFixed", "DynamicLevelPoc", and "DynamicLevelExp"
 * @method void setTag(array $Tag) Set Vulnerability Tag: "CanBeFixed", "DynamicLevelPoc", and "DynamicLevelExp"
 * @method string getComponent() Obtain Component name.
 * @method void setComponent(string $Component) Set Component name.
 * @method string getVersion() Obtain Component version
 * @method void setVersion(string $Version) Set Component version
 * @method integer getAttackLevel() Obtain Attack Heat 0-3
 * @method void setAttackLevel(integer $AttackLevel) Set Attack Heat 0-3
 * @method array getLayerInfos() Obtain Image Layer Information List
 * @method void setLayerInfos(array $LayerInfos) Set Image Layer Information List
 */
class ImageVul extends AbstractModel
{
    /**
     * @var string Vulnerability ID
     */
    public $CVEID;

    /**
     * @var string viewpoint validation program ID
     */
    public $POCID;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var array Component Information
     */
    public $Components;

    /**
     * @var string category
     */
    public $Category;

    /**
     * @var string Category 2
     */
    public $CategoryType;

    /**
     * @var string Risk level
     */
    public $Level;

    /**
     * @var string Description
     */
    public $Des;

    /**
     * @var string Solution
     */
    public $OfficialSolution;

    /**
     * @var string Refer
     */
    public $Reference;

    /**
     * @var string defense solution
     */
    public $DefenseSolution;

    /**
     * @var string Submission time
     */
    public $SubmitTime;

    /**
     * @var string CVSS Score
     */
    public $CvssScore;

    /**
     * @var string CVSS information.
     */
    public $CvssVector;

    /**
     * @var string Whether repair is suggested.
     */
    public $IsSuggest;

    /**
     * @var string Repair Version Number
     */
    public $FixedVersions;

    /**
     * @var array Vulnerability Tag: "CanBeFixed", "DynamicLevelPoc", and "DynamicLevelExp"
     */
    public $Tag;

    /**
     * @var string Component name.
     */
    public $Component;

    /**
     * @var string Component version
     */
    public $Version;

    /**
     * @var integer Attack Heat 0-3
     */
    public $AttackLevel;

    /**
     * @var array Image Layer Information List
     */
    public $LayerInfos;

    /**
     * @param string $CVEID Vulnerability ID
     * @param string $POCID viewpoint validation program ID
     * @param string $Name Vulnerability name
     * @param array $Components Component Information
     * @param string $Category category
     * @param string $CategoryType Category 2
     * @param string $Level Risk level
     * @param string $Des Description
     * @param string $OfficialSolution Solution
     * @param string $Reference Refer
     * @param string $DefenseSolution defense solution
     * @param string $SubmitTime Submission time
     * @param string $CvssScore CVSS Score
     * @param string $CvssVector CVSS information.
     * @param string $IsSuggest Whether repair is suggested.
     * @param string $FixedVersions Repair Version Number
     * @param array $Tag Vulnerability Tag: "CanBeFixed", "DynamicLevelPoc", and "DynamicLevelExp"
     * @param string $Component Component name.
     * @param string $Version Component version
     * @param integer $AttackLevel Attack Heat 0-3
     * @param array $LayerInfos Image Layer Information List
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("POCID",$param) and $param["POCID"] !== null) {
            $this->POCID = $param["POCID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new ComponentsInfo();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Des",$param) and $param["Des"] !== null) {
            $this->Des = $param["Des"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("DefenseSolution",$param) and $param["DefenseSolution"] !== null) {
            $this->DefenseSolution = $param["DefenseSolution"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CvssVector",$param) and $param["CvssVector"] !== null) {
            $this->CvssVector = $param["CvssVector"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("FixedVersions",$param) and $param["FixedVersions"] !== null) {
            $this->FixedVersions = $param["FixedVersions"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("LayerInfos",$param) and $param["LayerInfos"] !== null) {
            $this->LayerInfos = [];
            foreach ($param["LayerInfos"] as $key => $value){
                $obj = new ImageVulLayerInfo();
                $obj->deserialize($value);
                array_push($this->LayerInfos, $obj);
            }
        }
    }
}
