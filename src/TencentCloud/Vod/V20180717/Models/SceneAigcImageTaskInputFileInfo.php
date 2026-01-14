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
 * Input file information for the scenario-based AIGC image generation task.
 *
 * @method string getType() Obtain Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
 * @method void setType(string $Type) Set Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
 * @method string getFileId() Obtain The media File ID of the image File, which is the globally unique identifier of the File in vod, is assigned by the vod backend after successful upload. you can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File.
Note:
1. recommended for use with images less than 7 mb.
2. image format value is jpeg, jpg, png, webp.
 * @method void setFileId(string $FileId) Set The media File ID of the image File, which is the globally unique identifier of the File in vod, is assigned by the vod backend after successful upload. you can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File.
Note:
1. recommended for use with images less than 7 mb.
2. image format value is jpeg, jpg, png, webp.
 * @method string getUrl() Obtain Accessible file URL. this parameter is valid when Type value is Url.
Note:
1. recommended for use with images less than 7 MB.
2. image format value is jpeg, jpg, png, webp.
 * @method void setUrl(string $Url) Set Accessible file URL. this parameter is valid when Type value is Url.
Note:
1. recommended for use with images less than 7 MB.
2. image format value is jpeg, jpg, png, webp.
 */
class SceneAigcImageTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
     */
    public $Type;

    /**
     * @var string The media File ID of the image File, which is the globally unique identifier of the File in vod, is assigned by the vod backend after successful upload. you can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File.
Note:
1. recommended for use with images less than 7 mb.
2. image format value is jpeg, jpg, png, webp.
     */
    public $FileId;

    /**
     * @var string Accessible file URL. this parameter is valid when Type value is Url.
Note:
1. recommended for use with images less than 7 MB.
2. image format value is jpeg, jpg, png, webp.
     */
    public $Url;

    /**
     * @param string $Type Input video File type. valid values: <li>File: on-demand media File;</li> <li>Url: accessible Url;</li>
     * @param string $FileId The media File ID of the image File, which is the globally unique identifier of the File in vod, is assigned by the vod backend after successful upload. you can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). this parameter is valid when the Type value is File.
Note:
1. recommended for use with images less than 7 mb.
2. image format value is jpeg, jpg, png, webp.
     * @param string $Url Accessible file URL. this parameter is valid when Type value is Url.
Note:
1. recommended for use with images less than 7 MB.
2. image format value is jpeg, jpg, png, webp.
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
