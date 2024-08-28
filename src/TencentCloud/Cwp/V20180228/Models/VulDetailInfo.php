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
 * Vulnerability details
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method integer getLevel() Obtain Vulnerability level
 * @method void setLevel(integer $Level) Set Vulnerability level
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method integer getVulCategory() Obtain 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities
 * @method void setVulCategory(integer $VulCategory) Set 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities
 * @method string getDescript() Obtain Vulnerability description
 * @method void setDescript(string $Descript) Set Vulnerability description
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method string getReference() Obtain Reference link
 * @method void setReference(string $Reference) Set Reference link
 * @method float getCvssScore() Obtain CVSS score
 * @method void setCvssScore(float $CvssScore) Set CVSS score
 * @method string getCvss() Obtain CVSS details
 * @method void setCvss(string $Cvss) Set CVSS details
 * @method string getPublishTime() Obtain Release time
 * @method void setPublishTime(string $PublishTime) Set Release time
 */
class VulDetailInfo extends AbstractModel
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
    public $Name;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var integer 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities
     */
    public $VulCategory;

    /**
     * @var string Vulnerability description
     */
    public $Descript;

    /**
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var string Reference link
     */
    public $Reference;

    /**
     * @var float CVSS score
     */
    public $CvssScore;

    /**
     * @var string CVSS details
     */
    public $Cvss;

    /**
     * @var string Release time
     */
    public $PublishTime;

    /**
     * @param integer $VulId Vulnerability ID
     * @param integer $Level Vulnerability level
     * @param string $Name Vulnerability name
     * @param string $CveId CVE ID
     * @param integer $VulCategory 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities; 0: emergency vulnerabilities
     * @param string $Descript Vulnerability description
     * @param string $Fix Fixing suggestion
     * @param string $Reference Reference link
     * @param float $CvssScore CVSS score
     * @param string $Cvss CVSS details
     * @param string $PublishTime Release time
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Cvss",$param) and $param["Cvss"] !== null) {
            $this->Cvss = $param["Cvss"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
