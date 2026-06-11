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
 * ModifyDefendStatus request structure.
 *
 * @method boolean getSwitchOn() Obtain Whether to enable protection.
 * @method void setSwitchOn(boolean $SwitchOn) Set Whether to enable protection.
 * @method string getInstanceType() Obtain Instance type. Valid values:<li>Cluster;</li> <li>Node.</li>
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values:<li>Cluster;</li> <li>Node.</li>
 * @method boolean getIsAll() Obtain Whether all instances are involved.
 * @method void setIsAll(boolean $IsAll) Set Whether all instances are involved.
 * @method array getInstanceIDs() Obtain Instance ID list
 * @method void setInstanceIDs(array $InstanceIDs) Set Instance ID list
 */
class ModifyDefendStatusRequest extends AbstractModel
{
    /**
     * @var boolean Whether to enable protection.
     */
    public $SwitchOn;

    /**
     * @var string Instance type. Valid values:<li>Cluster;</li> <li>Node.</li>
     */
    public $InstanceType;

    /**
     * @var boolean Whether all instances are involved.
     */
    public $IsAll;

    /**
     * @var array Instance ID list
     */
    public $InstanceIDs;

    /**
     * @param boolean $SwitchOn Whether to enable protection.
     * @param string $InstanceType Instance type. Valid values:<li>Cluster;</li> <li>Node.</li>
     * @param boolean $IsAll Whether all instances are involved.
     * @param array $InstanceIDs Instance ID list
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
        if (array_key_exists("SwitchOn",$param) and $param["SwitchOn"] !== null) {
            $this->SwitchOn = $param["SwitchOn"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }
    }
}
