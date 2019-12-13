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
 * @method string getStdoutRedirectPath() 获取Standard output redirection path
 * @method void setStdoutRedirectPath(string $StdoutRedirectPath) 设置Standard output redirection path
 * @method string getStderrRedirectPath() 获取Standard error redirection path
 * @method void setStderrRedirectPath(string $StderrRedirectPath) 设置Standard error redirection path
 * @method string getStdoutRedirectFileName() 获取Standard output redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
 * @method void setStdoutRedirectFileName(string $StdoutRedirectFileName) 设置Standard output redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
 * @method string getStderrRedirectFileName() 获取Standard error redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
 * @method void setStderrRedirectFileName(string $StderrRedirectFileName) 设置Standard error redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
 */

/**
 *Redirection information

 */
class RedirectInfo extends AbstractModel
{
    /**
     * @var string Standard output redirection path
     */
    public $StdoutRedirectPath;

    /**
     * @var string Standard error redirection path
     */
    public $StderrRedirectPath;

    /**
     * @var string Standard output redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
     */
    public $StdoutRedirectFileName;

    /**
     * @var string Standard error redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
     */
    public $StderrRedirectFileName;
    /**
     * @param string $StdoutRedirectPath Standard output redirection path
     * @param string $StderrRedirectPath Standard error redirection path
     * @param string $StdoutRedirectFileName Standard output redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
     * @param string $StderrRedirectFileName Standard error redirection file name, which supports three placeholders: ${BATCH_JOB_ID}, ${BATCH_TASK_NAME}, and ${BATCH_TASK_INSTANCE_INDEX}
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StdoutRedirectPath",$param) and $param["StdoutRedirectPath"] !== null) {
            $this->StdoutRedirectPath = $param["StdoutRedirectPath"];
        }

        if (array_key_exists("StderrRedirectPath",$param) and $param["StderrRedirectPath"] !== null) {
            $this->StderrRedirectPath = $param["StderrRedirectPath"];
        }

        if (array_key_exists("StdoutRedirectFileName",$param) and $param["StdoutRedirectFileName"] !== null) {
            $this->StdoutRedirectFileName = $param["StdoutRedirectFileName"];
        }

        if (array_key_exists("StderrRedirectFileName",$param) and $param["StderrRedirectFileName"] !== null) {
            $this->StderrRedirectFileName = $param["StderrRedirectFileName"];
        }
    }
}
