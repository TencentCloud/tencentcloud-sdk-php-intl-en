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
 * Task group
 *
 * @method integer getTaskGroupId() Obtain Task action ID
 * @method void setTaskGroupId(integer $TaskGroupId) Set Task action ID
 * @method string getTaskGroupTitle() Obtain Group name
 * @method void setTaskGroupTitle(string $TaskGroupTitle) Set Group name
 * @method string getTaskGroupDescription() Obtain Group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupDescription(string $TaskGroupDescription) Set Group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupOrder() Obtain Task group order
 * @method void setTaskGroupOrder(integer $TaskGroupOrder) Set Task group order
 * @method integer getObjectTypeId() Obtain Object type ID
 * @method void setObjectTypeId(integer $ObjectTypeId) Set Object type ID
 * @method string getTaskGroupCreateTime() Obtain Task group creation time
 * @method void setTaskGroupCreateTime(string $TaskGroupCreateTime) Set Task group creation time
 * @method string getTaskGroupUpdateTime() Obtain Task group update time
 * @method void setTaskGroupUpdateTime(string $TaskGroupUpdateTime) Set Task group update time
 * @method array getTaskGroupActions() Obtain List of actions in the group
 * @method void setTaskGroupActions(array $TaskGroupActions) Set List of actions in the group
 * @method array getTaskGroupInstanceList() Obtain Instance list
 * @method void setTaskGroupInstanceList(array $TaskGroupInstanceList) Set Instance list
 * @method integer getTaskGroupMode() Obtain Execution mode. 1: sequential execution; 2: execution by stage.
 * @method void setTaskGroupMode(integer $TaskGroupMode) Set Execution mode. 1: sequential execution; 2: execution by stage.
 * @method array getTaskGroupDiscardInstanceList() Obtain List of instances not involved in the experiment
 * @method void setTaskGroupDiscardInstanceList(array $TaskGroupDiscardInstanceList) Set List of instances not involved in the experiment
 * @method array getTaskGroupSelectedInstanceList() Obtain List of instances involved in the experiment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupSelectedInstanceList(array $TaskGroupSelectedInstanceList) Set List of instances involved in the experiment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTaskGroupInstancesExecuteRule() Obtain Machine selection rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstancesExecuteRule(array $TaskGroupInstancesExecuteRule) Set Machine selection rule
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskGroup extends AbstractModel
{
    /**
     * @var integer Task action ID
     */
    public $TaskGroupId;

    /**
     * @var string Group name
     */
    public $TaskGroupTitle;

    /**
     * @var string Group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupDescription;

    /**
     * @var integer Task group order
     */
    public $TaskGroupOrder;

    /**
     * @var integer Object type ID
     */
    public $ObjectTypeId;

    /**
     * @var string Task group creation time
     */
    public $TaskGroupCreateTime;

    /**
     * @var string Task group update time
     */
    public $TaskGroupUpdateTime;

    /**
     * @var array List of actions in the group
     */
    public $TaskGroupActions;

    /**
     * @var array Instance list
     */
    public $TaskGroupInstanceList;

    /**
     * @var integer Execution mode. 1: sequential execution; 2: execution by stage.
     */
    public $TaskGroupMode;

    /**
     * @var array List of instances not involved in the experiment
     */
    public $TaskGroupDiscardInstanceList;

    /**
     * @var array List of instances involved in the experiment
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupSelectedInstanceList;

    /**
     * @var array Machine selection rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstancesExecuteRule;

    /**
     * @param integer $TaskGroupId Task action ID
     * @param string $TaskGroupTitle Group name
     * @param string $TaskGroupDescription Group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupOrder Task group order
     * @param integer $ObjectTypeId Object type ID
     * @param string $TaskGroupCreateTime Task group creation time
     * @param string $TaskGroupUpdateTime Task group update time
     * @param array $TaskGroupActions List of actions in the group
     * @param array $TaskGroupInstanceList Instance list
     * @param integer $TaskGroupMode Execution mode. 1: sequential execution; 2: execution by stage.
     * @param array $TaskGroupDiscardInstanceList List of instances not involved in the experiment
     * @param array $TaskGroupSelectedInstanceList List of instances involved in the experiment
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TaskGroupInstancesExecuteRule Machine selection rule
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
        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }

        if (array_key_exists("TaskGroupTitle",$param) and $param["TaskGroupTitle"] !== null) {
            $this->TaskGroupTitle = $param["TaskGroupTitle"];
        }

        if (array_key_exists("TaskGroupDescription",$param) and $param["TaskGroupDescription"] !== null) {
            $this->TaskGroupDescription = $param["TaskGroupDescription"];
        }

        if (array_key_exists("TaskGroupOrder",$param) and $param["TaskGroupOrder"] !== null) {
            $this->TaskGroupOrder = $param["TaskGroupOrder"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("TaskGroupCreateTime",$param) and $param["TaskGroupCreateTime"] !== null) {
            $this->TaskGroupCreateTime = $param["TaskGroupCreateTime"];
        }

        if (array_key_exists("TaskGroupUpdateTime",$param) and $param["TaskGroupUpdateTime"] !== null) {
            $this->TaskGroupUpdateTime = $param["TaskGroupUpdateTime"];
        }

        if (array_key_exists("TaskGroupActions",$param) and $param["TaskGroupActions"] !== null) {
            $this->TaskGroupActions = [];
            foreach ($param["TaskGroupActions"] as $key => $value){
                $obj = new TaskGroupAction();
                $obj->deserialize($value);
                array_push($this->TaskGroupActions, $obj);
            }
        }

        if (array_key_exists("TaskGroupInstanceList",$param) and $param["TaskGroupInstanceList"] !== null) {
            $this->TaskGroupInstanceList = $param["TaskGroupInstanceList"];
        }

        if (array_key_exists("TaskGroupMode",$param) and $param["TaskGroupMode"] !== null) {
            $this->TaskGroupMode = $param["TaskGroupMode"];
        }

        if (array_key_exists("TaskGroupDiscardInstanceList",$param) and $param["TaskGroupDiscardInstanceList"] !== null) {
            $this->TaskGroupDiscardInstanceList = $param["TaskGroupDiscardInstanceList"];
        }

        if (array_key_exists("TaskGroupSelectedInstanceList",$param) and $param["TaskGroupSelectedInstanceList"] !== null) {
            $this->TaskGroupSelectedInstanceList = $param["TaskGroupSelectedInstanceList"];
        }

        if (array_key_exists("TaskGroupInstancesExecuteRule",$param) and $param["TaskGroupInstancesExecuteRule"] !== null) {
            $this->TaskGroupInstancesExecuteRule = [];
            foreach ($param["TaskGroupInstancesExecuteRule"] as $key => $value){
                $obj = new TaskGroupInstancesExecuteRules();
                $obj->deserialize($value);
                array_push($this->TaskGroupInstancesExecuteRule, $obj);
            }
        }
    }
}
