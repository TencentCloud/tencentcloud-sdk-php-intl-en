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
 * CreateGameServerSession request structure.
 *
 * @method integer getMaximumPlayerSessionCount() Obtain Maximum number of players
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set Maximum number of players
 * @method string getAliasId() Obtain Alias ID
 * @method void setAliasId(string $AliasId) Set Alias ID
 * @method string getCreatorId() Obtain Creator ID
 * @method void setCreatorId(string $CreatorId) Set Creator ID
 * @method string getFleetId() Obtain Fleet ID
 * @method void setFleetId(string $FleetId) Set Fleet ID
 * @method array getGameProperties() Obtain Game attributes
 * @method void setGameProperties(array $GameProperties) Set Game attributes
 * @method string getGameServerSessionData() Obtain Game server session attribute details
 * @method void setGameServerSessionData(string $GameServerSessionData) Set Game server session attribute details
 * @method string getGameServerSessionId() Obtain Custom ID of game server session
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Custom ID of game server session
 * @method string getIdempotencyToken() Obtain Idempotency token
 * @method void setIdempotencyToken(string $IdempotencyToken) Set Idempotency token
 * @method string getName() Obtain Game server session name
 * @method void setName(string $Name) Set Game server session name
 */
class CreateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var integer Maximum number of players
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string Alias ID
     */
    public $AliasId;

    /**
     * @var string Creator ID
     */
    public $CreatorId;

    /**
     * @var string Fleet ID
     */
    public $FleetId;

    /**
     * @var array Game attributes
     */
    public $GameProperties;

    /**
     * @var string Game server session attribute details
     */
    public $GameServerSessionData;

    /**
     * @var string Custom ID of game server session
     */
    public $GameServerSessionId;

    /**
     * @var string Idempotency token
     */
    public $IdempotencyToken;

    /**
     * @var string Game server session name
     */
    public $Name;

    /**
     * @param integer $MaximumPlayerSessionCount Maximum number of players
     * @param string $AliasId Alias ID
     * @param string $CreatorId Creator ID
     * @param string $FleetId Fleet ID
     * @param array $GameProperties Game attributes
     * @param string $GameServerSessionData Game server session attribute details
     * @param string $GameServerSessionId Custom ID of game server session
     * @param string $IdempotencyToken Idempotency token
     * @param string $Name Game server session name
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
        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("AliasId",$param) and $param["AliasId"] !== null) {
            $this->AliasId = $param["AliasId"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
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

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IdempotencyToken",$param) and $param["IdempotencyToken"] !== null) {
            $this->IdempotencyToken = $param["IdempotencyToken"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
