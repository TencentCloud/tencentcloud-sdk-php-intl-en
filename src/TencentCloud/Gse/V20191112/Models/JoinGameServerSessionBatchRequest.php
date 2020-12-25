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
 * JoinGameServerSessionBatch request structure.
 *
 * @method string getGameServerSessionId() Obtain Game server session ID. It should contain 1 to 256 ASCII characters.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID. It should contain 1 to 256 ASCII characters.
 * @method array getPlayerIds() Obtain Player ID list. At least 1 ID and up to 25 IDs.
 * @method void setPlayerIds(array $PlayerIds) Set Player ID list. At least 1 ID and up to 25 IDs.
 * @method PlayerDataMap getPlayerDataMap() Obtain Player custom data
 * @method void setPlayerDataMap(PlayerDataMap $PlayerDataMap) Set Player custom data
 */
class JoinGameServerSessionBatchRequest extends AbstractModel
{
    /**
     * @var string Game server session ID. It should contain 1 to 256 ASCII characters.
     */
    public $GameServerSessionId;

    /**
     * @var array Player ID list. At least 1 ID and up to 25 IDs.
     */
    public $PlayerIds;

    /**
     * @var PlayerDataMap Player custom data
     */
    public $PlayerDataMap;

    /**
     * @param string $GameServerSessionId Game server session ID. It should contain 1 to 256 ASCII characters.
     * @param array $PlayerIds Player ID list. At least 1 ID and up to 25 IDs.
     * @param PlayerDataMap $PlayerDataMap Player custom data
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

        if (array_key_exists("PlayerIds",$param) and $param["PlayerIds"] !== null) {
            $this->PlayerIds = $param["PlayerIds"];
        }

        if (array_key_exists("PlayerDataMap",$param) and $param["PlayerDataMap"] !== null) {
            $this->PlayerDataMap = new PlayerDataMap();
            $this->PlayerDataMap->deserialize($param["PlayerDataMap"]);
        }
    }
}
