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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query condition
 *
 * @method string getKey() Obtain Key value
 * @method void setKey(string $Key) Set Key value
 * @method array getValues() Obtain Value
 * @method void setValues(array $Values) Set Value
 * @method boolean getLogic() Obtain Logical value
 * @method void setLogic(boolean $Logic) Set Logical value
 */
class Filter extends AbstractModel
{
    /**
     * @var string Key value
     */
    public $Key;

    /**
     * @var array Value
     */
    public $Values;

    /**
     * @var boolean Logical value
     */
    public $Logic;

    /**
     * @param string $Key Key value
     * @param array $Values Value
     * @param boolean $Logic Logical value
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }
    }
}
