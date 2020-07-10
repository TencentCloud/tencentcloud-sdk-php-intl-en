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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModifyDBInstanceSpec request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console.
 * @method integer getMemory() Obtain Instance memory size in GB after specification adjustment.
 * @method void setMemory(integer $Memory) Set Instance memory size in GB after specification adjustment.
 * @method integer getVolume() Obtain Instance disk size in GB after specification adjustment.
 * @method void setVolume(integer $Volume) Set Instance disk size in GB after specification adjustment.
 */
class InquirePriceModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console.
     */
    public $InstanceId;

    /**
     * @var integer Instance memory size in GB after specification adjustment.
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB after specification adjustment.
     */
    public $Volume;

    /**
     * @param string $InstanceId Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console.
     * @param integer $Memory Instance memory size in GB after specification adjustment.
     * @param integer $Volume Instance disk size in GB after specification adjustment.
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
