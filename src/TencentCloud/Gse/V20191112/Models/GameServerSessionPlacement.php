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
 * Game session deployment object
 *
 * @method string getPlacementId() Obtain Deployment ID
 * @method void setPlacementId(string $PlacementId) Set Deployment ID
 * @method string getGameServerSessionQueueName() Obtain Service deployment group name
 * @method void setGameServerSessionQueueName(string $GameServerSessionQueueName) Set Service deployment group name
 * @method array getPlayerLatencies() Obtain Player latency
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlayerLatencies(array $PlayerLatencies) Set Player latency
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Service deployment status
 * @method void setStatus(string $Status) Set Service deployment status
 * @method string getDnsName() Obtain DNS ID assigned to the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDnsName(string $DnsName) Set DNS ID assigned to the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getGameServerSessionId() Obtain Game session ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game session ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getGameServerSessionName() Obtain Game session name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameServerSessionName(string $GameServerSessionName) Set Game session name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getGameServerSessionRegion() Obtain Service deployment region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameServerSessionRegion(string $GameServerSessionRegion) Set Service deployment region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getGameProperties() Obtain Game attributes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameProperties(array $GameProperties) Set Game attributes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaximumPlayerSessionCount() Obtain The maximum number of players that can be connected simultaneously to the game session. It should a value between 1 to the maximum number of player sessions.
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set The maximum number of players that can be connected simultaneously to the game session. It should a value between 1 to the maximum number of player sessions.
 * @method string getGameServerSessionData() Obtain Game session data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameServerSessionData(string $GameServerSessionData) Set Game session data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIpAddress() Obtain IP address of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpAddress(string $IpAddress) Set IP address of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port number of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port number of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMatchmakerData() Obtain Game match data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMatchmakerData(string $MatchmakerData) Set Game match data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPlacedPlayerSessions() Obtain Deployed player game data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlacedPlayerSessions(array $PlacedPlayerSessions) Set Deployed player game data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time
Note: this field may return null, indicating that no valid values can be obtained.
 */
class GameServerSessionPlacement extends AbstractModel
{
    /**
     * @var string Deployment ID
     */
    public $PlacementId;

    /**
     * @var string Service deployment group name
     */
    public $GameServerSessionQueueName;

    /**
     * @var array Player latency
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlayerLatencies;

    /**
     * @var string Service deployment status
     */
    public $Status;

    /**
     * @var string DNS ID assigned to the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DnsName;

    /**
     * @var string Game session ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameServerSessionId;

    /**
     * @var string Game session name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameServerSessionName;

    /**
     * @var string Service deployment region
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameServerSessionRegion;

    /**
     * @var array Game attributes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameProperties;

    /**
     * @var integer The maximum number of players that can be connected simultaneously to the game session. It should a value between 1 to the maximum number of player sessions.
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string Game session data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameServerSessionData;

    /**
     * @var string IP address of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpAddress;

    /**
     * @var integer Port number of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Game match data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MatchmakerData;

    /**
     * @var array Deployed player game data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlacedPlayerSessions;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @param string $PlacementId Deployment ID
     * @param string $GameServerSessionQueueName Service deployment group name
     * @param array $PlayerLatencies Player latency
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Service deployment status
     * @param string $DnsName DNS ID assigned to the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $GameServerSessionId Game session ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $GameServerSessionName Game session name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $GameServerSessionRegion Service deployment region
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $GameProperties Game attributes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaximumPlayerSessionCount The maximum number of players that can be connected simultaneously to the game session. It should a value between 1 to the maximum number of player sessions.
     * @param string $GameServerSessionData Game session data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IpAddress IP address of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Port number of the instance where the game session is running
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MatchmakerData Game match data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PlacedPlayerSessions Deployed player game data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("PlacementId",$param) and $param["PlacementId"] !== null) {
            $this->PlacementId = $param["PlacementId"];
        }

        if (array_key_exists("GameServerSessionQueueName",$param) and $param["GameServerSessionQueueName"] !== null) {
            $this->GameServerSessionQueueName = $param["GameServerSessionQueueName"];
        }

        if (array_key_exists("PlayerLatencies",$param) and $param["PlayerLatencies"] !== null) {
            $this->PlayerLatencies = [];
            foreach ($param["PlayerLatencies"] as $key => $value){
                $obj = new PlayerLatency();
                $obj->deserialize($value);
                array_push($this->PlayerLatencies, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("GameServerSessionName",$param) and $param["GameServerSessionName"] !== null) {
            $this->GameServerSessionName = $param["GameServerSessionName"];
        }

        if (array_key_exists("GameServerSessionRegion",$param) and $param["GameServerSessionRegion"] !== null) {
            $this->GameServerSessionRegion = $param["GameServerSessionRegion"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new GameProperty();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("GameServerSessionData",$param) and $param["GameServerSessionData"] !== null) {
            $this->GameServerSessionData = $param["GameServerSessionData"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MatchmakerData",$param) and $param["MatchmakerData"] !== null) {
            $this->MatchmakerData = $param["MatchmakerData"];
        }

        if (array_key_exists("PlacedPlayerSessions",$param) and $param["PlacedPlayerSessions"] !== null) {
            $this->PlacedPlayerSessions = [];
            foreach ($param["PlacedPlayerSessions"] as $key => $value){
                $obj = new PlacedPlayerSession();
                $obj->deserialize($value);
                array_push($this->PlacedPlayerSessions, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
