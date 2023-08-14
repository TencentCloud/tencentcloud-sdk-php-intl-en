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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyCondition request structure.
 *
 * @method string getModule() Obtain Module name, which is fixed at "monitor"
 * @method void setModule(string $Module) Set Module name, which is fixed at "monitor"
 * @method string getPolicyId() Obtain Alarm policy ID
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
 * @method integer getConditionTemplateId() Obtain ID of trigger condition template. This parameter can be left empty.
 * @method void setConditionTemplateId(integer $ConditionTemplateId) Set ID of trigger condition template. This parameter can be left empty.
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition
 * @method AlarmPolicyFilter getFilter() Obtain Global filter.
 * @method void setFilter(AlarmPolicyFilter $Filter) Set Global filter.
 * @method array getGroupBy() Obtain Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
 * @method LogAlarmReq getLogAlarmReqInfo() Obtain Log alarm creation request parameters
 * @method void setLogAlarmReqInfo(LogAlarmReq $LogAlarmReqInfo) Set Log alarm creation request parameters
 * @method array getNoticeIds() Obtain Template ID, which is dedicated to TencentCloud Managed Service for Prometheus.
 * @method void setNoticeIds(array $NoticeIds) Set Template ID, which is dedicated to TencentCloud Managed Service for Prometheus.
 * @method integer getEnable() Obtain Status (`0`: Disabled; `1`: Enabled)
 * @method void setEnable(integer $Enable) Set Status (`0`: Disabled; `1`: Enabled)
 * @method string getPolicyName() Obtain Name of the policy dedicated to TMP
 * @method void setPolicyName(string $PolicyName) Set Name of the policy dedicated to TMP
 * @method string getEbSubject() Obtain The alert configured for an event
 * @method void setEbSubject(string $EbSubject) Set The alert configured for an event
 */
class ModifyAlarmPolicyConditionRequest extends AbstractModel
{
    /**
     * @var string Module name, which is fixed at "monitor"
     */
    public $Module;

    /**
     * @var string Alarm policy ID
     */
    public $PolicyId;

    /**
     * @var integer ID of trigger condition template. This parameter can be left empty.
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition Metric trigger condition
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition
     */
    public $EventCondition;

    /**
     * @var AlarmPolicyFilter Global filter.
     */
    public $Filter;

    /**
     * @var array Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
     */
    public $GroupBy;

    /**
     * @var LogAlarmReq Log alarm creation request parameters
     */
    public $LogAlarmReqInfo;

    /**
     * @var array Template ID, which is dedicated to TencentCloud Managed Service for Prometheus.
     */
    public $NoticeIds;

    /**
     * @var integer Status (`0`: Disabled; `1`: Enabled)
     */
    public $Enable;

    /**
     * @var string Name of the policy dedicated to TMP
     */
    public $PolicyName;

    /**
     * @var string The alert configured for an event
     */
    public $EbSubject;

    /**
     * @param string $Module Module name, which is fixed at "monitor"
     * @param string $PolicyId Alarm policy ID
     * @param integer $ConditionTemplateId ID of trigger condition template. This parameter can be left empty.
     * @param AlarmPolicyCondition $Condition Metric trigger condition
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition
     * @param AlarmPolicyFilter $Filter Global filter.
     * @param array $GroupBy Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
     * @param LogAlarmReq $LogAlarmReqInfo Log alarm creation request parameters
     * @param array $NoticeIds Template ID, which is dedicated to TencentCloud Managed Service for Prometheus.
     * @param integer $Enable Status (`0`: Disabled; `1`: Enabled)
     * @param string $PolicyName Name of the policy dedicated to TMP
     * @param string $EbSubject The alert configured for an event
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ConditionTemplateId",$param) and $param["ConditionTemplateId"] !== null) {
            $this->ConditionTemplateId = $param["ConditionTemplateId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("LogAlarmReqInfo",$param) and $param["LogAlarmReqInfo"] !== null) {
            $this->LogAlarmReqInfo = new LogAlarmReq();
            $this->LogAlarmReqInfo->deserialize($param["LogAlarmReqInfo"]);
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }
    }
}
