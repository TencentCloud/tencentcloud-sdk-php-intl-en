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
 * RabbitMQ routing relationship list member.
 *
 * @method integer getBindingId() Obtain Routing relationship ID.
 * @method void setBindingId(integer $BindingId) Set Routing relationship ID.
 * @method string getVirtualHost() Obtain VhostName
 * @method void setVirtualHost(string $VirtualHost) Set VhostName
 * @method string getSource() Obtain Source exchange name.
 * @method void setSource(string $Source) Set Source exchange name.
 * @method string getDestinationType() Obtain Destination type. Valid values: queue and exchange.
 * @method void setDestinationType(string $DestinationType) Set Destination type. Valid values: queue and exchange.
 * @method string getDestination() Obtain Destination resource name.
 * @method void setDestination(string $Destination) Set Destination resource name.
 * @method string getRoutingKey() Obtain Binds the key.
 * @method void setRoutingKey(string $RoutingKey) Set Binds the key.
 * @method string getSourceExchangeType() Obtain Source exchange type.
 * @method void setSourceExchangeType(string $SourceExchangeType) Set Source exchange type.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method integer getCreateTs() Obtain Creation timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation timestamp.
 * @method integer getModifyTs() Obtain Modification timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification timestamp.
 */
class RabbitMQBindingListInfo extends AbstractModel
{
    /**
     * @var integer Routing relationship ID.
     */
    public $BindingId;

    /**
     * @var string VhostName
     */
    public $VirtualHost;

    /**
     * @var string Source exchange name.
     */
    public $Source;

    /**
     * @var string Destination type. Valid values: queue and exchange.
     */
    public $DestinationType;

    /**
     * @var string Destination resource name.
     */
    public $Destination;

    /**
     * @var string Binds the key.
     */
    public $RoutingKey;

    /**
     * @var string Source exchange type.
     */
    public $SourceExchangeType;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @var integer Creation timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification timestamp.
     */
    public $ModifyTs;

    /**
     * @param integer $BindingId Routing relationship ID.
     * @param string $VirtualHost VhostName
     * @param string $Source Source exchange name.
     * @param string $DestinationType Destination type. Valid values: queue and exchange.
     * @param string $Destination Destination resource name.
     * @param string $RoutingKey Binds the key.
     * @param string $SourceExchangeType Source exchange type.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
     * @param integer $CreateTs Creation timestamp.
     * @param integer $ModifyTs Modification timestamp.
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

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }
    }
}
