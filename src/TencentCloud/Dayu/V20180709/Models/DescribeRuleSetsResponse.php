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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleSets response structure.
 *
 * @method array getL4RuleSets() Obtain Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
 * @method void setL4RuleSets(array $L4RuleSets) Set Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
 * @method array getL7RuleSets() Obtain Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
 * @method void setL7RuleSets(array $L7RuleSets) Set Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRuleSetsResponse extends AbstractModel
{
    /**
     * @var array Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
     */
    public $L4RuleSets;

    /**
     * @var array Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
     */
    public $L7RuleSets;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $L4RuleSets Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
     * @param array $L7RuleSets Rule record array. Valid values:
If `Key` is "Id", `Value` indicates the resource ID
If `Key` is "RuleIdList", `Value` indicates the resource rule ID. Multiple rule IDs are separated by ","
If `Key` is "RuleNameList", `Value` indicates the resource rule name. Multiple rule names are separated by ","
If `Key` is "RuleNum", `Value` indicates the number of resource rules
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
        if (array_key_exists("L4RuleSets",$param) and $param["L4RuleSets"] !== null) {
            $this->L4RuleSets = [];
            foreach ($param["L4RuleSets"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->L4RuleSets, $obj);
            }
        }

        if (array_key_exists("L7RuleSets",$param) and $param["L7RuleSets"] !== null) {
            $this->L7RuleSets = [];
            foreach ($param["L7RuleSets"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->L7RuleSets, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
