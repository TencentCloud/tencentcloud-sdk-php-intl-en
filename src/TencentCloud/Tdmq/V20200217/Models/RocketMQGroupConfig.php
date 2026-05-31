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
 * RocketMQ Consumer Group Configuration Information
 *
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getGroupName() Obtain consumer group name
 * @method void setGroupName(string $GroupName) Set consumer group name
 * @method boolean getConsumeBroadcastEnable() Obtain Broadcast enabled
 * @method void setConsumeBroadcastEnable(boolean $ConsumeBroadcastEnable) Set Broadcast enabled
 * @method boolean getConsumeEnable() Obtain Whether to enable consumption
 * @method void setConsumeEnable(boolean $ConsumeEnable) Set Whether to enable consumption
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getConsumerGroupType() Obtain Protocol type, support the following enumeration value
TCP;
HTTP;
 * @method void setConsumerGroupType(string $ConsumerGroupType) Set Protocol type, support the following enumeration value
TCP;
HTTP;
 */
class RocketMQGroupConfig extends AbstractModel
{
    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string consumer group name
     */
    public $GroupName;

    /**
     * @var boolean Broadcast enabled
     */
    public $ConsumeBroadcastEnable;

    /**
     * @var boolean Whether to enable consumption
     */
    public $ConsumeEnable;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Protocol type, support the following enumeration value
TCP;
HTTP;
     */
    public $ConsumerGroupType;

    /**
     * @param string $Namespace Namespace
     * @param string $GroupName consumer group name
     * @param boolean $ConsumeBroadcastEnable Broadcast enabled
     * @param boolean $ConsumeEnable Whether to enable consumption
     * @param string $Remark Remarks
     * @param string $ConsumerGroupType Protocol type, support the following enumeration value
TCP;
HTTP;
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ConsumeBroadcastEnable",$param) and $param["ConsumeBroadcastEnable"] !== null) {
            $this->ConsumeBroadcastEnable = $param["ConsumeBroadcastEnable"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerGroupType",$param) and $param["ConsumerGroupType"] !== null) {
            $this->ConsumerGroupType = $param["ConsumerGroupType"];
        }
    }
}
