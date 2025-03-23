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
 * Length limit detection rule details configuration.
 *
 * @method integer getRuleId() Obtain Rule Id, output parameter only.
 * @method void setRuleId(integer $RuleId) Set Rule Id, output parameter only.
 * @method string getRuleName() Obtain Rule name, output parameter only.
 * @method void setRuleName(string $RuleName) Set Rule name, output parameter only.
 * @method string getDescription() Obtain Rule description, output parameter only.
 * @method void setDescription(string $Description) Set Rule description, output parameter only.
 * @method array getConditions() Obtain Rule configuration conditions, output parameter only.
 * @method void setConditions(array $Conditions) Set Rule configuration conditions, output parameter only.
 * @method string getAction() Obtain Handling method. Values:.
<li>`skip`: when request body data exceeds the detection depth set by `body_depth` in `Conditions` output parameters, skip all request body content detection.</li>.
<li>`scan`: detect at the detection depth set by `body_depth` in the `Conditions` output parameters only. Truncate the excess part of the request body content directly, the excess part of the request body will not go through security detection.</li> Output paramter only.
 * @method void setAction(string $Action) Set Handling method. Values:.
<li>`skip`: when request body data exceeds the detection depth set by `body_depth` in `Conditions` output parameters, skip all request body content detection.</li>.
<li>`scan`: detect at the detection depth set by `body_depth` in the `Conditions` output parameters only. Truncate the excess part of the request body content directly, the excess part of the request body will not go through security detection.</li> Output paramter only.
 */
class DetectLengthLimitRule extends AbstractModel
{
    /**
     * @var integer Rule Id, output parameter only.
     */
    public $RuleId;

    /**
     * @var string Rule name, output parameter only.
     */
    public $RuleName;

    /**
     * @var string Rule description, output parameter only.
     */
    public $Description;

    /**
     * @var array Rule configuration conditions, output parameter only.
     */
    public $Conditions;

    /**
     * @var string Handling method. Values:.
<li>`skip`: when request body data exceeds the detection depth set by `body_depth` in `Conditions` output parameters, skip all request body content detection.</li>.
<li>`scan`: detect at the detection depth set by `body_depth` in the `Conditions` output parameters only. Truncate the excess part of the request body content directly, the excess part of the request body will not go through security detection.</li> Output paramter only.
     */
    public $Action;

    /**
     * @param integer $RuleId Rule Id, output parameter only.
     * @param string $RuleName Rule name, output parameter only.
     * @param string $Description Rule description, output parameter only.
     * @param array $Conditions Rule configuration conditions, output parameter only.
     * @param string $Action Handling method. Values:.
<li>`skip`: when request body data exceeds the detection depth set by `body_depth` in `Conditions` output parameters, skip all request body content detection.</li>.
<li>`scan`: detect at the detection depth set by `body_depth` in the `Conditions` output parameters only. Truncate the excess part of the request body content directly, the excess part of the request body will not go through security detection.</li> Output paramter only.
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
