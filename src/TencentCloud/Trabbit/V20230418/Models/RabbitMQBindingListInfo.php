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
 * Rabbitmq binding relationship list member.
 *
 * @method integer getBindingId() Obtain <p>Routing relationship id</p>
 * @method void setBindingId(integer $BindingId) Set <p>Routing relationship id</p>
 * @method string getVirtualHost() Obtain <p>Vhost parameter</p>
 * @method void setVirtualHost(string $VirtualHost) Set <p>Vhost parameter</p>
 * @method string getSource() Obtain <p>Source exchange name</p>
 * @method void setSource(string $Source) Set <p>Source exchange name</p>
 * @method string getDestinationType() Obtain <p>Target type, queue or exchange</p>
 * @method void setDestinationType(string $DestinationType) Set <p>Target type, queue or exchange</p>
 * @method string getDestination() Obtain <p>Target resource name</p>
 * @method void setDestination(string $Destination) Set <p>Target resource name</p>
 * @method string getRoutingKey() Obtain <p>Bind key</p>
 * @method void setRoutingKey(string $RoutingKey) Set <p>Bind key</p>
 * @method string getSourceExchangeType() Obtain <p>Source exchange type</p>
 * @method void setSourceExchangeType(string $SourceExchangeType) Set <p>Source exchange type</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getModifyTime() Obtain <p>Modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Modification time.</p>
 * @method array getArguments() Obtain <p>Bind parameter. Parameters can be passed in during binding for header type Exchange. No need to input for other types of Exchange.</p>
 * @method void setArguments(array $Arguments) Set <p>Bind parameter. Parameters can be passed in during binding for header type Exchange. No need to input for other types of Exchange.</p>
 */
class RabbitMQBindingListInfo extends AbstractModel
{
    /**
     * @var integer <p>Routing relationship id</p>
     */
    public $BindingId;

    /**
     * @var string <p>Vhost parameter</p>
     */
    public $VirtualHost;

    /**
     * @var string <p>Source exchange name</p>
     */
    public $Source;

    /**
     * @var string <p>Target type, queue or exchange</p>
     */
    public $DestinationType;

    /**
     * @var string <p>Target resource name</p>
     */
    public $Destination;

    /**
     * @var string <p>Bind key</p>
     */
    public $RoutingKey;

    /**
     * @var string <p>Source exchange type</p>
     */
    public $SourceExchangeType;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Modification time.</p>
     */
    public $ModifyTime;

    /**
     * @var array <p>Bind parameter. Parameters can be passed in during binding for header type Exchange. No need to input for other types of Exchange.</p>
     */
    public $Arguments;

    /**
     * @param integer $BindingId <p>Routing relationship id</p>
     * @param string $VirtualHost <p>Vhost parameter</p>
     * @param string $Source <p>Source exchange name</p>
     * @param string $DestinationType <p>Target type, queue or exchange</p>
     * @param string $Destination <p>Target resource name</p>
     * @param string $RoutingKey <p>Bind key</p>
     * @param string $SourceExchangeType <p>Source exchange type</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ModifyTime <p>Modification time.</p>
     * @param array $Arguments <p>Bind parameter. Parameters can be passed in during binding for header type Exchange. No need to input for other types of Exchange.</p>
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
