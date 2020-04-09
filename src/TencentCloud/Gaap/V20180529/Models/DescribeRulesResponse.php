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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules response structure.
 *
 * @method array getDomainRuleSet() Obtain Rule information list classified by domain name type
 * @method void setDomainRuleSet(array $DomainRuleSet) Set Rule information list classified by domain name type
 * @method integer getTotalCount() Obtain Total quantity of domain names under this listener
 * @method void setTotalCount(integer $TotalCount) Set Total quantity of domain names under this listener
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRulesResponse extends AbstractModel
{
    /**
     * @var array Rule information list classified by domain name type
     */
    public $DomainRuleSet;

    /**
     * @var integer Total quantity of domain names under this listener
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DomainRuleSet Rule information list classified by domain name type
     * @param integer $TotalCount Total quantity of domain names under this listener
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
        if (array_key_exists("DomainRuleSet",$param) and $param["DomainRuleSet"] !== null) {
            $this->DomainRuleSet = [];
            foreach ($param["DomainRuleSet"] as $key => $value){
                $obj = new DomainRuleSet();
                $obj->deserialize($value);
                array_push($this->DomainRuleSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
