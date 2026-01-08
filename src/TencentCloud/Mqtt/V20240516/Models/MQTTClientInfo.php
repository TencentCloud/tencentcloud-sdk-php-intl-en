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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT client information.
 *
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getClientAddress() Obtain Client network address.
 * @method void setClientAddress(string $ClientAddress) Set Client network address.
 * @method integer getProtocolVersion() Obtain MQTT protocol version.
3: indicates MQTT version 3.1.
4: indicates MQTT 3.1.1.
5: indicates the MQTT 5.0 protocol.
 * @method void setProtocolVersion(integer $ProtocolVersion) Set MQTT protocol version.
3: indicates MQTT version 3.1.
4: indicates MQTT 3.1.1.
5: indicates the MQTT 5.0 protocol.
 * @method integer getKeepalive() Obtain Keep-alive duration. Unit: second.
 * @method void setKeepalive(integer $Keepalive) Set Keep-alive duration. Unit: second.
 * @method string getConnectionStatus() Obtain Connection status. CONNECTED: connected; DISCONNECTED: not connected.
 * @method void setConnectionStatus(string $ConnectionStatus) Set Connection status. CONNECTED: connected; DISCONNECTED: not connected.
 * @method integer getCreateTime() Obtain Client creation time. millisecond-level timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Client creation time. millisecond-level timestamp.
 * @method integer getConnectTime() Obtain Last connection establishment time. millisecond-level timestamp.
 * @method void setConnectTime(integer $ConnectTime) Set Last connection establishment time. millisecond-level timestamp.
 * @method integer getDisconnectTime() Obtain Last disconnection time, only applicable to persistent sessions (cleanSession=false) and when the client is currently disconnected, millisecond-level timestamp.
 * @method void setDisconnectTime(integer $DisconnectTime) Set Last disconnection time, only applicable to persistent sessions (cleanSession=false) and when the client is currently disconnected, millisecond-level timestamp.
 * @method array getMQTTClientSubscriptions() Obtain Client subscription list.
 * @method void setMQTTClientSubscriptions(array $MQTTClientSubscriptions) Set Client subscription list.
 */
class MQTTClientInfo extends AbstractModel
{
    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Client network address.
     */
    public $ClientAddress;

    /**
     * @var integer MQTT protocol version.
3: indicates MQTT version 3.1.
4: indicates MQTT 3.1.1.
5: indicates the MQTT 5.0 protocol.
     */
    public $ProtocolVersion;

    /**
     * @var integer Keep-alive duration. Unit: second.
     */
    public $Keepalive;

    /**
     * @var string Connection status. CONNECTED: connected; DISCONNECTED: not connected.
     */
    public $ConnectionStatus;

    /**
     * @var integer Client creation time. millisecond-level timestamp.
     */
    public $CreateTime;

    /**
     * @var integer Last connection establishment time. millisecond-level timestamp.
     */
    public $ConnectTime;

    /**
     * @var integer Last disconnection time, only applicable to persistent sessions (cleanSession=false) and when the client is currently disconnected, millisecond-level timestamp.
     */
    public $DisconnectTime;

    /**
     * @var array Client subscription list.
     */
    public $MQTTClientSubscriptions;

    /**
     * @param string $ClientId Client ID
     * @param string $ClientAddress Client network address.
     * @param integer $ProtocolVersion MQTT protocol version.
3: indicates MQTT version 3.1.
4: indicates MQTT 3.1.1.
5: indicates the MQTT 5.0 protocol.
     * @param integer $Keepalive Keep-alive duration. Unit: second.
     * @param string $ConnectionStatus Connection status. CONNECTED: connected; DISCONNECTED: not connected.
     * @param integer $CreateTime Client creation time. millisecond-level timestamp.
     * @param integer $ConnectTime Last connection establishment time. millisecond-level timestamp.
     * @param integer $DisconnectTime Last disconnection time, only applicable to persistent sessions (cleanSession=false) and when the client is currently disconnected, millisecond-level timestamp.
     * @param array $MQTTClientSubscriptions Client subscription list.
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddress",$param) and $param["ClientAddress"] !== null) {
            $this->ClientAddress = $param["ClientAddress"];
        }

        if (array_key_exists("ProtocolVersion",$param) and $param["ProtocolVersion"] !== null) {
            $this->ProtocolVersion = $param["ProtocolVersion"];
        }

        if (array_key_exists("Keepalive",$param) and $param["Keepalive"] !== null) {
            $this->Keepalive = $param["Keepalive"];
        }

        if (array_key_exists("ConnectionStatus",$param) and $param["ConnectionStatus"] !== null) {
            $this->ConnectionStatus = $param["ConnectionStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ConnectTime",$param) and $param["ConnectTime"] !== null) {
            $this->ConnectTime = $param["ConnectTime"];
        }

        if (array_key_exists("DisconnectTime",$param) and $param["DisconnectTime"] !== null) {
            $this->DisconnectTime = $param["DisconnectTime"];
        }

        if (array_key_exists("MQTTClientSubscriptions",$param) and $param["MQTTClientSubscriptions"] !== null) {
            $this->MQTTClientSubscriptions = [];
            foreach ($param["MQTTClientSubscriptions"] as $key => $value){
                $obj = new MQTTClientSubscription();
                $obj->deserialize($value);
                array_push($this->MQTTClientSubscriptions, $obj);
            }
        }
    }
}
