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
 * List of vulnerabilities in a RASP allowlist.
 *
 * @method integer getVulVulsID() Obtain Vulnerability ID
 * @method void setVulVulsID(integer $VulVulsID) Set Vulnerability ID
 * @method string getVulVulsName() Obtain Vulnerability name
 * @method void setVulVulsName(string $VulVulsName) Set Vulnerability name
 * @method string getCveID() Obtain cve_id
 * @method void setCveID(string $CveID) Set cve_id
 * @method integer getSupportDefense() Obtain Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
 * @method void setSupportDefense(integer $SupportDefense) Set Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
 */
class RaspRuleVul extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulVulsID;

    /**
     * @var string Vulnerability name
     */
    public $VulVulsName;

    /**
     * @var string cve_id
     */
    public $CveID;

    /**
     * @var integer Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
     */
    public $SupportDefense;

    /**
     * @param integer $VulVulsID Vulnerability ID
     * @param string $VulVulsName Vulnerability name
     * @param string $CveID cve_id
     * @param integer $SupportDefense Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
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
        if (array_key_exists("VulVulsID",$param) and $param["VulVulsID"] !== null) {
            $this->VulVulsID = $param["VulVulsID"];
        }

        if (array_key_exists("VulVulsName",$param) and $param["VulVulsName"] !== null) {
            $this->VulVulsName = $param["VulVulsName"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }
    }
}
