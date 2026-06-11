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
 * Vulnerability details
 *
 * @method string getCVEID() Obtain CVE No.
 * @method void setCVEID(string $CVEID) Set CVE No.
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method array getTags() Obtain vulnerability tag
 * @method void setTags(array $Tags) Set vulnerability tag
 * @method string getCategoryType() Obtain Vulnerability type
 * @method void setCategoryType(string $CategoryType) Set Vulnerability type
 * @method string getLevel() Obtain Vulnerability threat level
 * @method void setLevel(string $Level) Set Vulnerability threat level
 * @method string getSubmitTime() Obtain Vulnerability disclosure time
 * @method void setSubmitTime(string $SubmitTime) Set Vulnerability disclosure time
 * @method string getDescription() Obtain Vulnerability description
 * @method void setDescription(string $Description) Set Vulnerability description
 * @method string getCVSSV3Desc() Obtain CVSS V3 description
 * @method void setCVSSV3Desc(string $CVSSV3Desc) Set CVSS V3 description
 * @method string getOfficialSolution() Obtain Vulnerability fix suggestion
 * @method void setOfficialSolution(string $OfficialSolution) Set Vulnerability fix suggestion
 * @method string getDefenseSolution() Obtain Mitigation measure
 * @method void setDefenseSolution(string $DefenseSolution) Set Mitigation measure
 * @method array getReference() Obtain Reference link
 * @method void setReference(array $Reference) Set Reference link
 * @method float getCVSSV3Score() Obtain CVSS V3 score
 * @method void setCVSSV3Score(float $CVSSV3Score) Set CVSS V3 score
 * @method array getComponentList() Obtain List of components affected by vulnerabilities
 * @method void setComponentList(array $ComponentList) Set List of components affected by vulnerabilities
 * @method integer getLocalImageCount() Obtain Number of affected local images
 * @method void setLocalImageCount(integer $LocalImageCount) Set Number of affected local images
 * @method integer getContainerCount() Obtain Number of affected containers
 * @method void setContainerCount(integer $ContainerCount) Set Number of affected containers
 * @method integer getRegistryImageCount() Obtain Number of affected repository images
 * @method void setRegistryImageCount(integer $RegistryImageCount) Set Number of affected repository images
 * @method string getCategory() Obtain Vulnerability sub-category
 * @method void setCategory(string $Category) Set Vulnerability sub-category
 * @method integer getLocalNewestImageCount() Obtain Number of affected local images on the latest version
 * @method void setLocalNewestImageCount(integer $LocalNewestImageCount) Set Number of affected local images on the latest version
 * @method integer getRegistryNewestImageCount() Obtain Number of affected repository images on the latest version
 * @method void setRegistryNewestImageCount(integer $RegistryNewestImageCount) Set Number of affected repository images on the latest version
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method string getDefenceStatus() Obtain Defense Status. NO_DEFENDED: Not Defended; DEFENDED: Defended
 * @method void setDefenceStatus(string $DefenceStatus) Set Defense Status. NO_DEFENDED: Not Defended; DEFENDED: Defended
 * @method string getDefenceScope() Obtain Vulnerability Defense Host Range. MANUAL: Selected Host Nodes; ALL: All
 * @method void setDefenceScope(string $DefenceScope) Set Vulnerability Defense Host Range. MANUAL: Selected Host Nodes; ALL: All
 * @method integer getDefenceHostCount() Obtain Number of Hosts Defended Against Vulnerabilities
 * @method void setDefenceHostCount(integer $DefenceHostCount) Set Number of Hosts Defended Against Vulnerabilities
 * @method integer getDefendedCount() Obtain Number of Attacks Defended
 * @method void setDefendedCount(integer $DefendedCount) Set Number of Attacks Defended
 * @method string getScanStatus() Obtain Scanned. NOT_SCAN: Not Scanned; SCANNED: Scanned
 * @method void setScanStatus(string $ScanStatus) Set Scanned. NOT_SCAN: Not Scanned; SCANNED: Scanned
 */
class VulDetailInfo extends AbstractModel
{
    /**
     * @var string CVE No.
     */
    public $CVEID;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var array vulnerability tag
     */
    public $Tags;

    /**
     * @var string Vulnerability type
     */
    public $CategoryType;

    /**
     * @var string Vulnerability threat level
     */
    public $Level;

    /**
     * @var string Vulnerability disclosure time
     */
    public $SubmitTime;

    /**
     * @var string Vulnerability description
     */
    public $Description;

    /**
     * @var string CVSS V3 description
     */
    public $CVSSV3Desc;

    /**
     * @var string Vulnerability fix suggestion
     */
    public $OfficialSolution;

    /**
     * @var string Mitigation measure
     */
    public $DefenseSolution;

    /**
     * @var array Reference link
     */
    public $Reference;

    /**
     * @var float CVSS V3 score
     */
    public $CVSSV3Score;

    /**
     * @var array List of components affected by vulnerabilities
     */
    public $ComponentList;

    /**
     * @var integer Number of affected local images
     */
    public $LocalImageCount;

    /**
     * @var integer Number of affected containers
     */
    public $ContainerCount;

    /**
     * @var integer Number of affected repository images
     */
    public $RegistryImageCount;

    /**
     * @var string Vulnerability sub-category
     */
    public $Category;

    /**
     * @var integer Number of affected local images on the latest version
     */
    public $LocalNewestImageCount;

    /**
     * @var integer Number of affected repository images on the latest version
     */
    public $RegistryNewestImageCount;

    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var string Defense Status. NO_DEFENDED: Not Defended; DEFENDED: Defended
     */
    public $DefenceStatus;

    /**
     * @var string Vulnerability Defense Host Range. MANUAL: Selected Host Nodes; ALL: All
     */
    public $DefenceScope;

    /**
     * @var integer Number of Hosts Defended Against Vulnerabilities
     */
    public $DefenceHostCount;

    /**
     * @var integer Number of Attacks Defended
     */
    public $DefendedCount;

    /**
     * @var string Scanned. NOT_SCAN: Not Scanned; SCANNED: Scanned
     */
    public $ScanStatus;

    /**
     * @param string $CVEID CVE No.
     * @param string $Name Vulnerability name
     * @param array $Tags vulnerability tag
     * @param string $CategoryType Vulnerability type
     * @param string $Level Vulnerability threat level
     * @param string $SubmitTime Vulnerability disclosure time
     * @param string $Description Vulnerability description
     * @param string $CVSSV3Desc CVSS V3 description
     * @param string $OfficialSolution Vulnerability fix suggestion
     * @param string $DefenseSolution Mitigation measure
     * @param array $Reference Reference link
     * @param float $CVSSV3Score CVSS V3 score
     * @param array $ComponentList List of components affected by vulnerabilities
     * @param integer $LocalImageCount Number of affected local images
     * @param integer $ContainerCount Number of affected containers
     * @param integer $RegistryImageCount Number of affected repository images
     * @param string $Category Vulnerability sub-category
     * @param integer $LocalNewestImageCount Number of affected local images on the latest version
     * @param integer $RegistryNewestImageCount Number of affected repository images on the latest version
     * @param string $PocID POC ID
     * @param string $DefenceStatus Defense Status. NO_DEFENDED: Not Defended; DEFENDED: Defended
     * @param string $DefenceScope Vulnerability Defense Host Range. MANUAL: Selected Host Nodes; ALL: All
     * @param integer $DefenceHostCount Number of Hosts Defended Against Vulnerabilities
     * @param integer $DefendedCount Number of Attacks Defended
     * @param string $ScanStatus Scanned. NOT_SCAN: Not Scanned; SCANNED: Scanned
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CVSSV3Desc",$param) and $param["CVSSV3Desc"] !== null) {
            $this->CVSSV3Desc = $param["CVSSV3Desc"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("DefenseSolution",$param) and $param["DefenseSolution"] !== null) {
            $this->DefenseSolution = $param["DefenseSolution"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }

        if (array_key_exists("LocalImageCount",$param) and $param["LocalImageCount"] !== null) {
            $this->LocalImageCount = $param["LocalImageCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("RegistryImageCount",$param) and $param["RegistryImageCount"] !== null) {
            $this->RegistryImageCount = $param["RegistryImageCount"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("LocalNewestImageCount",$param) and $param["LocalNewestImageCount"] !== null) {
            $this->LocalNewestImageCount = $param["LocalNewestImageCount"];
        }

        if (array_key_exists("RegistryNewestImageCount",$param) and $param["RegistryNewestImageCount"] !== null) {
            $this->RegistryNewestImageCount = $param["RegistryNewestImageCount"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("DefenceStatus",$param) and $param["DefenceStatus"] !== null) {
            $this->DefenceStatus = $param["DefenceStatus"];
        }

        if (array_key_exists("DefenceScope",$param) and $param["DefenceScope"] !== null) {
            $this->DefenceScope = $param["DefenceScope"];
        }

        if (array_key_exists("DefenceHostCount",$param) and $param["DefenceHostCount"] !== null) {
            $this->DefenceHostCount = $param["DefenceHostCount"];
        }

        if (array_key_exists("DefendedCount",$param) and $param["DefendedCount"] !== null) {
            $this->DefendedCount = $param["DefendedCount"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }
    }
}
