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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQServerlessBinding request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance Id</p>
 * @method string getVirtualHost() Obtain <p>Vhost parameter</p>
 * @method void setVirtualHost(string $VirtualHost) Set <p>Vhost parameter</p>
 * @method string getSource() Obtain <p>Source exchange</p>
 * @method void setSource(string $Source) Set <p>Source exchange</p>
 * @method string getDestinationType() Obtain <p>Target type, value queue or exchange</p>
 * @method void setDestinationType(string $DestinationType) Set <p>Target type, value queue or exchange</p>
 * @method string getDestination() Obtain <p>Target queue or switch</p>
 * @method void setDestination(string $Destination) Set <p>Target queue or switch</p>
 * @method string getRoutingKey() Obtain <p>Bind key</p>
 * @method void setRoutingKey(string $RoutingKey) Set <p>Bind key</p>
 * @method array getArguments() Obtain <p>When creating a Binding for Header type Exchange, parameters can be passed in. No need to input for other types of Exchange.</p>
 * @method void setArguments(array $Arguments) Set <p>When creating a Binding for Header type Exchange, parameters can be passed in. No need to input for other types of Exchange.</p>
 */
class CreateRabbitMQServerlessBindingRequest extends AbstractModel
{
    /**
     * @var string <p>Instance Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Vhost parameter</p>
     */
    public $VirtualHost;

    /**
     * @var string <p>Source exchange</p>
     */
    public $Source;

    /**
     * @var string <p>Target type, value queue or exchange</p>
     */
    public $DestinationType;

    /**
     * @var string <p>Target queue or switch</p>
     */
    public $Destination;

    /**
     * @var string <p>Bind key</p>
     */
    public $RoutingKey;

    /**
     * @var array <p>When creating a Binding for Header type Exchange, parameters can be passed in. No need to input for other types of Exchange.</p>
     */
    public $Arguments;

    /**
     * @param string $InstanceId <p>Instance Id</p>
     * @param string $VirtualHost <p>Vhost parameter</p>
     * @param string $Source <p>Source exchange</p>
     * @param string $DestinationType <p>Target type, value queue or exchange</p>
     * @param string $Destination <p>Target queue or switch</p>
     * @param string $RoutingKey <p>Bind key</p>
     * @param array $Arguments <p>When creating a Binding for Header type Exchange, parameters can be passed in. No need to input for other types of Exchange.</p>
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

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new RabbitMQServerlessKeyValuePair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }
    }
}
