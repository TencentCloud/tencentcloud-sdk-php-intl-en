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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upload Audio File Information
 *
 * @method string getCustomFileName() Obtain File Alias (can be duplicated)
 * @method void setCustomFileName(string $CustomFileName) Set File Alias (can be duplicated)
 * @method string getAudioUrl() Obtain Audio File Link (supports mp3 and wav formats, file size not exceeding 5MB)
 * @method void setAudioUrl(string $AudioUrl) Set Audio File Link (supports mp3 and wav formats, file size not exceeding 5MB)
 */
class UploadAudioInfo extends AbstractModel
{
    /**
     * @var string File Alias (can be duplicated)
     */
    public $CustomFileName;

    /**
     * @var string Audio File Link (supports mp3 and wav formats, file size not exceeding 5MB)
     */
    public $AudioUrl;

    /**
     * @param string $CustomFileName File Alias (can be duplicated)
     * @param string $AudioUrl Audio File Link (supports mp3 and wav formats, file size not exceeding 5MB)
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
        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }
    }
}
