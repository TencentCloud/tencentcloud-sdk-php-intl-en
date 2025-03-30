<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The DRM encryption details.
 *
 * @method string getType() Obtain Encryption type.
<li>simpleaes: AES-128 encryption</li>
<li> widevine</li>
<li>fairplay: not supported for DASH streams</li>
<li> playready</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Encryption type.
<li>simpleaes: AES-128 encryption</li>
<li> widevine</li>
<li>fairplay: not supported for DASH streams</li>
<li> playready</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SimpleAesDrm getSimpleAesDrm() Obtain The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSimpleAesDrm(SimpleAesDrm $SimpleAesDrm) Set The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method SpekeDrm getSpekeDrm() Obtain Information about FairPlay, WideVine, and PlayReady encryption.
 * @method void setSpekeDrm(SpekeDrm $SpekeDrm) Set Information about FairPlay, WideVine, and PlayReady encryption.
 */
class DrmInfo extends AbstractModel
{
    /**
     * @var string Encryption type.
<li>simpleaes: AES-128 encryption</li>
<li> widevine</li>
<li>fairplay: not supported for DASH streams</li>
<li> playready</li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var SimpleAesDrm The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SimpleAesDrm;

    /**
     * @var SpekeDrm Information about FairPlay, WideVine, and PlayReady encryption.
     */
    public $SpekeDrm;

    /**
     * @param string $Type Encryption type.
<li>simpleaes: AES-128 encryption</li>
<li> widevine</li>
<li>fairplay: not supported for DASH streams</li>
<li> playready</li>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SimpleAesDrm $SimpleAesDrm The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param SpekeDrm $SpekeDrm Information about FairPlay, WideVine, and PlayReady encryption.
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

        if (array_key_exists("SimpleAesDrm",$param) and $param["SimpleAesDrm"] !== null) {
            $this->SimpleAesDrm = new SimpleAesDrm();
            $this->SimpleAesDrm->deserialize($param["SimpleAesDrm"]);
        }

        if (array_key_exists("SpekeDrm",$param) and $param["SpekeDrm"] !== null) {
            $this->SpekeDrm = new SpekeDrm();
            $this->SpekeDrm->deserialize($param["SpekeDrm"]);
        }
    }
}
