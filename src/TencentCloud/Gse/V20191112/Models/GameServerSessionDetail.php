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
 * Game server session details (GameServerSessionDetail)
 *
 * @method GameServerSession getGameServerSession() Obtain Game server session
 * @method void setGameServerSession(GameServerSession $GameServerSession) Set Game server session
 * @method string getProtectionPolicy() Obtain Protection policy. Valid values: NoProtection, FullProtection
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtectionPolicy(string $ProtectionPolicy) Set Protection policy. Valid values: NoProtection, FullProtection
Note: this field may return null, indicating that no valid values can be obtained.
 */
class GameServerSessionDetail extends AbstractModel
{
    /**
     * @var GameServerSession Game server session
     */
    public $GameServerSession;

    /**
     * @var string Protection policy. Valid values: NoProtection, FullProtection
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProtectionPolicy;

    /**
     * @param GameServerSession $GameServerSession Game server session
     * @param string $ProtectionPolicy Protection policy. Valid values: NoProtection, FullProtection
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
        if (array_key_exists("GameServerSession",$param) and $param["GameServerSession"] !== null) {
            $this->GameServerSession = new GameServerSession();
            $this->GameServerSession->deserialize($param["GameServerSession"]);
        }

        if (array_key_exists("ProtectionPolicy",$param) and $param["ProtectionPolicy"] !== null) {
            $this->ProtectionPolicy = $param["ProtectionPolicy"];
        }
    }
}
