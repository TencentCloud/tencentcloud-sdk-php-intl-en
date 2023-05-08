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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Local redirection information
 *
 * @method string getStdoutLocalPath() Obtain Standard output redirection local path
 * @method void setStdoutLocalPath(string $StdoutLocalPath) Set Standard output redirection local path
 * @method string getStderrLocalPath() Obtain Standard error redirection local path
 * @method void setStderrLocalPath(string $StderrLocalPath) Set Standard error redirection local path
 * @method string getStdoutLocalFileName() Obtain Standard output redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
 * @method void setStdoutLocalFileName(string $StdoutLocalFileName) Set Standard output redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
 * @method string getStderrLocalFileName() Obtain Standard error redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
 * @method void setStderrLocalFileName(string $StderrLocalFileName) Set Standard error redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
 */
class RedirectLocalInfo extends AbstractModel
{
    /**
     * @var string Standard output redirection local path
     */
    public $StdoutLocalPath;

    /**
     * @var string Standard error redirection local path
     */
    public $StderrLocalPath;

    /**
     * @var string Standard output redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
     */
    public $StdoutLocalFileName;

    /**
     * @var string Standard error redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
     */
    public $StderrLocalFileName;

    /**
     * @param string $StdoutLocalPath Standard output redirection local path
     * @param string $StderrLocalPath Standard error redirection local path
     * @param string $StdoutLocalFileName Standard output redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
     * @param string $StderrLocalFileName Standard error redirection local file name, which supports three placeholders: `${BATCH_JOB_ID}`, `${BATCH_TASK_NAME}`, and `${BATCH_TASK_INSTANCE_INDEX}`
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
        if (array_key_exists("StdoutLocalPath",$param) and $param["StdoutLocalPath"] !== null) {
            $this->StdoutLocalPath = $param["StdoutLocalPath"];
        }

        if (array_key_exists("StderrLocalPath",$param) and $param["StderrLocalPath"] !== null) {
            $this->StderrLocalPath = $param["StderrLocalPath"];
        }

        if (array_key_exists("StdoutLocalFileName",$param) and $param["StdoutLocalFileName"] !== null) {
            $this->StdoutLocalFileName = $param["StdoutLocalFileName"];
        }

        if (array_key_exists("StderrLocalFileName",$param) and $param["StderrLocalFileName"] !== null) {
            $this->StderrLocalFileName = $param["StderrLocalFileName"];
        }
    }
}
