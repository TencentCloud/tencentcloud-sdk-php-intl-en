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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dimension (tag) object.
 *
 * @method string getKey() Obtain Dimension key (column name, Tag key).
 * @method void setKey(string $Key) Set Dimension key (column name, Tag key).
 * @method string getValue() Obtain Dimension value (tag value).
 * @method void setValue(string $Value) Set Dimension value (tag value).
 */
class ApmTag extends AbstractModel
{
    /**
     * @var string Dimension key (column name, Tag key).
     */
    public $Key;

    /**
     * @var string Dimension value (tag value).
     */
    public $Value;

    /**
     * @param string $Key Dimension key (column name, Tag key).
     * @param string $Value Dimension value (tag value).
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
