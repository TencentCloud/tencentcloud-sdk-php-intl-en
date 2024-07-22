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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability details
 *
 * @method integer getId() Obtain Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPatchId() Obtain POC ID of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPatchId(string $PatchId) Set POC ID of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVULName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVULName(string $VULName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Vulnerability severity: `high`, `middle`, `low`, `info`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Vulnerability severity: `high`, `middle`, `low`, `info`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVSSScore() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSSScore(string $CVSSScore) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVEId() Obtain CVE number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVEId(string $CVEId) Set CVE number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTag() Obtain Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(string $Tag) Set Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVULCategory() Obtain Vulnerability category: `1`: Web application vulnerabilities, `2`: System component vulnerabilities, `3`: Configuration risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVULCategory(integer $VULCategory) Set Vulnerability category: `1`: Web application vulnerabilities, `2`: System component vulnerabilities, `3`: Configuration risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImpactOs() Obtain Operating systems affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImpactOs(string $ImpactOs) Set Operating systems affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImpactCOMPENT() Obtain Components affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImpactCOMPENT(string $ImpactCOMPENT) Set Components affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImpactVersion() Obtain Versions affected by the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImpactVersion(string $ImpactVersion) Set Versions affected by the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReference() Obtain Reference information of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReference(string $Reference) Set Reference information of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVULDescribe() Obtain Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVULDescribe(string $VULDescribe) Set Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFix() Obtain Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFix(string $Fix) Set Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProSupport() Obtain Product support status. The real-time status is returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProSupport(integer $ProSupport) Set Product support status. The real-time status is returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsPublish() Obtain Specify whether the vulnerability is published as an emergency vulnerability. `1`: Published as an emergency vulnerability; `0`: Not an emergency vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPublish(integer $IsPublish) Set Specify whether the vulnerability is published as an emergency vulnerability. `1`: Published as an emergency vulnerability; `0`: Not an emergency vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReleaseTime() Obtain Disclosure time of the vulnerability. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReleaseTime(string $ReleaseTime) Set Disclosure time of the vulnerability. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The time when the vulnerability is added to the vulnerability database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The time when the vulnerability is added to the vulnerability database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The last update time of the vulnerability in the database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The last update time of the vulnerability in the database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubCategory() Obtain Sub-category of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubCategory(string $SubCategory) Set Sub-category of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BugInfoDetail extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string POC ID of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PatchId;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VULName;

    /**
     * @var string Vulnerability severity: `high`, `middle`, `low`, `info`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSSScore;

    /**
     * @var string CVE number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVEId;

    /**
     * @var string Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var integer Vulnerability category: `1`: Web application vulnerabilities, `2`: System component vulnerabilities, `3`: Configuration risks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VULCategory;

    /**
     * @var string Operating systems affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImpactOs;

    /**
     * @var string Components affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImpactCOMPENT;

    /**
     * @var string Versions affected by the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImpactVersion;

    /**
     * @var string Reference information of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reference;

    /**
     * @var string Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VULDescribe;

    /**
     * @var string Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fix;

    /**
     * @var integer Product support status. The real-time status is returned.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProSupport;

    /**
     * @var integer Specify whether the vulnerability is published as an emergency vulnerability. `1`: Published as an emergency vulnerability; `0`: Not an emergency vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPublish;

    /**
     * @var string Disclosure time of the vulnerability. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReleaseTime;

    /**
     * @var string The time when the vulnerability is added to the vulnerability database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string The last update time of the vulnerability in the database
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Sub-category of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubCategory;

    /**
     * @param integer $Id Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PatchId POC ID of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VULName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Vulnerability severity: `high`, `middle`, `low`, `info`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVSSScore CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVEId CVE number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tag Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VULCategory Vulnerability category: `1`: Web application vulnerabilities, `2`: System component vulnerabilities, `3`: Configuration risks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImpactOs Operating systems affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImpactCOMPENT Components affected by the vulnerability 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImpactVersion Versions affected by the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reference Reference information of the vulnerability
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VULDescribe Vulnerability description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Fix Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProSupport Product support status. The real-time status is returned.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsPublish Specify whether the vulnerability is published as an emergency vulnerability. `1`: Published as an emergency vulnerability; `0`: Not an emergency vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReleaseTime Disclosure time of the vulnerability. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The time when the vulnerability is added to the vulnerability database.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime The last update time of the vulnerability in the database
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubCategory Sub-category of the vulnerability
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PatchId",$param) and $param["PatchId"] !== null) {
            $this->PatchId = $param["PatchId"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVSSScore",$param) and $param["CVSSScore"] !== null) {
            $this->CVSSScore = $param["CVSSScore"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("VULCategory",$param) and $param["VULCategory"] !== null) {
            $this->VULCategory = $param["VULCategory"];
        }

        if (array_key_exists("ImpactOs",$param) and $param["ImpactOs"] !== null) {
            $this->ImpactOs = $param["ImpactOs"];
        }

        if (array_key_exists("ImpactCOMPENT",$param) and $param["ImpactCOMPENT"] !== null) {
            $this->ImpactCOMPENT = $param["ImpactCOMPENT"];
        }

        if (array_key_exists("ImpactVersion",$param) and $param["ImpactVersion"] !== null) {
            $this->ImpactVersion = $param["ImpactVersion"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("VULDescribe",$param) and $param["VULDescribe"] !== null) {
            $this->VULDescribe = $param["VULDescribe"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("ProSupport",$param) and $param["ProSupport"] !== null) {
            $this->ProSupport = $param["ProSupport"];
        }

        if (array_key_exists("IsPublish",$param) and $param["IsPublish"] !== null) {
            $this->IsPublish = $param["IsPublish"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubCategory",$param) and $param["SubCategory"] !== null) {
            $this->SubCategory = $param["SubCategory"];
        }
    }
}
