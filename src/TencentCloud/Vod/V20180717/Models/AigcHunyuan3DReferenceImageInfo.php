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
 * Reference image information for AIGC Hunyuan 3D.
 *
 * @method string getType() Obtain <p>Input file type. Valid values: <li>File: VOD file;</li> <li>Url: accessible URL;</li></p>
 * @method void setType(string $Type) Set <p>Input file type. Valid values: <li>File: VOD file;</li> <li>Url: accessible URL;</li></p>
 * @method string getFileId() Obtain <p>File ID, the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File. Description: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
 * @method void setFileId(string $FileId) Set <p>File ID, the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File. Description: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
 * @method string getUrl() Obtain <p>Accessible file URL. This parameter is valid when Type is Url. Note: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
 * @method void setUrl(string $Url) Set <p>Accessible file URL. This parameter is valid when Type is Url. Note: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
 */
class AigcHunyuan3DReferenceImageInfo extends AbstractModel
{
    /**
     * @var string <p>Input file type. Valid values: <li>File: VOD file;</li> <li>Url: accessible URL;</li></p>
     */
    public $Type;

    /**
     * @var string <p>File ID, the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File. Description: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
     */
    public $FileId;

    /**
     * @var string <p>Accessible file URL. This parameter is valid when Type is Url. Note: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
     */
    public $Url;

    /**
     * @param string $Type <p>Input file type. Valid values: <li>File: VOD file;</li> <li>Url: accessible URL;</li></p>
     * @param string $FileId <p>File ID, the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File. Description: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
     * @param string $Url <p>Accessible file URL. This parameter is valid when Type is Url. Note: Supported image formats: jpg, jpeg, png, bmp, webp.</p>
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
