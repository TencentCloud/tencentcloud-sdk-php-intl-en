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
 * UpdateTriggerTaskPartially request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method UpdateTriggerTaskPart getNewSetting() Obtain Task basic attributes.
 * @method void setNewSetting(UpdateTriggerTaskPart $NewSetting) Set Task basic attributes.
 * @method array getFieldToRemoveList() Obtain Delete field content, identified in the form of property paths, with deleted values separated by ":" and multiple values separated by "," delete the attribute "TaskConfiguration/TaskSchedulingParameterList:aa,bb" where ParamKey is aa,bb in scheduling parameters delete the upstream dependency "TaskSchedulerConfiguration/UpstreamDependencyConfigList:2509162129381111,2509162129381112" where TaskId is 2509162129381111,2509162129381112 in upstream dependencies delete the downstream dependency "TaskSchedulerConfiguration/DownStreamDependencyConfigList:2509162129382222,2509162129382223" where TaskId is 2509162129382222,2509162129382223 in downstream circular dependencies delete the event "TaskSchedulerConfiguration/EventListenerList:event_250916_213234,event_250916_213235" where EventName is event_250916_213234,event_250916_213235 in events delete the parameter "TaskSchedulerConfiguration/ParamTaskOutList:pp_out,pp_1" where ParamKey is pp_out,pp_1 in parameter output transmission delete the parameter "TaskSchedulerConfiguration/ParamTaskInList:pp_in,pp_1" where ParamKey is pp_in,pp_1 in parameter application delete the output registration "TaskSchedulerConfiguration/TaskOutputRegistryList:6578laxif4d1" where TablePhysicalId is 6578laxif4d1 in product registration.
 * @method void setFieldToRemoveList(array $FieldToRemoveList) Set Delete field content, identified in the form of property paths, with deleted values separated by ":" and multiple values separated by "," delete the attribute "TaskConfiguration/TaskSchedulingParameterList:aa,bb" where ParamKey is aa,bb in scheduling parameters delete the upstream dependency "TaskSchedulerConfiguration/UpstreamDependencyConfigList:2509162129381111,2509162129381112" where TaskId is 2509162129381111,2509162129381112 in upstream dependencies delete the downstream dependency "TaskSchedulerConfiguration/DownStreamDependencyConfigList:2509162129382222,2509162129382223" where TaskId is 2509162129382222,2509162129382223 in downstream circular dependencies delete the event "TaskSchedulerConfiguration/EventListenerList:event_250916_213234,event_250916_213235" where EventName is event_250916_213234,event_250916_213235 in events delete the parameter "TaskSchedulerConfiguration/ParamTaskOutList:pp_out,pp_1" where ParamKey is pp_out,pp_1 in parameter output transmission delete the parameter "TaskSchedulerConfiguration/ParamTaskInList:pp_in,pp_1" where ParamKey is pp_in,pp_1 in parameter application delete the output registration "TaskSchedulerConfiguration/TaskOutputRegistryList:6578laxif4d1" where TablePhysicalId is 6578laxif4d1 in product registration.
 */
class UpdateTriggerTaskPartiallyRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var UpdateTriggerTaskPart Task basic attributes.
     */
    public $NewSetting;

    /**
     * @var array Delete field content, identified in the form of property paths, with deleted values separated by ":" and multiple values separated by "," delete the attribute "TaskConfiguration/TaskSchedulingParameterList:aa,bb" where ParamKey is aa,bb in scheduling parameters delete the upstream dependency "TaskSchedulerConfiguration/UpstreamDependencyConfigList:2509162129381111,2509162129381112" where TaskId is 2509162129381111,2509162129381112 in upstream dependencies delete the downstream dependency "TaskSchedulerConfiguration/DownStreamDependencyConfigList:2509162129382222,2509162129382223" where TaskId is 2509162129382222,2509162129382223 in downstream circular dependencies delete the event "TaskSchedulerConfiguration/EventListenerList:event_250916_213234,event_250916_213235" where EventName is event_250916_213234,event_250916_213235 in events delete the parameter "TaskSchedulerConfiguration/ParamTaskOutList:pp_out,pp_1" where ParamKey is pp_out,pp_1 in parameter output transmission delete the parameter "TaskSchedulerConfiguration/ParamTaskInList:pp_in,pp_1" where ParamKey is pp_in,pp_1 in parameter application delete the output registration "TaskSchedulerConfiguration/TaskOutputRegistryList:6578laxif4d1" where TablePhysicalId is 6578laxif4d1 in product registration.
     */
    public $FieldToRemoveList;

    /**
     * @param string $ProjectId Project ID.
     * @param string $TaskId Task ID.
     * @param UpdateTriggerTaskPart $NewSetting Task basic attributes.
     * @param array $FieldToRemoveList Delete field content, identified in the form of property paths, with deleted values separated by ":" and multiple values separated by "," delete the attribute "TaskConfiguration/TaskSchedulingParameterList:aa,bb" where ParamKey is aa,bb in scheduling parameters delete the upstream dependency "TaskSchedulerConfiguration/UpstreamDependencyConfigList:2509162129381111,2509162129381112" where TaskId is 2509162129381111,2509162129381112 in upstream dependencies delete the downstream dependency "TaskSchedulerConfiguration/DownStreamDependencyConfigList:2509162129382222,2509162129382223" where TaskId is 2509162129382222,2509162129382223 in downstream circular dependencies delete the event "TaskSchedulerConfiguration/EventListenerList:event_250916_213234,event_250916_213235" where EventName is event_250916_213234,event_250916_213235 in events delete the parameter "TaskSchedulerConfiguration/ParamTaskOutList:pp_out,pp_1" where ParamKey is pp_out,pp_1 in parameter output transmission delete the parameter "TaskSchedulerConfiguration/ParamTaskInList:pp_in,pp_1" where ParamKey is pp_in,pp_1 in parameter application delete the output registration "TaskSchedulerConfiguration/TaskOutputRegistryList:6578laxif4d1" where TablePhysicalId is 6578laxif4d1 in product registration.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("NewSetting",$param) and $param["NewSetting"] !== null) {
            $this->NewSetting = new UpdateTriggerTaskPart();
            $this->NewSetting->deserialize($param["NewSetting"]);
        }

        if (array_key_exists("FieldToRemoveList",$param) and $param["FieldToRemoveList"] !== null) {
            $this->FieldToRemoveList = $param["FieldToRemoveList"];
        }
    }
}
