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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU details.
 *
 * @method string getName() Obtain GPU card type. Enumeration values: V100, A100, T4.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set GPU card type. Enumeration values: V100, A100, T4.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getValue() Obtain GPU card quantity, in 1/100 cards. For example, 100 represents 1 card.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(integer $Value) Set GPU card quantity, in 1/100 cards. For example, 100 represents 1 card.Note: This field may return null, indicating that no valid values can be obtained.
 */
class GpuDetail extends AbstractModel
{
    /**
     * @var string GPU card type. Enumeration values: V100, A100, T4.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer GPU card quantity, in 1/100 cards. For example, 100 represents 1 card.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Name GPU card type. Enumeration values: V100, A100, T4.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Value GPU card quantity, in 1/100 cards. For example, 100 represents 1 card.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
