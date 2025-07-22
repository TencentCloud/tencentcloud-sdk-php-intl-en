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
 * The DRM encryption details.
 *
 * @method string getType() Obtain Encryption type.

- simpleaes
Can only be used for HLS. format support ts and mp4.
Only can be used in slice mode. cannot be used in singlefile mode.

- fairplay:
Can only be used for HLS. valid values: mp4.
Available for use in slice mode or singlefile mode.

- widevine:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be in singlefile mode.

- playready:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be singlefile mode.

 * @method void setType(string $Type) Set Encryption type.

- simpleaes
Can only be used for HLS. format support ts and mp4.
Only can be used in slice mode. cannot be used in singlefile mode.

- fairplay:
Can only be used for HLS. valid values: mp4.
Available for use in slice mode or singlefile mode.

- widevine:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be in singlefile mode.

- playready:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be singlefile mode.

 * @method SimpleAesDrm getSimpleAesDrm() Obtain The AES-128 encryption details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSimpleAesDrm(SimpleAesDrm $SimpleAesDrm) Set The AES-128 encryption details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SpekeDrm getSpekeDrm() Obtain Information about FairPlay, WideVine, and PlayReady encryption.
 * @method void setSpekeDrm(SpekeDrm $SpekeDrm) Set Information about FairPlay, WideVine, and PlayReady encryption.
 */
class DrmInfo extends AbstractModel
{
    /**
     * @var string Encryption type.

- simpleaes
Can only be used for HLS. format support ts and mp4.
Only can be used in slice mode. cannot be used in singlefile mode.

- fairplay:
Can only be used for HLS. valid values: mp4.
Available for use in slice mode or singlefile mode.

- widevine:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be in singlefile mode.

- playready:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be singlefile mode.

     */
    public $Type;

    /**
     * @var SimpleAesDrm The AES-128 encryption details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SimpleAesDrm;

    /**
     * @var SpekeDrm Information about FairPlay, WideVine, and PlayReady encryption.
     */
    public $SpekeDrm;

    /**
     * @param string $Type Encryption type.

- simpleaes
Can only be used for HLS. format support ts and mp4.
Only can be used in slice mode. cannot be used in singlefile mode.

- fairplay:
Can only be used for HLS. valid values: mp4.
Available for use in slice mode or singlefile mode.

- widevine:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be in singlefile mode.

- playready:
Can be used for HLS and DASH. format can only be mp4.
Output HLS: available for use in slice mode or singlefile mode.
Output DASH: can only be singlefile mode.

     * @param SimpleAesDrm $SimpleAesDrm The AES-128 encryption details.
Note: This field may return null, indicating that no valid values can be obtained.
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
