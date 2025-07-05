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
 * The input of digital watermark extraction.
 *
 * @method string getUrl() Obtain The URL of the media on which digital watermark extraction is to be performed.
 * @method void setUrl(string $Url) Set The URL of the media on which digital watermark extraction is to be performed.
 * @method string getFileId() Obtain Media file ID. The original media file ID corresponding to the URL.
 * @method void setFileId(string $FileId) Set Media file ID. The original media file ID corresponding to the URL.
 */
class ExtractTraceWatermarkTaskInput extends AbstractModel
{
    /**
     * @var string The URL of the media on which digital watermark extraction is to be performed.
     */
    public $Url;

    /**
     * @var string Media file ID. The original media file ID corresponding to the URL.
     */
    public $FileId;

    /**
     * @param string $Url The URL of the media on which digital watermark extraction is to be performed.
     * @param string $FileId Media file ID. The original media file ID corresponding to the URL.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
