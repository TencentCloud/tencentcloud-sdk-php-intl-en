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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQServerlessExchange request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain VHost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set VHost parameter.
 * @method string getExchangeName() Obtain exchange name.
 * @method void setExchangeName(string $ExchangeName) Set exchange name.
 * @method string getExchangeType() Obtain Specifies the exchange type. valid values: "fanout", "direct", "topic", "headers".
 * @method void setExchangeType(string $ExchangeType) Set Specifies the exchange type. valid values: "fanout", "direct", "topic", "headers".
 * @method string getRemark() Obtain Specifies the remark for exchange.
 * @method void setRemark(string $Remark) Set Specifies the remark for exchange.
 * @method boolean getDurable() Obtain Specifies whether it is a persistent exchange. when the cluster restarts, all exchanges with this field set to "false" will be cleared.
 * @method void setDurable(boolean $Durable) Set Specifies whether it is a persistent exchange. when the cluster restarts, all exchanges with this field set to "false" will be cleared.
 * @method boolean getAutoDelete() Obtain Whether to auto-delete this exchange. if set to "true", the exchange will be automatically deleted when all routing relationships on the current exchange are unbound.
 * @method void setAutoDelete(boolean $AutoDelete) Set Whether to auto-delete this exchange. if set to "true", the exchange will be automatically deleted when all routing relationships on the current exchange are unbound.
 * @method boolean getInternal() Obtain Specifies whether it is an internal exchange. if set to "true", messages cannot be directly delivered to this exchange. they need to be forwarded through another exchange in the routing settings.
 * @method void setInternal(boolean $Internal) Set Specifies whether it is an internal exchange. if set to "true", messages cannot be directly delivered to this exchange. they need to be forwarded through another exchange in the routing settings.
 * @method string getAlternateExchange() Obtain Alternative exchange. if a message cannot be sent to the current exchange, it will be sent to this alternative exchange.
 * @method void setAlternateExchange(string $AlternateExchange) Set Alternative exchange. if a message cannot be sent to the current exchange, it will be sent to this alternative exchange.
 */
class CreateRabbitMQServerlessExchangeRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string VHost parameter.
     */
    public $VirtualHost;

    /**
     * @var string exchange name.
     */
    public $ExchangeName;

    /**
     * @var string Specifies the exchange type. valid values: "fanout", "direct", "topic", "headers".
     */
    public $ExchangeType;

    /**
     * @var string Specifies the remark for exchange.
     */
    public $Remark;

    /**
     * @var boolean Specifies whether it is a persistent exchange. when the cluster restarts, all exchanges with this field set to "false" will be cleared.
     */
    public $Durable;

    /**
     * @var boolean Whether to auto-delete this exchange. if set to "true", the exchange will be automatically deleted when all routing relationships on the current exchange are unbound.
     */
    public $AutoDelete;

    /**
     * @var boolean Specifies whether it is an internal exchange. if set to "true", messages cannot be directly delivered to this exchange. they need to be forwarded through another exchange in the routing settings.
     */
    public $Internal;

    /**
     * @var string Alternative exchange. if a message cannot be sent to the current exchange, it will be sent to this alternative exchange.
     */
    public $AlternateExchange;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost VHost parameter.
     * @param string $ExchangeName exchange name.
     * @param string $ExchangeType Specifies the exchange type. valid values: "fanout", "direct", "topic", "headers".
     * @param string $Remark Specifies the remark for exchange.
     * @param boolean $Durable Specifies whether it is a persistent exchange. when the cluster restarts, all exchanges with this field set to "false" will be cleared.
     * @param boolean $AutoDelete Whether to auto-delete this exchange. if set to "true", the exchange will be automatically deleted when all routing relationships on the current exchange are unbound.
     * @param boolean $Internal Specifies whether it is an internal exchange. if set to "true", messages cannot be directly delivered to this exchange. they need to be forwarded through another exchange in the routing settings.
     * @param string $AlternateExchange Alternative exchange. if a message cannot be sent to the current exchange, it will be sent to this alternative exchange.
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("ExchangeType",$param) and $param["ExchangeType"] !== null) {
            $this->ExchangeType = $param["ExchangeType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("AlternateExchange",$param) and $param["AlternateExchange"] !== null) {
            $this->AlternateExchange = $param["AlternateExchange"];
        }
    }
}
