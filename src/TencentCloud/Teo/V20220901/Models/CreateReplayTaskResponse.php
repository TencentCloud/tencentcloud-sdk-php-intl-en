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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReplayTask response structure.
 *
 * @method string getJobId() Obtain ID of the task.
 * @method void setJobId(string $JobId) Set ID of the task.
 * @method array getFailedList() Obtain List of failed tasks and reasons.
 * @method void setFailedList(array $FailedList) Set List of failed tasks and reasons.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateReplayTaskResponse extends AbstractModel
{
    /**
     * @var string ID of the task.
     */
    public $JobId;

    /**
     * @var array List of failed tasks and reasons.
     */
    public $FailedList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobId ID of the task.
     * @param array $FailedList List of failed tasks and reasons.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("FailedList",$param) and $param["FailedList"] !== null) {
            $this->FailedList = [];
            foreach ($param["FailedList"] as $key => $value){
                $obj = new FailReason();
                $obj->deserialize($value);
                array_push($this->FailedList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
