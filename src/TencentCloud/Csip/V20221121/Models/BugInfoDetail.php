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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability details
 *
 * @method integer getId() Obtain Vulnerability ID
 * @method void setId(integer $Id) Set Vulnerability ID
 * @method string getPatchId() Obtain PocId Corresponding to Vulnerability
 * @method void setPatchId(string $PatchId) Set PocId Corresponding to Vulnerability
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getLevel() Obtain Vulnerability Severity: High, Middle, Low, Info.
 * @method void setLevel(string $Level) Set Vulnerability Severity: High, Middle, Low, Info.
 * @method string getCVSSScore() Obtain CVSS Score
 * @method void setCVSSScore(string $CVSSScore) Set CVSS Score
 * @method string getCVEId() Obtain CVE ID
 * @method void setCVEId(string $CVEId) Set CVE ID
 * @method string getTag() Obtain Vulnerability tag
 * @method void setTag(string $Tag) Set Vulnerability tag
 * @method integer getVULCategory() Obtain Vulnerability Type. 1: Web Application; 2: System Component Vulnerabilities; 3: Configuration Risk.
 * @method void setVULCategory(integer $VULCategory) Set Vulnerability Type. 1: Web Application; 2: System Component Vulnerabilities; 3: Configuration Risk.
 * @method string getImpactOs() Obtain Vulnerability Affected System
 * @method void setImpactOs(string $ImpactOs) Set Vulnerability Affected System
 * @method string getImpactCOMPENT() Obtain Affected component
 * @method void setImpactCOMPENT(string $ImpactCOMPENT) Set Affected component
 * @method string getImpactVersion() Obtain Vulnerability Affected Version
 * @method void setImpactVersion(string $ImpactVersion) Set Vulnerability Affected Version
 * @method string getReference() Obtain Link
 * @method void setReference(string $Reference) Set Link
 * @method string getVULDescribe() Obtain Vulnerability description
 * @method void setVULDescribe(string $VULDescribe) Set Vulnerability description
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method integer getProSupport() Obtain Product Support Status, returned in real time.
 * @method void setProSupport(integer $ProSupport) Set Product Support Status, returned in real time.
 * @method integer getIsPublish() Obtain Published or Not. 0 for No, 1 for Yes.
 * @method void setIsPublish(integer $IsPublish) Set Published or Not. 0 for No, 1 for Yes.
 * @method string getReleaseTime() Obtain Release time.
 * @method void setReleaseTime(string $ReleaseTime) Set Release time.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getSubCategory() Obtain Vulnerability Subcategory
 * @method void setSubCategory(string $SubCategory) Set Vulnerability Subcategory
 */
class BugInfoDetail extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $Id;

    /**
     * @var string PocId Corresponding to Vulnerability
     */
    public $PatchId;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string Vulnerability Severity: High, Middle, Low, Info.
     */
    public $Level;

    /**
     * @var string CVSS Score
     */
    public $CVSSScore;

    /**
     * @var string CVE ID
     */
    public $CVEId;

    /**
     * @var string Vulnerability tag
     */
    public $Tag;

    /**
     * @var integer Vulnerability Type. 1: Web Application; 2: System Component Vulnerabilities; 3: Configuration Risk.
     */
    public $VULCategory;

    /**
     * @var string Vulnerability Affected System
     */
    public $ImpactOs;

    /**
     * @var string Affected component
     */
    public $ImpactCOMPENT;

    /**
     * @var string Vulnerability Affected Version
     */
    public $ImpactVersion;

    /**
     * @var string Link
     */
    public $Reference;

    /**
     * @var string Vulnerability description
     */
    public $VULDescribe;

    /**
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var integer Product Support Status, returned in real time.
     */
    public $ProSupport;

    /**
     * @var integer Published or Not. 0 for No, 1 for Yes.
     */
    public $IsPublish;

    /**
     * @var string Release time.
     */
    public $ReleaseTime;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Vulnerability Subcategory
     */
    public $SubCategory;

    /**
     * @param integer $Id Vulnerability ID
     * @param string $PatchId PocId Corresponding to Vulnerability
     * @param string $VULName Vulnerability name
     * @param string $Level Vulnerability Severity: High, Middle, Low, Info.
     * @param string $CVSSScore CVSS Score
     * @param string $CVEId CVE ID
     * @param string $Tag Vulnerability tag
     * @param integer $VULCategory Vulnerability Type. 1: Web Application; 2: System Component Vulnerabilities; 3: Configuration Risk.
     * @param string $ImpactOs Vulnerability Affected System
     * @param string $ImpactCOMPENT Affected component
     * @param string $ImpactVersion Vulnerability Affected Version
     * @param string $Reference Link
     * @param string $VULDescribe Vulnerability description
     * @param string $Fix Fixing suggestion
     * @param integer $ProSupport Product Support Status, returned in real time.
     * @param integer $IsPublish Published or Not. 0 for No, 1 for Yes.
     * @param string $ReleaseTime Release time.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time
     * @param string $SubCategory Vulnerability Subcategory
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
