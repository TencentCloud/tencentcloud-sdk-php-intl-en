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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification description
 *
 * @method string getSpecCode() Obtain Specification ID
 * @method void setSpecCode(string $SpecCode) Set Specification ID
 * @method string getVersion() Obtain PostgreSQL kernel version number
 * @method void setVersion(string $Version) Set PostgreSQL kernel version number
 * @method string getVersionName() Obtain Full version name corresponding to kernel number
 * @method void setVersionName(string $VersionName) Set Full version name corresponding to kernel number
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory size in MB
 * @method void setMemory(integer $Memory) Set Memory size in MB
 * @method integer getMaxStorage() Obtain Maximum storage capacity in GB supported by this specification
 * @method void setMaxStorage(integer $MaxStorage) Set Maximum storage capacity in GB supported by this specification
 * @method integer getMinStorage() Obtain Minimum storage capacity in GB supported by this specification
 * @method void setMinStorage(integer $MinStorage) Set Minimum storage capacity in GB supported by this specification
 * @method integer getQps() Obtain Estimated QPS for this specification
 * @method void setQps(integer $Qps) Set Estimated QPS for this specification
 * @method integer getPid() Obtain Billing ID for this specification
 * @method void setPid(integer $Pid) Set Billing ID for this specification
 * @method string getType() Obtain Machine type
 * @method void setType(string $Type) Set Machine type
 */
class SpecItemInfo extends AbstractModel
{
    /**
     * @var string Specification ID
     */
    public $SpecCode;

    /**
     * @var string PostgreSQL kernel version number
     */
    public $Version;

    /**
     * @var string Full version name corresponding to kernel number
     */
    public $VersionName;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory size in MB
     */
    public $Memory;

    /**
     * @var integer Maximum storage capacity in GB supported by this specification
     */
    public $MaxStorage;

    /**
     * @var integer Minimum storage capacity in GB supported by this specification
     */
    public $MinStorage;

    /**
     * @var integer Estimated QPS for this specification
     */
    public $Qps;

    /**
     * @var integer Billing ID for this specification
     */
    public $Pid;

    /**
     * @var string Machine type
     */
    public $Type;

    /**
     * @param string $SpecCode Specification ID
     * @param string $Version PostgreSQL kernel version number
     * @param string $VersionName Full version name corresponding to kernel number
     * @param integer $Cpu Number of CPU cores
     * @param integer $Memory Memory size in MB
     * @param integer $MaxStorage Maximum storage capacity in GB supported by this specification
     * @param integer $MinStorage Minimum storage capacity in GB supported by this specification
     * @param integer $Qps Estimated QPS for this specification
     * @param integer $Pid Billing ID for this specification
     * @param string $Type Machine type
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
