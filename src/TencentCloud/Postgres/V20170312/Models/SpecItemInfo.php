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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification description
 *
 * @method string getSpecCode() Obtain <p>Specification ID.</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Specification ID.</p>
 * @method string getVersion() Obtain <p>PostgreSQL version number.</p>
 * @method void setVersion(string $Version) Set <p>PostgreSQL version number.</p>
 * @method string getVersionName() Obtain <p>Full version name of the kernel number.</p>
 * @method void setVersionName(string $VersionName) Set <p>Full version name of the kernel number.</p>
 * @method integer getCpu() Obtain <p>CPU cores.</p>
 * @method void setCpu(integer $Cpu) Set <p>CPU cores.</p>
 * @method integer getMemory() Obtain <p>Memory size, in MB.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size, in MB.</p>
 * @method integer getMaxStorage() Obtain <p>Maximum storage capacity supported by this specification, in GB.</p>
 * @method void setMaxStorage(integer $MaxStorage) Set <p>Maximum storage capacity supported by this specification, in GB.</p>
 * @method integer getMinStorage() Obtain <p>Minimum storage capacity supported by this specification, in GB.</p>
 * @method void setMinStorage(integer $MinStorage) Set <p>Minimum storage capacity supported by this specification, in GB.</p>
 * @method integer getQps() Obtain <p>Estimated QPS of the specification.</p>
 * @method void setQps(integer $Qps) Set <p>Estimated QPS of the specification.</p>
 * @method integer getPid() Obtain <p>[Deprecated field].</p>
 * @method void setPid(integer $Pid) Set <p>[Deprecated field].</p>
 * @method string getType() Obtain <p>Machine type.</p>
 * @method void setType(string $Type) Set <p>Machine type.</p>
 * @method string getMajorVersion() Obtain <p>PostgreSQL major version number.</p>
 * @method void setMajorVersion(string $MajorVersion) Set <p>PostgreSQL major version number.</p>
 * @method string getKernelVersion() Obtain <p>PostgreSQL kernel version number.</p>
 * @method void setKernelVersion(string $KernelVersion) Set <p>PostgreSQL kernel version number.</p>
 * @method integer getIsSupportTDE() Obtain <p>Indicates whether the TDE data encryption feature is supported. 0 - not supported. 1 - supported.</p>
 * @method void setIsSupportTDE(integer $IsSupportTDE) Set <p>Indicates whether the TDE data encryption feature is supported. 0 - not supported. 1 - supported.</p>
 */
class SpecItemInfo extends AbstractModel
{
    /**
     * @var string <p>Specification ID.</p>
     */
    public $SpecCode;

    /**
     * @var string <p>PostgreSQL version number.</p>
     */
    public $Version;

    /**
     * @var string <p>Full version name of the kernel number.</p>
     */
    public $VersionName;

    /**
     * @var integer <p>CPU cores.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory size, in MB.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Maximum storage capacity supported by this specification, in GB.</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>Minimum storage capacity supported by this specification, in GB.</p>
     */
    public $MinStorage;

    /**
     * @var integer <p>Estimated QPS of the specification.</p>
     */
    public $Qps;

    /**
     * @var integer <p>[Deprecated field].</p>
     */
    public $Pid;

    /**
     * @var string <p>Machine type.</p>
     */
    public $Type;

    /**
     * @var string <p>PostgreSQL major version number.</p>
     */
    public $MajorVersion;

    /**
     * @var string <p>PostgreSQL kernel version number.</p>
     */
    public $KernelVersion;

    /**
     * @var integer <p>Indicates whether the TDE data encryption feature is supported. 0 - not supported. 1 - supported.</p>
     */
    public $IsSupportTDE;

    /**
     * @param string $SpecCode <p>Specification ID.</p>
     * @param string $Version <p>PostgreSQL version number.</p>
     * @param string $VersionName <p>Full version name of the kernel number.</p>
     * @param integer $Cpu <p>CPU cores.</p>
     * @param integer $Memory <p>Memory size, in MB.</p>
     * @param integer $MaxStorage <p>Maximum storage capacity supported by this specification, in GB.</p>
     * @param integer $MinStorage <p>Minimum storage capacity supported by this specification, in GB.</p>
     * @param integer $Qps <p>Estimated QPS of the specification.</p>
     * @param integer $Pid <p>[Deprecated field].</p>
     * @param string $Type <p>Machine type.</p>
     * @param string $MajorVersion <p>PostgreSQL major version number.</p>
     * @param string $KernelVersion <p>PostgreSQL kernel version number.</p>
     * @param integer $IsSupportTDE <p>Indicates whether the TDE data encryption feature is supported. 0 - not supported. 1 - supported.</p>
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

        if (array_key_exists("MajorVersion",$param) and $param["MajorVersion"] !== null) {
            $this->MajorVersion = $param["MajorVersion"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("IsSupportTDE",$param) and $param["IsSupportTDE"] !== null) {
            $this->IsSupportTDE = $param["IsSupportTDE"];
        }
    }
}
