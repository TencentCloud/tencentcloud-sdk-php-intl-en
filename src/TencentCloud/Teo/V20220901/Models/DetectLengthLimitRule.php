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
 * Detection length limit rule details
 *
 * @method integer getRuleId() Obtain Rule Id. Output only.
 * @method void setRuleId(integer $RuleId) Set Rule Id. Output only.
 * @method string getRuleName() Obtain Rule name. Output usage only.
 * @method void setRuleName(string $RuleName) Set Rule name. Output usage only.
 * @method string getDescription() Obtain Rule description. For output usage only.
 * @method void setDescription(string $Description) Set Rule description. For output usage only.
 * @method array getConditions() Obtain Rule configuration condition. For output usage only.
 * @method void setConditions(array $Conditions) Set Rule configuration condition. For output usage only.
 * @method string getAction() Obtain Handling method. Valid values:
<li>skip: When the request body data exceeds the detection depth set by body_depth in the Conditions output parameter, skip testing of all request body content;</li>
<li>scan: Only detect the detection depth set by body_depth in the Conditions output. Request body content beyond this depth is directly truncated, and the excess request body will not undergo security detection.</li>Output usage only.
 * @method void setAction(string $Action) Set Handling method. Valid values:
<li>skip: When the request body data exceeds the detection depth set by body_depth in the Conditions output parameter, skip testing of all request body content;</li>
<li>scan: Only detect the detection depth set by body_depth in the Conditions output. Request body content beyond this depth is directly truncated, and the excess request body will not undergo security detection.</li>Output usage only.
 */
class DetectLengthLimitRule extends AbstractModel
{
    /**
     * @var integer Rule Id. Output only.
     */
    public $RuleId;

    /**
     * @var string Rule name. Output usage only.
     */
    public $RuleName;

    /**
     * @var string Rule description. For output usage only.
     */
    public $Description;

    /**
     * @var array Rule configuration condition. For output usage only.
     */
    public $Conditions;

    /**
     * @var string Handling method. Valid values:
<li>skip: When the request body data exceeds the detection depth set by body_depth in the Conditions output parameter, skip testing of all request body content;</li>
<li>scan: Only detect the detection depth set by body_depth in the Conditions output. Request body content beyond this depth is directly truncated, and the excess request body will not undergo security detection.</li>Output usage only.
     */
    public $Action;

    /**
     * @param integer $RuleId Rule Id. Output only.
     * @param string $RuleName Rule name. Output usage only.
     * @param string $Description Rule description. For output usage only.
     * @param array $Conditions Rule configuration condition. For output usage only.
     * @param string $Action Handling method. Valid values:
<li>skip: When the request body data exceeds the detection depth set by body_depth in the Conditions output parameter, skip testing of all request body content;</li>
<li>scan: Only detect the detection depth set by body_depth in the Conditions output. Request body content beyond this depth is directly truncated, and the excess request body will not undergo security detection.</li>Output usage only.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DetectLengthLimitCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
