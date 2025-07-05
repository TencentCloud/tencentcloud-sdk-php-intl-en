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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateL7CCRule response structure.
 *
 * @method array getRuleConfig() Obtain Custom layer-7 CC protection rule parameters. If custom CC protection rule is not enabled, an empty array will be returned.
 * @method void setRuleConfig(array $RuleConfig) Set Custom layer-7 CC protection rule parameters. If custom CC protection rule is not enabled, an empty array will be returned.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateL7CCRuleResponse extends AbstractModel
{
    /**
     * @var array Custom layer-7 CC protection rule parameters. If custom CC protection rule is not enabled, an empty array will be returned.
     */
    public $RuleConfig;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RuleConfig Custom layer-7 CC protection rule parameters. If custom CC protection rule is not enabled, an empty array will be returned.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("RuleConfig",$param) and $param["RuleConfig"] !== null) {
            $this->RuleConfig = [];
            foreach ($param["RuleConfig"] as $key => $value){
                $obj = new CCRuleConfig();
                $obj->deserialize($value);
                array_push($this->RuleConfig, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
