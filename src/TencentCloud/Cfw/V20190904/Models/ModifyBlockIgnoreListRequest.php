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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockIgnoreList request structure.
 *
 * @method integer getRuleType() Obtain Type of the rule. Values: `1` (Blocklist); `2` (Allowlist)
 * @method void setRuleType(integer $RuleType) Set Type of the rule. Values: `1` (Blocklist); `2` (Allowlist)
 * @method array getIOC() Obtain Either IP or Domain is required
 * @method void setIOC(array $IOC) Set Either IP or Domain is required
 * @method string getIocAction() Obtain Optional values: delete, edit, and add
 * @method void setIocAction(string $IocAction) Set Optional values: delete, edit, and add
 * @method string getStartTime() Obtain Time format: yyyy-MM-dd HH:mm:ss. Required when IocAction is edit or add
 * @method void setStartTime(string $StartTime) Set Time format: yyyy-MM-dd HH:mm:ss. Required when IocAction is edit or add
 * @method string getEndTime() Obtain End time of the period in the format of yyyy-MM-dd HH:mm:ss. It must be later than both the start time and the current time. It’s required when `IocAction` is `edit` or `add`. 
 * @method void setEndTime(string $EndTime) Set End time of the period in the format of yyyy-MM-dd HH:mm:ss. It must be later than both the start time and the current time. It’s required when `IocAction` is `edit` or `add`. 
 */
class ModifyBlockIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer Type of the rule. Values: `1` (Blocklist); `2` (Allowlist)
     */
    public $RuleType;

    /**
     * @var array Either IP or Domain is required
     */
    public $IOC;

    /**
     * @var string Optional values: delete, edit, and add
     */
    public $IocAction;

    /**
     * @var string Time format: yyyy-MM-dd HH:mm:ss. Required when IocAction is edit or add
     */
    public $StartTime;

    /**
     * @var string End time of the period in the format of yyyy-MM-dd HH:mm:ss. It must be later than both the start time and the current time. It’s required when `IocAction` is `edit` or `add`. 
     */
    public $EndTime;

    /**
     * @param integer $RuleType Type of the rule. Values: `1` (Blocklist); `2` (Allowlist)
     * @param array $IOC Either IP or Domain is required
     * @param string $IocAction Optional values: delete, edit, and add
     * @param string $StartTime Time format: yyyy-MM-dd HH:mm:ss. Required when IocAction is edit or add
     * @param string $EndTime End time of the period in the format of yyyy-MM-dd HH:mm:ss. It must be later than both the start time and the current time. It’s required when `IocAction` is `edit` or `add`. 
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("IOC",$param) and $param["IOC"] !== null) {
            $this->IOC = [];
            foreach ($param["IOC"] as $key => $value){
                $obj = new IocListData();
                $obj->deserialize($value);
                array_push($this->IOC, $obj);
            }
        }

        if (array_key_exists("IocAction",$param) and $param["IocAction"] !== null) {
            $this->IocAction = $param["IocAction"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
