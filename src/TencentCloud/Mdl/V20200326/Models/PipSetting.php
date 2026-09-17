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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Picture in Picture Settings
 *
 * @method string getAudioSelection() Obtain Audio selection: LIVE_SOURCE or AD_SOURCE
 * @method void setAudioSelection(string $AudioSelection) Set Audio selection: LIVE_SOURCE or AD_SOURCE
 * @method SourceLayout getLiveSourceLayout() Obtain Live streaming source layout configuration
 * @method void setLiveSourceLayout(SourceLayout $LiveSourceLayout) Set Live streaming source layout configuration
 * @method SourceLayout getAdSourceLayout() Obtain Advertisement source layout configuration
 * @method void setAdSourceLayout(SourceLayout $AdSourceLayout) Set Advertisement source layout configuration
 * @method string getBackgroundImgUrl() Obtain Background image URL, starting with http/https and ending in jpg/jpeg/png (only required for UPLOAD_CREATIVES)
 * @method void setBackgroundImgUrl(string $BackgroundImgUrl) Set Background image URL, starting with http/https and ending in jpg/jpeg/png (only required for UPLOAD_CREATIVES)
 * @method string getAdSourceUrl() Obtain Advertisement video URL, starting with http/https and ending in mp4 (only required for UPLOAD_CREATIVES)
 * @method void setAdSourceUrl(string $AdSourceUrl) Set Advertisement video URL, starting with http/https and ending in mp4 (only required for UPLOAD_CREATIVES)
 */
class PipSetting extends AbstractModel
{
    /**
     * @var string Audio selection: LIVE_SOURCE or AD_SOURCE
     */
    public $AudioSelection;

    /**
     * @var SourceLayout Live streaming source layout configuration
     */
    public $LiveSourceLayout;

    /**
     * @var SourceLayout Advertisement source layout configuration
     */
    public $AdSourceLayout;

    /**
     * @var string Background image URL, starting with http/https and ending in jpg/jpeg/png (only required for UPLOAD_CREATIVES)
     */
    public $BackgroundImgUrl;

    /**
     * @var string Advertisement video URL, starting with http/https and ending in mp4 (only required for UPLOAD_CREATIVES)
     */
    public $AdSourceUrl;

    /**
     * @param string $AudioSelection Audio selection: LIVE_SOURCE or AD_SOURCE
     * @param SourceLayout $LiveSourceLayout Live streaming source layout configuration
     * @param SourceLayout $AdSourceLayout Advertisement source layout configuration
     * @param string $BackgroundImgUrl Background image URL, starting with http/https and ending in jpg/jpeg/png (only required for UPLOAD_CREATIVES)
     * @param string $AdSourceUrl Advertisement video URL, starting with http/https and ending in mp4 (only required for UPLOAD_CREATIVES)
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
        if (array_key_exists("AudioSelection",$param) and $param["AudioSelection"] !== null) {
            $this->AudioSelection = $param["AudioSelection"];
        }

        if (array_key_exists("LiveSourceLayout",$param) and $param["LiveSourceLayout"] !== null) {
            $this->LiveSourceLayout = new SourceLayout();
            $this->LiveSourceLayout->deserialize($param["LiveSourceLayout"]);
        }

        if (array_key_exists("AdSourceLayout",$param) and $param["AdSourceLayout"] !== null) {
            $this->AdSourceLayout = new SourceLayout();
            $this->AdSourceLayout->deserialize($param["AdSourceLayout"]);
        }

        if (array_key_exists("BackgroundImgUrl",$param) and $param["BackgroundImgUrl"] !== null) {
            $this->BackgroundImgUrl = $param["BackgroundImgUrl"];
        }

        if (array_key_exists("AdSourceUrl",$param) and $param["AdSourceUrl"] !== null) {
            $this->AdSourceUrl = $param["AdSourceUrl"];
        }
    }
}
