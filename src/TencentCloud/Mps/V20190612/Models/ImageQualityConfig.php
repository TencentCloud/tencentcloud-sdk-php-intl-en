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
 * Image quality assessment task.
 *
 * @method array getAttributes() Obtain <p>Image quality assessment dimensions</p><p>Enumeration values:</p><ul><li>Brightness: Brightness assessment</li><li>Contrast: Contrast assessment</li><li>Sharpness: Clarity assessment</li><li>IQA: Comprehensive quality assessment</li></ul>
 * @method void setAttributes(array $Attributes) Set <p>Image quality assessment dimensions</p><p>Enumeration values:</p><ul><li>Brightness: Brightness assessment</li><li>Contrast: Contrast assessment</li><li>Sharpness: Clarity assessment</li><li>IQA: Comprehensive quality assessment</li></ul>
 */
class ImageQualityConfig extends AbstractModel
{
    /**
     * @var array <p>Image quality assessment dimensions</p><p>Enumeration values:</p><ul><li>Brightness: Brightness assessment</li><li>Contrast: Contrast assessment</li><li>Sharpness: Clarity assessment</li><li>IQA: Comprehensive quality assessment</li></ul>
     */
    public $Attributes;

    /**
     * @param array $Attributes <p>Image quality assessment dimensions</p><p>Enumeration values:</p><ul><li>Brightness: Brightness assessment</li><li>Contrast: Contrast assessment</li><li>Sharpness: Clarity assessment</li><li>IQA: Comprehensive quality assessment</li></ul>
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }
    }
}
