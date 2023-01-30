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
 * Vulnerability that can be prevented
 *
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method array getTags() Obtain Vulnerability tag
 * @method void setTags(array $Tags) Set Vulnerability tag
 * @method float getCVSSV3Score() Obtain Vulnerability CVSS
 * @method void setCVSSV3Score(float $CVSSV3Score) Set Vulnerability CVSS
 * @method string getLevel() Obtain Vulnerability severity
 * @method void setLevel(string $Level) Set Vulnerability severity
 * @method string getCVEID() Obtain Vulnerability CVE ID
 * @method void setCVEID(string $CVEID) Set Vulnerability CVE ID
 * @method string getSubmitTime() Obtain Vulnerability disclosure time
 * @method void setSubmitTime(string $SubmitTime) Set Vulnerability disclosure time
 */
class SupportDefenceVul extends AbstractModel
{
    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var array Vulnerability tag
     */
    public $Tags;

    /**
     * @var float Vulnerability CVSS
     */
    public $CVSSV3Score;

    /**
     * @var string Vulnerability severity
     */
    public $Level;

    /**
     * @var string Vulnerability CVE ID
     */
    public $CVEID;

    /**
     * @var string Vulnerability disclosure time
     */
    public $SubmitTime;

    /**
     * @param string $PocID POC ID
     * @param string $Name Vulnerability name
     * @param array $Tags Vulnerability tag
     * @param float $CVSSV3Score Vulnerability CVSS
     * @param string $Level Vulnerability severity
     * @param string $CVEID Vulnerability CVE ID
     * @param string $SubmitTime Vulnerability disclosure time
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
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

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }
    }
}
