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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `DescribeMidDimensionValueList` query conditions
 *
 * @method string getKey() Obtain Dimension
 * @method void setKey(string $Key) Set Dimension
 * @method string getOperator() Obtain Operator. Valid values: eq (equal to), ne (not equal to), in
 * @method void setOperator(string $Operator) Set Operator. Valid values: eq (equal to), ne (not equal to), in
 * @method array getValue() Obtain Dimension value. If `Operator` is `eq` or `ne`, only the first element will be used
 * @method void setValue(array $Value) Set Dimension value. If `Operator` is `eq` or `ne`, only the first element will be used
 */
class MidQueryCondition extends AbstractModel
{
    /**
     * @var string Dimension
     */
    public $Key;

    /**
     * @var string Operator. Valid values: eq (equal to), ne (not equal to), in
     */
    public $Operator;

    /**
     * @var array Dimension value. If `Operator` is `eq` or `ne`, only the first element will be used
     */
    public $Value;

    /**
     * @param string $Key Dimension
     * @param string $Operator Operator. Valid values: eq (equal to), ne (not equal to), in
     * @param array $Value Dimension value. If `Operator` is `eq` or `ne`, only the first element will be used
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
