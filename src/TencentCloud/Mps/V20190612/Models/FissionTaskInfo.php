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
 * Product fission task info
 *
 * @method integer getDuration() Obtain <p>Video output duration</p><p>Range: [1, 15]</p><p>Unit: seconds</p><p>Default value: 15</p>
 * @method void setDuration(integer $Duration) Set <p>Video output duration</p><p>Range: [1, 15]</p><p>Unit: seconds</p><p>Default value: 15</p>
 * @method string getModelTier() Obtain <p>Model gearbox</p><p>Enumeration value:</p><ul><li>standard: Standard version</li><li>flagship: Flagship edition</li></ul>
 * @method void setModelTier(string $ModelTier) Set <p>Model gearbox</p><p>Enumeration value:</p><ul><li>standard: Standard version</li><li>flagship: Flagship edition</li></ul>
 * @method string getRatio() Obtain <p>Video image ratio</p><p>Enumeration values:</p><ul><li>9:16: 9:16</li><li>16:9: 16:9</li><li>1:1: -1:1</li><li>3:4: 3:4</li><li>4:3: 4:3</li></ul>
 * @method void setRatio(string $Ratio) Set <p>Video image ratio</p><p>Enumeration values:</p><ul><li>9:16: 9:16</li><li>16:9: 16:9</li><li>1:1: -1:1</li><li>3:4: 3:4</li><li>4:3: 4:3</li></ul>
 * @method string getResolution() Obtain <p>Output resolution</p><p>Enumeration values:</p><ul><li>720p: 720p</li><li>1080p: 1080p</li><li>2k: 2k</li><li>4k: 4k</li></ul>
 * @method void setResolution(string $Resolution) Set <p>Output resolution</p><p>Enumeration values:</p><ul><li>720p: 720p</li><li>1080p: 1080p</li><li>2k: 2k</li><li>4k: 4k</li></ul>
 * @method string getMarket() Obtain <p>Target market</p><p>Enumeration values:</p><ul><li>north_america: North America</li><li>europe: Europe</li><li>china: China</li><li>japan: Japan</li><li>korea: South Korea</li><li>southeast_asia: Southeast Asia</li><li>brazil: Brazil</li><li>global: Global</li><li>other: Other</li></ul><p>Impacts the default model ethnicity and localized style. When CustomModel is not specified, the ethnicity is automatically determined by the market.</p>
 * @method void setMarket(string $Market) Set <p>Target market</p><p>Enumeration values:</p><ul><li>north_america: North America</li><li>europe: Europe</li><li>china: China</li><li>japan: Japan</li><li>korea: South Korea</li><li>southeast_asia: Southeast Asia</li><li>brazil: Brazil</li><li>global: Global</li><li>other: Other</li></ul><p>Impacts the default model ethnicity and localized style. When CustomModel is not specified, the ethnicity is automatically determined by the market.</p>
 * @method string getLanguage() Obtain <p>Voiceover/subtitle language</p><p>Enumeration value:</p><ul><li>english: English</li><li>chinese: Chinese</li><li>japanese: Japanese</li><li>korean: Korean</li><li>spanish: Spanish</li><li>portuguese: Portuguese</li><li>music_only: Music only, no voiceover</li></ul>
 * @method void setLanguage(string $Language) Set <p>Voiceover/subtitle language</p><p>Enumeration value:</p><ul><li>english: English</li><li>chinese: Chinese</li><li>japanese: Japanese</li><li>korean: Korean</li><li>spanish: Spanish</li><li>portuguese: Portuguese</li><li>music_only: Music only, no voiceover</li></ul>
 * @method string getVideoType() Obtain <p>Video type</p><p>Enumeration value:</p><ul><li>ugc: UGC seeding</li><li>talk: Product talk</li><li>display: Product display (product only, no voice)</li><li>unboxing: Out-of-the-box sharing</li><li>reaction: Reaction show</li></ul>
 * @method void setVideoType(string $VideoType) Set <p>Video type</p><p>Enumeration value:</p><ul><li>ugc: UGC seeding</li><li>talk: Product talk</li><li>display: Product display (product only, no voice)</li><li>unboxing: Out-of-the-box sharing</li><li>reaction: Reaction show</li></ul>
 * @method integer getSplitCount() Obtain <p>Fission count</p><p>Value ranges from 0 to 1</p><p>Unit: unit</p>
 * @method void setSplitCount(integer $SplitCount) Set <p>Fission count</p><p>Value ranges from 0 to 1</p><p>Unit: unit</p>
 * @method CustomModel getCustomModel() Obtain <p>Customize an on-camera model</p>
 * @method void setCustomModel(CustomModel $CustomModel) Set <p>Customize an on-camera model</p>
 */
class FissionTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>Video output duration</p><p>Range: [1, 15]</p><p>Unit: seconds</p><p>Default value: 15</p>
     */
    public $Duration;

    /**
     * @var string <p>Model gearbox</p><p>Enumeration value:</p><ul><li>standard: Standard version</li><li>flagship: Flagship edition</li></ul>
     */
    public $ModelTier;

    /**
     * @var string <p>Video image ratio</p><p>Enumeration values:</p><ul><li>9:16: 9:16</li><li>16:9: 16:9</li><li>1:1: -1:1</li><li>3:4: 3:4</li><li>4:3: 4:3</li></ul>
     */
    public $Ratio;

    /**
     * @var string <p>Output resolution</p><p>Enumeration values:</p><ul><li>720p: 720p</li><li>1080p: 1080p</li><li>2k: 2k</li><li>4k: 4k</li></ul>
     */
    public $Resolution;

    /**
     * @var string <p>Target market</p><p>Enumeration values:</p><ul><li>north_america: North America</li><li>europe: Europe</li><li>china: China</li><li>japan: Japan</li><li>korea: South Korea</li><li>southeast_asia: Southeast Asia</li><li>brazil: Brazil</li><li>global: Global</li><li>other: Other</li></ul><p>Impacts the default model ethnicity and localized style. When CustomModel is not specified, the ethnicity is automatically determined by the market.</p>
     */
    public $Market;

    /**
     * @var string <p>Voiceover/subtitle language</p><p>Enumeration value:</p><ul><li>english: English</li><li>chinese: Chinese</li><li>japanese: Japanese</li><li>korean: Korean</li><li>spanish: Spanish</li><li>portuguese: Portuguese</li><li>music_only: Music only, no voiceover</li></ul>
     */
    public $Language;

    /**
     * @var string <p>Video type</p><p>Enumeration value:</p><ul><li>ugc: UGC seeding</li><li>talk: Product talk</li><li>display: Product display (product only, no voice)</li><li>unboxing: Out-of-the-box sharing</li><li>reaction: Reaction show</li></ul>
     */
    public $VideoType;

    /**
     * @var integer <p>Fission count</p><p>Value ranges from 0 to 1</p><p>Unit: unit</p>
     */
    public $SplitCount;

    /**
     * @var CustomModel <p>Customize an on-camera model</p>
     */
    public $CustomModel;

    /**
     * @param integer $Duration <p>Video output duration</p><p>Range: [1, 15]</p><p>Unit: seconds</p><p>Default value: 15</p>
     * @param string $ModelTier <p>Model gearbox</p><p>Enumeration value:</p><ul><li>standard: Standard version</li><li>flagship: Flagship edition</li></ul>
     * @param string $Ratio <p>Video image ratio</p><p>Enumeration values:</p><ul><li>9:16: 9:16</li><li>16:9: 16:9</li><li>1:1: -1:1</li><li>3:4: 3:4</li><li>4:3: 4:3</li></ul>
     * @param string $Resolution <p>Output resolution</p><p>Enumeration values:</p><ul><li>720p: 720p</li><li>1080p: 1080p</li><li>2k: 2k</li><li>4k: 4k</li></ul>
     * @param string $Market <p>Target market</p><p>Enumeration values:</p><ul><li>north_america: North America</li><li>europe: Europe</li><li>china: China</li><li>japan: Japan</li><li>korea: South Korea</li><li>southeast_asia: Southeast Asia</li><li>brazil: Brazil</li><li>global: Global</li><li>other: Other</li></ul><p>Impacts the default model ethnicity and localized style. When CustomModel is not specified, the ethnicity is automatically determined by the market.</p>
     * @param string $Language <p>Voiceover/subtitle language</p><p>Enumeration value:</p><ul><li>english: English</li><li>chinese: Chinese</li><li>japanese: Japanese</li><li>korean: Korean</li><li>spanish: Spanish</li><li>portuguese: Portuguese</li><li>music_only: Music only, no voiceover</li></ul>
     * @param string $VideoType <p>Video type</p><p>Enumeration value:</p><ul><li>ugc: UGC seeding</li><li>talk: Product talk</li><li>display: Product display (product only, no voice)</li><li>unboxing: Out-of-the-box sharing</li><li>reaction: Reaction show</li></ul>
     * @param integer $SplitCount <p>Fission count</p><p>Value ranges from 0 to 1</p><p>Unit: unit</p>
     * @param CustomModel $CustomModel <p>Customize an on-camera model</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModelTier",$param) and $param["ModelTier"] !== null) {
            $this->ModelTier = $param["ModelTier"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("VideoType",$param) and $param["VideoType"] !== null) {
            $this->VideoType = $param["VideoType"];
        }

        if (array_key_exists("SplitCount",$param) and $param["SplitCount"] !== null) {
            $this->SplitCount = $param["SplitCount"];
        }

        if (array_key_exists("CustomModel",$param) and $param["CustomModel"] !== null) {
            $this->CustomModel = new CustomModel();
            $this->CustomModel->deserialize($param["CustomModel"]);
        }
    }
}
