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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQInstance request structure.
 *
 * @method string getInstanceId() Obtain Dedicated Instance ID
 * @method void setInstanceId(string $InstanceId) Set Dedicated Instance ID
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method string getRemark() Obtain Instance Remarks
 * @method void setRemark(string $Remark) Set Instance Remarks
 * @method integer getMessageRetention() Obtain Instance message retention time, in hours
 * @method void setMessageRetention(integer $MessageRetention) Set Instance message retention time, in hours
 * @method boolean getEnableDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether to enable deletion protection
 * @method float getSendReceiveRatio() Obtain Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
 */
class ModifyRocketMQInstanceRequest extends AbstractModel
{
    /**
     * @var string Dedicated Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var string Instance Remarks
     */
    public $Remark;

    /**
     * @var integer Instance message retention time, in hours
     */
    public $MessageRetention;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $EnableDeletionProtection;

    /**
     * @var float Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
     */
    public $SendReceiveRatio;

    /**
     * @param string $InstanceId Dedicated Instance ID
     * @param string $Name Instance name
     * @param string $Remark Instance Remarks
     * @param integer $MessageRetention Instance message retention time, in hours
     * @param boolean $EnableDeletionProtection Whether to enable deletion protection
     * @param float $SendReceiveRatio Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }
    }
}
