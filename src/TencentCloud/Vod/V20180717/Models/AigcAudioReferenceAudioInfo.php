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
 * Reference audio information.
 *
 * @method string getType() Obtain <p>Accessible file URL. This parameter is valid when Type is Url. Note: 1. Images less than 7M are recommended. 2. Supported image formats: jpeg, jpg, png, webp.</p>
 * @method void setType(string $Type) Set <p>Accessible file URL. This parameter is valid when Type is Url. Note: 1. Images less than 7M are recommended. 2. Supported image formats: jpeg, jpg, png, webp.</p>
 * @method string getFileId() Obtain <p>Media file ID of the audio file, which is the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID of the audio file, which is the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File.</p>
 * @method string getUrl() Obtain <p>Audio file URL, which needs to be external network accessible. This parameter is valid when Type is Url.</p>
 * @method void setUrl(string $Url) Set <p>Audio file URL, which needs to be external network accessible. This parameter is valid when Type is Url.</p>
 */
class AigcAudioReferenceAudioInfo extends AbstractModel
{
    /**
     * @var string <p>Accessible file URL. This parameter is valid when Type is Url. Note: 1. Images less than 7M are recommended. 2. Supported image formats: jpeg, jpg, png, webp.</p>
     */
    public $Type;

    /**
     * @var string <p>Media file ID of the audio file, which is the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File.</p>
     */
    public $FileId;

    /**
     * @var string <p>Audio file URL, which needs to be external network accessible. This parameter is valid when Type is Url.</p>
     */
    public $Url;

    /**
     * @param string $Type <p>Accessible file URL. This parameter is valid when Type is Url. Note: 1. Images less than 7M are recommended. 2. Supported image formats: jpeg, jpg, png, webp.</p>
     * @param string $FileId <p>Media file ID of the audio file, which is the globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when Type is File.</p>
     * @param string $Url <p>Audio file URL, which needs to be external network accessible. This parameter is valid when Type is Url.</p>
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
