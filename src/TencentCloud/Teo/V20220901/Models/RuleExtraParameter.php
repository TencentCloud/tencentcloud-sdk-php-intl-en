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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule engine parameter details. Unique parameter type.
 *
 * @method string getId() Obtain Parameter name. Valid values:
<li> Action: Parameters required to modify HTTP header. Select RewirteAction for RuleAction;</li>
<li> StatusCode: Parameters required for status code related features. Select CodeAction for RuleAction.</li>
 * @method void setId(string $Id) Set Parameter name. Valid values:
<li> Action: Parameters required to modify HTTP header. Select RewirteAction for RuleAction;</li>
<li> StatusCode: Parameters required for status code related features. Select CodeAction for RuleAction.</li>
 * @method string getType() Obtain Parameter value type.
<li> CHOICE: The parameter value can only be selected from Values; </li>
<li> CUSTOM_NUM: The parameter value is user-customized, int type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>
 * @method void setType(string $Type) Set Parameter value type.
<li> CHOICE: The parameter value can only be selected from Values; </li>
<li> CUSTOM_NUM: The parameter value is user-customized, int type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>
 * @method array getChoices() Obtain Optional parameter values.
Note: When the value of Id is StatusCode, the values in the array are integers. Fill in the parameter value as an integer in string format.
 * @method void setChoices(array $Choices) Set Optional parameter values.
Note: When the value of Id is StatusCode, the values in the array are integers. Fill in the parameter value as an integer in string format.
 */
class RuleExtraParameter extends AbstractModel
{
    /**
     * @var string Parameter name. Valid values:
<li> Action: Parameters required to modify HTTP header. Select RewirteAction for RuleAction;</li>
<li> StatusCode: Parameters required for status code related features. Select CodeAction for RuleAction.</li>
     */
    public $Id;

    /**
     * @var string Parameter value type.
<li> CHOICE: The parameter value can only be selected from Values; </li>
<li> CUSTOM_NUM: The parameter value is user-customized, int type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>
     */
    public $Type;

    /**
     * @var array Optional parameter values.
Note: When the value of Id is StatusCode, the values in the array are integers. Fill in the parameter value as an integer in string format.
     */
    public $Choices;

    /**
     * @param string $Id Parameter name. Valid values:
<li> Action: Parameters required to modify HTTP header. Select RewirteAction for RuleAction;</li>
<li> StatusCode: Parameters required for status code related features. Select CodeAction for RuleAction.</li>
     * @param string $Type Parameter value type.
<li> CHOICE: The parameter value can only be selected from Values; </li>
<li> CUSTOM_NUM: The parameter value is user-customized, int type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>
     * @param array $Choices Optional parameter values.
Note: When the value of Id is StatusCode, the values in the array are integers. Fill in the parameter value as an integer in string format.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = $param["Choices"];
        }
    }
}
