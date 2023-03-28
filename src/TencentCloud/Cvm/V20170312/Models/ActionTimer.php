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
 * @method string getTimerAction() Obtain Timer name. Currently `TerminateInstances` is the only supported value.
 * @method void setTimerAction(string $TimerAction) Set Timer name. Currently `TerminateInstances` is the only supported value.
 * @method string getActionTime() Obtain Execution time, which follows the ISO8601 standard and uses UTC time. It must be at least 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
 * @method void setActionTime(string $ActionTime) Set Execution time, which follows the ISO8601 standard and uses UTC time. It must be at least 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
 * @method Externals getExternals() Obtain Additional data
 * @method void setExternals(Externals $Externals) Set Additional data
 */
class ActionTimer extends AbstractModel
{
    /**
     * @var string Timer name. Currently `TerminateInstances` is the only supported value.
     */
    public $TimerAction;

    /**
     * @var string Execution time, which follows the ISO8601 standard and uses UTC time. It must be at least 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
     */
    public $ActionTime;

    /**
     * @var Externals Additional data
     */
    public $Externals;

    /**
     * @param string $TimerAction Timer name. Currently `TerminateInstances` is the only supported value.
     * @param string $ActionTime Execution time, which follows the ISO8601 standard and uses UTC time. It must be at least 5 minutes later than the current time. Format: YYYY-MM-DDThh:mm:ssZ. For example: 2018-05-29T11:26:40Z.
     * @param Externals $Externals Additional data
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
    }
}
