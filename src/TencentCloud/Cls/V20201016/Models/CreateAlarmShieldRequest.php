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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlarmShield request structure.
 *
 * @method string getAlarmNoticeId() Obtain Notification Channel Group ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification Channel Group ID
 * @method integer getStartTime() Obtain Block start time (second-level timestamp).
 * @method void setStartTime(integer $StartTime) Set Block start time (second-level timestamp).
 * @method integer getEndTime() Obtain Block end time (second-level timestamp).
 * @method void setEndTime(integer $EndTime) Set Block end time (second-level timestamp).
 * @method integer getType() Obtain Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
 * @method void setType(integer $Type) Set Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
 * @method string getReason() Obtain Blocking reason.
 * @method void setReason(string $Reason) Set Blocking reason.
 * @method string getRule() Obtain Blocking rules, required when Type is 2. For detailed information on filling in rules, see [Product Documentation](https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule).
 * @method void setRule(string $Rule) Set Blocking rules, required when Type is 2. For detailed information on filling in rules, see [Product Documentation](https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule).
 */
class CreateAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string Notification Channel Group ID
     */
    public $AlarmNoticeId;

    /**
     * @var integer Block start time (second-level timestamp).
     */
    public $StartTime;

    /**
     * @var integer Block end time (second-level timestamp).
     */
    public $EndTime;

    /**
     * @var integer Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
     */
    public $Type;

    /**
     * @var string Blocking reason.
     */
    public $Reason;

    /**
     * @var string Blocking rules, required when Type is 2. For detailed information on filling in rules, see [Product Documentation](https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule).
     */
    public $Rule;

    /**
     * @param string $AlarmNoticeId Notification Channel Group ID
     * @param integer $StartTime Block start time (second-level timestamp).
     * @param integer $EndTime Block end time (second-level timestamp).
     * @param integer $Type Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
     * @param string $Reason Blocking reason.
     * @param string $Rule Blocking rules, required when Type is 2. For detailed information on filling in rules, see [Product Documentation](https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule).
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
