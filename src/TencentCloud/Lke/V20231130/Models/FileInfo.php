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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-Time uploaded file information.
 *
 * @method string getFileName() Obtain File name.
 * @method void setFileName(string $FileName) Set File name.
 * @method string getFileSize() Obtain File size.
 * @method void setFileSize(string $FileSize) Set File size.
 * @method string getFileUrl() Obtain URL of the file, address of COS.
 * @method void setFileUrl(string $FileUrl) Set URL of the file, address of COS.
 * @method string getFileType() Obtain File type.
 * @method void setFileType(string $FileType) Set File type.
 * @method string getDocId() Obtain DocID returned after parsing.
 * @method void setDocId(string $DocId) Set DocID returned after parsing.
 * @method string getCreatedAt() Obtain Creation time.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string File name.
     */
    public $FileName;

    /**
     * @var string File size.
     */
    public $FileSize;

    /**
     * @var string URL of the file, address of COS.
     */
    public $FileUrl;

    /**
     * @var string File type.
     */
    public $FileType;

    /**
     * @var string DocID returned after parsing.
     */
    public $DocId;

    /**
     * @var string Creation time.
     */
    public $CreatedAt;

    /**
     * @param string $FileName File name.
     * @param string $FileSize File size.
     * @param string $FileUrl URL of the file, address of COS.
     * @param string $FileType File type.
     * @param string $DocId DocID returned after parsing.
     * @param string $CreatedAt Creation time.
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

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
