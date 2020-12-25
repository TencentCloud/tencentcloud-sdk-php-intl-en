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
 * UpdateGameServerSession request structure.
 *
 * @method string getGameServerSessionId() Obtain Game server session ID. It should contain 1 to 256 ASCII characters.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID. It should contain 1 to 256 ASCII characters.
 * @method integer getMaximumPlayerSessionCount() Obtain The maximum number of players, which cannot be less than 0.
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set The maximum number of players, which cannot be less than 0.
 * @method string getName() Obtain Name of the game server session. It should contain 1 to 1024 ASCII characters.
 * @method void setName(string $Name) Set Name of the game server session. It should contain 1 to 1024 ASCII characters.
 * @method string getPlayerSessionCreationPolicy() Obtain Player session creation policy, which includes `ACCEPT_ALL` (allow all players) and `DENY_ALL` (reject all players).
 * @method void setPlayerSessionCreationPolicy(string $PlayerSessionCreationPolicy) Set Player session creation policy, which includes `ACCEPT_ALL` (allow all players) and `DENY_ALL` (reject all players).
 * @method string getProtectionPolicy() Obtain Protection policy, which includes `NoProtection`·(no protection), `TimeLimitProtection` (time-limited protection) and `FullProtection` (full protection)
 * @method void setProtectionPolicy(string $ProtectionPolicy) Set Protection policy, which includes `NoProtection`·(no protection), `TimeLimitProtection` (time-limited protection) and `FullProtection` (full protection)
 */
class UpdateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var string Game server session ID. It should contain 1 to 256 ASCII characters.
     */
    public $GameServerSessionId;

    /**
     * @var integer The maximum number of players, which cannot be less than 0.
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string Name of the game server session. It should contain 1 to 1024 ASCII characters.
     */
    public $Name;

    /**
     * @var string Player session creation policy, which includes `ACCEPT_ALL` (allow all players) and `DENY_ALL` (reject all players).
     */
    public $PlayerSessionCreationPolicy;

    /**
     * @var string Protection policy, which includes `NoProtection`·(no protection), `TimeLimitProtection` (time-limited protection) and `FullProtection` (full protection)
     */
    public $ProtectionPolicy;

    /**
     * @param string $GameServerSessionId Game server session ID. It should contain 1 to 256 ASCII characters.
     * @param integer $MaximumPlayerSessionCount The maximum number of players, which cannot be less than 0.
     * @param string $Name Name of the game server session. It should contain 1 to 1024 ASCII characters.
     * @param string $PlayerSessionCreationPolicy Player session creation policy, which includes `ACCEPT_ALL` (allow all players) and `DENY_ALL` (reject all players).
     * @param string $ProtectionPolicy Protection policy, which includes `NoProtection`·(no protection), `TimeLimitProtection` (time-limited protection) and `FullProtection` (full protection)
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
        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PlayerSessionCreationPolicy",$param) and $param["PlayerSessionCreationPolicy"] !== null) {
            $this->PlayerSessionCreationPolicy = $param["PlayerSessionCreationPolicy"];
        }

        if (array_key_exists("ProtectionPolicy",$param) and $param["ProtectionPolicy"] !== null) {
            $this->ProtectionPolicy = $param["ProtectionPolicy"];
        }
    }
}
