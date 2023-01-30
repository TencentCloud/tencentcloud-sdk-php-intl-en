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
 * List of vulnerabilities
 *
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method array getTags() Obtain Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCVSSV3Score() Obtain CVSS V3 score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSSV3Score(float $CVSSV3Score) Set CVSS V3 score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVEID() Obtain CVE No.
 * @method void setCVEID(string $CVEID) Set CVE No.
 * @method string getCategory() Obtain Vulnerability sub-category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Vulnerability sub-category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFoundTime() Obtain First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFoundTime(string $FoundTime) Set First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestFoundTime() Obtain Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestFoundTime(string $LatestFoundTime) Set Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getID() Obtain Vulnerability ID
 * @method void setID(integer $ID) Set Vulnerability ID
 * @method integer getLocalImageCount() Obtain Number of affected local images
 * @method void setLocalImageCount(integer $LocalImageCount) Set Number of affected local images
 * @method integer getContainerCount() Obtain Number of affected containers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerCount(integer $ContainerCount) Set Number of affected containers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegistryImageCount() Obtain Number of affected repository images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryImageCount(integer $RegistryImageCount) Set Number of affected repository images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPocID() Obtain POC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPocID(string $PocID) Set POC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefenceStatus() Obtain Defense status. Valid values: `NO_DEFENDED`, `DEFENDED`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenceStatus(string $DefenceStatus) Set Defense status. Valid values: `NO_DEFENDED`, `DEFENDED`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefenceScope() Obtain Scope of servers with exploit prevention enabled. Valid values: `MANUAL` (specified servers); `ALL` (all servers).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenceScope(string $DefenceScope) Set Scope of servers with exploit prevention enabled. Valid values: `MANUAL` (specified servers); `ALL` (all servers).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefenceHostCount() Obtain Number of servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenceHostCount(integer $DefenceHostCount) Set Number of servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefendedCount() Obtain Number of attacks defended against
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefendedCount(integer $DefendedCount) Set Number of attacks defended against
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulInfo extends AbstractModel
{
    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var array Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var float CVSS V3 score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSSV3Score;

    /**
     * @var string Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string CVE No.
     */
    public $CVEID;

    /**
     * @var string Vulnerability sub-category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @var string First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FoundTime;

    /**
     * @var string Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestFoundTime;

    /**
     * @var integer Vulnerability ID
     */
    public $ID;

    /**
     * @var integer Number of affected local images
     */
    public $LocalImageCount;

    /**
     * @var integer Number of affected containers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerCount;

    /**
     * @var integer Number of affected repository images
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryImageCount;

    /**
     * @var string POC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PocID;

    /**
     * @var string Defense status. Valid values: `NO_DEFENDED`, `DEFENDED`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenceStatus;

    /**
     * @var string Scope of servers with exploit prevention enabled. Valid values: `MANUAL` (specified servers); `ALL` (all servers).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenceScope;

    /**
     * @var integer Number of servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenceHostCount;

    /**
     * @var integer Number of attacks defended against
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefendedCount;

    /**
     * @param string $Name Vulnerability name
     * @param array $Tags Vulnerability tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CVSSV3Score CVSS V3 score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVEID CVE No.
     * @param string $Category Vulnerability sub-category
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FoundTime First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestFoundTime Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ID Vulnerability ID
     * @param integer $LocalImageCount Number of affected local images
     * @param integer $ContainerCount Number of affected containers
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegistryImageCount Number of affected repository images
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PocID POC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefenceStatus Defense status. Valid values: `NO_DEFENDED`, `DEFENDED`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefenceScope Scope of servers with exploit prevention enabled. Valid values: `MANUAL` (specified servers); `ALL` (all servers).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefenceHostCount Number of servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefendedCount Number of attacks defended against
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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
    }
}
