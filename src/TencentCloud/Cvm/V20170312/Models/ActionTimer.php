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
 * @method Externals getExternals() Obtain Additional data
 * @method void setExternals(Externals $Externals) Set Additional data
 * @method string getTimerAction() Obtain Timer name. Currently `TerminateInstances` is the only supported value.
 * @method void setTimerAction(string $TimerAction) Set Timer name. Currently `TerminateInstances` is the only supported value.
 * @method string getActionTime() Obtain Execution time, which must be at least 5 minutes later than the current time. For example, 2018-5-29 11:26:40.
 * @method void setActionTime(string $ActionTime) Set Execution time, which must be at least 5 minutes later than the current time. For example, 2018-5-29 11:26:40.
 */

/**
 *Scheduled tasks.
 */
class ActionTimer extends AbstractModel
{
    /**
     * @var Externals Additional data
     */
    public $Externals;

    /**
     * @var string Timer name. Currently `TerminateInstances` is the only supported value.
     */
    public $TimerAction;

    /**
     * @var string Execution time, which must be at least 5 minutes later than the current time. For example, 2018-5-29 11:26:40.
     */
    public $ActionTime;
    /**
     * @param Externals $Externals Additional data
     * @param string $TimerAction Timer name. Currently `TerminateInstances` is the only supported value.
     * @param string $ActionTime Execution time, which must be at least 5 minutes later than the current time. For example, 2018-5-29 11:26:40.
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
        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("TimerAction",$param) and $param["TimerAction"] !== null) {
            $this->TimerAction = $param["TimerAction"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }
    }
}
