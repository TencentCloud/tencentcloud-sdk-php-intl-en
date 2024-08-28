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
 * DescribeVulInfoCvss response structure.
 *
 * @method integer getVulId() Obtain Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulId(integer $VulId) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulLevel() Obtain Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulLevel(integer $VulLevel) Set Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulType() Obtain Vulnerability Classification: 1: Web-CMS Vulnerability 2: Application Vulnerabilities 4: Linux Software Vulnerabilities 5: Windows System Vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulType(integer $VulType) Set Vulnerability Classification: 1: Web-CMS Vulnerability 2: Application Vulnerabilities 4: Linux Software Vulnerabilities 5: Windows System Vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Vulnerability Description Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Vulnerability Description Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRepairPlan() Obtain Fixing solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepairPlan(string $RepairPlan) Set Fixing solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCveId() Obtain Vulnerability CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveId(string $CveId) Set Vulnerability CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReference() Obtain Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReference(string $Reference) Set Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVSS() Obtain CVSS Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSS(string $CVSS) Set CVSS Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicDate() Obtain Release date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicDate(string $PublicDate) Set Release date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCvssScore() Obtain CVSS Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssScore(integer $CvssScore) Set CVSS Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCveInfo() Obtain CVSS Details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveInfo(string $CveInfo) Set CVSS Details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCvssScoreFloat() Obtain CVSS score, floating point type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssScoreFloat(float $CvssScoreFloat) Set CVSS score, floating point type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabels() Obtain Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(string $Labels) Set Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefenseAttackCount() Obtain Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) Set Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSuccessFixCount() Obtain Total Number of Successful Network Repairs. Returns 0 by default for unsupported auto-repair vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuccessFixCount(integer $SuccessFixCount) Set Total Number of Successful Network Repairs. Returns 0 by default for unsupported auto-repair vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFixSwitch() Obtain Repair support: 0 - Neither Windows nor Linux supports for repair; 1 - Both Windows and Linux support for repair; 2 - Only Linux supports for repair; 3 - Only Windows supports for repair.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixSwitch(integer $FixSwitch) Set Repair support: 0 - Neither Windows nor Linux supports for repair; 1 - Both Windows and Linux support for repair; 2 - Only Linux supports for repair; 3 - Only Windows supports for repair.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVulInfoCvssResponse extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulId;

    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var integer Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulLevel;

    /**
     * @var integer Vulnerability Classification: 1: Web-CMS Vulnerability 2: Application Vulnerabilities 4: Linux Software Vulnerabilities 5: Windows System Vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulType;

    /**
     * @var string Vulnerability Description Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Fixing solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RepairPlan;

    /**
     * @var string Vulnerability CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveId;

    /**
     * @var string Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reference;

    /**
     * @var string CVSS Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSS;

    /**
     * @var string Release date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicDate;

    /**
     * @var integer CVSS Score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssScore;

    /**
     * @var string CVSS Details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveInfo;

    /**
     * @var float CVSS score, floating point type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssScoreFloat;

    /**
     * @var string Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var integer Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenseAttackCount;

    /**
     * @var integer Total Number of Successful Network Repairs. Returns 0 by default for unsupported auto-repair vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuccessFixCount;

    /**
     * @var integer Repair support: 0 - Neither Windows nor Linux supports for repair; 1 - Both Windows and Linux support for repair; 2 - Only Linux supports for repair; 3 - Only Windows supports for repair.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixSwitch;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $VulId Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulLevel Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulType Vulnerability Classification: 1: Web-CMS Vulnerability 2: Application Vulnerabilities 4: Linux Software Vulnerabilities 5: Windows System Vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Vulnerability Description Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RepairPlan Fixing solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CveId Vulnerability CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reference Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVSS CVSS Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicDate Release date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CvssScore CVSS Score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CveInfo CVSS Details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CvssScoreFloat CVSS score, floating point type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Labels Vulnerability Tags, Separated by Multiple Commas
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefenseAttackCount Number of Attacks Defended
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SuccessFixCount Total Number of Successful Network Repairs. Returns 0 by default for unsupported auto-repair vulnerabilities.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FixSwitch Repair support: 0 - Neither Windows nor Linux supports for repair; 1 - Both Windows and Linux support for repair; 2 - Only Linux supports for repair; 3 - Only Windows supports for repair.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairPlan",$param) and $param["RepairPlan"] !== null) {
            $this->RepairPlan = $param["RepairPlan"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PublicDate",$param) and $param["PublicDate"] !== null) {
            $this->PublicDate = $param["PublicDate"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CveInfo",$param) and $param["CveInfo"] !== null) {
            $this->CveInfo = $param["CveInfo"];
        }

        if (array_key_exists("CvssScoreFloat",$param) and $param["CvssScoreFloat"] !== null) {
            $this->CvssScoreFloat = $param["CvssScoreFloat"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("SuccessFixCount",$param) and $param["SuccessFixCount"] !== null) {
            $this->SuccessFixCount = $param["SuccessFixCount"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
