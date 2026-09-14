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
 * Drm encryption information.
 *
 * @method string getType() Obtain Encryption type.

- simpleaes
Can only be used for HLS. Format support: ts and mp4.
Only slice mode can be used. singlefile mode cannot be used.

- fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- playready:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- widevine+fairplay,playready+fairplay,widevine+playready+fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine+playready:
Applicable to HLS and MPEG-DASH. The segment format can only be mp4.
For HLS format, you can use the slicing mode or singlefile mode.
For MPEG-DASH, only singlefile mode can be used.
 * @method void setType(string $Type) Set Encryption type.

- simpleaes
Can only be used for HLS. Format support: ts and mp4.
Only slice mode can be used. singlefile mode cannot be used.

- fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- playready:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- widevine+fairplay,playready+fairplay,widevine+playready+fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine+playready:
Applicable to HLS and MPEG-DASH. The segment format can only be mp4.
For HLS format, you can use the slicing mode or singlefile mode.
For MPEG-DASH, only singlefile mode can be used.
 * @method SimpleAesDrm getSimpleAesDrm() Obtain 
 * @method void setSimpleAesDrm(SimpleAesDrm $SimpleAesDrm) Set 
 * @method SpekeDrm getSpekeDrm() Obtain Information about FairPlay, WideVine, and PlayReady encryption.
 * @method void setSpekeDrm(SpekeDrm $SpekeDrm) Set Information about FairPlay, WideVine, and PlayReady encryption.
 */
class DrmInfo extends AbstractModel
{
    /**
     * @var string Encryption type.

- simpleaes
Can only be used for HLS. Format support: ts and mp4.
Only slice mode can be used. singlefile mode cannot be used.

- fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- playready:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- widevine+fairplay,playready+fairplay,widevine+playready+fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine+playready:
Applicable to HLS and MPEG-DASH. The segment format can only be mp4.
For HLS format, you can use the slicing mode or singlefile mode.
For MPEG-DASH, only singlefile mode can be used.
     */
    public $Type;

    /**
     * @var SimpleAesDrm 
     */
    public $SimpleAesDrm;

    /**
     * @var SpekeDrm Information about FairPlay, WideVine, and PlayReady encryption.
     */
    public $SpekeDrm;

    /**
     * @param string $Type Encryption type.

- simpleaes
Can only be used for HLS. Format support: ts and mp4.
Only slice mode can be used. singlefile mode cannot be used.

- fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- playready:
Can be used for HLS and DASH. The segment format can only be mp4.
Output HLS: The slicing or singlefile mode can be used.
Output DASH: can only be in singlefile mode

- widevine+fairplay,playready+fairplay,widevine+playready+fairplay:
Can only be used for HLS. The segment format can only be mp4.
Slice mode or singlefile mode can be used.

- widevine+playready:
Applicable to HLS and MPEG-DASH. The segment format can only be mp4.
For HLS format, you can use the slicing mode or singlefile mode.
For MPEG-DASH, only singlefile mode can be used.
     * @param SimpleAesDrm $SimpleAesDrm 
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
