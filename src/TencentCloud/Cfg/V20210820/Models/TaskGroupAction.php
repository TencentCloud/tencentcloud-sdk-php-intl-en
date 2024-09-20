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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task group action
 *
 * @method integer getTaskGroupActionId() Obtain Task group action ID
 * @method void setTaskGroupActionId(integer $TaskGroupActionId) Set Task group action ID
 * @method array getTaskGroupInstances() Obtain Action instance list of the task group
 * @method void setTaskGroupInstances(array $TaskGroupInstances) Set Action instance list of the task group
 * @method integer getActionId() Obtain Action ID
 * @method void setActionId(integer $ActionId) Set Action ID
 * @method integer getTaskGroupActionOrder() Obtain Order of actions in the group
 * @method void setTaskGroupActionOrder(integer $TaskGroupActionOrder) Set Order of actions in the group
 * @method string getTaskGroupActionGeneralConfiguration() Obtain General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionGeneralConfiguration(string $TaskGroupActionGeneralConfiguration) Set General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskGroupActionCustomConfiguration() Obtain Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionCustomConfiguration(string $TaskGroupActionCustomConfiguration) Set Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupActionStatus() Obtain Status of actions in the group
 * @method void setTaskGroupActionStatus(integer $TaskGroupActionStatus) Set Status of actions in the group
 * @method string getTaskGroupActionCreateTime() Obtain Action group creation time
 * @method void setTaskGroupActionCreateTime(string $TaskGroupActionCreateTime) Set Action group creation time
 * @method string getTaskGroupActionUpdateTime() Obtain Action group update time
 * @method void setTaskGroupActionUpdateTime(string $TaskGroupActionUpdateTime) Set Action group update time
 * @method string getActionTitle() Obtain Action name
 * @method void setActionTitle(string $ActionTitle) Set Action name
 * @method integer getTaskGroupActionStatusType() Obtain Status. 0: no status; 1: successful; 2; failed; 3: terminated; 4: skipped.
 * @method void setTaskGroupActionStatusType(integer $TaskGroupActionStatusType) Set Status. 0: no status; 1: successful; 2; failed; 3: terminated; 4: skipped.
 * @method integer getTaskGroupActionRandomId() Obtain RandomId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionRandomId(integer $TaskGroupActionRandomId) Set RandomId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupActionRecoverId() Obtain RecoverId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionRecoverId(integer $TaskGroupActionRecoverId) Set RecoverId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupActionExecuteId() Obtain ExecuteId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionExecuteId(integer $TaskGroupActionExecuteId) Set ExecuteId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getActionApiType() Obtain Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionApiType(integer $ActionApiType) Set Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getActionAttribute() Obtain 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionAttribute(integer $ActionAttribute) Set 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionType() Obtain Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(string $ActionType) Set Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsExecuteRedo() Obtain Whether retry is allowed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsExecuteRedo(boolean $IsExecuteRedo) Set Whether retry is allowed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionRisk() Obtain Action risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionRisk(string $ActionRisk) Set Action risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupActionExecuteTime() Obtain Action running time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupActionExecuteTime(integer $TaskGroupActionExecuteTime) Set Action running time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskGroupAction extends AbstractModel
{
    /**
     * @var integer Task group action ID
     */
    public $TaskGroupActionId;

    /**
     * @var array Action instance list of the task group
     */
    public $TaskGroupInstances;

    /**
     * @var integer Action ID
     */
    public $ActionId;

    /**
     * @var integer Order of actions in the group
     */
    public $TaskGroupActionOrder;

    /**
     * @var string General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionGeneralConfiguration;

    /**
     * @var string Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionCustomConfiguration;

    /**
     * @var integer Status of actions in the group
     */
    public $TaskGroupActionStatus;

    /**
     * @var string Action group creation time
     */
    public $TaskGroupActionCreateTime;

    /**
     * @var string Action group update time
     */
    public $TaskGroupActionUpdateTime;

    /**
     * @var string Action name
     */
    public $ActionTitle;

    /**
     * @var integer Status. 0: no status; 1: successful; 2; failed; 3: terminated; 4: skipped.
     */
    public $TaskGroupActionStatusType;

    /**
     * @var integer RandomId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionRandomId;

    /**
     * @var integer RecoverId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionRecoverId;

    /**
     * @var integer ExecuteId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionExecuteId;

    /**
     * @var integer Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionApiType;

    /**
     * @var integer 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionAttribute;

    /**
     * @var string Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var boolean Whether retry is allowed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsExecuteRedo;

    /**
     * @var string Action risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionRisk;

    /**
     * @var integer Action running time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupActionExecuteTime;

    /**
     * @param integer $TaskGroupActionId Task group action ID
     * @param array $TaskGroupInstances Action instance list of the task group
     * @param integer $ActionId Action ID
     * @param integer $TaskGroupActionOrder Order of actions in the group
     * @param string $TaskGroupActionGeneralConfiguration General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskGroupActionCustomConfiguration Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupActionStatus Status of actions in the group
     * @param string $TaskGroupActionCreateTime Action group creation time
     * @param string $TaskGroupActionUpdateTime Action group update time
     * @param string $ActionTitle Action name
     * @param integer $TaskGroupActionStatusType Status. 0: no status; 1: successful; 2; failed; 3: terminated; 4: skipped.
     * @param integer $TaskGroupActionRandomId RandomId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupActionRecoverId RecoverId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupActionExecuteId ExecuteId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ActionApiType Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ActionAttribute 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionType Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsExecuteRedo Whether retry is allowed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionRisk Action risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupActionExecuteTime Action running time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskGroupActionId",$param) and $param["TaskGroupActionId"] !== null) {
            $this->TaskGroupActionId = $param["TaskGroupActionId"];
        }

        if (array_key_exists("TaskGroupInstances",$param) and $param["TaskGroupInstances"] !== null) {
            $this->TaskGroupInstances = [];
            foreach ($param["TaskGroupInstances"] as $key => $value){
                $obj = new TaskGroupInstance();
                $obj->deserialize($value);
                array_push($this->TaskGroupInstances, $obj);
            }
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("TaskGroupActionOrder",$param) and $param["TaskGroupActionOrder"] !== null) {
            $this->TaskGroupActionOrder = $param["TaskGroupActionOrder"];
        }

        if (array_key_exists("TaskGroupActionGeneralConfiguration",$param) and $param["TaskGroupActionGeneralConfiguration"] !== null) {
            $this->TaskGroupActionGeneralConfiguration = $param["TaskGroupActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskGroupActionCustomConfiguration",$param) and $param["TaskGroupActionCustomConfiguration"] !== null) {
            $this->TaskGroupActionCustomConfiguration = $param["TaskGroupActionCustomConfiguration"];
        }

        if (array_key_exists("TaskGroupActionStatus",$param) and $param["TaskGroupActionStatus"] !== null) {
            $this->TaskGroupActionStatus = $param["TaskGroupActionStatus"];
        }

        if (array_key_exists("TaskGroupActionCreateTime",$param) and $param["TaskGroupActionCreateTime"] !== null) {
            $this->TaskGroupActionCreateTime = $param["TaskGroupActionCreateTime"];
        }

        if (array_key_exists("TaskGroupActionUpdateTime",$param) and $param["TaskGroupActionUpdateTime"] !== null) {
            $this->TaskGroupActionUpdateTime = $param["TaskGroupActionUpdateTime"];
        }

        if (array_key_exists("ActionTitle",$param) and $param["ActionTitle"] !== null) {
            $this->ActionTitle = $param["ActionTitle"];
        }

        if (array_key_exists("TaskGroupActionStatusType",$param) and $param["TaskGroupActionStatusType"] !== null) {
            $this->TaskGroupActionStatusType = $param["TaskGroupActionStatusType"];
        }

        if (array_key_exists("TaskGroupActionRandomId",$param) and $param["TaskGroupActionRandomId"] !== null) {
            $this->TaskGroupActionRandomId = $param["TaskGroupActionRandomId"];
        }

        if (array_key_exists("TaskGroupActionRecoverId",$param) and $param["TaskGroupActionRecoverId"] !== null) {
            $this->TaskGroupActionRecoverId = $param["TaskGroupActionRecoverId"];
        }

        if (array_key_exists("TaskGroupActionExecuteId",$param) and $param["TaskGroupActionExecuteId"] !== null) {
            $this->TaskGroupActionExecuteId = $param["TaskGroupActionExecuteId"];
        }

        if (array_key_exists("ActionApiType",$param) and $param["ActionApiType"] !== null) {
            $this->ActionApiType = $param["ActionApiType"];
        }

        if (array_key_exists("ActionAttribute",$param) and $param["ActionAttribute"] !== null) {
            $this->ActionAttribute = $param["ActionAttribute"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("IsExecuteRedo",$param) and $param["IsExecuteRedo"] !== null) {
            $this->IsExecuteRedo = $param["IsExecuteRedo"];
        }

        if (array_key_exists("ActionRisk",$param) and $param["ActionRisk"] !== null) {
            $this->ActionRisk = $param["ActionRisk"];
        }

        if (array_key_exists("TaskGroupActionExecuteTime",$param) and $param["TaskGroupActionExecuteTime"] !== null) {
            $this->TaskGroupActionExecuteTime = $param["TaskGroupActionExecuteTime"];
        }
    }
}
