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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability data in weekly CWP Pro report.
 *
 * @method string getMachineIp() Obtain Private IP of server.
 * @method void setMachineIp(string $MachineIp) Set Private IP of server.
 * @method string getVulName() Obtain Vulnerability name.
 * @method void setVulName(string $VulName) Set Vulnerability name.
 * @method string getVulType() Obtain Vulnerability type.
<li> WEB: web vulnerability</li>
<li> SYSTEM: system component vulnerability</li>
<li> BASELINE: security baseline</li>
 * @method void setVulType(string $VulType) Set Vulnerability type.
<li> WEB: web vulnerability</li>
<li> SYSTEM: system component vulnerability</li>
<li> BASELINE: security baseline</li>
 * @method string getDescription() Obtain Vulnerability description.
 * @method void setDescription(string $Description) Set Vulnerability description.
 * @method string getVulStatus() Obtain Vulnerability status.
<li> UN_OPERATED: to be processed</li>
<li> SCANING: scanning</li>
<li> FIXED: fixed</li>
 * @method void setVulStatus(string $VulStatus) Set Vulnerability status.
<li> UN_OPERATED: to be processed</li>
<li> SCANING: scanning</li>
<li> FIXED: fixed</li>
 * @method string getLastScanTime() Obtain Last scanned time.
 * @method void setLastScanTime(string $LastScanTime) Set Last scanned time.
 */
class WeeklyReportVul extends AbstractModel
{
    /**
     * @var string Private IP of server.
     */
    public $MachineIp;

    /**
     * @var string Vulnerability name.
     */
    public $VulName;

    /**
     * @var string Vulnerability type.
<li> WEB: web vulnerability</li>
<li> SYSTEM: system component vulnerability</li>
<li> BASELINE: security baseline</li>
     */
    public $VulType;

    /**
     * @var string Vulnerability description.
     */
    public $Description;

    /**
     * @var string Vulnerability status.
<li> UN_OPERATED: to be processed</li>
<li> SCANING: scanning</li>
<li> FIXED: fixed</li>
     */
    public $VulStatus;

    /**
     * @var string Last scanned time.
     */
    public $LastScanTime;

    /**
     * @param string $MachineIp Private IP of server.
     * @param string $VulName Vulnerability name.
     * @param string $VulType Vulnerability type.
<li> WEB: web vulnerability</li>
<li> SYSTEM: system component vulnerability</li>
<li> BASELINE: security baseline</li>
     * @param string $Description Vulnerability description.
     * @param string $VulStatus Vulnerability status.
<li> UN_OPERATED: to be processed</li>
<li> SCANING: scanning</li>
<li> FIXED: fixed</li>
     * @param string $LastScanTime Last scanned time.
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}
