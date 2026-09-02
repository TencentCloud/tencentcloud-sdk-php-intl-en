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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image scanning mirror matching configuration
 *
 * @method string getMode() Obtain <p>Target image match mode</p><p>Enumeration values:</p><ul><li>ALL: all images</li><li>MANUAL: select</li><li>AUTO_MATCH: auto-match</li></ul>
 * @method void setMode(string $Mode) Set <p>Target image match mode</p><p>Enumeration values:</p><ul><li>ALL: all images</li><li>MANUAL: select</li><li>AUTO_MATCH: auto-match</li></ul>
 * @method array getExcludeImages() Obtain <p>Image id excluded from scan in mirror mode for all</p>
 * @method void setExcludeImages(array $ExcludeImages) Set <p>Image id excluded from scan in mirror mode for all</p>
 * @method array getImages() Obtain <p>id of the mirror that needs to be scanned in manual selection mode</p>
 * @method void setImages(array $Images) Set <p>id of the mirror that needs to be scanned in manual selection mode</p>
 * @method ImageScanAutoMatchConfig getAutoMatch() Obtain <p>Matching configuration in auto-match mode</p>
 * @method void setAutoMatch(ImageScanAutoMatchConfig $AutoMatch) Set <p>Matching configuration in auto-match mode</p>
 */
class ImageScanAssetTarget extends AbstractModel
{
    /**
     * @var string <p>Target image match mode</p><p>Enumeration values:</p><ul><li>ALL: all images</li><li>MANUAL: select</li><li>AUTO_MATCH: auto-match</li></ul>
     */
    public $Mode;

    /**
     * @var array <p>Image id excluded from scan in mirror mode for all</p>
     */
    public $ExcludeImages;

    /**
     * @var array <p>id of the mirror that needs to be scanned in manual selection mode</p>
     */
    public $Images;

    /**
     * @var ImageScanAutoMatchConfig <p>Matching configuration in auto-match mode</p>
     */
    public $AutoMatch;

    /**
     * @param string $Mode <p>Target image match mode</p><p>Enumeration values:</p><ul><li>ALL: all images</li><li>MANUAL: select</li><li>AUTO_MATCH: auto-match</li></ul>
     * @param array $ExcludeImages <p>Image id excluded from scan in mirror mode for all</p>
     * @param array $Images <p>id of the mirror that needs to be scanned in manual selection mode</p>
     * @param ImageScanAutoMatchConfig $AutoMatch <p>Matching configuration in auto-match mode</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ExcludeImages",$param) and $param["ExcludeImages"] !== null) {
            $this->ExcludeImages = $param["ExcludeImages"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("AutoMatch",$param) and $param["AutoMatch"] !== null) {
            $this->AutoMatch = new ImageScanAutoMatchConfig();
            $this->AutoMatch->deserialize($param["AutoMatch"]);
        }
    }
}
