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
 * AIGC voice clone input file information
 *
 * @method string getType() Obtain <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileId() Obtain <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type value is File. Description: 1. Image less than 10M is recommended. 2. Image format values: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type value is File. Description: 1. Image less than 10M is recommended. 2. Image format values: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain <p>Accessible file URL. This parameter is valid when Type value is Url. Description: 1. Recommended for use with images less than 10M; 2. Image format value: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set <p>Accessible file URL. This parameter is valid when Type value is Url. Description: 1. Recommended for use with images less than 10M; 2. Image format value: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AigcAudioCloneInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type value is File. Description: 1. Image less than 10M is recommended. 2. Image format values: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string <p>Accessible file URL. This parameter is valid when Type value is Url. Description: 1. Recommended for use with images less than 10M; 2. Image format value: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param string $Type <p>Input video file type. Valid values: <li>File: On-demand media file;</li> <li>Url: Accessible URL;</li></p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileId <p>Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type value is File. Description: 1. Image less than 10M is recommended. 2. Image format values: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url <p>Accessible file URL. This parameter is valid when Type value is Url. Description: 1. Recommended for use with images less than 10M; 2. Image format value: jpeg, jpg, png.</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
