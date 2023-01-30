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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container runtime security - File attribute information
 *
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method string getFileType() Obtain File type
 * @method void setFileType(string $FileType) Set File type
 * @method integer getFileSize() Obtain File size in bytes
 * @method void setFileSize(integer $FileSize) Set File size in bytes
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getFileCreateTime() Obtain File creation time
 * @method void setFileCreateTime(string $FileCreateTime) Set File creation time
 * @method string getLatestTamperedFileMTime() Obtain Time when the file is last tampered with
 * @method void setLatestTamperedFileMTime(string $LatestTamperedFileMTime) Set Time when the file is last tampered with
 * @method string getNewFile() Obtain Content of the new file
 * @method void setNewFile(string $NewFile) Set Content of the new file
 * @method string getFileDiff() Obtain Differences between old and new files
 * @method void setFileDiff(string $FileDiff) Set Differences between old and new files
 */
class FileAttributeInfo extends AbstractModel
{
    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var string File type
     */
    public $FileType;

    /**
     * @var integer File size in bytes
     */
    public $FileSize;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @var string File creation time
     */
    public $FileCreateTime;

    /**
     * @var string Time when the file is last tampered with
     */
    public $LatestTamperedFileMTime;

    /**
     * @var string Content of the new file
     */
    public $NewFile;

    /**
     * @var string Differences between old and new files
     */
    public $FileDiff;

    /**
     * @param string $FileName Filename
     * @param string $FileType File type
     * @param integer $FileSize File size in bytes
     * @param string $FilePath File path
     * @param string $FileCreateTime File creation time
     * @param string $LatestTamperedFileMTime Time when the file is last tampered with
     * @param string $NewFile Content of the new file
     * @param string $FileDiff Differences between old and new files
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileCreateTime",$param) and $param["FileCreateTime"] !== null) {
            $this->FileCreateTime = $param["FileCreateTime"];
        }

        if (array_key_exists("LatestTamperedFileMTime",$param) and $param["LatestTamperedFileMTime"] !== null) {
            $this->LatestTamperedFileMTime = $param["LatestTamperedFileMTime"];
        }

        if (array_key_exists("NewFile",$param) and $param["NewFile"] !== null) {
            $this->NewFile = $param["NewFile"];
        }

        if (array_key_exists("FileDiff",$param) and $param["FileDiff"] !== null) {
            $this->FileDiff = $param["FileDiff"];
        }
    }
}
