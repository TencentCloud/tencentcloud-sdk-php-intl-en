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
 * @method string getGameServerSessionId() Obtain Game server session ID
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID
 * @method integer getMaximumPlayerSessionCount() Obtain Maximum number of players
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set Maximum number of players
 * @method string getName() Obtain Game server session name
 * @method void setName(string $Name) Set Game server session name
 * @method string getPlayerSessionCreationPolicy() Obtain Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
 * @method void setPlayerSessionCreationPolicy(string $PlayerSessionCreationPolicy) Set Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
 * @method string getProtectionPolicy() Obtain Protection policy. Valid values: NoProtection, TimeLimitProtection, FullProtection
 * @method void setProtectionPolicy(string $ProtectionPolicy) Set Protection policy. Valid values: NoProtection, TimeLimitProtection, FullProtection
 */
class UpdateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var string Game server session ID
     */
    public $GameServerSessionId;

    /**
     * @var integer Maximum number of players
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string Game server session name
     */
    public $Name;

    /**
     * @var string Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
     */
    public $PlayerSessionCreationPolicy;

    /**
     * @var string Protection policy. Valid values: NoProtection, TimeLimitProtection, FullProtection
     */
    public $ProtectionPolicy;

    /**
     * @param string $GameServerSessionId Game server session ID
     * @param integer $MaximumPlayerSessionCount Maximum number of players
     * @param string $Name Game server session name
     * @param string $PlayerSessionCreationPolicy Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
     * @param string $ProtectionPolicy Protection policy. Valid values: NoProtection, TimeLimitProtection, FullProtection
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
