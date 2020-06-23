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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Duplicate check task information
 *
 * @method string getJobId() Obtain Duplicate check task ID, which is used to query and get the progress and result of the task.
 * @method void setJobId(string $JobId) Set Duplicate check task ID, which is used to query and get the progress and result of the task.
 * @method integer getStartTime() Obtain Start time. 
The `StartTime` value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). 
For more information, please see the UNIX time document.
 * @method void setStartTime(integer $StartTime) Set Start time. 
The `StartTime` value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). 
For more information, please see the UNIX time document.
 * @method integer getJobStatus() Obtain Whether the duplicate check task is completed. 0: completed; 1: uncompleted; 2: failed.
 * @method void setJobStatus(integer $JobStatus) Set Whether the duplicate check task is completed. 0: completed; 1: uncompleted; 2: failed.
 */
class JobIdInfo extends AbstractModel
{
    /**
     * @var string Duplicate check task ID, which is used to query and get the progress and result of the task.
     */
    public $JobId;

    /**
     * @var integer Start time. 
The `StartTime` value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). 
For more information, please see the UNIX time document.
     */
    public $StartTime;

    /**
     * @var integer Whether the duplicate check task is completed. 0: completed; 1: uncompleted; 2: failed.
     */
    public $JobStatus;

    /**
     * @param string $JobId Duplicate check task ID, which is used to query and get the progress and result of the task.
     * @param integer $StartTime Start time. 
The `StartTime` value is the number of milliseconds between the UNIX epoch time and the group creation time. 
The UNIX epoch time is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). 
For more information, please see the UNIX time document.
     * @param integer $JobStatus Whether the duplicate check task is completed. 0: completed; 1: uncompleted; 2: failed.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }
    }
}
