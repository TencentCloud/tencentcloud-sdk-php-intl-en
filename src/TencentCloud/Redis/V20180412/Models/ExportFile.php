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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * export file
 *
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getStatus() Obtain <p>Status value.</p><p>Enumeration values: </p><ul><li>creating: File creation in progress, </li><li>success: File generated, </li><li>failed: File generation failed, </li><li>deleted: File deleted.</li></ul>
 * @method void setStatus(string $Status) Set <p>Status value.</p><p>Enumeration values: </p><ul><li>creating: File creation in progress, </li><li>success: File generated, </li><li>failed: File generation failed, </li><li>deleted: File deleted.</li></ul>
 * @method integer getFileSize() Obtain <p>File size. Measurement unit: byte.</p>
 * @method void setFileSize(integer $FileSize) Set <p>File size. Measurement unit: byte.</p>
 * @method string getCreateTime() Obtain <p>File creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>File creation time.</p>
 * @method string getDownloadUrl() Obtain <p>Download link.</p>
 * @method void setDownloadUrl(string $DownloadUrl) Set <p>Download link.</p>
 * @method string getErrMsg() Obtain <p>Error information of the exported file.</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error information of the exported file.</p>
 * @method integer getProgress() Obtain <p>Progress of the exported file.</p>
 * @method void setProgress(integer $Progress) Set <p>Progress of the exported file.</p>
 * @method string getFinishTime() Obtain <p>Completion time of the exported file.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Completion time of the exported file.</p>
 * @method integer getAsyncRequestId() Obtain <p>Asynchronous request ID.</p>
 * @method void setAsyncRequestId(integer $AsyncRequestId) Set <p>Asynchronous request ID.</p>
 */
class ExportFile extends AbstractModel
{
    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>Status value.</p><p>Enumeration values: </p><ul><li>creating: File creation in progress, </li><li>success: File generated, </li><li>failed: File generation failed, </li><li>deleted: File deleted.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>File size. Measurement unit: byte.</p>
     */
    public $FileSize;

    /**
     * @var string <p>File creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Download link.</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>Error information of the exported file.</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>Progress of the exported file.</p>
     */
    public $Progress;

    /**
     * @var string <p>Completion time of the exported file.</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>Asynchronous request ID.</p>
     */
    public $AsyncRequestId;

    /**
     * @param string $FileName <p>File name.</p>
     * @param string $Status <p>Status value.</p><p>Enumeration values: </p><ul><li>creating: File creation in progress, </li><li>success: File generated, </li><li>failed: File generation failed, </li><li>deleted: File deleted.</li></ul>
     * @param integer $FileSize <p>File size. Measurement unit: byte.</p>
     * @param string $CreateTime <p>File creation time.</p>
     * @param string $DownloadUrl <p>Download link.</p>
     * @param string $ErrMsg <p>Error information of the exported file.</p>
     * @param integer $Progress <p>Progress of the exported file.</p>
     * @param string $FinishTime <p>Completion time of the exported file.</p>
     * @param integer $AsyncRequestId <p>Asynchronous request ID.</p>
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

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }
    }
}
