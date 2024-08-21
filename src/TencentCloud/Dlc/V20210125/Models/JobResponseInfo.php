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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Job information
 *
 * @method string getJobName() Obtain Job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobName(string $JobName) Set Job name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method StatisticInfo getStatisticInfo() Obtain Statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatisticInfo(StatisticInfo $StatisticInfo) Set Statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobConfiguration() Obtain Job configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobConfiguration(string $JobConfiguration) Set Job configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJobStatus() Obtain The current status of the job: 0: initializing; 1: running; 2: executed; 3: writing data; 4: queuing; -1: execution failed; -3: manually terminated. The job execution result is returned only when the job is successfully executed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobStatus(integer $JobStatus) Set The current status of the job: 0: initializing; 1: running; 2: executed; 3: writing data; 4: queuing; -1: execution failed; -3: manually terminated. The job execution result is returned only when the job is successfully executed.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JobResponseInfo extends AbstractModel
{
    /**
     * @var string Job name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobName;

    /**
     * @var StatisticInfo Statistics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatisticInfo;

    /**
     * @var string Job configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobConfiguration;

    /**
     * @var integer The current status of the job: 0: initializing; 1: running; 2: executed; 3: writing data; 4: queuing; -1: execution failed; -3: manually terminated. The job execution result is returned only when the job is successfully executed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobStatus;

    /**
     * @param string $JobName Job name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param StatisticInfo $StatisticInfo Statistics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobConfiguration Job configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JobStatus The current status of the job: 0: initializing; 1: running; 2: executed; 3: writing data; 4: queuing; -1: execution failed; -3: manually terminated. The job execution result is returned only when the job is successfully executed.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("StatisticInfo",$param) and $param["StatisticInfo"] !== null) {
            $this->StatisticInfo = new StatisticInfo();
            $this->StatisticInfo->deserialize($param["StatisticInfo"]);
        }

        if (array_key_exists("JobConfiguration",$param) and $param["JobConfiguration"] !== null) {
            $this->JobConfiguration = $param["JobConfiguration"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }
    }
}
