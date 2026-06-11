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
 * Keywords that meet search criteria are generally highlighted. Only key-value search is supported, not full-text search.
 *
 * @method string getKey() Obtain Highlighted log field name.
 * @method void setKey(string $Key) Set Highlighted log field name.
 * @method array getValues() Obtain Highlighted keywords.
 * @method void setValues(array $Values) Set Highlighted keywords.
 */
class HighLightItem extends AbstractModel
{
    /**
     * @var string Highlighted log field name.
     */
    public $Key;

    /**
     * @var array Highlighted keywords.
     */
    public $Values;

    /**
     * @param string $Key Highlighted log field name.
     * @param array $Values Highlighted keywords.
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
