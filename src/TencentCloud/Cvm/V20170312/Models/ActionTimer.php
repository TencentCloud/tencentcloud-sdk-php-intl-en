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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled tasks.
 *
 * @method string getTimerAction() Obtain Timer action currently only supports terminating one value: TerminateInstances.
 * @method void setTimerAction(string $TimerAction) Set Timer action currently only supports terminating one value: TerminateInstances.
 * @method string getActionTime() Obtain Execution time, in standard ISO8601 representation and using UTC time. format: YYYY-MM-DDThh:MM:ssZ. for example, 2018-05-29T11:26:40Z. the execution time must be later than the current time by 5 minutes.
 * @method void setActionTime(string $ActionTime) Set Execution time, in standard ISO8601 representation and using UTC time. format: YYYY-MM-DDThh:MM:ssZ. for example, 2018-05-29T11:26:40Z. the execution time must be later than the current time by 5 minutes.
 * @method Externals getExternals() Obtain Extension data. only used as output usage.
 * @method void setExternals(Externals $Externals) Set Extension data. only used as output usage.
 * @method string getActionTimerId() Obtain Timer ID. only used as output usage.
 * @method void setActionTimerId(string $ActionTimerId) Set Timer ID. only used as output usage.
 * @method string getStatus() Obtain Timer status, for output usage only. value ranges from: <li>UNDO: unexecuted</li> <li>DOING: executing</li> <li>DONE: execution completed.</li>.
 * @method void setStatus(string $Status) Set Timer status, for output usage only. value ranges from: <li>UNDO: unexecuted</li> <li>DOING: executing</li> <li>DONE: execution completed.</li>.
 * @method string getInstanceId() Obtain Instance ID corresponding to a timer. used only for output.
 * @method void setInstanceId(string $InstanceId) Set Instance ID corresponding to a timer. used only for output.
 */
class ActionTimer extends AbstractModel
{
    /**
     * @var string Timer action currently only supports terminating one value: TerminateInstances.
     */
    public $TimerAction;

    /**
     * @var string Execution time, in standard ISO8601 representation and using UTC time. format: YYYY-MM-DDThh:MM:ssZ. for example, 2018-05-29T11:26:40Z. the execution time must be later than the current time by 5 minutes.
     */
    public $ActionTime;

    /**
     * @var Externals Extension data. only used as output usage.
     */
    public $Externals;

    /**
     * @var string Timer ID. only used as output usage.
     */
    public $ActionTimerId;

    /**
     * @var string Timer status, for output usage only. value ranges from: <li>UNDO: unexecuted</li> <li>DOING: executing</li> <li>DONE: execution completed.</li>.
     */
    public $Status;

    /**
     * @var string Instance ID corresponding to a timer. used only for output.
     */
    public $InstanceId;

    /**
     * @param string $TimerAction Timer action currently only supports terminating one value: TerminateInstances.
     * @param string $ActionTime Execution time, in standard ISO8601 representation and using UTC time. format: YYYY-MM-DDThh:MM:ssZ. for example, 2018-05-29T11:26:40Z. the execution time must be later than the current time by 5 minutes.
     * @param Externals $Externals Extension data. only used as output usage.
     * @param string $ActionTimerId Timer ID. only used as output usage.
     * @param string $Status Timer status, for output usage only. value ranges from: <li>UNDO: unexecuted</li> <li>DOING: executing</li> <li>DONE: execution completed.</li>.
     * @param string $InstanceId Instance ID corresponding to a timer. used only for output.
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
        if (array_key_exists("TimerAction",$param) and $param["TimerAction"] !== null) {
            $this->TimerAction = $param["TimerAction"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("ActionTimerId",$param) and $param["ActionTimerId"] !== null) {
            $this->ActionTimerId = $param["ActionTimerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
