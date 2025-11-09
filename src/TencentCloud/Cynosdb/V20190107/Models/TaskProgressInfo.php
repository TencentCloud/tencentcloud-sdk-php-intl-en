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
 * Task progress query.
 *
 * @method string getCurrentStep() Obtain Current step.
 * @method void setCurrentStep(string $CurrentStep) Set Current step.
 * @method integer getCurrentStepProgress() Obtain Current progress.
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) Set Current progress.
 * @method string getCurrentStepRemainingTime() Obtain Estimated Time
 * @method void setCurrentStepRemainingTime(string $CurrentStepRemainingTime) Set Estimated Time
 */
class TaskProgressInfo extends AbstractModel
{
    /**
     * @var string Current step.
     */
    public $CurrentStep;

    /**
     * @var integer Current progress.
     */
    public $CurrentStepProgress;

    /**
     * @var string Estimated Time
     */
    public $CurrentStepRemainingTime;

    /**
     * @param string $CurrentStep Current step.
     * @param integer $CurrentStepProgress Current progress.
     * @param string $CurrentStepRemainingTime Estimated Time
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
        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("CurrentStepRemainingTime",$param) and $param["CurrentStepRemainingTime"] !== null) {
            $this->CurrentStepRemainingTime = $param["CurrentStepRemainingTime"];
        }
    }
}
