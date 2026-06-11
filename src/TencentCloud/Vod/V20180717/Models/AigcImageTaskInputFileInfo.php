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
 * AIGC image generation task input file information.
 *
 * @method string getType() Obtain <p>Input file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible Url;</li> <li>Base64: Base64 string of image or video conversion;</li></p>
 * @method void setType(string $Type) Set <p>Input file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible Url;</li> <li>Base64: Base64 string of image or video conversion;</li></p>
 * @method string getFileId() Obtain <p>The media file ID of the image file, which is the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File.<br>Note:</p><ol><li>Images less than 7M are recommended;</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
 * @method void setFileId(string $FileId) Set <p>The media file ID of the image file, which is the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File.<br>Note:</p><ol><li>Images less than 7M are recommended;</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
 * @method string getUrl() Obtain <p>Accessible file URL. This parameter is valid when the Type value is URL.</p><ol><li>Images less than 7M are recommended.</li><li>Image format values: jpeg, jpg, png, webp.</li></ol>
 * @method void setUrl(string $Url) Set <p>Accessible file URL. This parameter is valid when the Type value is URL.</p><ol><li>Images less than 7M are recommended.</li><li>Image format values: jpeg, jpg, png, webp.</li></ol>
 * @method string getBase64() Obtain <p>Accessible file Base64. This parameter is valid when Type value is Base64. Description:</p><ol><li>Total size of all files must not exceed 7 MB to avoid exceeding the 10 MB size limit of the cloud API after converting to Base64;</li><li>Format should be jpeg, jpg, png, or webp;</li><li>Do not include prefixes such as data:image/jpeg;base64,.</li></ol>
 * @method void setBase64(string $Base64) Set <p>Accessible file Base64. This parameter is valid when Type value is Base64. Description:</p><ol><li>Total size of all files must not exceed 7 MB to avoid exceeding the 10 MB size limit of the cloud API after converting to Base64;</li><li>Format should be jpeg, jpg, png, or webp;</li><li>Do not include prefixes such as data:image/jpeg;base64,.</li></ol>
 * @method string getText() Obtain <p>Description of the input image, used to help the model understand the image. Only valid for GEM 2.5 and GEM 3.0.</p>
 * @method void setText(string $Text) Set <p>Description of the input image, used to help the model understand the image. Only valid for GEM 2.5 and GEM 3.0.</p>
 * @method string getReferenceType() Obtain <p><strong>Valid only when ModelName is OG</strong>. Image type.</p><p>Enumeration value:</p><ul><li>mask: Image mask.</li></ul>
 * @method void setReferenceType(string $ReferenceType) Set <p><strong>Valid only when ModelName is OG</strong>. Image type.</p><p>Enumeration value:</p><ul><li>mask: Image mask.</li></ul>
 */
class AigcImageTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Input file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible Url;</li> <li>Base64: Base64 string of image or video conversion;</li></p>
     */
    public $Type;

    /**
     * @var string <p>The media file ID of the image file, which is the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File.<br>Note:</p><ol><li>Images less than 7M are recommended;</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
     */
    public $FileId;

    /**
     * @var string <p>Accessible file URL. This parameter is valid when the Type value is URL.</p><ol><li>Images less than 7M are recommended.</li><li>Image format values: jpeg, jpg, png, webp.</li></ol>
     */
    public $Url;

    /**
     * @var string <p>Accessible file Base64. This parameter is valid when Type value is Base64. Description:</p><ol><li>Total size of all files must not exceed 7 MB to avoid exceeding the 10 MB size limit of the cloud API after converting to Base64;</li><li>Format should be jpeg, jpg, png, or webp;</li><li>Do not include prefixes such as data:image/jpeg;base64,.</li></ol>
     */
    public $Base64;

    /**
     * @var string <p>Description of the input image, used to help the model understand the image. Only valid for GEM 2.5 and GEM 3.0.</p>
     */
    public $Text;

    /**
     * @var string <p><strong>Valid only when ModelName is OG</strong>. Image type.</p><p>Enumeration value:</p><ul><li>mask: Image mask.</li></ul>
     */
    public $ReferenceType;

    /**
     * @param string $Type <p>Input file type. Valid values: <li>File: on-demand media file;</li> <li>Url: accessible Url;</li> <li>Base64: Base64 string of image or video conversion;</li></p>
     * @param string $FileId <p>The media file ID of the image file, which is the globally unique identifier of this file in VOD, is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. This parameter is valid when the Type value is File.<br>Note:</p><ol><li>Images less than 7M are recommended;</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
     * @param string $Url <p>Accessible file URL. This parameter is valid when the Type value is URL.</p><ol><li>Images less than 7M are recommended.</li><li>Image format values: jpeg, jpg, png, webp.</li></ol>
     * @param string $Base64 <p>Accessible file Base64. This parameter is valid when Type value is Base64. Description:</p><ol><li>Total size of all files must not exceed 7 MB to avoid exceeding the 10 MB size limit of the cloud API after converting to Base64;</li><li>Format should be jpeg, jpg, png, or webp;</li><li>Do not include prefixes such as data:image/jpeg;base64,.</li></ol>
     * @param string $Text <p>Description of the input image, used to help the model understand the image. Only valid for GEM 2.5 and GEM 3.0.</p>
     * @param string $ReferenceType <p><strong>Valid only when ModelName is OG</strong>. Image type.</p><p>Enumeration value:</p><ul><li>mask: Image mask.</li></ul>
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

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
