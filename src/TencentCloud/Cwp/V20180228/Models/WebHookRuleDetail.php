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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enterprise WeChat Robot Rule Details
 *
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getHookAddr() Obtain Chatbot address
 * @method void setHookAddr(string $HookAddr) Set Chatbot address
 * @method array getRuleItems() Obtain Event type
 * @method void setRuleItems(array $RuleItems) Set Event type
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleRemark() Obtain Remarks
 * @method void setRuleRemark(string $RuleRemark) Set Remarks
 * @method array getHostLabels() Obtain Host scope
 * @method void setHostLabels(array $HostLabels) Set Host scope
 * @method array getHostIds() Obtain Host ID List
 * @method void setHostIds(array $HostIds) Set Host ID List
 * @method integer getIsDisabled() Obtain Whether it is disabled [1: disabled|0: enabled]
 * @method void setIsDisabled(integer $IsDisabled) Set Whether it is disabled [1: disabled|0: enabled]
 */
class WebHookRuleDetail extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Chatbot address
     */
    public $HookAddr;

    /**
     * @var array Event type
     */
    public $RuleItems;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Remarks
     */
    public $RuleRemark;

    /**
     * @var array Host scope
     */
    public $HostLabels;

    /**
     * @var array Host ID List
     */
    public $HostIds;

    /**
     * @var integer Whether it is disabled [1: disabled|0: enabled]
     */
    public $IsDisabled;

    /**
     * @param string $RuleName Rule name
     * @param string $HookAddr Chatbot address
     * @param array $RuleItems Event type
     * @param integer $RuleId Rule ID
     * @param string $RuleRemark Remarks
     * @param array $HostLabels Host scope
     * @param array $HostIds Host ID List
     * @param integer $IsDisabled Whether it is disabled [1: disabled|0: enabled]
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("HookAddr",$param) and $param["HookAddr"] !== null) {
            $this->HookAddr = $param["HookAddr"];
        }

        if (array_key_exists("RuleItems",$param) and $param["RuleItems"] !== null) {
            $this->RuleItems = [];
            foreach ($param["RuleItems"] as $key => $value){
                $obj = new WebHookEventKv();
                $obj->deserialize($value);
                array_push($this->RuleItems, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleRemark",$param) and $param["RuleRemark"] !== null) {
            $this->RuleRemark = $param["RuleRemark"];
        }

        if (array_key_exists("HostLabels",$param) and $param["HostLabels"] !== null) {
            $this->HostLabels = [];
            foreach ($param["HostLabels"] as $key => $value){
                $obj = new WebHookHostLabel();
                $obj->deserialize($value);
                array_push($this->HostLabels, $obj);
            }
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
