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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI optimizer status
 *
 * @method string getStatus() Obtain <p>Status. closing-Closing, closed-Closed, opening-Opening, training-Training, trained-Trained, train_failed-Training failed.</p>
 * @method void setStatus(string $Status) Set <p>Status. closing-Closing, closed-Closed, opening-Opening, training-Training, trained-Trained, train_failed-Training failed.</p>
 * @method string getOpenTime() Obtain <p>Start time.</p>
 * @method void setOpenTime(string $OpenTime) Set <p>Start time.</p>
 * @method integer getTrainingProgress() Obtain <p>Training progress</p>
 * @method void setTrainingProgress(integer $TrainingProgress) Set <p>Training progress</p>
 */
class AIOptimizerStatus extends AbstractModel
{
    /**
     * @var string <p>Status. closing-Closing, closed-Closed, opening-Opening, training-Training, trained-Trained, train_failed-Training failed.</p>
     */
    public $Status;

    /**
     * @var string <p>Start time.</p>
     */
    public $OpenTime;

    /**
     * @var integer <p>Training progress</p>
     */
    public $TrainingProgress;

    /**
     * @param string $Status <p>Status. closing-Closing, closed-Closed, opening-Opening, training-Training, trained-Trained, train_failed-Training failed.</p>
     * @param string $OpenTime <p>Start time.</p>
     * @param integer $TrainingProgress <p>Training progress</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OpenTime",$param) and $param["OpenTime"] !== null) {
            $this->OpenTime = $param["OpenTime"];
        }

        if (array_key_exists("TrainingProgress",$param) and $param["TrainingProgress"] !== null) {
            $this->TrainingProgress = $param["TrainingProgress"];
        }
    }
}
