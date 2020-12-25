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
 * Player custom data
 *
 * @method string getKey() Obtain The key of player custom data. It should contain 1 to 1024 ASCII characters.
 * @method void setKey(string $Key) Set The key of player custom data. It should contain 1 to 1024 ASCII characters.
 * @method string getValue() Obtain The value of player custom data. It should contain 1 to 2048 ASCII characters.
 * @method void setValue(string $Value) Set The value of player custom data. It should contain 1 to 2048 ASCII characters.
 */
class PlayerDataMap extends AbstractModel
{
    /**
     * @var string The key of player custom data. It should contain 1 to 1024 ASCII characters.
     */
    public $Key;

    /**
     * @var string The value of player custom data. It should contain 1 to 2048 ASCII characters.
     */
    public $Value;

    /**
     * @param string $Key The key of player custom data. It should contain 1 to 1024 ASCII characters.
     * @param string $Value The value of player custom data. It should contain 1 to 2048 ASCII characters.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
