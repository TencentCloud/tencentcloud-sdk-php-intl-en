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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table definition file details, excluding file content
 *
 * @method string getFileName() Obtain Filename excluding extension
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Filename excluding extension
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileType() Obtain Data interface description language (IDL) type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileType(string $FileType) Set Data interface description language (IDL) type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileExtType() Obtain File extension
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileExtType(string $FileExtType) Set File extension
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFileSize() Obtain File size in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileSize(integer $FileSize) Set File size in bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFileId() Obtain File ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(integer $FileId) Set File ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error message
Note: this field may return null, indicating that no valid values can be obtained.
 */
class IdlFileInfoWithoutContent extends AbstractModel
{
    /**
     * @var string Filename excluding extension
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var string Data interface description language (IDL) type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileType;

    /**
     * @var string File extension
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileExtType;

    /**
     * @var integer File size in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileSize;

    /**
     * @var integer File ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var ErrorInfo Error message
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @param string $FileName Filename excluding extension
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileType Data interface description language (IDL) type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileExtType File extension
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FileSize File size in bytes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FileId File ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error message
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
