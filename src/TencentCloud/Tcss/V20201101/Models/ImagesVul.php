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
 * Vulnerability in the image
 *
 * @method string getCVEID() Obtain Vulnerability ID
 * @method void setCVEID(string $CVEID) Set Vulnerability ID
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getCategory() Obtain Category
 * @method void setCategory(string $Category) Set Category
 * @method string getCategoryType() Obtain Category 2
 * @method void setCategoryType(string $CategoryType) Set Category 2
 * @method integer getLevel() Obtain Risk level
 * @method void setLevel(integer $Level) Set Risk level
 * @method string getDes() Obtain Description
 * @method void setDes(string $Des) Set Description
 * @method string getOfficialSolution() Obtain Solution
 * @method void setOfficialSolution(string $OfficialSolution) Set Solution
 * @method string getReference() Obtain Reference
 * @method void setReference(string $Reference) Set Reference
 * @method string getDefenseSolution() Obtain Defense solution
 * @method void setDefenseSolution(string $DefenseSolution) Set Defense solution
 * @method string getSubmitTime() Obtain Submission time
 * @method void setSubmitTime(string $SubmitTime) Set Submission time
 * @method float getCVSSV3Score() Obtain CVSS V3 score
 * @method void setCVSSV3Score(float $CVSSV3Score) Set CVSS V3 score
 * @method string getCVSSV3Desc() Obtain CVSS V3 description
 * @method void setCVSSV3Desc(string $CVSSV3Desc) Set CVSS V3 description
 * @method boolean getIsSuggest() Obtain Whether it is of high priority. Valid values: `true` (yes); `false` (no).
 * @method void setIsSuggest(boolean $IsSuggest) Set Whether it is of high priority. Valid values: `true` (yes); `false` (no).
 * @method string getFixedVersions() Obtain Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixedVersions(string $FixedVersions) Set Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImagesVul extends AbstractModel
{
    /**
     * @var string Vulnerability ID
     */
    public $CVEID;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var string Component
     */
    public $Component;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Category
     */
    public $Category;

    /**
     * @var string Category 2
     */
    public $CategoryType;

    /**
     * @var integer Risk level
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
     * @var string Reference
     */
    public $Reference;

    /**
     * @var string Defense solution
     */
    public $DefenseSolution;

    /**
     * @var string Submission time
     */
    public $SubmitTime;

    /**
     * @var float CVSS V3 score
     */
    public $CVSSV3Score;

    /**
     * @var string CVSS V3 description
     */
    public $CVSSV3Desc;

    /**
     * @var boolean Whether it is of high priority. Valid values: `true` (yes); `false` (no).
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
     * @param string $CVEID Vulnerability ID
     * @param string $Name Vulnerability name
     * @param string $Component Component
     * @param string $Version Version
     * @param string $Category Category
     * @param string $CategoryType Category 2
     * @param integer $Level Risk level
     * @param string $Des Description
     * @param string $OfficialSolution Solution
     * @param string $Reference Reference
     * @param string $DefenseSolution Defense solution
     * @param string $SubmitTime Submission time
     * @param float $CVSSV3Score CVSS V3 score
     * @param string $CVSSV3Desc CVSS V3 description
     * @param boolean $IsSuggest Whether it is of high priority. Valid values: `true` (yes); `false` (no).
     * @param string $FixedVersions Number of the fixed version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tag Vulnerability tag. Valid values: `CanBeFixed`, `DynamicLevelPoc`, `DynamicLevelExp`.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
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

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("CVSSV3Desc",$param) and $param["CVSSV3Desc"] !== null) {
            $this->CVSSV3Desc = $param["CVSSV3Desc"];
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
    }
}
