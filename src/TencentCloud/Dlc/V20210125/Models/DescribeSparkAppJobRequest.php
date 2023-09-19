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
 * DescribeSparkAppJob request structure.
 *
 * @method string getJobId() Obtain The Spark job ID. If it co-exists with `JobName`, `JobName` is invalid. At least `JobId` or `JobName` must be used.
 * @method void setJobId(string $JobId) Set The Spark job ID. If it co-exists with `JobName`, `JobName` is invalid. At least `JobId` or `JobName` must be used.
 * @method string getJobName() Obtain Spark job name
 * @method void setJobName(string $JobName) Set Spark job name
 */
class DescribeSparkAppJobRequest extends AbstractModel
{
    /**
     * @var string The Spark job ID. If it co-exists with `JobName`, `JobName` is invalid. At least `JobId` or `JobName` must be used.
     */
    public $JobId;

    /**
     * @var string Spark job name
     */
    public $JobName;

    /**
     * @param string $JobId The Spark job ID. If it co-exists with `JobName`, `JobName` is invalid. At least `JobId` or `JobName` must be used.
     * @param string $JobName Spark job name
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

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }
    }
}
