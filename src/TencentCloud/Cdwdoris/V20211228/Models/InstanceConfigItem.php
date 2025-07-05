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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV configuration
 *
 * @method string getConfKey() Obtain key
 * @method void setConfKey(string $ConfKey) Set key
 * @method string getConfValue() Obtain value
 * @method void setConfValue(string $ConfValue) Set value
 */
class InstanceConfigItem extends AbstractModel
{
    /**
     * @var string key
     */
    public $ConfKey;

    /**
     * @var string value
     */
    public $ConfValue;

    /**
     * @param string $ConfKey key
     * @param string $ConfValue value
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
        if (array_key_exists("ConfKey",$param) and $param["ConfKey"] !== null) {
            $this->ConfKey = $param["ConfKey"];
        }

        if (array_key_exists("ConfValue",$param) and $param["ConfValue"] !== null) {
            $this->ConfValue = $param["ConfValue"];
        }
    }
}
