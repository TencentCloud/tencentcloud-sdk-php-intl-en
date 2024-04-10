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
 * Alarm suppression task configuration
 *
 * @method string getAlarmNoticeId() Obtain Notification Channel Group ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification Channel Group ID
 * @method string getTaskId() Obtain Shield Rule ID
 * @method void setTaskId(string $TaskId) Set Shield Rule ID
 * @method integer getStartTime() Obtain Block start time (second-level timestamp).
 * @method void setStartTime(integer $StartTime) Set Block start time (second-level timestamp).
 * @method integer getEndTime() Obtain Block end time (second-level timestamp).
 * @method void setEndTime(integer $EndTime) Set Block end time (second-level timestamp).
 * @method integer getType() Obtain Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
 * @method void setType(integer $Type) Set Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
 * @method string getRule() Obtain Rule for shielding, mandatory when Type is 2. See Product Documentation (https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule) for rule writing details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRule(string $Rule) Set Rule for shielding, mandatory when Type is 2. See Product Documentation (https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule) for rule writing details.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Blocking reason.
 * @method void setReason(string $Reason) Set Blocking reason.
 * @method integer getSource() Obtain Rule Creation Source.
1. Console; 2. API; 3. Alarm notification
 * @method void setSource(integer $Source) Set Rule Creation Source.
1. Console; 2. API; 3. Alarm notification
 * @method string getOperator() Obtain Operator.
 * @method void setOperator(string $Operator) Set Operator.
 * @method integer getStatus() Obtain Rule Status.
0: Not yet effective; 1: In effect; 2: Expired
 * @method void setStatus(integer $Status) Set Rule Status.
0: Not yet effective; 1: In effect; 2: Expired
 * @method integer getCreateTime() Obtain Rule Creation Time.
 * @method void setCreateTime(integer $CreateTime) Set Rule Creation Time.
 * @method integer getUpdateTime() Obtain Rule Update Time.
 * @method void setUpdateTime(integer $UpdateTime) Set Rule Update Time.
 */
class AlarmShieldInfo extends AbstractModel
{
    /**
     * @var string Notification Channel Group ID
     */
    public $AlarmNoticeId;

    /**
     * @var string Shield Rule ID
     */
    public $TaskId;

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
     * @var string Rule for shielding, mandatory when Type is 2. See Product Documentation (https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule) for rule writing details.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rule;

    /**
     * @var string Blocking reason.
     */
    public $Reason;

    /**
     * @var integer Rule Creation Source.
1. Console; 2. API; 3. Alarm notification
     */
    public $Source;

    /**
     * @var string Operator.
     */
    public $Operator;

    /**
     * @var integer Rule Status.
0: Not yet effective; 1: In effect; 2: Expired
     */
    public $Status;

    /**
     * @var integer Rule Creation Time.
     */
    public $CreateTime;

    /**
     * @var integer Rule Update Time.
     */
    public $UpdateTime;

    /**
     * @param string $AlarmNoticeId Notification Channel Group ID
     * @param string $TaskId Shield Rule ID
     * @param integer $StartTime Block start time (second-level timestamp).
     * @param integer $EndTime Block end time (second-level timestamp).
     * @param integer $Type Block type. 1: Block all notifications, 2: Block matching rules notifications according to the Rule parameter.
     * @param string $Rule Rule for shielding, mandatory when Type is 2. See Product Documentation (https://intl.cloud.tencent.com/document/product/614/103178?from_cn_redirect=1#rule) for rule writing details.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reason Blocking reason.
     * @param integer $Source Rule Creation Source.
1. Console; 2. API; 3. Alarm notification
     * @param string $Operator Operator.
     * @param integer $Status Rule Status.
0: Not yet effective; 1: In effect; 2: Expired
     * @param integer $CreateTime Rule Creation Time.
     * @param integer $UpdateTime Rule Update Time.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
