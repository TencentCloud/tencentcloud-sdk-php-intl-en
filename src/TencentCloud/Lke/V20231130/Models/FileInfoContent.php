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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File information content
 *
 * @method string getDocBizId() Obtain <p>DocBizId returned by the real-time document parsing API</p>
 * @method void setDocBizId(string $DocBizId) Set <p>DocBizId returned by the real-time document parsing API</p>
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getFileType() Obtain <p>File type</p>
 * @method void setFileType(string $FileType) Set <p>File type</p>
 * @method string getFileSize() Obtain <p>File size in bytes</p>
 * @method void setFileSize(string $FileSize) Set <p>File size in bytes</p>
 * @method string getFileUrl() Obtain <p>File URL</p>
 * @method void setFileUrl(string $FileUrl) Set <p>File URL</p>
 * @method string getDocId() Obtain <p>doc_id returned by the real-time document parsing API.</p>
 * @method void setDocId(string $DocId) Set <p>doc_id returned by the real-time document parsing API.</p>
 * @method string getCreateTime() Obtain <p>File creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>File creation time</p>
 * @method string getLocalPath() Obtain <p>Local path of the file in the sandbox</p>
 * @method void setLocalPath(string $LocalPath) Set <p>Local path of the file in the sandbox</p>
 * @method integer getAuditStatus() Obtain <p>File moderation status</p><p>Enumeration values:</p><ul><li>1: under review</li><li>2: pass review</li><li>3: fail review</li></ul>
 * @method void setAuditStatus(integer $AuditStatus) Set <p>File moderation status</p><p>Enumeration values:</p><ul><li>1: under review</li><li>2: pass review</li><li>3: fail review</li></ul>
 */
class FileInfoContent extends AbstractModel
{
    /**
     * @var string <p>DocBizId returned by the real-time document parsing API</p>
     * @deprecated
     */
    public $DocBizId;

    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>File type</p>
     */
    public $FileType;

    /**
     * @var string <p>File size in bytes</p>
     */
    public $FileSize;

    /**
     * @var string <p>File URL</p>
     */
    public $FileUrl;

    /**
     * @var string <p>doc_id returned by the real-time document parsing API.</p>
     */
    public $DocId;

    /**
     * @var string <p>File creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Local path of the file in the sandbox</p>
     */
    public $LocalPath;

    /**
     * @var integer <p>File moderation status</p><p>Enumeration values:</p><ul><li>1: under review</li><li>2: pass review</li><li>3: fail review</li></ul>
     */
    public $AuditStatus;

    /**
     * @param string $DocBizId <p>DocBizId returned by the real-time document parsing API</p>
     * @param string $FileName <p>File name.</p>
     * @param string $FileType <p>File type</p>
     * @param string $FileSize <p>File size in bytes</p>
     * @param string $FileUrl <p>File URL</p>
     * @param string $DocId <p>doc_id returned by the real-time document parsing API.</p>
     * @param string $CreateTime <p>File creation time</p>
     * @param string $LocalPath <p>Local path of the file in the sandbox</p>
     * @param integer $AuditStatus <p>File moderation status</p><p>Enumeration values:</p><ul><li>1: under review</li><li>2: pass review</li><li>3: fail review</li></ul>
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }
    }
}
