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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method boolean getDryRun() Obtain <p>Whether to only perform pre-check without actually executing the configuration change. true: only return the configuration change plan and pre-check result; false: actually execute the configuration change (default)</p>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to only perform pre-check without actually executing the configuration change. true: only return the configuration change plan and pre-check result; false: actually execute the configuration change (default)</p>
 * @method integer getHybridNodeCpu() Obtain <p>Number of CPU cores of peer nodes. If not passed, maintain current value unchanged</p>
 * @method void setHybridNodeCpu(integer $HybridNodeCpu) Set <p>Number of CPU cores of peer nodes. If not passed, maintain current value unchanged</p>
 * @method integer getHybridNodeMem() Obtain <p>Peer-to-peer node memory size in GB. If not passed, maintain current value unchanged</p>
 * @method void setHybridNodeMem(integer $HybridNodeMem) Set <p>Peer-to-peer node memory size in GB. If not passed, maintain current value unchanged</p>
 * @method integer getHybridNodeNum() Obtain <p>Number of peer nodes. If not passed, maintain current value unchanged</p>
 * @method void setHybridNodeNum(integer $HybridNodeNum) Set <p>Number of peer nodes. If not passed, maintain current value unchanged</p>
 * @method integer getDisk() Obtain <p>Peer-to-peer node disk capacity in GB. If not passed, maintain current value unchanged</p>
 * @method void setDisk(integer $Disk) Set <p>Peer-to-peer node disk capacity in GB. If not passed, maintain current value unchanged</p>
 * @method string getStorageType() Obtain <p>Storage type. Available values: CLOUD_HSSD (enhanced SSD cloud disk), CLOUD_TCS (local disk), CLOUD_BSSD (universal SSD cloud disk). If not specified, the current value remains unchanged.</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type. Available values: CLOUD_HSSD (enhanced SSD cloud disk), CLOUD_TCS (local disk), CLOUD_BSSD (universal SSD cloud disk). If not specified, the current value remains unchanged.</p>
 * @method string getSpecCode() Obtain <p>Specification code, for example, 4c8g, 16c32g</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Specification code, for example, 4c8g, 16c32g</p>
 * @method array getZones() Obtain <p>Target AZ list. If not passed, maintain current value unchanged</p>
 * @method void setZones(array $Zones) Set <p>Target AZ list. If not passed, maintain current value unchanged</p>
 * @method integer getAZMode() Obtain <p>Availability zone mode. 1: single availability zone. 3: multi-availability zone primary AZ mode</p>
 * @method void setAZMode(integer $AZMode) Set <p>Availability zone mode. 1: single availability zone. 3: multi-availability zone primary AZ mode</p>
 * @method string getPrimaryAZ() Obtain <p>Primary AZ. This parameter is valid only when AZMode is 3</p>
 * @method void setPrimaryAZ(string $PrimaryAZ) Set <p>Primary AZ. This parameter is valid only when AZMode is 3</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas, value ranges from 1 to 3</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas, value ranges from 1 to 3</p>
 */
class ModifyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>Whether to only perform pre-check without actually executing the configuration change. true: only return the configuration change plan and pre-check result; false: actually execute the configuration change (default)</p>
     */
    public $DryRun;

    /**
     * @var integer <p>Number of CPU cores of peer nodes. If not passed, maintain current value unchanged</p>
     */
    public $HybridNodeCpu;

    /**
     * @var integer <p>Peer-to-peer node memory size in GB. If not passed, maintain current value unchanged</p>
     */
    public $HybridNodeMem;

    /**
     * @var integer <p>Number of peer nodes. If not passed, maintain current value unchanged</p>
     */
    public $HybridNodeNum;

    /**
     * @var integer <p>Peer-to-peer node disk capacity in GB. If not passed, maintain current value unchanged</p>
     */
    public $Disk;

    /**
     * @var string <p>Storage type. Available values: CLOUD_HSSD (enhanced SSD cloud disk), CLOUD_TCS (local disk), CLOUD_BSSD (universal SSD cloud disk). If not specified, the current value remains unchanged.</p>
     */
    public $StorageType;

    /**
     * @var string <p>Specification code, for example, 4c8g, 16c32g</p>
     */
    public $SpecCode;

    /**
     * @var array <p>Target AZ list. If not passed, maintain current value unchanged</p>
     */
    public $Zones;

    /**
     * @var integer <p>Availability zone mode. 1: single availability zone. 3: multi-availability zone primary AZ mode</p>
     */
    public $AZMode;

    /**
     * @var string <p>Primary AZ. This parameter is valid only when AZMode is 3</p>
     */
    public $PrimaryAZ;

    /**
     * @var integer <p>Number of replicas, value ranges from 1 to 3</p>
     */
    public $FullReplications;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param boolean $DryRun <p>Whether to only perform pre-check without actually executing the configuration change. true: only return the configuration change plan and pre-check result; false: actually execute the configuration change (default)</p>
     * @param integer $HybridNodeCpu <p>Number of CPU cores of peer nodes. If not passed, maintain current value unchanged</p>
     * @param integer $HybridNodeMem <p>Peer-to-peer node memory size in GB. If not passed, maintain current value unchanged</p>
     * @param integer $HybridNodeNum <p>Number of peer nodes. If not passed, maintain current value unchanged</p>
     * @param integer $Disk <p>Peer-to-peer node disk capacity in GB. If not passed, maintain current value unchanged</p>
     * @param string $StorageType <p>Storage type. Available values: CLOUD_HSSD (enhanced SSD cloud disk), CLOUD_TCS (local disk), CLOUD_BSSD (universal SSD cloud disk). If not specified, the current value remains unchanged.</p>
     * @param string $SpecCode <p>Specification code, for example, 4c8g, 16c32g</p>
     * @param array $Zones <p>Target AZ list. If not passed, maintain current value unchanged</p>
     * @param integer $AZMode <p>Availability zone mode. 1: single availability zone. 3: multi-availability zone primary AZ mode</p>
     * @param string $PrimaryAZ <p>Primary AZ. This parameter is valid only when AZMode is 3</p>
     * @param integer $FullReplications <p>Number of replicas, value ranges from 1 to 3</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("HybridNodeCpu",$param) and $param["HybridNodeCpu"] !== null) {
            $this->HybridNodeCpu = $param["HybridNodeCpu"];
        }

        if (array_key_exists("HybridNodeMem",$param) and $param["HybridNodeMem"] !== null) {
            $this->HybridNodeMem = $param["HybridNodeMem"];
        }

        if (array_key_exists("HybridNodeNum",$param) and $param["HybridNodeNum"] !== null) {
            $this->HybridNodeNum = $param["HybridNodeNum"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("PrimaryAZ",$param) and $param["PrimaryAZ"] !== null) {
            $this->PrimaryAZ = $param["PrimaryAZ"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }
    }
}
