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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SQL file information
 *
 * @method string getUploadTime() Obtain Upload time
 * @method void setUploadTime(string $UploadTime) Set Upload time
 * @method UploadInfo getUploadInfo() Obtain Upload progress
 * @method void setUploadInfo(UploadInfo $UploadInfo) Set Upload progress
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method integer getFileSize() Obtain File size in bytes
 * @method void setFileSize(integer $FileSize) Set File size in bytes
 * @method integer getIsUploadFinished() Obtain Whether upload is finished. Valid values: 0 (not completed), 1 (completed)
 * @method void setIsUploadFinished(integer $IsUploadFinished) Set Whether upload is finished. Valid values: 0 (not completed), 1 (completed)
 * @method string getFileId() Obtain File ID
 * @method void setFileId(string $FileId) Set File ID
 */
class SqlFileInfo extends AbstractModel
{
    /**
     * @var string Upload time
     */
    public $UploadTime;

    /**
     * @var UploadInfo Upload progress
     */
    public $UploadInfo;

    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var integer File size in bytes
     */
    public $FileSize;

    /**
     * @var integer Whether upload is finished. Valid values: 0 (not completed), 1 (completed)
     */
    public $IsUploadFinished;

    /**
     * @var string File ID
     */
    public $FileId;

    /**
     * @param string $UploadTime Upload time
     * @param UploadInfo $UploadInfo Upload progress
     * @param string $FileName Filename
     * @param integer $FileSize File size in bytes
     * @param integer $IsUploadFinished Whether upload is finished. Valid values: 0 (not completed), 1 (completed)
     * @param string $FileId File ID
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
        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("UploadInfo",$param) and $param["UploadInfo"] !== null) {
            $this->UploadInfo = new UploadInfo();
            $this->UploadInfo->deserialize($param["UploadInfo"]);
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("IsUploadFinished",$param) and $param["IsUploadFinished"] !== null) {
            $this->IsUploadFinished = $param["IsUploadFinished"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
