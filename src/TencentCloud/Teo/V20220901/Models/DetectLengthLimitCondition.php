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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Length limit detection condition configuration.
 *
 * @method string getName() Obtain Parameter name of the matched condition. Values:.
<li>`body_depth`: detection depth of the request body packet part.</li>
 * @method void setName(string $Name) Set Parameter name of the matched condition. Values:.
<li>`body_depth`: detection depth of the request body packet part.</li>
 * @method array getValues() Obtain Parameter value of the matched condition, used in pairs with the `Name` parameter.
When the `Name` value is body_depth, `Values` only support passing in a single value. Values:
<li>`8KB`;</li>
<li>`64KB`;</li>
<li>`128KB`.</li>
 * @method void setValues(array $Values) Set Parameter value of the matched condition, used in pairs with the `Name` parameter.
When the `Name` value is body_depth, `Values` only support passing in a single value. Values:
<li>`8KB`;</li>
<li>`64KB`;</li>
<li>`128KB`.</li>
 */
class DetectLengthLimitCondition extends AbstractModel
{
    /**
     * @var string Parameter name of the matched condition. Values:.
<li>`body_depth`: detection depth of the request body packet part.</li>
     */
    public $Name;

    /**
     * @var array Parameter value of the matched condition, used in pairs with the `Name` parameter.
When the `Name` value is body_depth, `Values` only support passing in a single value. Values:
<li>`8KB`;</li>
<li>`64KB`;</li>
<li>`128KB`.</li>
     */
    public $Values;

    /**
     * @param string $Name Parameter name of the matched condition. Values:.
<li>`body_depth`: detection depth of the request body packet part.</li>
     * @param array $Values Parameter value of the matched condition, used in pairs with the `Name` parameter.
When the `Name` value is body_depth, `Values` only support passing in a single value. Values:
<li>`8KB`;</li>
<li>`64KB`;</li>
<li>`128KB`.</li>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
