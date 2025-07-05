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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityRules response structure.
 *
 * @method integer getTotalCount() Obtain The number of returned security rules.
 * @method void setTotalCount(integer $TotalCount) Set The number of returned security rules.
 * @method array getSecurityRuleSet() Obtain List of returned security rules.
 * @method void setSecurityRuleSet(array $SecurityRuleSet) Set List of returned security rules.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecurityRulesResponse extends AbstractModel
{
    /**
     * @var integer The number of returned security rules.
     */
    public $TotalCount;

    /**
     * @var array List of returned security rules.
     */
    public $SecurityRuleSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of returned security rules.
     * @param array $SecurityRuleSet List of returned security rules.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SecurityRuleSet",$param) and $param["SecurityRuleSet"] !== null) {
            $this->SecurityRuleSet = [];
            foreach ($param["SecurityRuleSet"] as $key => $value){
                $obj = new SecurityPolicyRuleOut();
                $obj->deserialize($value);
                array_push($this->SecurityRuleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
