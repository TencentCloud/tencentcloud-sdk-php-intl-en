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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node description information
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getSpec() Obtain Model, such as S1
 * @method void setSpec(string $Spec) Set Model, such as S1
 * @method integer getCore() Obtain Number of CPU cores
 * @method void setCore(integer $Core) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory size
 * @method void setMemory(integer $Memory) Set Memory size
 * @method string getDiskType() Obtain Disk type
 * @method void setDiskType(string $DiskType) Set Disk type
 * @method integer getDiskSize() Obtain Disk size
 * @method void setDiskSize(integer $DiskSize) Set Disk size
 * @method string getRole() Obtain The name of the clickhouse cluster to which it belongs.
 * @method void setRole(string $Role) Set The name of the clickhouse cluster to which it belongs.
 * @method string getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRip() Obtain rip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRip(string $Rip) Set rip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFeRole() Obtain FE node role
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeRole(string $FeRole) Set FE node role
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUUID() Obtain UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUUID(string $UUID) Set UUID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Model, such as S1
     */
    public $Spec;

    /**
     * @var integer Number of CPU cores
     */
    public $Core;

    /**
     * @var integer Memory size
     */
    public $Memory;

    /**
     * @var string Disk type
     */
    public $DiskType;

    /**
     * @var integer Disk size
     */
    public $DiskSize;

    /**
     * @var string The name of the clickhouse cluster to which it belongs.
     */
    public $Role;

    /**
     * @var string Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string rip
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rip;

    /**
     * @var string FE node role
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeRole;

    /**
     * @var string UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UUID;

    /**
     * @param string $Ip IP address
     * @param string $Spec Model, such as S1
     * @param integer $Core Number of CPU cores
     * @param integer $Memory Memory size
     * @param string $DiskType Disk type
     * @param integer $DiskSize Disk size
     * @param string $Role The name of the clickhouse cluster to which it belongs.
     * @param string $Status Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Rip rip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FeRole FE node role
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UUID UUID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rip",$param) and $param["Rip"] !== null) {
            $this->Rip = $param["Rip"];
        }

        if (array_key_exists("FeRole",$param) and $param["FeRole"] !== null) {
            $this->FeRole = $param["FeRole"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }
    }
}
