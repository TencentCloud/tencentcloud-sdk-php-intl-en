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
 * Image vulnerability information
 *
 * @method array getAffectedComponents() Obtain <p>Affected component information</p>
 * @method void setAffectedComponents(array $AffectedComponents) Set <p>Affected component information</p>
 * @method string getName() Obtain <p>Vulnerability name</p>
 * @method void setName(string $Name) Set <p>Vulnerability name</p>
 * @method string getCVEID() Obtain <p>Vulnerability CVEID</p>
 * @method void setCVEID(string $CVEID) Set <p>Vulnerability CVEID</p>
 * @method string getCategory() Obtain <p>Vulnerability category</p>
 * @method void setCategory(string $Category) Set <p>Vulnerability category</p>
 * @method string getPublishTime() Obtain <p>Vulnerability release time</p>
 * @method void setPublishTime(string $PublishTime) Set <p>Vulnerability release time</p>
 * @method string getCheckMethod() Obtain <p>Vulnerability detection method</p>
 * @method void setCheckMethod(string $CheckMethod) Set <p>Vulnerability detection method</p>
 * @method string getDefendStatus() Obtain <p>Whether the defense is supported</p><p>Enumeration value:</p><ul><li>ENABLED: support defense</li><li>NOT_ENABLED: defense not supported</li></ul>
 * @method void setDefendStatus(string $DefendStatus) Set <p>Whether the defense is supported</p><p>Enumeration value:</p><ul><li>ENABLED: support defense</li><li>NOT_ENABLED: defense not supported</li></ul>
 * @method boolean getSupportFix() Obtain <p>Whether repair is supported</p>
 * @method void setSupportFix(boolean $SupportFix) Set <p>Whether repair is supported</p>
 * @method string getCvssScore() Obtain <p>CVSS score</p>
 * @method void setCvssScore(string $CvssScore) Set <p>CVSS score</p>
 * @method string getRemark() Obtain <p>Vulnerability severity description</p>
 * @method void setRemark(string $Remark) Set <p>Vulnerability severity description</p>
 * @method string getSummary() Obtain <p>Vulnerability description</p>
 * @method void setSummary(string $Summary) Set <p>Vulnerability description</p>
 * @method string getCVSSLevel() Obtain <p>Severity level</p>
 * @method void setCVSSLevel(string $CVSSLevel) Set <p>Severity level</p>
 * @method string getVulAffect() Obtain <p>Primary impact type</p>
 * @method void setVulAffect(string $VulAffect) Set <p>Primary impact type</p>
 * @method boolean getKVERecord() Obtain <p>Existence of exploitation in the wild</p>
 * @method void setKVERecord(boolean $KVERecord) Set <p>Existence of exploitation in the wild</p>
 * @method float getEPSSScore() Obtain <p>EPSS probability score</p>
 * @method void setEPSSScore(float $EPSSScore) Set <p>EPSS probability score</p>
 * @method string getAffectVendor() Obtain <p>Impacted manufacturer</p>
 * @method void setAffectVendor(string $AffectVendor) Set <p>Impacted manufacturer</p>
 * @method string getAffectProduct() Obtain <p>Impact on the target product</p>
 * @method void setAffectProduct(string $AffectProduct) Set <p>Impact on the target product</p>
 * @method string getMechanism() Obtain <p>Vulnerability principle</p>
 * @method void setMechanism(string $Mechanism) Set <p>Vulnerability principle</p>
 * @method string getPrecondition() Obtain <p>Prerequisites for an attack</p>
 * @method void setPrecondition(string $Precondition) Set <p>Prerequisites for an attack</p>
 * @method string getFixSolution() Obtain <p>Vulnerability remediation suggestions</p>
 * @method void setFixSolution(string $FixSolution) Set <p>Vulnerability remediation suggestions</p>
 * @method string getRefLink() Obtain <p>Vulnerability-related link</p>
 * @method void setRefLink(string $RefLink) Set <p>Vulnerability-related link</p>
 * @method array getLabel() Obtain <p>Vulnerability tag</p>
 * @method void setLabel(array $Label) Set <p>Vulnerability tag</p>
 * @method string getPocId() Obtain <p>Vulnerability Id</p>
 * @method void setPocId(string $PocId) Set <p>Vulnerability Id</p>
 */
class ImageVulBaseInfo extends AbstractModel
{
    /**
     * @var array <p>Affected component information</p>
     */
    public $AffectedComponents;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $Name;

    /**
     * @var string <p>Vulnerability CVEID</p>
     */
    public $CVEID;

    /**
     * @var string <p>Vulnerability category</p>
     */
    public $Category;

    /**
     * @var string <p>Vulnerability release time</p>
     */
    public $PublishTime;

    /**
     * @var string <p>Vulnerability detection method</p>
     */
    public $CheckMethod;

    /**
     * @var string <p>Whether the defense is supported</p><p>Enumeration value:</p><ul><li>ENABLED: support defense</li><li>NOT_ENABLED: defense not supported</li></ul>
     */
    public $DefendStatus;

    /**
     * @var boolean <p>Whether repair is supported</p>
     */
    public $SupportFix;

    /**
     * @var string <p>CVSS score</p>
     */
    public $CvssScore;

    /**
     * @var string <p>Vulnerability severity description</p>
     */
    public $Remark;

    /**
     * @var string <p>Vulnerability description</p>
     */
    public $Summary;

    /**
     * @var string <p>Severity level</p>
     */
    public $CVSSLevel;

    /**
     * @var string <p>Primary impact type</p>
     */
    public $VulAffect;

    /**
     * @var boolean <p>Existence of exploitation in the wild</p>
     */
    public $KVERecord;

    /**
     * @var float <p>EPSS probability score</p>
     */
    public $EPSSScore;

    /**
     * @var string <p>Impacted manufacturer</p>
     */
    public $AffectVendor;

    /**
     * @var string <p>Impact on the target product</p>
     */
    public $AffectProduct;

    /**
     * @var string <p>Vulnerability principle</p>
     */
    public $Mechanism;

    /**
     * @var string <p>Prerequisites for an attack</p>
     */
    public $Precondition;

    /**
     * @var string <p>Vulnerability remediation suggestions</p>
     */
    public $FixSolution;

    /**
     * @var string <p>Vulnerability-related link</p>
     */
    public $RefLink;

    /**
     * @var array <p>Vulnerability tag</p>
     */
    public $Label;

    /**
     * @var string <p>Vulnerability Id</p>
     */
    public $PocId;

    /**
     * @param array $AffectedComponents <p>Affected component information</p>
     * @param string $Name <p>Vulnerability name</p>
     * @param string $CVEID <p>Vulnerability CVEID</p>
     * @param string $Category <p>Vulnerability category</p>
     * @param string $PublishTime <p>Vulnerability release time</p>
     * @param string $CheckMethod <p>Vulnerability detection method</p>
     * @param string $DefendStatus <p>Whether the defense is supported</p><p>Enumeration value:</p><ul><li>ENABLED: support defense</li><li>NOT_ENABLED: defense not supported</li></ul>
     * @param boolean $SupportFix <p>Whether repair is supported</p>
     * @param string $CvssScore <p>CVSS score</p>
     * @param string $Remark <p>Vulnerability severity description</p>
     * @param string $Summary <p>Vulnerability description</p>
     * @param string $CVSSLevel <p>Severity level</p>
     * @param string $VulAffect <p>Primary impact type</p>
     * @param boolean $KVERecord <p>Existence of exploitation in the wild</p>
     * @param float $EPSSScore <p>EPSS probability score</p>
     * @param string $AffectVendor <p>Impacted manufacturer</p>
     * @param string $AffectProduct <p>Impact on the target product</p>
     * @param string $Mechanism <p>Vulnerability principle</p>
     * @param string $Precondition <p>Prerequisites for an attack</p>
     * @param string $FixSolution <p>Vulnerability remediation suggestions</p>
     * @param string $RefLink <p>Vulnerability-related link</p>
     * @param array $Label <p>Vulnerability tag</p>
     * @param string $PocId <p>Vulnerability Id</p>
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
        if (array_key_exists("AffectedComponents",$param) and $param["AffectedComponents"] !== null) {
            $this->AffectedComponents = [];
            foreach ($param["AffectedComponents"] as $key => $value){
                $obj = new VulAffectedComponent();
                $obj->deserialize($value);
                array_push($this->AffectedComponents, $obj);
            }
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

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
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

        if (array_key_exists("FixSolution",$param) and $param["FixSolution"] !== null) {
            $this->FixSolution = $param["FixSolution"];
        }

        if (array_key_exists("RefLink",$param) and $param["RefLink"] !== null) {
            $this->RefLink = $param["RefLink"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("PocId",$param) and $param["PocId"] !== null) {
            $this->PocId = $param["PocId"];
        }
    }
}
