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
 * Enterprise WeChat Robot Rule Summary
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getHookAddr() Obtain Robot Address
 * @method void setHookAddr(string $HookAddr) Set Robot Address
 * @method string getRuleRemark() Obtain Remarks
 * @method void setRuleRemark(string $RuleRemark) Set Remarks
 * @method array getRuleItems() Obtain Event type
 * @method void setRuleItems(array $RuleItems) Set Event type
 * @method array getHostLabels() Obtain Host range
 * @method void setHostLabels(array $HostLabels) Set Host range
 * @method integer getIsDisabled() Obtain Enable/Disable [1-Disable, 0-Enable]
 * @method void setIsDisabled(integer $IsDisabled) Set Enable/Disable [1-Disable, 0-Enable]
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getHostCount() Obtain Number of hosts
 * @method void setHostCount(integer $HostCount) Set Number of hosts
 */
class WebHookRuleSummary extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Robot Address
     */
    public $HookAddr;

    /**
     * @var string Remarks
     */
    public $RuleRemark;

    /**
     * @var array Event type
     */
    public $RuleItems;

    /**
     * @var array Host range
     */
    public $HostLabels;

    /**
     * @var integer Enable/Disable [1-Disable, 0-Enable]
     */
    public $IsDisabled;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Number of hosts
     */
    public $HostCount;

    /**
     * @param integer $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param string $HookAddr Robot Address
     * @param string $RuleRemark Remarks
     * @param array $RuleItems Event type
     * @param array $HostLabels Host range
     * @param integer $IsDisabled Enable/Disable [1-Disable, 0-Enable]
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
     * @param integer $HostCount Number of hosts
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("HookAddr",$param) and $param["HookAddr"] !== null) {
            $this->HookAddr = $param["HookAddr"];
        }

        if (array_key_exists("RuleRemark",$param) and $param["RuleRemark"] !== null) {
            $this->RuleRemark = $param["RuleRemark"];
        }

        if (array_key_exists("RuleItems",$param) and $param["RuleItems"] !== null) {
            $this->RuleItems = [];
            foreach ($param["RuleItems"] as $key => $value){
                $obj = new WebHookEventKv();
                $obj->deserialize($value);
                array_push($this->RuleItems, $obj);
            }
        }

        if (array_key_exists("HostLabels",$param) and $param["HostLabels"] !== null) {
            $this->HostLabels = [];
            foreach ($param["HostLabels"] as $key => $value){
                $obj = new WebHookHostLabel();
                $obj->deserialize($value);
                array_push($this->HostLabels, $obj);
            }
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }
    }
}
