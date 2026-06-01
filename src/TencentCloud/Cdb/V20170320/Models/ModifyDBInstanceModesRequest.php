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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceModes request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
 * @method string getMode() Obtain <p>The mode of cloud databases currently only supports input "protectMode" to modify the Primary-standby sync mode.</p>
 * @method void setMode(string $Mode) Set <p>The mode of cloud databases currently only supports input "protectMode" to modify the Primary-standby sync mode.</p>
 * @method integer getProtectMode() Obtain <p>Data synchronization mode, available values: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication.</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data synchronization mode, available values: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication.</p>
 */
class ModifyDBInstanceModesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>The mode of cloud databases currently only supports input "protectMode" to modify the Primary-standby sync mode.</p>
     */
    public $Mode;

    /**
     * @var integer <p>Data synchronization mode, available values: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication.</p>
     */
    public $ProtectMode;

    /**
     * @param string $InstanceId <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
     * @param string $Mode <p>The mode of cloud databases currently only supports input "protectMode" to modify the Primary-standby sync mode.</p>
     * @param integer $ProtectMode <p>Data synchronization mode, available values: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication.</p>
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }
    }
}
