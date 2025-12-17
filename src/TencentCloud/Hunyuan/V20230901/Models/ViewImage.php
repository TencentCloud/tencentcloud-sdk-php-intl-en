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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-Perspective images.
 *
 * @method string getViewType() Obtain Specifies the viewing angle type.
Valid values: back, left, right.
 * @method void setViewType(string $ViewType) Set Specifies the viewing angle type.
Valid values: back, left, right.
 * @method string getViewImageUrl() Obtain Image Url.
 * @method void setViewImageUrl(string $ViewImageUrl) Set Image Url.
 * @method string getViewImageBase64() Obtain base64 address of the image.
 * @method void setViewImageBase64(string $ViewImageBase64) Set base64 address of the image.
 */
class ViewImage extends AbstractModel
{
    /**
     * @var string Specifies the viewing angle type.
Valid values: back, left, right.
     */
    public $ViewType;

    /**
     * @var string Image Url.
     */
    public $ViewImageUrl;

    /**
     * @var string base64 address of the image.
     */
    public $ViewImageBase64;

    /**
     * @param string $ViewType Specifies the viewing angle type.
Valid values: back, left, right.
     * @param string $ViewImageUrl Image Url.
     * @param string $ViewImageBase64 base64 address of the image.
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
        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("ViewImageUrl",$param) and $param["ViewImageUrl"] !== null) {
            $this->ViewImageUrl = $param["ViewImageUrl"];
        }

        if (array_key_exists("ViewImageBase64",$param) and $param["ViewImageBase64"] !== null) {
            $this->ViewImageBase64 = $param["ViewImageBase64"];
        }
    }
}
