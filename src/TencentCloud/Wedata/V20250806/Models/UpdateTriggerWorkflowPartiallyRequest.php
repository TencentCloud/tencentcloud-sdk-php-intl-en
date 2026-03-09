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
 * UpdateTriggerWorkflowPartially request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method UpdateTriggerWorkflowPartially getNewSetting() Obtain Responsible person ID.
 * @method void setNewSetting(UpdateTriggerWorkflowPartially $NewSetting) Set Responsible person ID.
 * @method array getFieldToRemoveList() Obtain Delete field content, identify in the form of property path, separate deleted values with ":" and multiple values with ",".
Delete the attributes "WorkflowParams:aa,bb" where ParamKey is aa,bb in the scheduling parameters.
Delete the scheduling configuration with TriggerId "da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" in TriggerWorkflowSchedulerConfigurations. 
Delete the spark sql general parameter "GeneralTaskParams: spark_sql". 

 * @method void setFieldToRemoveList(array $FieldToRemoveList) Set Delete field content, identify in the form of property path, separate deleted values with ":" and multiple values with ",".
Delete the attributes "WorkflowParams:aa,bb" where ParamKey is aa,bb in the scheduling parameters.
Delete the scheduling configuration with TriggerId "da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" in TriggerWorkflowSchedulerConfigurations. 
Delete the spark sql general parameter "GeneralTaskParams: spark_sql". 
 */
class UpdateTriggerWorkflowPartiallyRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var UpdateTriggerWorkflowPartially Responsible person ID.
     */
    public $NewSetting;

    /**
     * @var array Delete field content, identify in the form of property path, separate deleted values with ":" and multiple values with ",".
Delete the attributes "WorkflowParams:aa,bb" where ParamKey is aa,bb in the scheduling parameters.
Delete the scheduling configuration with TriggerId "da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" in TriggerWorkflowSchedulerConfigurations. 
Delete the spark sql general parameter "GeneralTaskParams: spark_sql". 

     */
    public $FieldToRemoveList;

    /**
     * @param string $ProjectId Project ID.
     * @param string $WorkflowId Workflow ID.
     * @param UpdateTriggerWorkflowPartially $NewSetting Responsible person ID.
     * @param array $FieldToRemoveList Delete field content, identify in the form of property path, separate deleted values with ":" and multiple values with ",".
Delete the attributes "WorkflowParams:aa,bb" where ParamKey is aa,bb in the scheduling parameters.
Delete the scheduling configuration with TriggerId "da46d950-d5ca-4cfb-a5a9-f3c2eeea1bf0" in TriggerWorkflowSchedulerConfigurations. 
Delete the spark sql general parameter "GeneralTaskParams: spark_sql". 
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("NewSetting",$param) and $param["NewSetting"] !== null) {
            $this->NewSetting = new UpdateTriggerWorkflowPartially();
            $this->NewSetting->deserialize($param["NewSetting"]);
        }

        if (array_key_exists("FieldToRemoveList",$param) and $param["FieldToRemoveList"] !== null) {
            $this->FieldToRemoveList = $param["FieldToRemoveList"];
        }
    }
}
