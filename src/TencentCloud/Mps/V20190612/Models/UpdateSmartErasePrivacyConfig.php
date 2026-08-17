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
 * Privacy protection configuration for the smart erasing template.
 *
 * @method string getPrivacyModel() Obtain Privacy protection removal method.
- Blur: blur detection
- mosaic
 * @method void setPrivacyModel(string $PrivacyModel) Set Privacy protection removal method.
- Blur: blur detection
- mosaic
 * @method array getPrivacyTargets() Obtain Privacy protection target. (When API Explorer is used, no need to specify an array. Add the corresponding items and fill in the value.)
- face: human face
- plate: license plate.
 * @method void setPrivacyTargets(array $PrivacyTargets) Set Privacy protection target. (When API Explorer is used, no need to specify an array. Add the corresponding items and fill in the value.)
- face: human face
- plate: license plate.
 */
class UpdateSmartErasePrivacyConfig extends AbstractModel
{
    /**
     * @var string Privacy protection removal method.
- Blur: blur detection
- mosaic
     */
    public $PrivacyModel;

    /**
     * @var array Privacy protection target. (When API Explorer is used, no need to specify an array. Add the corresponding items and fill in the value.)
- face: human face
- plate: license plate.
     */
    public $PrivacyTargets;

    /**
     * @param string $PrivacyModel Privacy protection removal method.
- Blur: blur detection
- mosaic
     * @param array $PrivacyTargets Privacy protection target. (When API Explorer is used, no need to specify an array. Add the corresponding items and fill in the value.)
- face: human face
- plate: license plate.
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
        if (array_key_exists("PrivacyModel",$param) and $param["PrivacyModel"] !== null) {
            $this->PrivacyModel = $param["PrivacyModel"];
        }

        if (array_key_exists("PrivacyTargets",$param) and $param["PrivacyTargets"] !== null) {
            $this->PrivacyTargets = $param["PrivacyTargets"];
        }
    }
}
