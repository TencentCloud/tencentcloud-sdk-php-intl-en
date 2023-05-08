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
 * Task instance log details.
 *
 * @method integer getTaskInstanceIndex() Obtain Task instance
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) Set Task instance
 * @method string getStdoutLog() Obtain Standard output log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStdoutLog(string $StdoutLog) Set Standard output log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStderrLog() Obtain Standard error log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStderrLog(string $StderrLog) Set Standard error log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStdoutRedirectPath() Obtain Standard output redirection path
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStdoutRedirectPath(string $StdoutRedirectPath) Set Standard output redirection path
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStderrRedirectPath() Obtain Standard error redirection path
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStderrRedirectPath(string $StderrRedirectPath) Set Standard error redirection path
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStdoutRedirectFileName() Obtain Standard output redirection file name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStdoutRedirectFileName(string $StdoutRedirectFileName) Set Standard output redirection file name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStderrRedirectFileName() Obtain Standard error redirection file name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStderrRedirectFileName(string $StderrRedirectFileName) Set Standard error redirection file name
Note: This field may return `null`, indicating that no valid value was found.
 */
class TaskInstanceLog extends AbstractModel
{
    /**
     * @var integer Task instance
     */
    public $TaskInstanceIndex;

    /**
     * @var string Standard output log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StdoutLog;

    /**
     * @var string Standard error log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StderrLog;

    /**
     * @var string Standard output redirection path
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StdoutRedirectPath;

    /**
     * @var string Standard error redirection path
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StderrRedirectPath;

    /**
     * @var string Standard output redirection file name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StdoutRedirectFileName;

    /**
     * @var string Standard error redirection file name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StderrRedirectFileName;

    /**
     * @param integer $TaskInstanceIndex Task instance
     * @param string $StdoutLog Standard output log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StderrLog Standard error log (Base64-encoded, up to 2048 bytes after decompression)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StdoutRedirectPath Standard output redirection path
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StderrRedirectPath Standard error redirection path
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StdoutRedirectFileName Standard output redirection file name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StderrRedirectFileName Standard error redirection file name
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("StdoutLog",$param) and $param["StdoutLog"] !== null) {
            $this->StdoutLog = $param["StdoutLog"];
        }

        if (array_key_exists("StderrLog",$param) and $param["StderrLog"] !== null) {
            $this->StderrLog = $param["StderrLog"];
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
