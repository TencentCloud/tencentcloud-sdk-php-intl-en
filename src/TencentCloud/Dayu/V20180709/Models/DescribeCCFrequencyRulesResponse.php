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
 * DescribeCCFrequencyRules response structure.
 *
 * @method array getCCFrequencyRuleList() Obtain Access frequency control rule list
 * @method void setCCFrequencyRuleList(array $CCFrequencyRuleList) Set Access frequency control rule list
 * @method string getCCFrequencyRuleStatus() Obtain Access frequency control rule status. Valid values: [on, off];
 * @method void setCCFrequencyRuleStatus(string $CCFrequencyRuleStatus) Set Access frequency control rule status. Valid values: [on, off];
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCCFrequencyRulesResponse extends AbstractModel
{
    /**
     * @var array Access frequency control rule list
     */
    public $CCFrequencyRuleList;

    /**
     * @var string Access frequency control rule status. Valid values: [on, off];
     */
    public $CCFrequencyRuleStatus;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CCFrequencyRuleList Access frequency control rule list
     * @param string $CCFrequencyRuleStatus Access frequency control rule status. Valid values: [on, off];
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
        if (array_key_exists("CCFrequencyRuleList",$param) and $param["CCFrequencyRuleList"] !== null) {
            $this->CCFrequencyRuleList = [];
            foreach ($param["CCFrequencyRuleList"] as $key => $value){
                $obj = new CCFrequencyRule();
                $obj->deserialize($value);
                array_push($this->CCFrequencyRuleList, $obj);
            }
        }

        if (array_key_exists("CCFrequencyRuleStatus",$param) and $param["CCFrequencyRuleStatus"] !== null) {
            $this->CCFrequencyRuleStatus = $param["CCFrequencyRuleStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
