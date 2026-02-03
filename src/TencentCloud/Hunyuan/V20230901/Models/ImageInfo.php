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
 * Image information.
 *
 * @method string getUrl() Obtain Image Url.
 * @method void setUrl(string $Url) Set Image Url.
 * @method string getBase64() Obtain Image Base64.
 * @method void setBase64(string $Base64) Set Image Base64.
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string Image Url.
     */
    public $Url;

    /**
     * @var string Image Base64.
     */
    public $Base64;

    /**
     * @param string $Url Image Url.
     * @param string $Base64 Image Base64.
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

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }
    }
}
