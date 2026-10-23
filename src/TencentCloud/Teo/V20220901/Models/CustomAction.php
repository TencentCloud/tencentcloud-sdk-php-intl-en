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
 * Custom configuration
 *
 * @method string getActionId() Obtain <p>ID of the custom configuration item.</p><p>You can obtain it through the returned value CustomActionSet[].ActionId of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method void setActionId(string $ActionId) Set <p>ID of the custom configuration item.</p><p>You can obtain it through the returned value CustomActionSet[].ActionId of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method array getParameters() Obtain <p>Parameter values of each parameter field under this custom configuration.</p><p>You can obtain them through the API return value CustomActionSet[].Parameters of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setParameters(array $Parameters) Set <p>Parameter values of each parameter field under this custom configuration.</p><p>You can obtain them through the API return value CustomActionSet[].Parameters of DescribeAvailableCustomActionsForRuleEngine.</p>
 */
class CustomAction extends AbstractModel
{
    /**
     * @var string <p>ID of the custom configuration item.</p><p>You can obtain it through the returned value CustomActionSet[].ActionId of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     */
    public $ActionId;

    /**
     * @var array <p>Parameter values of each parameter field under this custom configuration.</p><p>You can obtain them through the API return value CustomActionSet[].Parameters of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $Parameters;

    /**
     * @param string $ActionId <p>ID of the custom configuration item.</p><p>You can obtain it through the returned value CustomActionSet[].ActionId of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     * @param array $Parameters <p>Parameter values of each parameter field under this custom configuration.</p><p>You can obtain them through the API return value CustomActionSet[].Parameters of DescribeAvailableCustomActionsForRuleEngine.</p>
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new CustomActionParameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
