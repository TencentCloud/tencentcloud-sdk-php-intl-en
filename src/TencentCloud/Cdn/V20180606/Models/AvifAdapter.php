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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AVIF adapter, used for image optimization
 *
 * @method string getSwitch() Obtain Whether to enable `AvifAdapter` for image optimization. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable `AvifAdapter` for image optimization. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method array getFallbackFormats() Obtain When the original image is avif and the client Accept header contains image/avif, return directly the original image.
When the original image is in avif format and the client Accept header does not include image/avif but includes image/webp, convert avif to webp format and return. if the Accept header does not include image/webp, convert to jpeg and return.

Valid values:. 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"Webp": whether avif to webp is enabled, "jpeg": whether avif to jpeg is enabled. if both webp and jpeg are enabled, webp must be before jpeg.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFallbackFormats(array $FallbackFormats) Set When the original image is avif and the client Accept header contains image/avif, return directly the original image.
When the original image is in avif format and the client Accept header does not include image/avif but includes image/webp, convert avif to webp format and return. if the Accept header does not include image/webp, convert to jpeg and return.

Valid values:. 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"Webp": whether avif to webp is enabled, "jpeg": whether avif to jpeg is enabled. if both webp and jpeg are enabled, webp must be before jpeg.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AvifAdapter extends AbstractModel
{
    /**
     * @var string Whether to enable `AvifAdapter` for image optimization. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array When the original image is avif and the client Accept header contains image/avif, return directly the original image.
When the original image is in avif format and the client Accept header does not include image/avif but includes image/webp, convert avif to webp format and return. if the Accept header does not include image/webp, convert to jpeg and return.

Valid values:. 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"Webp": whether avif to webp is enabled, "jpeg": whether avif to jpeg is enabled. if both webp and jpeg are enabled, webp must be before jpeg.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FallbackFormats;

    /**
     * @param string $Switch Whether to enable `AvifAdapter` for image optimization. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param array $FallbackFormats When the original image is avif and the client Accept header contains image/avif, return directly the original image.
When the original image is in avif format and the client Accept header does not include image/avif but includes image/webp, convert avif to webp format and return. if the Accept header does not include image/webp, convert to jpeg and return.

Valid values:. 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"Webp": whether avif to webp is enabled, "jpeg": whether avif to jpeg is enabled. if both webp and jpeg are enabled, webp must be before jpeg.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FallbackFormats",$param) and $param["FallbackFormats"] !== null) {
            $this->FallbackFormats = $param["FallbackFormats"];
        }
    }
}
