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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Player session details
 *
 * @method string getCreationTime() Obtain Player session creation time
 * @method void setCreationTime(string $CreationTime) Set Player session creation time
 * @method string getDnsName() Obtain ID of the DNS where the game server session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDnsName(string $DnsName) Set ID of the DNS where the game server session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFleetId() Obtain Fleet ID
 * @method void setFleetId(string $FleetId) Set Fleet ID
 * @method string getGameServerSessionId() Obtain Game server session ID
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID
 * @method string getIpAddress() Obtain Address of the CVM instance where the game server session is running
 * @method void setIpAddress(string $IpAddress) Set Address of the CVM instance where the game server session is running
 * @method string getPlayerData() Obtain Player information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlayerData(string $PlayerData) Set Player information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPlayerId() Obtain Player ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlayerId(string $PlayerId) Set Player ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPlayerSessionId() Obtain Player session ID
 * @method void setPlayerSessionId(string $PlayerSessionId) Set Player session ID
 * @method integer getPort() Obtain Port number
 * @method void setPort(integer $Port) Set Port number
 * @method string getStatus() Obtain Player session status
 * @method void setStatus(string $Status) Set Player session status
 * @method string getTerminationTime() Obtain Player session termination time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTerminationTime(string $TerminationTime) Set Player session termination time
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PlayerSession extends AbstractModel
{
    /**
     * @var string Player session creation time
     */
    public $CreationTime;

    /**
     * @var string ID of the DNS where the game server session is running
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DnsName;

    /**
     * @var string Fleet ID
     */
    public $FleetId;

    /**
     * @var string Game server session ID
     */
    public $GameServerSessionId;

    /**
     * @var string Address of the CVM instance where the game server session is running
     */
    public $IpAddress;

    /**
     * @var string Player information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlayerData;

    /**
     * @var string Player ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlayerId;

    /**
     * @var string Player session ID
     */
    public $PlayerSessionId;

    /**
     * @var integer Port number
     */
    public $Port;

    /**
     * @var string Player session status
     */
    public $Status;

    /**
     * @var string Player session termination time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TerminationTime;

    /**
     * @param string $CreationTime Player session creation time
     * @param string $DnsName ID of the DNS where the game server session is running
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FleetId Fleet ID
     * @param string $GameServerSessionId Game server session ID
     * @param string $IpAddress Address of the CVM instance where the game server session is running
     * @param string $PlayerData Player information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PlayerId Player ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PlayerSessionId Player session ID
     * @param integer $Port Port number
     * @param string $Status Player session status
     * @param string $TerminationTime Player session termination time
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("PlayerData",$param) and $param["PlayerData"] !== null) {
            $this->PlayerData = $param["PlayerData"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerSessionId",$param) and $param["PlayerSessionId"] !== null) {
            $this->PlayerSessionId = $param["PlayerSessionId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }
    }
}
