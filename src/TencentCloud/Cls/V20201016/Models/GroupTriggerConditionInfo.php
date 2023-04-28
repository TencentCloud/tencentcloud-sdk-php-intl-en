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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Condition of triggering by group
 *
 * @method string getKey() Obtain Name of the field for triggering by group
 * @method void setKey(string $Key) Set Name of the field for triggering by group
 * @method string getValue() Obtain Value of the field for triggering by group
 * @method void setValue(string $Value) Set Value of the field for triggering by group
 */
class GroupTriggerConditionInfo extends AbstractModel
{
    /**
     * @var string Name of the field for triggering by group
     */
    public $Key;

    /**
     * @var string Value of the field for triggering by group
     */
    public $Value;

    /**
     * @param string $Key Name of the field for triggering by group
     * @param string $Value Value of the field for triggering by group
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
