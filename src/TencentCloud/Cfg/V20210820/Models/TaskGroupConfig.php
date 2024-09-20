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
 * Action group configuration item
 *
 * @method array getTaskGroupInstances() Obtain Instance object associated with the action group
 * @method void setTaskGroupInstances(array $TaskGroupInstances) Set Instance object associated with the action group
 * @method string getTaskGroupTitle() Obtain Action group name. If this parameter is left blank, the action group name in the template is used by default.
 * @method void setTaskGroupTitle(string $TaskGroupTitle) Set Action group name. If this parameter is left blank, the action group name in the template is used by default.
 * @method string getTaskGroupDescription() Obtain Action group description. If this parameter is left blank, the action group description in the template is used by default.
 * @method void setTaskGroupDescription(string $TaskGroupDescription) Set Action group description. If this parameter is left blank, the action group description in the template is used by default.
 * @method integer getTaskGroupMode() Obtain Action group execution mode. 1: sequential execution; 2: execution by stage. If this parameter is left blank, the action execution mode in the template is used by default.
 * @method void setTaskGroupMode(integer $TaskGroupMode) Set Action group execution mode. 1: sequential execution; 2: execution by stage. If this parameter is left blank, the action execution mode in the template is used by default.
 * @method array getTaskGroupActionsConfig() Obtain Action parameters in the action group. If this field is left blank, the action parameters in the template is used by default. You only need to specify the action whose parameters are to be modified during configuration.
 * @method void setTaskGroupActionsConfig(array $TaskGroupActionsConfig) Set Action parameters in the action group. If this field is left blank, the action parameters in the template is used by default. You only need to specify the action whose parameters are to be modified during configuration.
 */
class TaskGroupConfig extends AbstractModel
{
    /**
     * @var array Instance object associated with the action group
     */
    public $TaskGroupInstances;

    /**
     * @var string Action group name. If this parameter is left blank, the action group name in the template is used by default.
     */
    public $TaskGroupTitle;

    /**
     * @var string Action group description. If this parameter is left blank, the action group description in the template is used by default.
     */
    public $TaskGroupDescription;

    /**
     * @var integer Action group execution mode. 1: sequential execution; 2: execution by stage. If this parameter is left blank, the action execution mode in the template is used by default.
     */
    public $TaskGroupMode;

    /**
     * @var array Action parameters in the action group. If this field is left blank, the action parameters in the template is used by default. You only need to specify the action whose parameters are to be modified during configuration.
     */
    public $TaskGroupActionsConfig;

    /**
     * @param array $TaskGroupInstances Instance object associated with the action group
     * @param string $TaskGroupTitle Action group name. If this parameter is left blank, the action group name in the template is used by default.
     * @param string $TaskGroupDescription Action group description. If this parameter is left blank, the action group description in the template is used by default.
     * @param integer $TaskGroupMode Action group execution mode. 1: sequential execution; 2: execution by stage. If this parameter is left blank, the action execution mode in the template is used by default.
     * @param array $TaskGroupActionsConfig Action parameters in the action group. If this field is left blank, the action parameters in the template is used by default. You only need to specify the action whose parameters are to be modified during configuration.
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
        if (array_key_exists("TaskGroupInstances",$param) and $param["TaskGroupInstances"] !== null) {
            $this->TaskGroupInstances = $param["TaskGroupInstances"];
        }

        if (array_key_exists("TaskGroupTitle",$param) and $param["TaskGroupTitle"] !== null) {
            $this->TaskGroupTitle = $param["TaskGroupTitle"];
        }

        if (array_key_exists("TaskGroupDescription",$param) and $param["TaskGroupDescription"] !== null) {
            $this->TaskGroupDescription = $param["TaskGroupDescription"];
        }

        if (array_key_exists("TaskGroupMode",$param) and $param["TaskGroupMode"] !== null) {
            $this->TaskGroupMode = $param["TaskGroupMode"];
        }

        if (array_key_exists("TaskGroupActionsConfig",$param) and $param["TaskGroupActionsConfig"] !== null) {
            $this->TaskGroupActionsConfig = [];
            foreach ($param["TaskGroupActionsConfig"] as $key => $value){
                $obj = new TaskGroupActionConfig();
                $obj->deserialize($value);
                array_push($this->TaskGroupActionsConfig, $obj);
            }
        }
    }
}
