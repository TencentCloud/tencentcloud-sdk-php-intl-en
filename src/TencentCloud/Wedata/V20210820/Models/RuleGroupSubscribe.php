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
 * Data Quality Rule Group Subscription Information
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getReceivers() Obtain Subscription Recipient List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReceivers(array $Receivers) Set Subscription Recipient List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSubscribeType() Obtain Subscription Method 1. Email  2. SMS
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubscribeType(array $SubscribeType) Set Subscription Method 1. Email  2. SMS
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getWebHooks() Obtain Group Robot Configuration's Webhook Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWebHooks(array $WebHooks) Set Group Robot Configuration's Webhook Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuleName() Obtain Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupSubscribe extends AbstractModel
{
    /**
     * @var integer Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var array Subscription Recipient List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Receivers;

    /**
     * @var array Subscription Method 1. Email  2. SMS
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubscribeType;

    /**
     * @var array Group Robot Configuration's Webhook Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WebHooks;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @var string Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleName;

    /**
     * @param integer $RuleGroupId Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Receivers Subscription Recipient List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $SubscribeType Subscription Method 1. Email  2. SMS
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $WebHooks Group Robot Configuration's Webhook Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuleName Rule nameNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new SubscribeReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("SubscribeType",$param) and $param["SubscribeType"] !== null) {
            $this->SubscribeType = $param["SubscribeType"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = [];
            foreach ($param["WebHooks"] as $key => $value){
                $obj = new SubscribeWebHook();
                $obj->deserialize($value);
                array_push($this->WebHooks, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
