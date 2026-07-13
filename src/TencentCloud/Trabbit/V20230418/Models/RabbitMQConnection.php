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
 * RabbitMQ connection detail.
 *
 * @method string getConnectionName() Obtain Connection name.
 * @method void setConnectionName(string $ConnectionName) Set Connection name.
 * @method string getPeerHost() Obtain Client IP
 * @method void setPeerHost(string $PeerHost) Set Client IP
 * @method string getState() Obtain Specifies the connection status, including starting, tuning, opening, running, flow, blocking, blocked, closing, and closed.
 * @method void setState(string $State) Set Specifies the connection status, including starting, tuning, opening, running, flow, blocking, blocked, closing, and closed.
 * @method string getUser() Obtain User that who has created this connection.
 * @method void setUser(string $User) Set User that who has created this connection.
 * @method boolean getSSL() Obtain Whether ssl is enabled.
 * @method void setSSL(boolean $SSL) Set Whether ssl is enabled.
 * @method string getProtocol() Obtain Connection protocol.
 * @method void setProtocol(string $Protocol) Set Connection protocol.
 * @method integer getChannels() Obtain Specifies the number of channels under the connection.
 * @method void setChannels(integer $Channels) Set Specifies the number of channels under the connection.
 * @method float getIncomingBytes() Obtain Inbound traffic volume in bytes
 * @method void setIncomingBytes(float $IncomingBytes) Set Inbound traffic volume in bytes
 * @method float getOutgoingBytes() Obtain Outbound traffic volume in bytes
 * @method void setOutgoingBytes(float $OutgoingBytes) Set Outbound traffic volume in bytes
 * @method integer getHeartbeat() Obtain Heartbeat interval. Default 60s.
 * @method void setHeartbeat(integer $Heartbeat) Set Heartbeat interval. Default 60s.
 * @method integer getMaxChannel() Obtain Maximum number of channels per link. Default 1024.
 * @method void setMaxChannel(integer $MaxChannel) Set Maximum number of channels per link. Default 1024.
 * @method string getIdleSince() Obtain Idle time point
 * @method void setIdleSince(string $IdleSince) Set Idle time point
 */
class RabbitMQConnection extends AbstractModel
{
    /**
     * @var string Connection name.
     */
    public $ConnectionName;

    /**
     * @var string Client IP
     */
    public $PeerHost;

    /**
     * @var string Specifies the connection status, including starting, tuning, opening, running, flow, blocking, blocked, closing, and closed.
     */
    public $State;

    /**
     * @var string User that who has created this connection.
     */
    public $User;

    /**
     * @var boolean Whether ssl is enabled.
     */
    public $SSL;

    /**
     * @var string Connection protocol.
     */
    public $Protocol;

    /**
     * @var integer Specifies the number of channels under the connection.
     */
    public $Channels;

    /**
     * @var float Inbound traffic volume in bytes
     */
    public $IncomingBytes;

    /**
     * @var float Outbound traffic volume in bytes
     */
    public $OutgoingBytes;

    /**
     * @var integer Heartbeat interval. Default 60s.
     */
    public $Heartbeat;

    /**
     * @var integer Maximum number of channels per link. Default 1024.
     */
    public $MaxChannel;

    /**
     * @var string Idle time point
     */
    public $IdleSince;

    /**
     * @param string $ConnectionName Connection name.
     * @param string $PeerHost Client IP
     * @param string $State Specifies the connection status, including starting, tuning, opening, running, flow, blocking, blocked, closing, and closed.
     * @param string $User User that who has created this connection.
     * @param boolean $SSL Whether ssl is enabled.
     * @param string $Protocol Connection protocol.
     * @param integer $Channels Specifies the number of channels under the connection.
     * @param float $IncomingBytes Inbound traffic volume in bytes
     * @param float $OutgoingBytes Outbound traffic volume in bytes
     * @param integer $Heartbeat Heartbeat interval. Default 60s.
     * @param integer $MaxChannel Maximum number of channels per link. Default 1024.
     * @param string $IdleSince Idle time point
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
        if (array_key_exists("ConnectionName",$param) and $param["ConnectionName"] !== null) {
            $this->ConnectionName = $param["ConnectionName"];
        }

        if (array_key_exists("PeerHost",$param) and $param["PeerHost"] !== null) {
            $this->PeerHost = $param["PeerHost"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("SSL",$param) and $param["SSL"] !== null) {
            $this->SSL = $param["SSL"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }

        if (array_key_exists("IncomingBytes",$param) and $param["IncomingBytes"] !== null) {
            $this->IncomingBytes = $param["IncomingBytes"];
        }

        if (array_key_exists("OutgoingBytes",$param) and $param["OutgoingBytes"] !== null) {
            $this->OutgoingBytes = $param["OutgoingBytes"];
        }

        if (array_key_exists("Heartbeat",$param) and $param["Heartbeat"] !== null) {
            $this->Heartbeat = $param["Heartbeat"];
        }

        if (array_key_exists("MaxChannel",$param) and $param["MaxChannel"] !== null) {
            $this->MaxChannel = $param["MaxChannel"];
        }

        if (array_key_exists("IdleSince",$param) and $param["IdleSince"] !== null) {
            $this->IdleSince = $param["IdleSince"];
        }
    }
}
