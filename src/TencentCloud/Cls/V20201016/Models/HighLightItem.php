<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Highlighted Log Description Information
 *
 * @method string getKey() Obtain Highlighted Log Key
 * @method void setKey(string $Key) Set Highlighted Log Key
 * @method array getValues() Obtain Highlighted Syntax
 * @method void setValues(array $Values) Set Highlighted Syntax
 */
class HighLightItem extends AbstractModel
{
    /**
     * @var string Highlighted Log Key
     */
    public $Key;

    /**
     * @var array Highlighted Syntax
     */
    public $Values;

    /**
     * @param string $Key Highlighted Log Key
     * @param array $Values Highlighted Syntax
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
    }
}
