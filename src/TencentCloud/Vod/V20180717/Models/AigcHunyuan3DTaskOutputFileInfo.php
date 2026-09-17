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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStorageMode() Obtain 
 * @method void setStorageMode(string $StorageMode) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getFileType() Obtain 
 * @method void setFileType(string $FileType) Set 
 * @method string getFileUrl() Obtain 
 * @method void setFileUrl(string $FileUrl) Set 
 * @method string getPreviewFileUrl() Obtain 
 * @method void setPreviewFileUrl(string $PreviewFileUrl) Set 
 */
class AigcHunyuan3DTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $StorageMode;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $FileType;

    /**
     * @var string 
     */
    public $FileUrl;

    /**
     * @var string 
     */
    public $PreviewFileUrl;

    /**
     * @param string $StorageMode 
     * @param string $ExpireTime 
     * @param string $FileType 
     * @param string $FileUrl 
     * @param string $PreviewFileUrl 
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("PreviewFileUrl",$param) and $param["PreviewFileUrl"] !== null) {
            $this->PreviewFileUrl = $param["PreviewFileUrl"];
        }
    }
}
