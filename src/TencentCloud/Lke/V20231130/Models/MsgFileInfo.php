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
 * Document information.
 *
 * @method string getFileName() Obtain Document name.
 * @method void setFileName(string $FileName) Set Document name.
 * @method string getFileSize() Obtain Document size.
 * @method void setFileSize(string $FileSize) Set Document size.
 * @method string getFileUrl() Obtain Document URL.
 * @method void setFileUrl(string $FileUrl) Set Document URL.
 * @method string getFileType() Obtain Document type.
 * @method void setFileType(string $FileType) Set Document type.
 * @method string getDocId() Obtain Document ID.
 * @method void setDocId(string $DocId) Set Document ID.
 */
class MsgFileInfo extends AbstractModel
{
    /**
     * @var string Document name.
     */
    public $FileName;

    /**
     * @var string Document size.
     */
    public $FileSize;

    /**
     * @var string Document URL.
     */
    public $FileUrl;

    /**
     * @var string Document type.
     */
    public $FileType;

    /**
     * @var string Document ID.
     */
    public $DocId;

    /**
     * @param string $FileName Document name.
     * @param string $FileSize Document size.
     * @param string $FileUrl Document URL.
     * @param string $FileType Document type.
     * @param string $DocId Document ID.
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
    }
}
