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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RASP allowlist rule.
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getURLRegexp() Obtain Regular expression for a custom request URL range. If this parameter is left blank, saving fails.
 * @method void setURLRegexp(string $URLRegexp) Set Regular expression for a custom request URL range. If this parameter is left blank, saving fails.
 * @method integer getVulVulsID() Obtain Vulnerability ID
 * @method void setVulVulsID(integer $VulVulsID) Set Vulnerability ID
 * @method string getVulVulsName() Obtain Vulnerability name
 * @method void setVulVulsName(string $VulVulsName) Set Vulnerability name
 * @method string getCveID() Obtain cve_id
 * @method void setCveID(string $CveID) Set cve_id
 * @method integer getSupportDefense() Obtain Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
 * @method void setSupportDefense(integer $SupportDefense) Set Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
 * @method integer getWhiteType() Obtain Allowlisting scope. 0: Allowlist all requests; 1: Allowlist requests within a custom request scope.
 * @method void setWhiteType(integer $WhiteType) Set Allowlisting scope. 0: Allowlist all requests; 1: Allowlist requests within a custom request scope.
 * @method integer getStatus() Obtain Status. 0: valid.
 * @method void setStatus(integer $Status) Set Status. 0: valid.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 */
class RaspRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Regular expression for a custom request URL range. If this parameter is left blank, saving fails.
     */
    public $URLRegexp;

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
     * @var integer Allowlisting scope. 0: Allowlist all requests; 1: Allowlist requests within a custom request scope.
     */
    public $WhiteType;

    /**
     * @var integer Status. 0: valid.
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @param integer $Id Rule ID
     * @param string $URLRegexp Regular expression for a custom request URL range. If this parameter is left blank, saving fails.
     * @param integer $VulVulsID Vulnerability ID
     * @param string $VulVulsName Vulnerability name
     * @param string $CveID cve_id
     * @param integer $SupportDefense Vulnerability defense type, which comes from the vulnerability table. 1: component vulnerability defense supported, with component vulnerabilities not allowlisted through a regular expression; 2: regular expression defense supported.
     * @param integer $WhiteType Allowlisting scope. 0: Allowlist all requests; 1: Allowlist requests within a custom request scope.
     * @param integer $Status Status. 0: valid.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("URLRegexp",$param) and $param["URLRegexp"] !== null) {
            $this->URLRegexp = $param["URLRegexp"];
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

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
