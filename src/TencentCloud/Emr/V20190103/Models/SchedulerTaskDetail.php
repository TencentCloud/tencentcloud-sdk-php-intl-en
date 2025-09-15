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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduling task details
 *
 * @method string getStep() Obtain Steps.
 * @method void setStep(string $Step) Set Steps.
 * @method string getProgress() Obtain Progress.
 * @method void setProgress(string $Progress) Set Progress.
 * @method string getFailReason() Obtain Failure information.
 * @method void setFailReason(string $FailReason) Set Failure information.
 * @method integer getJobId() Obtain ID used to obtain details.
 * @method void setJobId(integer $JobId) Set ID used to obtain details.
 */
class SchedulerTaskDetail extends AbstractModel
{
    /**
     * @var string Steps.
     */
    public $Step;

    /**
     * @var string Progress.
     */
    public $Progress;

    /**
     * @var string Failure information.
     */
    public $FailReason;

    /**
     * @var integer ID used to obtain details.
     */
    public $JobId;

    /**
     * @param string $Step Steps.
     * @param string $Progress Progress.
     * @param string $FailReason Failure information.
     * @param integer $JobId ID used to obtain details.
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
