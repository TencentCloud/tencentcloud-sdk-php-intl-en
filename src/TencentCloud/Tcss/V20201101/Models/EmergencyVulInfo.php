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
 * List of emergency vulnerabilities
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
 * @method string getCategory() Obtain Vulnerability type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Vulnerability type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubmitTime() Obtain Vulnerability disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubmitTime(string $SubmitTime) Set Vulnerability disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestFoundTime() Obtain Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestFoundTime(string $LatestFoundTime) Set Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED_NOT_RISK` (scanned and at no risk); `SCANNED_RISK` (scanned and at risk).
 * @method void setStatus(string $Status) Set Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED_NOT_RISK` (scanned and at no risk); `SCANNED_RISK` (scanned and at risk).
 * @method integer getID() Obtain Vulnerability ID
 * @method void setID(integer $ID) Set Vulnerability ID
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
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
class EmergencyVulInfo extends AbstractModel
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
     * @var string Vulnerability type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @var string Vulnerability disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubmitTime;

    /**
     * @var string Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestFoundTime;

    /**
     * @var string Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED_NOT_RISK` (scanned and at no risk); `SCANNED_RISK` (scanned and at risk).
     */
    public $Status;

    /**
     * @var integer Vulnerability ID
     */
    public $ID;

    /**
     * @var string POC ID
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
     * @param string $Category Vulnerability type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubmitTime Vulnerability disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestFoundTime Last discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Emergency vulnerability risk information. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED_NOT_RISK` (scanned and at no risk); `SCANNED_RISK` (scanned and at risk).
     * @param integer $ID Vulnerability ID
     * @param string $PocID POC ID
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

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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
