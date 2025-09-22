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
 * Intelligent erasure template privacy protection configuration.
 *
 * @method string getPrivacyModel() Obtain Specifies the privacy protection removal method.
-Blur: specifies the blur detection.
-Specifies the mosaic.
 * @method void setPrivacyModel(string $PrivacyModel) Set Specifies the privacy protection removal method.
-Blur: specifies the blur detection.
-Specifies the mosaic.
 * @method array getPrivacyTargets() Obtain Privacy protection objective. no need to import an array when in use on API Explorer. just add the corresponding item and fill in the value.
-Human face.
-License plate.
 * @method void setPrivacyTargets(array $PrivacyTargets) Set Privacy protection objective. no need to import an array when in use on API Explorer. just add the corresponding item and fill in the value.
-Human face.
-License plate.
 */
class SmartErasePrivacyConfig extends AbstractModel
{
    /**
     * @var string Specifies the privacy protection removal method.
-Blur: specifies the blur detection.
-Specifies the mosaic.
     */
    public $PrivacyModel;

    /**
     * @var array Privacy protection objective. no need to import an array when in use on API Explorer. just add the corresponding item and fill in the value.
-Human face.
-License plate.
     */
    public $PrivacyTargets;

    /**
     * @param string $PrivacyModel Specifies the privacy protection removal method.
-Blur: specifies the blur detection.
-Specifies the mosaic.
     * @param array $PrivacyTargets Privacy protection objective. no need to import an array when in use on API Explorer. just add the corresponding item and fill in the value.
-Human face.
-License plate.
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
