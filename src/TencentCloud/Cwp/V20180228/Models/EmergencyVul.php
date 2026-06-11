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
 * @method void setCveId(string $CveId) Set CVE ID
 * @method float getCvssScore() Obtain CVSS score
 * @method void setCvssScore(float $CvssScore) Set CVSS score
 * @method string getLabels() Obtain Vulnerability Tags, Separated by Multiple Commas
 * @method void setLabels(string $Labels) Set Vulnerability Tags, Separated by Multiple Commas
 * @method integer getHostCount() Obtain Number of affected machines
 * @method void setHostCount(integer $HostCount) Set Number of affected machines
 * @method integer getIsSupportDefense() Obtain Support defense: 0-no support 1-support
 * @method void setIsSupportDefense(integer $IsSupportDefense) Set Support defense: 0-no support 1-support
 * @method integer getDefenseAttackCount() Obtain Number of Attacks Defended
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) Set Number of Attacks Defended
 * @method integer getMethod() Obtain Detection rule. 0: version comparison, 1: POC verification.
 * @method void setMethod(integer $Method) Set Detection rule. 0: version comparison, 1: POC verification.
 * @method integer getAttackLevel() Obtain Attack intensity level.
 * @method void setAttackLevel(integer $AttackLevel) Set Attack intensity level.
 * @method boolean getDefenseState() Obtain Whether vulnerable hosts are enabled with vulnerability defense.
 * @method void setDefenseState(boolean $DefenseState) Set Whether vulnerable hosts are enabled with vulnerability defense.
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
     */
    public $CveId;

    /**
     * @var float CVSS score
     */
    public $CvssScore;

    /**
     * @var string Vulnerability Tags, Separated by Multiple Commas
     */
    public $Labels;

    /**
     * @var integer Number of affected machines
     */
    public $HostCount;

    /**
     * @var integer Support defense: 0-no support 1-support
     */
    public $IsSupportDefense;

    /**
     * @var integer Number of Attacks Defended
     */
    public $DefenseAttackCount;

    /**
     * @var integer Detection rule. 0: version comparison, 1: POC verification.
     */
    public $Method;

    /**
     * @var integer Attack intensity level.
     */
    public $AttackLevel;

    /**
     * @var boolean Whether vulnerable hosts are enabled with vulnerability defense.
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
     * @param float $CvssScore CVSS score
     * @param string $Labels Vulnerability Tags, Separated by Multiple Commas
     * @param integer $HostCount Number of affected machines
     * @param integer $IsSupportDefense Support defense: 0-no support 1-support
     * @param integer $DefenseAttackCount Number of Attacks Defended
     * @param integer $Method Detection rule. 0: version comparison, 1: POC verification.
     * @param integer $AttackLevel Attack intensity level.
     * @param boolean $DefenseState Whether vulnerable hosts are enabled with vulnerability defense.
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
