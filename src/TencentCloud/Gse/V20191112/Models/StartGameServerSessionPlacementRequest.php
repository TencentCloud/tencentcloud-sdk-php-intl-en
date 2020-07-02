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
 * StartGameServerSessionPlacement request structure.
 *
 * @method string getPlacementId() Obtain Unique ID of starting game server session placement
 * @method void setPlacementId(string $PlacementId) Set Unique ID of starting game server session placement
 * @method string getGameServerSessionQueueName() Obtain Game server session queue name
 * @method void setGameServerSessionQueueName(string $GameServerSessionQueueName) Set Game server session queue name
 * @method integer getMaximumPlayerSessionCount() Obtain Maximum number of concurrent players allowed by the game server to connect to the game session
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set Maximum number of concurrent players allowed by the game server to connect to the game session
 * @method array getDesiredPlayerSessions() Obtain Player game session information
 * @method void setDesiredPlayerSessions(array $DesiredPlayerSessions) Set Player game session information
 * @method array getGameProperties() Obtain Player game session attributes
 * @method void setGameProperties(array $GameProperties) Set Player game session attributes
 * @method string getGameServerSessionData() Obtain Game server session data
 * @method void setGameServerSessionData(string $GameServerSessionData) Set Game server session data
 * @method string getGameServerSessionName() Obtain Game server session name
 * @method void setGameServerSessionName(string $GameServerSessionName) Set Game server session name
 * @method array getPlayerLatencies() Obtain Player latency
 * @method void setPlayerLatencies(array $PlayerLatencies) Set Player latency
 */
class StartGameServerSessionPlacementRequest extends AbstractModel
{
    /**
     * @var string Unique ID of starting game server session placement
     */
    public $PlacementId;

    /**
     * @var string Game server session queue name
     */
    public $GameServerSessionQueueName;

    /**
     * @var integer Maximum number of concurrent players allowed by the game server to connect to the game session
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var array Player game session information
     */
    public $DesiredPlayerSessions;

    /**
     * @var array Player game session attributes
     */
    public $GameProperties;

    /**
     * @var string Game server session data
     */
    public $GameServerSessionData;

    /**
     * @var string Game server session name
     */
    public $GameServerSessionName;

    /**
     * @var array Player latency
     */
    public $PlayerLatencies;

    /**
     * @param string $PlacementId Unique ID of starting game server session placement
     * @param string $GameServerSessionQueueName Game server session queue name
     * @param integer $MaximumPlayerSessionCount Maximum number of concurrent players allowed by the game server to connect to the game session
     * @param array $DesiredPlayerSessions Player game session information
     * @param array $GameProperties Player game session attributes
     * @param string $GameServerSessionData Game server session data
     * @param string $GameServerSessionName Game server session name
     * @param array $PlayerLatencies Player latency
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

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("DesiredPlayerSessions",$param) and $param["DesiredPlayerSessions"] !== null) {
            $this->DesiredPlayerSessions = [];
            foreach ($param["DesiredPlayerSessions"] as $key => $value){
                $obj = new DesiredPlayerSession();
                $obj->deserialize($value);
                array_push($this->DesiredPlayerSessions, $obj);
            }
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new GameProperty();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("GameServerSessionData",$param) and $param["GameServerSessionData"] !== null) {
            $this->GameServerSessionData = $param["GameServerSessionData"];
        }

        if (array_key_exists("GameServerSessionName",$param) and $param["GameServerSessionName"] !== null) {
            $this->GameServerSessionName = $param["GameServerSessionName"];
        }

        if (array_key_exists("PlayerLatencies",$param) and $param["PlayerLatencies"] !== null) {
            $this->PlayerLatencies = [];
            foreach ($param["PlayerLatencies"] as $key => $value){
                $obj = new PlayerLatency();
                $obj->deserialize($value);
                array_push($this->PlayerLatencies, $obj);
            }
        }
    }
}
