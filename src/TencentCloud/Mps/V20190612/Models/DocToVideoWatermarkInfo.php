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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark image information for AIGC document-to-video generation
 *
 * @method string getImageUrl() Obtain <p>Watermark image URL for video generation.</p>
 * @method void setImageUrl(string $ImageUrl) Set <p>Watermark image URL for video generation.</p>
 * @method string getPosition() Obtain <p>Watermark image location.</p><p>Enumeration values:</p><ul><li>top-left: top-left corner</li><li>top-right: top-right corner</li><li>bottom-left: bottom-left corner</li><li>bottom-right: bottom-right corner</li></ul>
 * @method void setPosition(string $Position) Set <p>Watermark image location.</p><p>Enumeration values:</p><ul><li>top-left: top-left corner</li><li>top-right: top-right corner</li><li>bottom-left: bottom-left corner</li><li>bottom-right: bottom-right corner</li></ul>
 */
class DocToVideoWatermarkInfo extends AbstractModel
{
    /**
     * @var string <p>Watermark image URL for video generation.</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>Watermark image location.</p><p>Enumeration values:</p><ul><li>top-left: top-left corner</li><li>top-right: top-right corner</li><li>bottom-left: bottom-left corner</li><li>bottom-right: bottom-right corner</li></ul>
     */
    public $Position;

    /**
     * @param string $ImageUrl <p>Watermark image URL for video generation.</p>
     * @param string $Position <p>Watermark image location.</p><p>Enumeration values:</p><ul><li>top-left: top-left corner</li><li>top-right: top-right corner</li><li>bottom-left: bottom-left corner</li><li>bottom-right: bottom-right corner</li></ul>
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

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }
    }
}
