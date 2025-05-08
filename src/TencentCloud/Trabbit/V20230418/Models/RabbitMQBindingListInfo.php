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
 * Rabbitmq binding relationship list member.
 *
 * @method integer getBindingId() Obtain binding id.
 * @method void setBindingId(integer $BindingId) Set binding id.
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method string getSource() Obtain Source exchange name.
 * @method void setSource(string $Source) Set Source exchange name.
 * @method string getDestinationType() Obtain Target type. valid values: queue or exchange.
 * @method void setDestinationType(string $DestinationType) Set Target type. valid values: queue or exchange.
 * @method string getDestination() Obtain Target resource name.
 * @method void setDestination(string $Destination) Set Target resource name.
 * @method string getRoutingKey() Obtain Binding key.
 * @method void setRoutingKey(string $RoutingKey) Set Binding key.
 * @method string getSourceExchangeType() Obtain Source exchange type.
 * @method void setSourceExchangeType(string $SourceExchangeType) Set Source exchange type.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class RabbitMQBindingListInfo extends AbstractModel
{
    /**
     * @var integer binding id.
     */
    public $BindingId;

    /**
     * @var string Vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var string Source exchange name.
     */
    public $Source;

    /**
     * @var string Target type. valid values: queue or exchange.
     */
    public $DestinationType;

    /**
     * @var string Target resource name.
     */
    public $Destination;

    /**
     * @var string Binding key.
     */
    public $RoutingKey;

    /**
     * @var string Source exchange type.
     */
    public $SourceExchangeType;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param integer $BindingId binding id.
     * @param string $VirtualHost Vhost parameter.
     * @param string $Source Source exchange name.
     * @param string $DestinationType Target type. valid values: queue or exchange.
     * @param string $Destination Target resource name.
     * @param string $RoutingKey Binding key.
     * @param string $SourceExchangeType Source exchange type.
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
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
        if (array_key_exists("BindingId",$param) and $param["BindingId"] !== null) {
            $this->BindingId = $param["BindingId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DestinationType",$param) and $param["DestinationType"] !== null) {
            $this->DestinationType = $param["DestinationType"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }

        if (array_key_exists("SourceExchangeType",$param) and $param["SourceExchangeType"] !== null) {
            $this->SourceExchangeType = $param["SourceExchangeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
