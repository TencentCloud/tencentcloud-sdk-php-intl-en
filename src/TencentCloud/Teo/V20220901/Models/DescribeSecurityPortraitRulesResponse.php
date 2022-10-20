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
 * DescribeSecurityPortraitRules response structure.
 *
 * @method integer getCount() Obtain The number of rules returned.
 * @method void setCount(integer $Count) Set The number of rules returned.
 * @method array getPortraitManagedRuleDetails() Obtain The bot client reputation rule.
 * @method void setPortraitManagedRuleDetails(array $PortraitManagedRuleDetails) Set The bot client reputation rule.
 * @method integer getTotal() Obtain The total number of rules.
 * @method void setTotal(integer $Total) Set The total number of rules.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecurityPortraitRulesResponse extends AbstractModel
{
    /**
     * @var integer The number of rules returned.
     */
    public $Count;

    /**
     * @var array The bot client reputation rule.
     */
    public $PortraitManagedRuleDetails;

    /**
     * @var integer The total number of rules.
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Count The number of rules returned.
     * @param array $PortraitManagedRuleDetails The bot client reputation rule.
     * @param integer $Total The total number of rules.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("PortraitManagedRuleDetails",$param) and $param["PortraitManagedRuleDetails"] !== null) {
            $this->PortraitManagedRuleDetails = [];
            foreach ($param["PortraitManagedRuleDetails"] as $key => $value){
                $obj = new PortraitManagedRuleDetail();
                $obj->deserialize($value);
                array_push($this->PortraitManagedRuleDetails, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
