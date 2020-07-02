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
 * Player game session information
 *
 * @method string getPlayerId() Obtain Unique player ID associated with player session
 * @method void setPlayerId(string $PlayerId) Set Unique player ID associated with player session
 * @method string getPlayerData() Obtain Developer-defined player data
 * @method void setPlayerData(string $PlayerData) Set Developer-defined player data
 */
class DesiredPlayerSession extends AbstractModel
{
    /**
     * @var string Unique player ID associated with player session
     */
    public $PlayerId;

    /**
     * @var string Developer-defined player data
     */
    public $PlayerData;

    /**
     * @param string $PlayerId Unique player ID associated with player session
     * @param string $PlayerData Developer-defined player data
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
        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerData",$param) and $param["PlayerData"] !== null) {
            $this->PlayerData = $param["PlayerData"];
        }
    }
}
