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
 * Vulnerability brief information
 *
 * @method integer getVulID() Obtain Vulnerability ID (vul_vuls.id)
 * @method void setVulID(integer $VulID) Set Vulnerability ID (vul_vuls.id)
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCVEID() Obtain CVE No.
Parameter format: e.g. CVE-2018-5377
 * @method void setCVEID(string $CVEID) Set CVE No.
Parameter format: e.g. CVE-2018-5377
 * @method array getLabel() Obtain List of VPR risk tags
 * @method void setLabel(array $Label) Set List of VPR risk tags
 * @method float getCvssScore() Obtain CVSS score
Valid values: [0.0, 10.0]
 * @method void setCvssScore(float $CvssScore) Set CVSS score
Valid values: [0.0, 10.0]
 * @method string getLevel() Obtain Threat level
Enumeration value:
INVALID: invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Threat level
Enumeration value:
INVALID: invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
 * @method string getPublishTime() Obtain Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
 * @method void setPublishTime(string $PublishTime) Set Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
 */
class VulBriefInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID (vul_vuls.id)
     */
    public $VulID;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string CVE No.
Parameter format: e.g. CVE-2018-5377
     */
    public $CVEID;

    /**
     * @var array List of VPR risk tags
     */
    public $Label;

    /**
     * @var float CVSS score
Valid values: [0.0, 10.0]
     */
    public $CvssScore;

    /**
     * @var string Threat level
Enumeration value:
INVALID: invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
     */
    public $PublishTime;

    /**
     * @param integer $VulID Vulnerability ID (vul_vuls.id)
     * @param string $VulName Vulnerability name
     * @param string $CVEID CVE No.
Parameter format: e.g. CVE-2018-5377
     * @param array $Label List of VPR risk tags
     * @param float $CvssScore CVSS score
Valid values: [0.0, 10.0]
     * @param string $Level Threat level
Enumeration value:
INVALID: invalid
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: High risk
CRITICAL: Critical
     * @param string $PublishTime Vulnerability disclosure time
Parameter format: YYYY-MM-DD HH:mm:ss
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
        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new VPRLabel();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
