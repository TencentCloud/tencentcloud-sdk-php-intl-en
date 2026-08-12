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
 * Vulnerability scan task details
 *
 * @method string getId() Obtain <p>Task ID.</p>
 * @method void setId(string $Id) Set <p>Task ID.</p>
 * @method integer getAppId() Obtain <p>Creator AppId</p>
 * @method void setAppId(integer $AppId) Set <p>Creator AppId</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getPublicIp() Obtain <p>Public ip address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public ip address</p>
 * @method string getPrivateIp() Obtain <p>Private ip</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private ip</p>
 * @method string getOS() Obtain <p>os</p>
 * @method void setOS(string $OS) Set <p>os</p>
 * @method string getStatus() Obtain <p>Scan status (SUCCESS: Scan complete/successful, OFFLINE: Client offline, TIMEOUT: Scan timeout, FAILED: Scan failed, UNSUPPORTED: Client version too low/Do not support scanning, TERMINATED: Terminated, TERMINATING: Terminating)</p><p>Enumeration value:</p><ul><li>SCANNING: Scanning</li></ul>
 * @method void setStatus(string $Status) Set <p>Scan status (SUCCESS: Scan complete/successful, OFFLINE: Client offline, TIMEOUT: Scan timeout, FAILED: Scan failed, UNSUPPORTED: Client version too low/Do not support scanning, TERMINATED: Terminated, TERMINATING: Terminating)</p><p>Enumeration value:</p><ul><li>SCANNING: Scanning</li></ul>
 * @method string getStartTime() Obtain <p>Scan start time</p>
 * @method void setStartTime(string $StartTime) Set <p>Scan start time</p>
 * @method string getEndTime() Obtain <p>Scan end time</p>
 * @method void setEndTime(string $EndTime) Set <p>Scan end time</p>
 * @method integer getVuls() Obtain <p>Vulnerability count</p>
 * @method void setVuls(integer $Vuls) Set <p>Vulnerability count</p>
 * @method string getDescription() Obtain <p>Failure reason</p>
 * @method void setDescription(string $Description) Set <p>Failure reason</p>
 */
class VulScanTaskDetail extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var integer <p>Creator AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Public ip address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private ip</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>os</p>
     */
    public $OS;

    /**
     * @var string <p>Scan status (SUCCESS: Scan complete/successful, OFFLINE: Client offline, TIMEOUT: Scan timeout, FAILED: Scan failed, UNSUPPORTED: Client version too low/Do not support scanning, TERMINATED: Terminated, TERMINATING: Terminating)</p><p>Enumeration value:</p><ul><li>SCANNING: Scanning</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Scan start time</p>
     */
    public $StartTime;

    /**
     * @var string <p>Scan end time</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Vulnerability count</p>
     */
    public $Vuls;

    /**
     * @var string <p>Failure reason</p>
     */
    public $Description;

    /**
     * @param string $Id <p>Task ID.</p>
     * @param integer $AppId <p>Creator AppId</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $PublicIp <p>Public ip address</p>
     * @param string $PrivateIp <p>Private ip</p>
     * @param string $OS <p>os</p>
     * @param string $Status <p>Scan status (SUCCESS: Scan complete/successful, OFFLINE: Client offline, TIMEOUT: Scan timeout, FAILED: Scan failed, UNSUPPORTED: Client version too low/Do not support scanning, TERMINATED: Terminated, TERMINATING: Terminating)</p><p>Enumeration value:</p><ul><li>SCANNING: Scanning</li></ul>
     * @param string $StartTime <p>Scan start time</p>
     * @param string $EndTime <p>Scan end time</p>
     * @param integer $Vuls <p>Vulnerability count</p>
     * @param string $Description <p>Failure reason</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Vuls",$param) and $param["Vuls"] !== null) {
            $this->Vuls = $param["Vuls"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
