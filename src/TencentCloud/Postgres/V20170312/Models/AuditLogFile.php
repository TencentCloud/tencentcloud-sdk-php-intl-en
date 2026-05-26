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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database Audit log file
 *
 * @method string getFileName() Obtain <p>File name</p>
 * @method void setFileName(string $FileName) Set <p>File name</p>
 * @method string getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>running: Creating, </li><li>failed: Failure.</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>running: Creating, </li><li>failed: Failure.</li></ul>
 * @method integer getFileSize() Obtain <p>File size</p><p>Unit: MB</p>
 * @method void setFileSize(integer $FileSize) Set <p>File size</p><p>Unit: MB</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getDownloadUrl() Obtain <p>Download link</p>
 * @method void setDownloadUrl(string $DownloadUrl) Set <p>Download link</p>
 * @method string getErrMsg() Obtain <p>Error message</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error message</p>
 * @method integer getProgress() Obtain <p>Download progress</p>
 * @method void setProgress(integer $Progress) Set <p>Download progress</p>
 * @method string getFinishTime() Obtain <p>Completion time.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Completion time.</p>
 */
class AuditLogFile extends AbstractModel
{
    /**
     * @var string <p>File name</p>
     */
    public $FileName;

    /**
     * @var string <p>Task status.</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>running: Creating, </li><li>failed: Failure.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>File size</p><p>Unit: MB</p>
     */
    public $FileSize;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Download link</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>Error message</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>Download progress</p>
     */
    public $Progress;

    /**
     * @var string <p>Completion time.</p>
     */
    public $FinishTime;

    /**
     * @param string $FileName <p>File name</p>
     * @param string $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>running: Creating, </li><li>failed: Failure.</li></ul>
     * @param integer $FileSize <p>File size</p><p>Unit: MB</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $DownloadUrl <p>Download link</p>
     * @param string $ErrMsg <p>Error message</p>
     * @param integer $Progress <p>Download progress</p>
     * @param string $FinishTime <p>Completion time.</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
