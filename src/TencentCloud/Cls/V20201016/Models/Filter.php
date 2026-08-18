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
 * Filters
 *
 * @method string getKey() Obtain Fields that need to be filtered.
 * @method void setKey(string $Key) Set Fields that need to be filtered.
 * @method array getValues() Obtain Values to be filtered
 * @method void setValues(array $Values) Set Values to be filtered
 */
class Filter extends AbstractModel
{
    /**
     * @var string Fields that need to be filtered.
     */
    public $Key;

    /**
     * @var array Values to be filtered
     */
    public $Values;

    /**
     * @param string $Key Fields that need to be filtered.
     * @param array $Values Values to be filtered
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
