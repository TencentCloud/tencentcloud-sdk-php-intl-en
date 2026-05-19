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
 * AIGC human face input file information
 *
 * @method string getType() Obtain Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li>
 * @method void setType(string $Type) Set Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li>
 * @method string getFileId() Obtain Media file ID, the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media). This parameter is valid when Type value is File.
 * @method void setFileId(string $FileId) Set Media file ID, the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media). This parameter is valid when Type value is File.
 * @method string getUrl() Obtain Accessible file URL. This parameter is valid when the Type value is Url.
 * @method void setUrl(string $Url) Set Accessible file URL. This parameter is valid when the Type value is Url.
 */
class AigcFaceInputFileInfo extends AbstractModel
{
    /**
     * @var string Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li>
     */
    public $Type;

    /**
     * @var string Media file ID, the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media). This parameter is valid when Type value is File.
     */
    public $FileId;

    /**
     * @var string Accessible file URL. This parameter is valid when the Type value is Url.
     */
    public $Url;

    /**
     * @param string $Type Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li>
     * @param string $FileId Media file ID, the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media). This parameter is valid when Type value is File.
     * @param string $Url Accessible file URL. This parameter is valid when the Type value is Url.
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
