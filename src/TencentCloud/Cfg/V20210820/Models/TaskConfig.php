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
 * Task parameters that need to be configured when an experiment is created by using a template
 *
 * @method array getTaskGroupsConfig() Obtain Action group configurations. The number of configured action groups needs to be consistent with that in the template.
 * @method void setTaskGroupsConfig(array $TaskGroupsConfig) Set Action group configurations. The number of configured action groups needs to be consistent with that in the template.
 * @method string getTaskTitle() Obtain Experiment name after change. If this parameter is left blank, the template name is used by default.
 * @method void setTaskTitle(string $TaskTitle) Set Experiment name after change. If this parameter is left blank, the template name is used by default.
 * @method string getTaskDescription() Obtain Experiment description after change. If this parameter is left blank, the template description is used by default.
 * @method void setTaskDescription(string $TaskDescription) Set Experiment description after change. If this parameter is left blank, the template description is used by default.
 * @method integer getTaskMode() Obtain Experiment execution mode. 1: manual execution; 2: automatic execution. If this parameter is left blank, the template execution mode is used by default.
 * @method void setTaskMode(integer $TaskMode) Set Experiment execution mode. 1: manual execution; 2: automatic execution. If this parameter is left blank, the template execution mode is used by default.
 * @method integer getTaskPauseDuration() Obtain Automatic pause time of the experiment, in minutes. If this parameter is left blank, the automatic pause time of the template is used by default.
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) Set Automatic pause time of the experiment, in minutes. If this parameter is left blank, the automatic pause time of the template is used by default.
 * @method array getTags() Obtain Experiment tag. If this parameter is left blank, the template tag is used by default.
 * @method void setTags(array $Tags) Set Experiment tag. If this parameter is left blank, the template tag is used by default.
 * @method integer getPolicyDealType() Obtain Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
 * @method void setPolicyDealType(integer $PolicyDealType) Set Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
 */
class TaskConfig extends AbstractModel
{
    /**
     * @var array Action group configurations. The number of configured action groups needs to be consistent with that in the template.
     */
    public $TaskGroupsConfig;

    /**
     * @var string Experiment name after change. If this parameter is left blank, the template name is used by default.
     */
    public $TaskTitle;

    /**
     * @var string Experiment description after change. If this parameter is left blank, the template description is used by default.
     */
    public $TaskDescription;

    /**
     * @var integer Experiment execution mode. 1: manual execution; 2: automatic execution. If this parameter is left blank, the template execution mode is used by default.
     */
    public $TaskMode;

    /**
     * @var integer Automatic pause time of the experiment, in minutes. If this parameter is left blank, the automatic pause time of the template is used by default.
     */
    public $TaskPauseDuration;

    /**
     * @var array Experiment tag. If this parameter is left blank, the template tag is used by default.
     */
    public $Tags;

    /**
     * @var integer Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
     */
    public $PolicyDealType;

    /**
     * @param array $TaskGroupsConfig Action group configurations. The number of configured action groups needs to be consistent with that in the template.
     * @param string $TaskTitle Experiment name after change. If this parameter is left blank, the template name is used by default.
     * @param string $TaskDescription Experiment description after change. If this parameter is left blank, the template description is used by default.
     * @param integer $TaskMode Experiment execution mode. 1: manual execution; 2: automatic execution. If this parameter is left blank, the template execution mode is used by default.
     * @param integer $TaskPauseDuration Automatic pause time of the experiment, in minutes. If this parameter is left blank, the automatic pause time of the template is used by default.
     * @param array $Tags Experiment tag. If this parameter is left blank, the template tag is used by default.
     * @param integer $PolicyDealType Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
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
        if (array_key_exists("TaskGroupsConfig",$param) and $param["TaskGroupsConfig"] !== null) {
            $this->TaskGroupsConfig = [];
            foreach ($param["TaskGroupsConfig"] as $key => $value){
                $obj = new TaskGroupConfig();
                $obj->deserialize($value);
                array_push($this->TaskGroupsConfig, $obj);
            }
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithCreate();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PolicyDealType",$param) and $param["PolicyDealType"] !== null) {
            $this->PolicyDealType = $param["PolicyDealType"];
        }
    }
}
