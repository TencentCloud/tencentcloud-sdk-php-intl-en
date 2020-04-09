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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table definition file details, including file content
 *
 * @method string getFileName() Obtain Filename excluding extension
 * @method void setFileName(string $FileName) Set Filename excluding extension
 * @method string getFileType() Obtain Data interface description language (IDL) type
 * @method void setFileType(string $FileType) Set Data interface description language (IDL) type
 * @method string getFileExtType() Obtain File extension
 * @method void setFileExtType(string $FileExtType) Set File extension
 * @method integer getFileSize() Obtain File size in bytes
 * @method void setFileSize(integer $FileSize) Set File size in bytes
 * @method integer getFileId() Obtain File ID, which is meaningful for files already uploaded
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(integer $FileId) Set File ID, which is meaningful for files already uploaded
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileContent() Obtain File content, which is meaningful for files to be uploaded in this request
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileContent(string $FileContent) Set File content, which is meaningful for files to be uploaded in this request
Note: this field may return null, indicating that no valid values can be obtained.
 */
class IdlFileInfo extends AbstractModel
{
    /**
     * @var string Filename excluding extension
     */
    public $FileName;

    /**
     * @var string Data interface description language (IDL) type
     */
    public $FileType;

    /**
     * @var string File extension
     */
    public $FileExtType;

    /**
     * @var integer File size in bytes
     */
    public $FileSize;

    /**
     * @var integer File ID, which is meaningful for files already uploaded
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string File content, which is meaningful for files to be uploaded in this request
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileContent;

    /**
     * @param string $FileName Filename excluding extension
     * @param string $FileType Data interface description language (IDL) type
     * @param string $FileExtType File extension
     * @param integer $FileSize File size in bytes
     * @param integer $FileId File ID, which is meaningful for files already uploaded
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileContent File content, which is meaningful for files to be uploaded in this request
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

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
