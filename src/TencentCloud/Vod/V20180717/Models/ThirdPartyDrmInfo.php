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
 * Third-party Drm encrypted information.
 *
 * @method array getDrmTypes() Obtain <p>Encryption type:</p><ul><li>FairPlay: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>PlayReady: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>Widevine+FairPlay, PlayReady+FairPlay, Widevine PlayReady FairPlay composite: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine PlayReady composite: Can be used for HLS and MPEG-DASH. The slice format can only be mp4.</li></ul>
 * @method void setDrmTypes(array $DrmTypes) Set <p>Encryption type:</p><ul><li>FairPlay: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>PlayReady: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>Widevine+FairPlay, PlayReady+FairPlay, Widevine PlayReady FairPlay composite: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine PlayReady composite: Can be used for HLS and MPEG-DASH. The slice format can only be mp4.</li></ul>
 * @method SPEKEDrm getSPEKEDrm() Obtain <p>External DRM vendor information.</p>
 * @method void setSPEKEDrm(SPEKEDrm $SPEKEDrm) Set <p>External DRM vendor information.</p>
 */
class ThirdPartyDrmInfo extends AbstractModel
{
    /**
     * @var array <p>Encryption type:</p><ul><li>FairPlay: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>PlayReady: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>Widevine+FairPlay, PlayReady+FairPlay, Widevine PlayReady FairPlay composite: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine PlayReady composite: Can be used for HLS and MPEG-DASH. The slice format can only be mp4.</li></ul>
     */
    public $DrmTypes;

    /**
     * @var SPEKEDrm <p>External DRM vendor information.</p>
     */
    public $SPEKEDrm;

    /**
     * @param array $DrmTypes <p>Encryption type:</p><ul><li>FairPlay: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>PlayReady: Can be used for HLS and DASH. The slice format can only be mp4.</li><li>Widevine+FairPlay, PlayReady+FairPlay, Widevine PlayReady FairPlay composite: Can only be used for HLS. The slice format can only be mp4.</li><li>Widevine PlayReady composite: Can be used for HLS and MPEG-DASH. The slice format can only be mp4.</li></ul>
     * @param SPEKEDrm $SPEKEDrm <p>External DRM vendor information.</p>
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
        if (array_key_exists("DrmTypes",$param) and $param["DrmTypes"] !== null) {
            $this->DrmTypes = $param["DrmTypes"];
        }

        if (array_key_exists("SPEKEDrm",$param) and $param["SPEKEDrm"] !== null) {
            $this->SPEKEDrm = new SPEKEDrm();
            $this->SPEKEDrm->deserialize($param["SPEKEDrm"]);
        }
    }
}
