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
 * Managed rule group meta information.
 *
 * @method string getGroupDetail() Obtain ManagedRuleGroup detailed information, output parameter only.
 * @method void setGroupDetail(string $GroupDetail) Set ManagedRuleGroup detailed information, output parameter only.
 * @method string getGroupName() Obtain ManagedRuleGroup name, output parameter only.
 * @method void setGroupName(string $GroupName) Set ManagedRuleGroup name, output parameter only.
 * @method array getRuleDetails() Obtain All sub-rules information under current ManagedRuleGroup, output parameter only.
 * @method void setRuleDetails(array $RuleDetails) Set All sub-rules information under current ManagedRuleGroup, output parameter only.
 */
class ManagedRuleGroupMeta extends AbstractModel
{
    /**
     * @var string ManagedRuleGroup detailed information, output parameter only.
     */
    public $GroupDetail;

    /**
     * @var string ManagedRuleGroup name, output parameter only.
     */
    public $GroupName;

    /**
     * @var array All sub-rules information under current ManagedRuleGroup, output parameter only.
     */
    public $RuleDetails;

    /**
     * @param string $GroupDetail ManagedRuleGroup detailed information, output parameter only.
     * @param string $GroupName ManagedRuleGroup name, output parameter only.
     * @param array $RuleDetails All sub-rules information under current ManagedRuleGroup, output parameter only.
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
