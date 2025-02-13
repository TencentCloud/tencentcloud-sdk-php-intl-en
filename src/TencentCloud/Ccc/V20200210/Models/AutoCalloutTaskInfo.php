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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Automatic outbound call task list item.
 *
 * @method string getName() Obtain Task name.
 * @method void setName(string $Name) Set Task name.
 * @method integer getCalleeCount() Obtain Number of called parties.
 * @method void setCalleeCount(integer $CalleeCount) Set Number of called parties.
 * @method array getCallers() Obtain List of calling numbers.
 * @method void setCallers(array $Callers) Set List of calling numbers.
 * @method integer getNotBefore() Obtain Start timestamp.
 * @method void setNotBefore(integer $NotBefore) Set Start timestamp.
 * @method integer getNotAfter() Obtain End timestamp
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNotAfter(integer $NotAfter) Set End timestamp
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIvrId() Obtain IvrId used by the task.
 * @method void setIvrId(integer $IvrId) Set IvrId used by the task.
 * @method integer getState() Obtain Task status:.
0 initial: task creation, call not started.
1 running.
2 completed: all calls in the task are completed.
3 ending: the task has expired, but there are still some calls not ended.
4 ended: task terminated due to expiration.
 * @method void setState(integer $State) Set Task status:.
0 initial: task creation, call not started.
1 running.
2 completed: all calls in the task are completed.
3 ending: the task has expired, but there are still some calls not ended.
4 ended: task terminated due to expiration.
 * @method integer getTaskId() Obtain <Task id>.
 * @method void setTaskId(integer $TaskId) Set <Task id>.
 */
class AutoCalloutTaskInfo extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $Name;

    /**
     * @var integer Number of called parties.
     */
    public $CalleeCount;

    /**
     * @var array List of calling numbers.
     */
    public $Callers;

    /**
     * @var integer Start timestamp.
     */
    public $NotBefore;

    /**
     * @var integer End timestamp
.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NotAfter;

    /**
     * @var integer IvrId used by the task.
     */
    public $IvrId;

    /**
     * @var integer Task status:.
0 initial: task creation, call not started.
1 running.
2 completed: all calls in the task are completed.
3 ending: the task has expired, but there are still some calls not ended.
4 ended: task terminated due to expiration.
     */
    public $State;

    /**
     * @var integer <Task id>.
     */
    public $TaskId;

    /**
     * @param string $Name Task name.
     * @param integer $CalleeCount Number of called parties.
     * @param array $Callers List of calling numbers.
     * @param integer $NotBefore Start timestamp.
     * @param integer $NotAfter End timestamp
.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IvrId IvrId used by the task.
     * @param integer $State Task status:.
0 initial: task creation, call not started.
1 running.
2 completed: all calls in the task are completed.
3 ending: the task has expired, but there are still some calls not ended.
4 ended: task terminated due to expiration.
     * @param integer $TaskId <Task id>.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CalleeCount",$param) and $param["CalleeCount"] !== null) {
            $this->CalleeCount = $param["CalleeCount"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
