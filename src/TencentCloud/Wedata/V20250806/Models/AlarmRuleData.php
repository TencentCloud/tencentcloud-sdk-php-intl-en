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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm Rule Details
 *
 * @method string getAlarmRuleId() Obtain Alarm Rule ID
 * @method void setAlarmRuleId(string $AlarmRuleId) Set Alarm Rule ID
 * @method string getAlarmRuleName() Obtain Specifies the Alarm rule name.
 * @method void setAlarmRuleName(string $AlarmRuleName) Set Specifies the Alarm rule name.
 * @method string getDescription() Obtain Describes the Alarm rule.
 * @method void setDescription(string $Description) Set Describes the Alarm rule.
 * @method integer getMonitorObjectType() Obtain Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
 * @method void setMonitorObjectType(integer $MonitorObjectType) Set Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
 * @method array getMonitorObjectIds() Obtain Pass different business IDs depending on the value of MonitorType:

1 (Task): MonitorObjectIds should contain a list of task IDs.

2 (Workflow): MonitorObjectIds should contain a list of workflow IDs (workflow IDs can be obtained using the ListWorkflows API).

3 (Project): MonitorObjectIds should contain a list of project IDs.
 * @method void setMonitorObjectIds(array $MonitorObjectIds) Set Pass different business IDs depending on the value of MonitorType:

1 (Task): MonitorObjectIds should contain a list of task IDs.

2 (Workflow): MonitorObjectIds should contain a list of workflow IDs (workflow IDs can be obtained using the ListWorkflows API).

3 (Project): MonitorObjectIds should contain a list of project IDs.
 * @method array getAlarmTypes() Obtain Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method void setAlarmTypes(array $AlarmTypes) Set Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method integer getStatus() Obtain Whether the Alarm rule is enabled.
Valid values: 0 (disabled), 1 (enabled).
 * @method void setStatus(integer $Status) Set Whether the Alarm rule is enabled.
Valid values: 0 (disabled), 1 (enabled).
 * @method AlarmRuleDetail getAlarmRuleDetail() Obtain Alarm Rule Configuration Information

Success Alarms - No configuration required;

Failure Alarms - Can be configured to trigger on the first failure or on all retry failures;

Timeout Alarms - Require configuration of the timeout type and timeout threshold;

Project Fluctuation Alarms - Require configuration of the fluctuation rate and the debounce cycle.
 * @method void setAlarmRuleDetail(AlarmRuleDetail $AlarmRuleDetail) Set Alarm Rule Configuration Information

Success Alarms - No configuration required;

Failure Alarms - Can be configured to trigger on the first failure or on all retry failures;

Timeout Alarms - Require configuration of the timeout type and timeout threshold;

Project Fluctuation Alarms - Require configuration of the fluctuation rate and the debounce cycle.
 * @method integer getAlarmLevel() Obtain Alarm level. 1. ordinary, 2. important, 3. critical.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. 1. ordinary, 2. important, 3. critical.
 * @method string getOwnerUin() Obtain Specifies the id of the Alarm rule creator.
 * @method void setOwnerUin(string $OwnerUin) Set Specifies the id of the Alarm rule creator.
 * @method string getBundleId() Obtain The Alarm rule bound to the bundle client. it is normal if empty, otherwise it corresponds to the rule bound to the bundle client.
 * @method void setBundleId(string $BundleId) Set The Alarm rule bound to the bundle client. it is normal if empty, otherwise it corresponds to the rule bound to the bundle client.
 * @method string getBundleInfo() Obtain bundleId is not empty. it indicates the bound client name.

 * @method void setBundleInfo(string $BundleInfo) Set bundleId is not empty. it indicates the bound client name.

 * @method array getAlarmGroups() Obtain Describes the Alarm recipient configuration list.
 * @method void setAlarmGroups(array $AlarmGroups) Set Describes the Alarm recipient configuration list.
 */
class AlarmRuleData extends AbstractModel
{
    /**
     * @var string Alarm Rule ID
     */
    public $AlarmRuleId;

    /**
     * @var string Specifies the Alarm rule name.
     */
    public $AlarmRuleName;

    /**
     * @var string Describes the Alarm rule.
     */
    public $Description;

    /**
     * @var integer Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
     */
    public $MonitorObjectType;

    /**
     * @var array Pass different business IDs depending on the value of MonitorType:

1 (Task): MonitorObjectIds should contain a list of task IDs.

2 (Workflow): MonitorObjectIds should contain a list of workflow IDs (workflow IDs can be obtained using the ListWorkflows API).

3 (Project): MonitorObjectIds should contain a list of project IDs.
     */
    public $MonitorObjectIds;

    /**
     * @var array Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     */
    public $AlarmTypes;

    /**
     * @var integer Whether the Alarm rule is enabled.
Valid values: 0 (disabled), 1 (enabled).
     */
    public $Status;

    /**
     * @var AlarmRuleDetail Alarm Rule Configuration Information

Success Alarms - No configuration required;

Failure Alarms - Can be configured to trigger on the first failure or on all retry failures;

Timeout Alarms - Require configuration of the timeout type and timeout threshold;

Project Fluctuation Alarms - Require configuration of the fluctuation rate and the debounce cycle.
     */
    public $AlarmRuleDetail;

    /**
     * @var integer Alarm level. 1. ordinary, 2. important, 3. critical.
     */
    public $AlarmLevel;

    /**
     * @var string Specifies the id of the Alarm rule creator.
     */
    public $OwnerUin;

    /**
     * @var string The Alarm rule bound to the bundle client. it is normal if empty, otherwise it corresponds to the rule bound to the bundle client.
     */
    public $BundleId;

    /**
     * @var string bundleId is not empty. it indicates the bound client name.

     */
    public $BundleInfo;

    /**
     * @var array Describes the Alarm recipient configuration list.
     */
    public $AlarmGroups;

    /**
     * @param string $AlarmRuleId Alarm Rule ID
     * @param string $AlarmRuleName Specifies the Alarm rule name.
     * @param string $Description Describes the Alarm rule.
     * @param integer $MonitorObjectType Monitoring Object Type

Task-level Monitoring - Can be configured by Task / Workflow / Project:
1 = Task (default)
2 = Workflow
3 = Project

Project-level Monitoring - Monitors overall task fluctuations within a project:
7 = Project fluctuation monitoring alarm
     * @param array $MonitorObjectIds Pass different business IDs depending on the value of MonitorType:

1 (Task): MonitorObjectIds should contain a list of task IDs.

2 (Workflow): MonitorObjectIds should contain a list of workflow IDs (workflow IDs can be obtained using the ListWorkflows API).

3 (Project): MonitorObjectIds should contain a list of project IDs.
     * @param array $AlarmTypes Alarm Rule Monitoring Types:

failure: Failure alarm

overtime: Timeout alarm

success: Success alarm

backTrackingOrRerunSuccess: Alarm when backfill/rerun succeeds

backTrackingOrRerunFailure: Alarm when backfill/rerun fails

projectFailureInstanceUpwardFluctuationAlarm: Alarm when the upward fluctuation rate of failed instances for the day exceeds the threshold

projectSuccessInstanceDownwardFluctuationAlarm: Alarm when the downward fluctuation rate of successful instances for the day exceeds the threshold

reconciliationFailure: Alarm when an offline reconciliation task fails

reconciliationOvertime: Alarm when an offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     * @param integer $Status Whether the Alarm rule is enabled.
Valid values: 0 (disabled), 1 (enabled).
     * @param AlarmRuleDetail $AlarmRuleDetail Alarm Rule Configuration Information

Success Alarms - No configuration required;

Failure Alarms - Can be configured to trigger on the first failure or on all retry failures;

Timeout Alarms - Require configuration of the timeout type and timeout threshold;

Project Fluctuation Alarms - Require configuration of the fluctuation rate and the debounce cycle.
     * @param integer $AlarmLevel Alarm level. 1. ordinary, 2. important, 3. critical.
     * @param string $OwnerUin Specifies the id of the Alarm rule creator.
     * @param string $BundleId The Alarm rule bound to the bundle client. it is normal if empty, otherwise it corresponds to the rule bound to the bundle client.
     * @param string $BundleInfo bundleId is not empty. it indicates the bound client name.

     * @param array $AlarmGroups Describes the Alarm recipient configuration list.
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
        if (array_key_exists("AlarmRuleId",$param) and $param["AlarmRuleId"] !== null) {
            $this->AlarmRuleId = $param["AlarmRuleId"];
        }

        if (array_key_exists("AlarmRuleName",$param) and $param["AlarmRuleName"] !== null) {
            $this->AlarmRuleName = $param["AlarmRuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("MonitorObjectIds",$param) and $param["MonitorObjectIds"] !== null) {
            $this->MonitorObjectIds = $param["MonitorObjectIds"];
        }

        if (array_key_exists("AlarmTypes",$param) and $param["AlarmTypes"] !== null) {
            $this->AlarmTypes = $param["AlarmTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmRuleDetail",$param) and $param["AlarmRuleDetail"] !== null) {
            $this->AlarmRuleDetail = new AlarmRuleDetail();
            $this->AlarmRuleDetail->deserialize($param["AlarmRuleDetail"]);
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("AlarmGroups",$param) and $param["AlarmGroups"] !== null) {
            $this->AlarmGroups = [];
            foreach ($param["AlarmGroups"] as $key => $value){
                $obj = new AlarmGroup();
                $obj->deserialize($value);
                array_push($this->AlarmGroups, $obj);
            }
        }
    }
}
