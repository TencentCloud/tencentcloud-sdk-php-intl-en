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
 * Privacy protection configuration for the smart erasing template.
 *
 * @method string getPrivacyModel() Obtain <p>Privacy protection removal method.</p><p>Enumeration value:</p><ul><li>blur: Blurry</li><li>mosaic: Mosaic</li></ul>
 * @method void setPrivacyModel(string $PrivacyModel) Set <p>Privacy protection removal method.</p><p>Enumeration value:</p><ul><li>blur: Blurry</li><li>mosaic: Mosaic</li></ul>
 * @method array getPrivacyTargets() Obtain <p>Privacy protection objective (no need to input an array when in use on API Explorer, just add the corresponding item and fill in the value).</p><p>Enumeration value:</p><ul><li>face: human face</li><li>plate: license plate</li></ul>
 * @method void setPrivacyTargets(array $PrivacyTargets) Set <p>Privacy protection objective (no need to input an array when in use on API Explorer, just add the corresponding item and fill in the value).</p><p>Enumeration value:</p><ul><li>face: human face</li><li>plate: license plate</li></ul>
 */
class MPSSmartErasePrivacyConfig extends AbstractModel
{
    /**
     * @var string <p>Privacy protection removal method.</p><p>Enumeration value:</p><ul><li>blur: Blurry</li><li>mosaic: Mosaic</li></ul>
     */
    public $PrivacyModel;

    /**
     * @var array <p>Privacy protection objective (no need to input an array when in use on API Explorer, just add the corresponding item and fill in the value).</p><p>Enumeration value:</p><ul><li>face: human face</li><li>plate: license plate</li></ul>
     */
    public $PrivacyTargets;

    /**
     * @param string $PrivacyModel <p>Privacy protection removal method.</p><p>Enumeration value:</p><ul><li>blur: Blurry</li><li>mosaic: Mosaic</li></ul>
     * @param array $PrivacyTargets <p>Privacy protection objective (no need to input an array when in use on API Explorer, just add the corresponding item and fill in the value).</p><p>Enumeration value:</p><ul><li>face: human face</li><li>plate: license plate</li></ul>
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
