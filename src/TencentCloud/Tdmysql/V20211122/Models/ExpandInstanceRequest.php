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
 * ExpandInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getStorageNodeNum() Obtain <p>Expand storage nodes to how many nodes. If no change, pass the current number of nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Expand storage nodes to how many nodes. If no change, pass the current number of nodes</p>
 * @method array getZones() Obtain <p>Availability zone list</p>
 * @method void setZones(array $Zones) Set <p>Availability zone list</p>
 * @method integer getAZMode() Obtain <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
 * @method void setAZMode(integer $AZMode) Set <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
 * @method string getPrimaryAZ() Obtain <p>AZMode 3 means the primary AZ</p>
 * @method void setPrimaryAZ(string $PrimaryAZ) Set <p>AZMode 3 means the primary AZ</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas, value ranges from 1 to 3</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas, value ranges from 1 to 3</p>
 */
class ExpandInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Expand storage nodes to how many nodes. If no change, pass the current number of nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>Availability zone list</p>
     */
    public $Zones;

    /**
     * @var integer <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
     */
    public $AZMode;

    /**
     * @var string <p>AZMode 3 means the primary AZ</p>
     */
    public $PrimaryAZ;

    /**
     * @var integer <p>Number of replicas, value ranges from 1 to 3</p>
     */
    public $FullReplications;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $StorageNodeNum <p>Expand storage nodes to how many nodes. If no change, pass the current number of nodes</p>
     * @param array $Zones <p>Availability zone list</p>
     * @param integer $AZMode <p>az mode. 1: Single az 2: Multi-az non-primary az mode 3: Multi-az primary az mode</p>
     * @param string $PrimaryAZ <p>AZMode 3 means the primary AZ</p>
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

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
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
