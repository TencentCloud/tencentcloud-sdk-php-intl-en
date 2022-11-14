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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter required to create a recurring sending task
 *
 * @method string getBeginTime() Obtain Start time of the task
 * @method void setBeginTime(string $BeginTime) Set Start time of the task
 * @method integer getIntervalTime() Obtain Task recurrence in hours
 * @method void setIntervalTime(integer $IntervalTime) Set Task recurrence in hours
 * @method integer getTermCycle() Obtain Specifies whether to end the cycle. This parameter is used to update the task. Valid values: 0: No; 1: Yes.
 * @method void setTermCycle(integer $TermCycle) Set Specifies whether to end the cycle. This parameter is used to update the task. Valid values: 0: No; 1: Yes.
 */
class CycleEmailParam extends AbstractModel
{
    /**
     * @var string Start time of the task
     */
    public $BeginTime;

    /**
     * @var integer Task recurrence in hours
     */
    public $IntervalTime;

    /**
     * @var integer Specifies whether to end the cycle. This parameter is used to update the task. Valid values: 0: No; 1: Yes.
     */
    public $TermCycle;

    /**
     * @param string $BeginTime Start time of the task
     * @param integer $IntervalTime Task recurrence in hours
     * @param integer $TermCycle Specifies whether to end the cycle. This parameter is used to update the task. Valid values: 0: No; 1: Yes.
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("TermCycle",$param) and $param["TermCycle"] !== null) {
            $this->TermCycle = $param["TermCycle"];
        }
    }
}
