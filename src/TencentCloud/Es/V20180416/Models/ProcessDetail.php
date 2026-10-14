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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task progress details
 *
 * @method integer getCompleted() Obtain <p>Number of completed</p>
 * @method void setCompleted(integer $Completed) Set <p>Number of completed</p>
 * @method integer getRemain() Obtain <p>Remaining quantity</p>
 * @method void setRemain(integer $Remain) Set <p>Remaining quantity</p>
 * @method integer getTotal() Obtain <p>Total quantity.</p>
 * @method void setTotal(integer $Total) Set <p>Total quantity.</p>
 * @method integer getTaskType() Obtain <p>Task type:<br>60: Restart task<br>70: Shard migration task<br>80: Node configuration modification task</p>
 * @method void setTaskType(integer $TaskType) Set <p>Task type:<br>60: Restart task<br>70: Shard migration task<br>80: Node configuration modification task</p>
 * @method integer getEstimatedTimeRemaining() Obtain <p>Estimated remaining time</p><p>Unit: seconds</p>
 * @method void setEstimatedTimeRemaining(integer $EstimatedTimeRemaining) Set <p>Estimated remaining time</p><p>Unit: seconds</p>
 */
class ProcessDetail extends AbstractModel
{
    /**
     * @var integer <p>Number of completed</p>
     */
    public $Completed;

    /**
     * @var integer <p>Remaining quantity</p>
     */
    public $Remain;

    /**
     * @var integer <p>Total quantity.</p>
     */
    public $Total;

    /**
     * @var integer <p>Task type:<br>60: Restart task<br>70: Shard migration task<br>80: Node configuration modification task</p>
     */
    public $TaskType;

    /**
     * @var integer <p>Estimated remaining time</p><p>Unit: seconds</p>
     */
    public $EstimatedTimeRemaining;

    /**
     * @param integer $Completed <p>Number of completed</p>
     * @param integer $Remain <p>Remaining quantity</p>
     * @param integer $Total <p>Total quantity.</p>
     * @param integer $TaskType <p>Task type:<br>60: Restart task<br>70: Shard migration task<br>80: Node configuration modification task</p>
     * @param integer $EstimatedTimeRemaining <p>Estimated remaining time</p><p>Unit: seconds</p>
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
        if (array_key_exists("Completed",$param) and $param["Completed"] !== null) {
            $this->Completed = $param["Completed"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EstimatedTimeRemaining",$param) and $param["EstimatedTimeRemaining"] !== null) {
            $this->EstimatedTimeRemaining = $param["EstimatedTimeRemaining"];
        }
    }
}
