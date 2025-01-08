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
 * @method string getTimerAction() Obtain Timer action. Valid value: `TerminateInstances`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerAction(string $TimerAction) Set Timer action. Valid value: `TerminateInstances`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getActionTime() Obtain Action time, which follows the ISO8601 standard and uses UTC time. It must be 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setActionTime(string $ActionTime) Set Action time, which follows the ISO8601 standard and uses UTC time. It must be 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method Externals getExternals() Obtain Extended data
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExternals(Externals $Externals) Set Extended data
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getActionTimerId() Obtain Timer ID.
 * @method void setActionTimerId(string $ActionTimerId) Set Timer ID.
 * @method string getStatus() Obtain Timer status. Valid values:

UNDO: Not triggered.
DOING: Triggering.
DONE: Triggered already.

 * @method void setStatus(string $Status) Set Timer status. Valid values:

UNDO: Not triggered.
DOING: Triggering.
DONE: Triggered already.

 * @method string getInstanceId() Obtain Instance ID corresponding to a timer.
 * @method void setInstanceId(string $InstanceId) Set Instance ID corresponding to a timer.
 */
class ActionTimer extends AbstractModel
{
    /**
     * @var string Timer action. Valid value: `TerminateInstances`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerAction;

    /**
     * @var string Action time, which follows the ISO8601 standard and uses UTC time. It must be 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ActionTime;

    /**
     * @var Externals Extended data
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Externals;

    /**
     * @var string Timer ID.
     */
    public $ActionTimerId;

    /**
     * @var string Timer status. Valid values:

UNDO: Not triggered.
DOING: Triggering.
DONE: Triggered already.

     */
    public $Status;

    /**
     * @var string Instance ID corresponding to a timer.
     */
    public $InstanceId;

    /**
     * @param string $TimerAction Timer action. Valid value: `TerminateInstances`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ActionTime Action time, which follows the ISO8601 standard and uses UTC time. It must be 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param Externals $Externals Extended data
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ActionTimerId Timer ID.
     * @param string $Status Timer status. Valid values:

UNDO: Not triggered.
DOING: Triggering.
DONE: Triggered already.

     * @param string $InstanceId Instance ID corresponding to a timer.
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
