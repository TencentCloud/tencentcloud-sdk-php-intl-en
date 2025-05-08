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
 * CreateRabbitMQServerlessBinding request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method string getSource() Obtain Source exchange.
 * @method void setSource(string $Source) Set Source exchange.
 * @method string getDestinationType() Obtain Target type. valid values: queue or exchange.
 * @method void setDestinationType(string $DestinationType) Set Target type. valid values: queue or exchange.
 * @method string getDestination() Obtain Target queue or exchange.
 * @method void setDestination(string $Destination) Set Target queue or exchange.
 * @method string getRoutingKey() Obtain Binding key.
 * @method void setRoutingKey(string $RoutingKey) Set Binding key.
 */
class CreateRabbitMQServerlessBindingRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var string Source exchange.
     */
    public $Source;

    /**
     * @var string Target type. valid values: queue or exchange.
     */
    public $DestinationType;

    /**
     * @var string Target queue or exchange.
     */
    public $Destination;

    /**
     * @var string Binding key.
     */
    public $RoutingKey;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost Vhost parameter.
     * @param string $Source Source exchange.
     * @param string $DestinationType Target type. valid values: queue or exchange.
     * @param string $Destination Target queue or exchange.
     * @param string $RoutingKey Binding key.
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
    }
}
