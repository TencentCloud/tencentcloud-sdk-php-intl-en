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
 * RabbitMQ exchange list member information
 *
 * @method string getExchangeName() Obtain Exchange name.
 * @method void setExchangeName(string $ExchangeName) Set Exchange name.
 * @method string getRemark() Obtain Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getExchangeType() Obtain Exchange type. Valid values: "fanout", "direct", "topic", "headers".
 * @method void setExchangeType(string $ExchangeType) Set Exchange type. Valid values: "fanout", "direct", "topic", "headers".
 * @method string getVirtualHost() Obtain Specifies the Host name of the Virtual switch.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the Host name of the Virtual switch.
 * @method string getExchangeCreator() Obtain Exchange creator. "system": "created by the system"; "user": "created by a user".
 * @method void setExchangeCreator(string $ExchangeCreator) Set Exchange creator. "system": "created by the system"; "user": "created by a user".
 * @method string getCreateTimeStamp() Obtain Exchange creation time.
 * @method void setCreateTimeStamp(string $CreateTimeStamp) Set Exchange creation time.
 * @method string getModTimeStamp() Obtain Exchange modification time.
 * @method void setModTimeStamp(string $ModTimeStamp) Set Exchange modification time.
 * @method float getMessageRateIn() Obtain Input message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageRateIn(float $MessageRateIn) Set Input message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMessageRateOut() Obtain Indicates the output message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessageRateOut(float $MessageRateOut) Set Indicates the output message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDurable() Obtain Whether the exchange is a durable one. true: durable; false: non-durable.
 * @method void setDurable(boolean $Durable) Set Whether the exchange is a durable one. true: durable; false: non-durable.
 * @method boolean getAutoDelete() Obtain Whether automatic deletion is set for the exchange. true: automatic deletion set; false: automatic deletion not set.
 * @method void setAutoDelete(boolean $AutoDelete) Set Whether automatic deletion is set for the exchange. true: automatic deletion set; false: automatic deletion not set.
 * @method boolean getInternal() Obtain Whether the exchange is an internal one. true: internal exchange.
 * @method void setInternal(boolean $Internal) Set Whether the exchange is an internal one. true: internal exchange.
 * @method string getInstanceId() Obtain Instance ID of the exchange.
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the exchange.
 * @method string getPolicy() Obtain Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPolicy(string $Policy) Set Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getArguments() Obtain Extended parameters of the key-value object type.
 * @method void setArguments(string $Arguments) Set Extended parameters of the key-value object type.
 * @method integer getMessagesDelayed() Obtain Number of unscheduled delayed messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessagesDelayed(integer $MessagesDelayed) Set Number of unscheduled delayed messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCreateTs() Obtain Creation time timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation time timestamp.
 * @method integer getModifyTs() Obtain Modification time timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification time timestamp.
 */
class RabbitMQExchangeListInfo extends AbstractModel
{
    /**
     * @var string Exchange name.
     */
    public $ExchangeName;

    /**
     * @var string Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Exchange type. Valid values: "fanout", "direct", "topic", "headers".
     */
    public $ExchangeType;

    /**
     * @var string Specifies the Host name of the Virtual switch.
     */
    public $VirtualHost;

    /**
     * @var string Exchange creator. "system": "created by the system"; "user": "created by a user".
     */
    public $ExchangeCreator;

    /**
     * @var string Exchange creation time.
     */
    public $CreateTimeStamp;

    /**
     * @var string Exchange modification time.
     */
    public $ModTimeStamp;

    /**
     * @var float Input message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageRateIn;

    /**
     * @var float Indicates the output message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessageRateOut;

    /**
     * @var boolean Whether the exchange is a durable one. true: durable; false: non-durable.
     */
    public $Durable;

    /**
     * @var boolean Whether automatic deletion is set for the exchange. true: automatic deletion set; false: automatic deletion not set.
     */
    public $AutoDelete;

    /**
     * @var boolean Whether the exchange is an internal one. true: internal exchange.
     */
    public $Internal;

    /**
     * @var string Instance ID of the exchange.
     */
    public $InstanceId;

    /**
     * @var string Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var string Extended parameters of the key-value object type.
     */
    public $Arguments;

    /**
     * @var integer Number of unscheduled delayed messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MessagesDelayed;

    /**
     * @var integer Creation time timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification time timestamp.
     */
    public $ModifyTs;

    /**
     * @param string $ExchangeName Exchange name.
     * @param string $Remark Remarks

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ExchangeType Exchange type. Valid values: "fanout", "direct", "topic", "headers".
     * @param string $VirtualHost Specifies the Host name of the Virtual switch.
     * @param string $ExchangeCreator Exchange creator. "system": "created by the system"; "user": "created by a user".
     * @param string $CreateTimeStamp Exchange creation time.
     * @param string $ModTimeStamp Exchange modification time.
     * @param float $MessageRateIn Input message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $MessageRateOut Indicates the output message rate.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Durable Whether the exchange is a durable one. true: durable; false: non-durable.
     * @param boolean $AutoDelete Whether automatic deletion is set for the exchange. true: automatic deletion set; false: automatic deletion not set.
     * @param boolean $Internal Whether the exchange is an internal one. true: internal exchange.
     * @param string $InstanceId Instance ID of the exchange.
     * @param string $Policy Effective policy name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Arguments Extended parameters of the key-value object type.
     * @param integer $MessagesDelayed Number of unscheduled delayed messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CreateTs Creation time timestamp.
     * @param integer $ModifyTs Modification time timestamp.
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
        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ExchangeType",$param) and $param["ExchangeType"] !== null) {
            $this->ExchangeType = $param["ExchangeType"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ExchangeCreator",$param) and $param["ExchangeCreator"] !== null) {
            $this->ExchangeCreator = $param["ExchangeCreator"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("ModTimeStamp",$param) and $param["ModTimeStamp"] !== null) {
            $this->ModTimeStamp = $param["ModTimeStamp"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("MessagesDelayed",$param) and $param["MessagesDelayed"] !== null) {
            $this->MessagesDelayed = $param["MessagesDelayed"];
        }

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }
    }
}
