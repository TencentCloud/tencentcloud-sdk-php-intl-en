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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit log file.
 *
 * @method string getFileName() Obtain Audit log file name.
 * @method void setFileName(string $FileName) Set Audit log file name.
 * @method string getCreateTime() Obtain Creation time of the audit log file, in the format: "2019-03-20 17:09:13".
 * @method void setCreateTime(string $CreateTime) Set Creation time of the audit log file, in the format: "2019-03-20 17:09:13".
 * @method string getStatus() Obtain File status. Possible return values:"creating" - Generating;"failed" - Creation failed;"success" - Generated.
 * @method void setStatus(string $Status) Set File status. Possible return values:"creating" - Generating;"failed" - Creation failed;"success" - Generated.
 * @method integer getFileSize() Obtain File size in KB.
 * @method void setFileSize(integer $FileSize) Set File size in KB.
 * @method string getDownloadUrl() Obtain Download URL for the audit log.
 * @method void setDownloadUrl(string $DownloadUrl) Set Download URL for the audit log.
 * @method string getErrMsg() Obtain Error message.
 * @method void setErrMsg(string $ErrMsg) Set Error message.
 */
class AuditLogFile extends AbstractModel
{
    /**
     * @var string Audit log file name.
     */
    public $FileName;

    /**
     * @var string Creation time of the audit log file, in the format: "2019-03-20 17:09:13".
     */
    public $CreateTime;

    /**
     * @var string File status. Possible return values:"creating" - Generating;"failed" - Creation failed;"success" - Generated.
     */
    public $Status;

    /**
     * @var integer File size in KB.
     */
    public $FileSize;

    /**
     * @var string Download URL for the audit log.
     */
    public $DownloadUrl;

    /**
     * @var string Error message.
     */
    public $ErrMsg;

    /**
     * @param string $FileName Audit log file name.
     * @param string $CreateTime Creation time of the audit log file, in the format: "2019-03-20 17:09:13".
     * @param string $Status File status. Possible return values:"creating" - Generating;"failed" - Creation failed;"success" - Generated.
     * @param integer $FileSize File size in KB.
     * @param string $DownloadUrl Download URL for the audit log.
     * @param string $ErrMsg Error message.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
