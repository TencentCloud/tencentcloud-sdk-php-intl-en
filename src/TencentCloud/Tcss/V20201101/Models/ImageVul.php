<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVEID(string $CVEID) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPOCID() Obtain POC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPOCID(string $POCID) Set POC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getComponents() Obtain Component information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponents(array $Components) Set Component information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCategory() Obtain Category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCategoryType() Obtain Category 2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategoryType(string $CategoryType) Set Category 2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDes() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDes(string $Des) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfficialSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfficialSolution(string $OfficialSolution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReference() Obtain Reference
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReference(string $Reference) Set Reference
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefenseSolution() Obtain Defense solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenseSolution(string $DefenseSolution) Set Defense solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubmitTime() Obtain Submission time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubmitTime(string $SubmitTime) Set Submission time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvssScore() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssScore(string $CvssScore) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvssVector() Obtain CVSS information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssVector(string $CvssVector) Set CVSS information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsSuggest() Obtain Whether fix is suggested
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSuggest(string $IsSuggest) Set Whether fix is suggested
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFixedVersions() Obtain Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixedVersions(string $FixedVersions) Set Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponent() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponent(string $Component) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Component version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Component version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageVul extends AbstractModel
{
    /**
     * @var string Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVEID;

    /**
     * @var string POC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $POCID;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var array Component information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Components;

    /**
     * @var string Category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @var string Category 2
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CategoryType;

    /**
     * @var string Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Des;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfficialSolution;

    /**
     * @var string Reference
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reference;

    /**
     * @var string Defense solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenseSolution;

    /**
     * @var string Submission time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubmitTime;

    /**
     * @var string CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssScore;

    /**
     * @var string CVSS information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssVector;

    /**
     * @var string Whether fix is suggested
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSuggest;

    /**
     * @var string Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixedVersions;

    /**
     * @var array Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Component;

    /**
     * @var string Component version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $CVEID Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $POCID POC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Components Component information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Category Category
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CategoryType Category 2
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Des Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfficialSolution Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reference Reference
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefenseSolution Defense solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubmitTime Submission time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvssScore CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvssVector CVSS information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsSuggest Whether fix is suggested
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FixedVersions Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tag Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Component Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Component version
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
