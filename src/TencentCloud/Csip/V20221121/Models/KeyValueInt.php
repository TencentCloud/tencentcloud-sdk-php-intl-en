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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-value pair (integer).
 *
 * @method integer getKey() Obtain <p>Key</p>
 * @method void setKey(integer $Key) Set <p>Key</p>
 * @method integer getValue() Obtain <p>Value.</p>
 * @method void setValue(integer $Value) Set <p>Value.</p>
 */
class KeyValueInt extends AbstractModel
{
    /**
     * @var integer <p>Key</p>
     */
    public $Key;

    /**
     * @var integer <p>Value.</p>
     */
    public $Value;

    /**
     * @param integer $Key <p>Key</p>
     * @param integer $Value <p>Value.</p>
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
