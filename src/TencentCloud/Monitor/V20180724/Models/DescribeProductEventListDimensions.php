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
 * Input parameter Dimensions of the DescribeProductEventList API
 *
 * @method string getName() Obtain Dimension name.
 * @method void setName(string $Name) Set Dimension name.
 * @method string getValue() Obtain Dimension value.
 * @method void setValue(string $Value) Set Dimension value.
 */
class DescribeProductEventListDimensions extends AbstractModel
{
    /**
     * @var string Dimension name.
     */
    public $Name;

    /**
     * @var string Dimension value.
     */
    public $Value;

    /**
     * @param string $Name Dimension name.
     * @param string $Value Dimension value.
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
