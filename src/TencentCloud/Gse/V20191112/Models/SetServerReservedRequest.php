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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetServerReserved request structure.
 *
 * @method string getFleetId() Obtain ID of the fleet to be bound with the policy
 * @method void setFleetId(string $FleetId) Set ID of the fleet to be bound with the policy
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getReserveValue() Obtain Whether the instance is retained. Valid values: 1 (retained), 0 (not retained). Default value: 0.
 * @method void setReserveValue(integer $ReserveValue) Set Whether the instance is retained. Valid values: 1 (retained), 0 (not retained). Default value: 0.
 */
class SetServerReservedRequest extends AbstractModel
{
    /**
     * @var string ID of the fleet to be bound with the policy
     */
    public $FleetId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Whether the instance is retained. Valid values: 1 (retained), 0 (not retained). Default value: 0.
     */
    public $ReserveValue;

    /**
     * @param string $FleetId ID of the fleet to be bound with the policy
     * @param string $InstanceId Instance ID
     * @param integer $ReserveValue Whether the instance is retained. Valid values: 1 (retained), 0 (not retained). Default value: 0.
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReserveValue",$param) and $param["ReserveValue"] !== null) {
            $this->ReserveValue = $param["ReserveValue"];
        }
    }
}
