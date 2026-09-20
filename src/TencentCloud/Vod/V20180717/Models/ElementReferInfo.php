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
 * Subject reference information.
 *
 * @method string getImageUrl() Obtain Reference image URLs of the subject from different perspectives.
Image format: .jpg, .jpeg, and .png are supported.
Image file size must not exceed 10 MB. Image width and height must not be less than 300 px. Image aspect ratio must be between 1:2.5 and 2.5:1.
 * @method void setImageUrl(string $ImageUrl) Set Reference image URLs of the subject from different perspectives.
Image format: .jpg, .jpeg, and .png are supported.
Image file size must not exceed 10 MB. Image width and height must not be less than 300 px. Image aspect ratio must be between 1:2.5 and 2.5:1.
 */
class ElementReferInfo extends AbstractModel
{
    /**
     * @var string Reference image URLs of the subject from different perspectives.
Image format: .jpg, .jpeg, and .png are supported.
Image file size must not exceed 10 MB. Image width and height must not be less than 300 px. Image aspect ratio must be between 1:2.5 and 2.5:1.
     */
    public $ImageUrl;

    /**
     * @param string $ImageUrl Reference image URLs of the subject from different perspectives.
Image format: .jpg, .jpeg, and .png are supported.
Image file size must not exceed 10 MB. Image width and height must not be less than 300 px. Image aspect ratio must be between 1:2.5 and 2.5:1.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
