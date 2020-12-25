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
 * @method integer getMaximumPlayerSessionCount() Obtain The maximum number of players, which cannot be less than 0.
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set The maximum number of players, which cannot be less than 0.
 * @method string getAliasId() Obtain Alias ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
 * @method void setAliasId(string $AliasId) Set Alias ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
 * @method string getCreatorId() Obtain Creator ID. Up to 1024 ASCII characters are allowed.
 * @method void setCreatorId(string $CreatorId) Set Creator ID. Up to 1024 ASCII characters are allowed.
 * @method string getFleetId() Obtain Fleet ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
 * @method void setFleetId(string $FleetId) Set Fleet ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
 * @method array getGameProperties() Obtain Game attributes. Up to 16 groups of attributes are allowed.
 * @method void setGameProperties(array $GameProperties) Set Game attributes. Up to 16 groups of attributes are allowed.
 * @method string getGameServerSessionData() Obtain The attribute details of game server session. Up to 4096 ASCII characters are allowed.
 * @method void setGameServerSessionData(string $GameServerSessionData) Set The attribute details of game server session. Up to 4096 ASCII characters are allowed.
 * @method string getGameServerSessionId() Obtain The custom ID of game server session. Up to 4096 ASCII characters are allowed.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set The custom ID of game server session. Up to 4096 ASCII characters are allowed.
 * @method string getIdempotencyToken() Obtain Idempotency token. Up to 48 ASCII characters are allowed.
 * @method void setIdempotencyToken(string $IdempotencyToken) Set Idempotency token. Up to 48 ASCII characters are allowed.
 * @method string getName() Obtain The name of game server session. Up to 1024 ASCII characters are allowed.
 * @method void setName(string $Name) Set The name of game server session. Up to 1024 ASCII characters are allowed.
 */
class CreateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var integer The maximum number of players, which cannot be less than 0.
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string Alias ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
     */
    public $AliasId;

    /**
     * @var string Creator ID. Up to 1024 ASCII characters are allowed.
     */
    public $CreatorId;

    /**
     * @var string Fleet ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
     */
    public $FleetId;

    /**
     * @var array Game attributes. Up to 16 groups of attributes are allowed.
     */
    public $GameProperties;

    /**
     * @var string The attribute details of game server session. Up to 4096 ASCII characters are allowed.
     */
    public $GameServerSessionData;

    /**
     * @var string The custom ID of game server session. Up to 4096 ASCII characters are allowed.
     */
    public $GameServerSessionId;

    /**
     * @var string Idempotency token. Up to 48 ASCII characters are allowed.
     */
    public $IdempotencyToken;

    /**
     * @var string The name of game server session. Up to 1024 ASCII characters are allowed.
     */
    public $Name;

    /**
     * @param integer $MaximumPlayerSessionCount The maximum number of players, which cannot be less than 0.
     * @param string $AliasId Alias ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
     * @param string $CreatorId Creator ID. Up to 1024 ASCII characters are allowed.
     * @param string $FleetId Fleet ID. You need to specify an alias ID or fleet ID for each request. If both of them are specified, the fleet ID shall prevail.
     * @param array $GameProperties Game attributes. Up to 16 groups of attributes are allowed.
     * @param string $GameServerSessionData The attribute details of game server session. Up to 4096 ASCII characters are allowed.
     * @param string $GameServerSessionId The custom ID of game server session. Up to 4096 ASCII characters are allowed.
     * @param string $IdempotencyToken Idempotency token. Up to 48 ASCII characters are allowed.
     * @param string $Name The name of game server session. Up to 1024 ASCII characters are allowed.
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
