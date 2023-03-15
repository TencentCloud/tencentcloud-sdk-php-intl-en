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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Processes stopped by the environment (Only applications stopped by the action of stopping the environment)
 *
 * @method integer getApplicationNumNeedToStop() Obtain Number of applications to stop
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationNumNeedToStop(integer $ApplicationNumNeedToStop) Set Number of applications to stop
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStoppedApplicationNum() Obtain Number of stopped applications
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStoppedApplicationNum(integer $StoppedApplicationNum) Set Number of stopped applications
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStopFailedApplicationNum() Obtain Number of applications failed to be stopped
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStopFailedApplicationNum(integer $StopFailedApplicationNum) Set Number of applications failed to be stopped
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class TemEnvironmentStoppingStatus extends AbstractModel
{
    /**
     * @var integer Number of applications to stop
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationNumNeedToStop;

    /**
     * @var integer Number of stopped applications
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StoppedApplicationNum;

    /**
     * @var integer Number of applications failed to be stopped
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StopFailedApplicationNum;

    /**
     * @param integer $ApplicationNumNeedToStop Number of applications to stop
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StoppedApplicationNum Number of stopped applications
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StopFailedApplicationNum Number of applications failed to be stopped
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationNumNeedToStop",$param) and $param["ApplicationNumNeedToStop"] !== null) {
            $this->ApplicationNumNeedToStop = $param["ApplicationNumNeedToStop"];
        }

        if (array_key_exists("StoppedApplicationNum",$param) and $param["StoppedApplicationNum"] !== null) {
            $this->StoppedApplicationNum = $param["StoppedApplicationNum"];
        }

        if (array_key_exists("StopFailedApplicationNum",$param) and $param["StopFailedApplicationNum"] !== null) {
            $this->StopFailedApplicationNum = $param["StopFailedApplicationNum"];
        }
    }
}
