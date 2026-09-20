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
 * Extract blind watermark input information
 *
 * @method string getType() Obtain Digital watermark extraction input type. Available values: <li>FILEID: file media asset ID;</li><li>URL: file URL;</li>
 * @method void setType(string $Type) Set Digital watermark extraction input type. Available values: <li>FILEID: file media asset ID;</li><li>URL: file URL;</li>
 * @method string getFileId() Obtain Media asset file ID to be extracted
 * @method void setFileId(string $FileId) Set Media asset file ID to be extracted
 * @method string getUrl() Obtain url of the video file to extract
 * @method void setUrl(string $Url) Set url of the video file to extract
 */
class ExtractBlindWatermarkInputInfo extends AbstractModel
{
    /**
     * @var string Digital watermark extraction input type. Available values: <li>FILEID: file media asset ID;</li><li>URL: file URL;</li>
     */
    public $Type;

    /**
     * @var string Media asset file ID to be extracted
     */
    public $FileId;

    /**
     * @var string url of the video file to extract
     */
    public $Url;

    /**
     * @param string $Type Digital watermark extraction input type. Available values: <li>FILEID: file media asset ID;</li><li>URL: file URL;</li>
     * @param string $FileId Media asset file ID to be extracted
     * @param string $Url url of the video file to extract
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
