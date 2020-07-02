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
 * Deployed player game session
 *
 * @method string getPlayerId() Obtain Player ID
 * @method void setPlayerId(string $PlayerId) Set Player ID
 * @method string getPlayerSessionId() Obtain Player session ID
 * @method void setPlayerSessionId(string $PlayerSessionId) Set Player session ID
 */
class PlacedPlayerSession extends AbstractModel
{
    /**
     * @var string Player ID
     */
    public $PlayerId;

    /**
     * @var string Player session ID
     */
    public $PlayerSessionId;

    /**
     * @param string $PlayerId Player ID
     * @param string $PlayerSessionId Player session ID
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

        if (array_key_exists("PlayerSessionId",$param) and $param["PlayerSessionId"] !== null) {
            $this->PlayerSessionId = $param["PlayerSessionId"];
        }
    }
}
