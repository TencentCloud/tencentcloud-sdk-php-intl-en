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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Emergency vulnerability information
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method integer getLevel() Obtain Vulnerability level
 * @method void setLevel(integer $Level) Set Vulnerability level
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getPublishDate() Obtain Release date
 * @method void setPublishDate(string $PublishDate) Set Release date
 * @method integer getCategory() Obtain Vulnerability category
 * @method void setCategory(integer $Category) Set Vulnerability category
 * @method integer getStatus() Obtain Vulnerability status. 0: not detected; 1: at risk; 2: not at risk; 3: show progress during check
 * @method void setStatus(integer $Status) Set Vulnerability status. 0: not detected; 1: at risk; 2: not at risk; 3: show progress during check
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getProgress() Obtain Scan progress
 * @method void setProgress(integer $Progress) Set Scan progress
 * @method string getCveId() Obtain CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveId(string $CveId) Set CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCvssScore() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssScore(float $CvssScore) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabels() Obtain Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(string $Labels) Set Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostCount() Obtain Number of affected machines
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCount(integer $HostCount) Set Number of affected machines
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportDefense() Obtain Whether to support defense: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportDefense(integer $IsSupportDefense) Set Whether to support defense: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefenseAttackCount() Obtain Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) Set Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMethod() Obtain Detection rule: 0: version comparison; 1: POC verification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(integer $Method) Set Detection rule: 0: version comparison; 1: POC verification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackLevel() Obtain Attack intensity level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackLevel(integer $AttackLevel) Set Attack intensity level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDefenseState() Obtain Whether vulnerability defense is enabled on hosts with vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenseState(boolean $DefenseState) Set Whether vulnerability defense is enabled on hosts with vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmergencyVul extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var integer Vulnerability level
     */
    public $Level;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Release date
     */
    public $PublishDate;

    /**
     * @var integer Vulnerability category
     */
    public $Category;

    /**
     * @var integer Vulnerability status. 0: not detected; 1: at risk; 2: not at risk; 3: show progress during check
     */
    public $Status;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Scan progress
     */
    public $Progress;

    /**
     * @var string CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveId;

    /**
     * @var float CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssScore;

    /**
     * @var string Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var integer Number of affected machines
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCount;

    /**
     * @var integer Whether to support defense: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportDefense;

    /**
     * @var integer Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenseAttackCount;

    /**
     * @var integer Detection rule: 0: version comparison; 1: POC verification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var integer Attack intensity level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackLevel;

    /**
     * @var boolean Whether vulnerability defense is enabled on hosts with vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenseState;

    /**
     * @param integer $VulId Vulnerability ID
     * @param integer $Level Vulnerability level
     * @param string $VulName Vulnerability name
     * @param string $PublishDate Release date
     * @param integer $Category Vulnerability category
     * @param integer $Status Vulnerability status. 0: not detected; 1: at risk; 2: not at risk; 3: show progress during check
     * @param string $LastScanTime Last scan time
     * @param integer $Progress Scan progress
     * @param string $CveId CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CvssScore CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Labels Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostCount Number of affected machines
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportDefense Whether to support defense: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefenseAttackCount Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Method Detection rule: 0: version comparison; 1: POC verification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackLevel Attack intensity level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DefenseState Whether vulnerability defense is enabled on hosts with vulnerabilities
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("PublishDate",$param) and $param["PublishDate"] !== null) {
            $this->PublishDate = $param["PublishDate"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("IsSupportDefense",$param) and $param["IsSupportDefense"] !== null) {
            $this->IsSupportDefense = $param["IsSupportDefense"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("DefenseState",$param) and $param["DefenseState"] !== null) {
            $this->DefenseState = $param["DefenseState"];
        }
    }
}
