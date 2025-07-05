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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specific rule elements within the rule elements returned by DescribeAntiInfoLeakRules
 *
 * @method string getField() Obtain Field
 * @method void setField(string $Field) Set Field
 * @method string getCompareFunc() Obtain Condition
 * @method void setCompareFunc(string $CompareFunc) Set Condition
 * @method string getContent() Obtain Content
 * @method void setContent(string $Content) Set Content
 */
class DescribeAntiInfoLeakRulesStrategyItem extends AbstractModel
{
    /**
     * @var string Field
     */
    public $Field;

    /**
     * @var string Condition
     */
    public $CompareFunc;

    /**
     * @var string Content
     */
    public $Content;

    /**
     * @param string $Field Field
     * @param string $CompareFunc Condition
     * @param string $Content Content
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
