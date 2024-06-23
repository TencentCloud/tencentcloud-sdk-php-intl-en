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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table Binding Rule Group Information
 *
 * @method RuleGroupTableInnerInfo getTableInfo() Obtain Table Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableInfo(RuleGroupTableInnerInfo $TableInfo) Set Table Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getRuleGroups() Obtain Rule Group Scheduling Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroups(array $RuleGroups) Set Rule Group Scheduling Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSubscriptions() Obtain Subscriber Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubscriptions(array $Subscriptions) Set Subscriber Information
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupTable extends AbstractModel
{
    /**
     * @var RuleGroupTableInnerInfo Table Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableInfo;

    /**
     * @var array Rule Group Scheduling Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroups;

    /**
     * @var array Subscriber Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Subscriptions;

    /**
     * @param RuleGroupTableInnerInfo $TableInfo Table Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $RuleGroups Rule Group Scheduling Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Subscriptions Subscriber Information
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TableInfo",$param) and $param["TableInfo"] !== null) {
            $this->TableInfo = new RuleGroupTableInnerInfo();
            $this->TableInfo->deserialize($param["TableInfo"]);
        }

        if (array_key_exists("RuleGroups",$param) and $param["RuleGroups"] !== null) {
            $this->RuleGroups = [];
            foreach ($param["RuleGroups"] as $key => $value){
                $obj = new RuleGroupSchedulerInfo();
                $obj->deserialize($value);
                array_push($this->RuleGroups, $obj);
            }
        }

        if (array_key_exists("Subscriptions",$param) and $param["Subscriptions"] !== null) {
            $this->Subscriptions = [];
            foreach ($param["Subscriptions"] as $key => $value){
                $obj = new RuleGroupSubscribe();
                $obj->deserialize($value);
                array_push($this->Subscriptions, $obj);
            }
        }
    }
}
