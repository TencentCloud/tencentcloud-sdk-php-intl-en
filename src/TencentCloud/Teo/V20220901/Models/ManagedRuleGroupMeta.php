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
 * Managed rule group information
 *
 * @method string getGroupDetail() Obtain Managed rule group description. For output usage only.
 * @method void setGroupDetail(string $GroupDetail) Set Managed rule group description. For output usage only.
 * @method string getGroupName() Obtain Managed rule group name. Output parameter only.
 * @method void setGroupName(string $GroupName) Set Managed rule group name. Output parameter only.
 * @method array getRuleDetails() Obtain Rule information of all sub-rules in the current managed rule group. Output parameter only.
 * @method void setRuleDetails(array $RuleDetails) Set Rule information of all sub-rules in the current managed rule group. Output parameter only.
 */
class ManagedRuleGroupMeta extends AbstractModel
{
    /**
     * @var string Managed rule group description. For output usage only.
     */
    public $GroupDetail;

    /**
     * @var string Managed rule group name. Output parameter only.
     */
    public $GroupName;

    /**
     * @var array Rule information of all sub-rules in the current managed rule group. Output parameter only.
     */
    public $RuleDetails;

    /**
     * @param string $GroupDetail Managed rule group description. For output usage only.
     * @param string $GroupName Managed rule group name. Output parameter only.
     * @param array $RuleDetails Rule information of all sub-rules in the current managed rule group. Output parameter only.
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
        if (array_key_exists("GroupDetail",$param) and $param["GroupDetail"] !== null) {
            $this->GroupDetail = $param["GroupDetail"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RuleDetails",$param) and $param["RuleDetails"] !== null) {
            $this->RuleDetails = [];
            foreach ($param["RuleDetails"] as $key => $value){
                $obj = new ManagedRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleDetails, $obj);
            }
        }
    }
}
