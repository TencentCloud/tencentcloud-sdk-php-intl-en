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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC host details
 *
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getServiceType() Obtain Cloud service type
 * @method void setServiceType(string $ServiceType) Set Cloud service type
 * @method string getHostStatus() Obtain Host running status
 * @method void setHostStatus(string $HostStatus) Set Host running status
 * @method string getHostType() Obtain Host type
 * @method void setHostType(string $HostType) Set Host type
 * @method integer getCpuAvailable() Obtain Number of available CPUs
 * @method void setCpuAvailable(integer $CpuAvailable) Set Number of available CPUs
 * @method integer getCpuTotal() Obtain Total CPUs
 * @method void setCpuTotal(integer $CpuTotal) Set Total CPUs
 * @method integer getMemAvailable() Obtain Available memories
 * @method void setMemAvailable(integer $MemAvailable) Set Available memories
 * @method integer getMemTotal() Obtain Total memories
 * @method void setMemTotal(integer $MemTotal) Set Total memories
 * @method string getRunTime() Obtain Running time
 * @method void setRunTime(string $RunTime) Set Running time
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method string getHostId() Obtain Host id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setHostId(string $HostId) Set Host id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Cloud service type
     */
    public $ServiceType;

    /**
     * @var string Host running status
     */
    public $HostStatus;

    /**
     * @var string Host type
     */
    public $HostType;

    /**
     * @var integer Number of available CPUs
     */
    public $CpuAvailable;

    /**
     * @var integer Total CPUs
     */
    public $CpuTotal;

    /**
     * @var integer Available memories
     */
    public $MemAvailable;

    /**
     * @var integer Total memories
     */
    public $MemTotal;

    /**
     * @var string Running time
     */
    public $RunTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var string Host id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $HostId;

    /**
     * @param string $HostIp Host IP
     * @param string $ServiceType Cloud service type
     * @param string $HostStatus Host running status
     * @param string $HostType Host type
     * @param integer $CpuAvailable Number of available CPUs
     * @param integer $CpuTotal Total CPUs
     * @param integer $MemAvailable Available memories
     * @param integer $MemTotal Total memories
     * @param string $RunTime Running time
     * @param string $ExpireTime Expiration time
     * @param string $HostId Host id 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }
    }
}
