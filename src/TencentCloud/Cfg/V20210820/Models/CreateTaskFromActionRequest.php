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
 * CreateTaskFromAction request structure.
 *
 * @method integer getTaskActionId() Obtain Action ID, which can be obtained by using the action list API DescribeActionLibraryList.
 * @method void setTaskActionId(integer $TaskActionId) Set Action ID, which can be obtained by using the action list API DescribeActionLibraryList.
 * @method array getTaskInstances() Obtain ID of the instance participating in the experiment
 * @method void setTaskInstances(array $TaskInstances) Set ID of the instance participating in the experiment
 * @method string getTaskTitle() Obtain Experiment name. If this parameter is left blank, the action name is used by default.
 * @method void setTaskTitle(string $TaskTitle) Set Experiment name. If this parameter is left blank, the action name is used by default.
 * @method string getTaskDescription() Obtain Experiment description. If this parameter is left blank, the action description is used by default.
 * @method void setTaskDescription(string $TaskDescription) Set Experiment description. If this parameter is left blank, the action description is used by default.
 * @method string getTaskActionGeneralConfiguration() Obtain General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the action details API DescribeActionFieldConfigList. If this field is left blank, the default action parameters are used by default.
 * @method void setTaskActionGeneralConfiguration(string $TaskActionGeneralConfiguration) Set General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the action details API DescribeActionFieldConfigList. If this field is left blank, the default action parameters are used by default.
 * @method string getTaskActionCustomConfiguration() Obtain Action custom parameters need to be passed in as json serialization. They can be obtained from the action details interface DescribeActionFieldConfigList. If not filled in, the default action parameters will be used. Note: Required parameters have no default values. Be sure to pass in valid values.
 * @method void setTaskActionCustomConfiguration(string $TaskActionCustomConfiguration) Set Action custom parameters need to be passed in as json serialization. They can be obtained from the action details interface DescribeActionFieldConfigList. If not filled in, the default action parameters will be used. Note: Required parameters have no default values. Be sure to pass in valid values.
 * @method integer getTaskPauseDuration() Obtain Automatic experiment pause time, in minutes. If this parameter is left blank, the default value 60 is used.
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) Set Automatic experiment pause time, in minutes. If this parameter is left blank, the default value 60 is used.
 */
class CreateTaskFromActionRequest extends AbstractModel
{
    /**
     * @var integer Action ID, which can be obtained by using the action list API DescribeActionLibraryList.
     */
    public $TaskActionId;

    /**
     * @var array ID of the instance participating in the experiment
     */
    public $TaskInstances;

    /**
     * @var string Experiment name. If this parameter is left blank, the action name is used by default.
     */
    public $TaskTitle;

    /**
     * @var string Experiment description. If this parameter is left blank, the action description is used by default.
     */
    public $TaskDescription;

    /**
     * @var string General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the action details API DescribeActionFieldConfigList. If this field is left blank, the default action parameters are used by default.
     */
    public $TaskActionGeneralConfiguration;

    /**
     * @var string Action custom parameters need to be passed in as json serialization. They can be obtained from the action details interface DescribeActionFieldConfigList. If not filled in, the default action parameters will be used. Note: Required parameters have no default values. Be sure to pass in valid values.
     */
    public $TaskActionCustomConfiguration;

    /**
     * @var integer Automatic experiment pause time, in minutes. If this parameter is left blank, the default value 60 is used.
     */
    public $TaskPauseDuration;

    /**
     * @param integer $TaskActionId Action ID, which can be obtained by using the action list API DescribeActionLibraryList.
     * @param array $TaskInstances ID of the instance participating in the experiment
     * @param string $TaskTitle Experiment name. If this parameter is left blank, the action name is used by default.
     * @param string $TaskDescription Experiment description. If this parameter is left blank, the action description is used by default.
     * @param string $TaskActionGeneralConfiguration General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the action details API DescribeActionFieldConfigList. If this field is left blank, the default action parameters are used by default.
     * @param string $TaskActionCustomConfiguration Action custom parameters need to be passed in as json serialization. They can be obtained from the action details interface DescribeActionFieldConfigList. If not filled in, the default action parameters will be used. Note: Required parameters have no default values. Be sure to pass in valid values.
     * @param integer $TaskPauseDuration Automatic experiment pause time, in minutes. If this parameter is left blank, the default value 60 is used.
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
        if (array_key_exists("TaskActionId",$param) and $param["TaskActionId"] !== null) {
            $this->TaskActionId = $param["TaskActionId"];
        }

        if (array_key_exists("TaskInstances",$param) and $param["TaskInstances"] !== null) {
            $this->TaskInstances = $param["TaskInstances"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskActionGeneralConfiguration",$param) and $param["TaskActionGeneralConfiguration"] !== null) {
            $this->TaskActionGeneralConfiguration = $param["TaskActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskActionCustomConfiguration",$param) and $param["TaskActionCustomConfiguration"] !== null) {
            $this->TaskActionCustomConfiguration = $param["TaskActionCustomConfiguration"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }
    }
}
