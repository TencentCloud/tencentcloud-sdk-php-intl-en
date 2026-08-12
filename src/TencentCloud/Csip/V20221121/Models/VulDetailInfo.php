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
 * All vulnerability information
 *
 * @method integer getID() Obtain <p>Vulnerability ID</p>
 * @method void setID(integer $ID) Set <p>Vulnerability ID</p>
 * @method string getName() Obtain <p>Vulnerability name</p>
 * @method void setName(string $Name) Set <p>Vulnerability name</p>
 * @method string getCVEID() Obtain <p>CveID</p>
 * @method void setCVEID(string $CVEID) Set <p>CveID</p>
 * @method string getCategory() Obtain Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows systems patch
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method void setCategory(string $Category) Set Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows systems patch
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
 * @method string getPublishTime() Obtain Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method void setPublishTime(string $PublishTime) Set Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method string getCheckMethod() Obtain <p>Detection mode</p><p>Enumeration value:</p><ul><li>VersionCompare: Version comparison</li><li>POC: POC detection</li></ul>
 * @method void setCheckMethod(string $CheckMethod) Set <p>Detection mode</p><p>Enumeration value:</p><ul><li>VersionCompare: Version comparison</li><li>POC: POC detection</li></ul>
 * @method string getDefendStatus() Obtain Vulnerability defense status
Enumeration values:
ENABLED: On
NOT_SUPPORTED: Not supported
NOT_ENABLED: not enabled
 * @method void setDefendStatus(string $DefendStatus) Set Vulnerability defense status
Enumeration values:
ENABLED: On
NOT_SUPPORTED: Not supported
NOT_ENABLED: not enabled
 * @method boolean getSupportFix() Obtain Whether one-click repair is supported
Enumeration values:
true: Support
false: Not supported
 * @method void setSupportFix(boolean $SupportFix) Set Whether one-click repair is supported
Enumeration values:
true: Support
false: Not supported
 * @method VPRRatingInfo getVRPRatingInfo() Obtain VPR rating information (including rating result, description, and phased score)
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) Set VPR rating information (including rating result, description, and phased score)
 * @method float getCvssScore() Obtain CVSS score
Valid values: [0.0, 10.0]
 * @method void setCvssScore(float $CvssScore) Set CVSS score
Valid values: [0.0, 10.0]
 * @method array getLabel() Obtain VPR risk tag list (such as exploitation in the wild, EXP available, POC available, public network exposure, no restart required)
 * @method void setLabel(array $Label) Set VPR risk tag list (such as exploitation in the wild, EXP available, POC available, public network exposure, no restart required)
 * @method string getRemark() Obtain Vulnerability remark
 * @method void setRemark(string $Remark) Set Vulnerability remark
 * @method string getSummary() Obtain Vulnerability overview
 * @method void setSummary(string $Summary) Set Vulnerability overview
 * @method integer getDefendHostCount() Obtain Number of hosts with vulnerability protection enabled
 * @method void setDefendHostCount(integer $DefendHostCount) Set Number of hosts with vulnerability protection enabled
 * @method integer getNotDefendHostCount() Obtain Number of hosts with vulnerability defense disabled
 * @method void setNotDefendHostCount(integer $NotDefendHostCount) Set Number of hosts with vulnerability defense disabled
 * @method string getLatestScanTime() Obtain Last scan time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method string getCVSSLevel() Obtain CVSS severity level
Enumeration values:
INVALID: Invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
 * @method void setCVSSLevel(string $CVSSLevel) Set CVSS severity level
Enumeration values:
INVALID: Invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
 * @method array getVulAffect() Obtain Description list of affected software (each item such as openssl < 1.1.1k)
 * @method void setVulAffect(array $VulAffect) Set Description list of affected software (each item such as openssl < 1.1.1k)
 * @method boolean getKVERecord() Obtain Whether included in the KVE (Known Vulnerability Exploitation) library
Enumeration values:
true: Recorded
false: Not recorded
 * @method void setKVERecord(boolean $KVERecord) Set Whether included in the KVE (Known Vulnerability Exploitation) library
Enumeration values:
true: Recorded
false: Not recorded
 * @method string getKVERecordTime() Obtain KVE collection time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method void setKVERecordTime(string $KVERecordTime) Set KVE collection time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method float getEPSSScore() Obtain EPSS score (vulnerability type probability prediction)
Valid values: [0.0, 1.0]
 * @method void setEPSSScore(float $EPSSScore) Set EPSS score (vulnerability type probability prediction)
Valid values: [0.0, 1.0]
 * @method array getAffectVendor() Obtain Affected vendor list
 * @method void setAffectVendor(array $AffectVendor) Set Affected vendor list
 * @method array getAffectProduct() Obtain List of affected products
 * @method void setAffectProduct(array $AffectProduct) Set List of affected products
 * @method string getMechanism() Obtain Vulnerability type mechanism description
 * @method void setMechanism(string $Mechanism) Set Vulnerability type mechanism description
 * @method string getPrecondition() Obtain Pre-deployment instructions for vulnerability type
 * @method void setPrecondition(string $Precondition) Set Pre-deployment instructions for vulnerability type
 * @method array getLatestTrend() Obtain Latest vulnerability spread trend data list (by date)
 * @method void setLatestTrend(array $LatestTrend) Set Latest vulnerability spread trend data list (by date)
 * @method string getFixSolution() Obtain <p>Solution</p>
 * @method void setFixSolution(string $FixSolution) Set <p>Solution</p>
 * @method string getRefLink() Obtain <p>Reference link</p>
 * @method void setRefLink(string $RefLink) Set <p>Reference link</p>
 * @method string getHarmDescription() Obtain <p>Vulnerability severity description</p>
 * @method void setHarmDescription(string $HarmDescription) Set <p>Vulnerability severity description</p>
 * @method array getAffectVendorProduct() Obtain <p>Vulnerability Impact product</p>
 * @method void setAffectVendorProduct(array $AffectVendorProduct) Set <p>Vulnerability Impact product</p>
 */
class VulDetailInfo extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID</p>
     */
    public $ID;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $Name;

    /**
     * @var string <p>CveID</p>
     */
    public $CVEID;

    /**
     * @var string Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows systems patch
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     */
    public $Category;

    /**
     * @var string Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
     */
    public $PublishTime;

    /**
     * @var string <p>Detection mode</p><p>Enumeration value:</p><ul><li>VersionCompare: Version comparison</li><li>POC: POC detection</li></ul>
     */
    public $CheckMethod;

    /**
     * @var string Vulnerability defense status
Enumeration values:
ENABLED: On
NOT_SUPPORTED: Not supported
NOT_ENABLED: not enabled
     */
    public $DefendStatus;

    /**
     * @var boolean Whether one-click repair is supported
Enumeration values:
true: Support
false: Not supported
     */
    public $SupportFix;

    /**
     * @var VPRRatingInfo VPR rating information (including rating result, description, and phased score)
     */
    public $VRPRatingInfo;

    /**
     * @var float CVSS score
Valid values: [0.0, 10.0]
     */
    public $CvssScore;

    /**
     * @var array VPR risk tag list (such as exploitation in the wild, EXP available, POC available, public network exposure, no restart required)
     */
    public $Label;

    /**
     * @var string Vulnerability remark
     */
    public $Remark;

    /**
     * @var string Vulnerability overview
     */
    public $Summary;

    /**
     * @var integer Number of hosts with vulnerability protection enabled
     */
    public $DefendHostCount;

    /**
     * @var integer Number of hosts with vulnerability defense disabled
     */
    public $NotDefendHostCount;

    /**
     * @var string Last scan time
Parameter format: YYYY-MM-DD HH:mm:ss
     */
    public $LatestScanTime;

    /**
     * @var string CVSS severity level
Enumeration values:
INVALID: Invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
     */
    public $CVSSLevel;

    /**
     * @var array Description list of affected software (each item such as openssl < 1.1.1k)
     */
    public $VulAffect;

    /**
     * @var boolean Whether included in the KVE (Known Vulnerability Exploitation) library
Enumeration values:
true: Recorded
false: Not recorded
     */
    public $KVERecord;

    /**
     * @var string KVE collection time
Parameter format: YYYY-MM-DD HH:mm:ss
     */
    public $KVERecordTime;

    /**
     * @var float EPSS score (vulnerability type probability prediction)
Valid values: [0.0, 1.0]
     */
    public $EPSSScore;

    /**
     * @var array Affected vendor list
     */
    public $AffectVendor;

    /**
     * @var array List of affected products
     */
    public $AffectProduct;

    /**
     * @var string Vulnerability type mechanism description
     */
    public $Mechanism;

    /**
     * @var string Pre-deployment instructions for vulnerability type
     */
    public $Precondition;

    /**
     * @var array Latest vulnerability spread trend data list (by date)
     */
    public $LatestTrend;

    /**
     * @var string <p>Solution</p>
     */
    public $FixSolution;

    /**
     * @var string <p>Reference link</p>
     */
    public $RefLink;

    /**
     * @var string <p>Vulnerability severity description</p>
     */
    public $HarmDescription;

    /**
     * @var array <p>Vulnerability Impact product</p>
     */
    public $AffectVendorProduct;

    /**
     * @param integer $ID <p>Vulnerability ID</p>
     * @param string $Name <p>Vulnerability name</p>
     * @param string $CVEID <p>CveID</p>
     * @param string $Category Vulnerability category
Enumeration values:
LINUX: Linux software vulnerability
WINDOWS: Windows systems patch
WEB_CMS: Web-CMS vulnerabilities
APPLICATION: Application vulnerability
EMERGENCY: Urgent vulnerability
     * @param string $PublishTime Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
     * @param string $CheckMethod <p>Detection mode</p><p>Enumeration value:</p><ul><li>VersionCompare: Version comparison</li><li>POC: POC detection</li></ul>
     * @param string $DefendStatus Vulnerability defense status
Enumeration values:
ENABLED: On
NOT_SUPPORTED: Not supported
NOT_ENABLED: not enabled
     * @param boolean $SupportFix Whether one-click repair is supported
Enumeration values:
true: Support
false: Not supported
     * @param VPRRatingInfo $VRPRatingInfo VPR rating information (including rating result, description, and phased score)
     * @param float $CvssScore CVSS score
Valid values: [0.0, 10.0]
     * @param array $Label VPR risk tag list (such as exploitation in the wild, EXP available, POC available, public network exposure, no restart required)
     * @param string $Remark Vulnerability remark
     * @param string $Summary Vulnerability overview
     * @param integer $DefendHostCount Number of hosts with vulnerability protection enabled
     * @param integer $NotDefendHostCount Number of hosts with vulnerability defense disabled
     * @param string $LatestScanTime Last scan time
Parameter format: YYYY-MM-DD HH:mm:ss
     * @param string $CVSSLevel CVSS severity level
Enumeration values:
INVALID: Invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL
     * @param array $VulAffect Description list of affected software (each item such as openssl < 1.1.1k)
     * @param boolean $KVERecord Whether included in the KVE (Known Vulnerability Exploitation) library
Enumeration values:
true: Recorded
false: Not recorded
     * @param string $KVERecordTime KVE collection time
Parameter format: YYYY-MM-DD HH:mm:ss
     * @param float $EPSSScore EPSS score (vulnerability type probability prediction)
Valid values: [0.0, 1.0]
     * @param array $AffectVendor Affected vendor list
     * @param array $AffectProduct List of affected products
     * @param string $Mechanism Vulnerability type mechanism description
     * @param string $Precondition Pre-deployment instructions for vulnerability type
     * @param array $LatestTrend Latest vulnerability spread trend data list (by date)
     * @param string $FixSolution <p>Solution</p>
     * @param string $RefLink <p>Reference link</p>
     * @param string $HarmDescription <p>Vulnerability severity description</p>
     * @param array $AffectVendorProduct <p>Vulnerability Impact product</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("VRPRatingInfo",$param) and $param["VRPRatingInfo"] !== null) {
            $this->VRPRatingInfo = new VPRRatingInfo();
            $this->VRPRatingInfo->deserialize($param["VRPRatingInfo"]);
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new VPRLabel();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("NotDefendHostCount",$param) and $param["NotDefendHostCount"] !== null) {
            $this->NotDefendHostCount = $param["NotDefendHostCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("CVSSLevel",$param) and $param["CVSSLevel"] !== null) {
            $this->CVSSLevel = $param["CVSSLevel"];
        }

        if (array_key_exists("VulAffect",$param) and $param["VulAffect"] !== null) {
            $this->VulAffect = $param["VulAffect"];
        }

        if (array_key_exists("KVERecord",$param) and $param["KVERecord"] !== null) {
            $this->KVERecord = $param["KVERecord"];
        }

        if (array_key_exists("KVERecordTime",$param) and $param["KVERecordTime"] !== null) {
            $this->KVERecordTime = $param["KVERecordTime"];
        }

        if (array_key_exists("EPSSScore",$param) and $param["EPSSScore"] !== null) {
            $this->EPSSScore = $param["EPSSScore"];
        }

        if (array_key_exists("AffectVendor",$param) and $param["AffectVendor"] !== null) {
            $this->AffectVendor = $param["AffectVendor"];
        }

        if (array_key_exists("AffectProduct",$param) and $param["AffectProduct"] !== null) {
            $this->AffectProduct = $param["AffectProduct"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("Precondition",$param) and $param["Precondition"] !== null) {
            $this->Precondition = $param["Precondition"];
        }

        if (array_key_exists("LatestTrend",$param) and $param["LatestTrend"] !== null) {
            $this->LatestTrend = [];
            foreach ($param["LatestTrend"] as $key => $value){
                $obj = new VulSpreadTrend();
                $obj->deserialize($value);
                array_push($this->LatestTrend, $obj);
            }
        }

        if (array_key_exists("FixSolution",$param) and $param["FixSolution"] !== null) {
            $this->FixSolution = $param["FixSolution"];
        }

        if (array_key_exists("RefLink",$param) and $param["RefLink"] !== null) {
            $this->RefLink = $param["RefLink"];
        }

        if (array_key_exists("HarmDescription",$param) and $param["HarmDescription"] !== null) {
            $this->HarmDescription = $param["HarmDescription"];
        }

        if (array_key_exists("AffectVendorProduct",$param) and $param["AffectVendorProduct"] !== null) {
            $this->AffectVendorProduct = [];
            foreach ($param["AffectVendorProduct"] as $key => $value){
                $obj = new VulVendorProduct();
                $obj->deserialize($value);
                array_push($this->AffectVendorProduct, $obj);
            }
        }
    }
}
