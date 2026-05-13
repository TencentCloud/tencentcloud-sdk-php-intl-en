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
 * 
 *
 * @method string getDocBizId() Obtain 
 * @method void setDocBizId(string $DocBizId) Set 
 * @method string getFileName() Obtain 
 * @method void setFileName(string $FileName) Set 
 * @method string getFileType() Obtain 
 * @method void setFileType(string $FileType) Set 
 * @method string getFileSize() Obtain 
 * @method void setFileSize(string $FileSize) Set 
 * @method string getFileUrl() Obtain 
 * @method void setFileUrl(string $FileUrl) Set 
 * @method string getDocId() Obtain 
 * @method void setDocId(string $DocId) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 */
class FileInfoContent extends AbstractModel
{
    /**
     * @var string 
     * @deprecated
     */
    public $DocBizId;

    /**
     * @var string 
     */
    public $FileName;

    /**
     * @var string 
     */
    public $FileType;

    /**
     * @var string 
     */
    public $FileSize;

    /**
     * @var string 
     */
    public $FileUrl;

    /**
     * @var string 
     */
    public $DocId;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @param string $DocBizId 
     * @param string $FileName 
     * @param string $FileType 
     * @param string $FileSize 
     * @param string $FileUrl 
     * @param string $DocId 
     * @param string $CreateTime 
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
    }
}
