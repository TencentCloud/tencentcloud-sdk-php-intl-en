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
 * The element information of a video editing/compositing task.
 *
 * @method string getType() Obtain The element type. Valid values:
<li>`Video` </li>
<li>`Audio` </li>
<li>`Image` </li>
<li>`Transition` </li>
<li>`Subtitle` </li>
<li>`Empty` </li>
 * @method void setType(string $Type) Set The element type. Valid values:
<li>`Video` </li>
<li>`Audio` </li>
<li>`Image` </li>
<li>`Transition` </li>
<li>`Subtitle` </li>
<li>`Empty` </li>
 * @method ComposeVideoItem getVideo() Obtain The information of the video element, which is valid if `Type` is `Video`.
 * @method void setVideo(ComposeVideoItem $Video) Set The information of the video element, which is valid if `Type` is `Video`.
 * @method ComposeAudioItem getAudio() Obtain The information of the audio element, which is valid if `Type` is `Audio`.
 * @method void setAudio(ComposeAudioItem $Audio) Set The information of the audio element, which is valid if `Type` is `Audio`.
 * @method ComposeImageItem getImage() Obtain The information of the image element, which is valid if `Type` is `Image`.
 * @method void setImage(ComposeImageItem $Image) Set The information of the image element, which is valid if `Type` is `Image`.
 * @method ComposeTransitionItem getTransition() Obtain The information of the transition element, which is valid if `Type` is `Transition`.
 * @method void setTransition(ComposeTransitionItem $Transition) Set The information of the transition element, which is valid if `Type` is `Transition`.
 * @method ComposeSubtitleItem getSubtitle() Obtain The information of the subtitle element, which is valid if `Type` is `Subtitle`.
 * @method void setSubtitle(ComposeSubtitleItem $Subtitle) Set The information of the subtitle element, which is valid if `Type` is `Subtitle`.
 * @method ComposeEmptyItem getEmpty() Obtain The information of the empty element, which is valid if `Type` is `Empty`. An empty element is used as a placeholder in the timeline.
 * @method void setEmpty(ComposeEmptyItem $Empty) Set The information of the empty element, which is valid if `Type` is `Empty`. An empty element is used as a placeholder in the timeline.
 */
class ComposeMediaItem extends AbstractModel
{
    /**
     * @var string The element type. Valid values:
<li>`Video` </li>
<li>`Audio` </li>
<li>`Image` </li>
<li>`Transition` </li>
<li>`Subtitle` </li>
<li>`Empty` </li>
     */
    public $Type;

    /**
     * @var ComposeVideoItem The information of the video element, which is valid if `Type` is `Video`.
     */
    public $Video;

    /**
     * @var ComposeAudioItem The information of the audio element, which is valid if `Type` is `Audio`.
     */
    public $Audio;

    /**
     * @var ComposeImageItem The information of the image element, which is valid if `Type` is `Image`.
     */
    public $Image;

    /**
     * @var ComposeTransitionItem The information of the transition element, which is valid if `Type` is `Transition`.
     */
    public $Transition;

    /**
     * @var ComposeSubtitleItem The information of the subtitle element, which is valid if `Type` is `Subtitle`.
     */
    public $Subtitle;

    /**
     * @var ComposeEmptyItem The information of the empty element, which is valid if `Type` is `Empty`. An empty element is used as a placeholder in the timeline.
     */
    public $Empty;

    /**
     * @param string $Type The element type. Valid values:
<li>`Video` </li>
<li>`Audio` </li>
<li>`Image` </li>
<li>`Transition` </li>
<li>`Subtitle` </li>
<li>`Empty` </li>
     * @param ComposeVideoItem $Video The information of the video element, which is valid if `Type` is `Video`.
     * @param ComposeAudioItem $Audio The information of the audio element, which is valid if `Type` is `Audio`.
     * @param ComposeImageItem $Image The information of the image element, which is valid if `Type` is `Image`.
     * @param ComposeTransitionItem $Transition The information of the transition element, which is valid if `Type` is `Transition`.
     * @param ComposeSubtitleItem $Subtitle The information of the subtitle element, which is valid if `Type` is `Subtitle`.
     * @param ComposeEmptyItem $Empty The information of the empty element, which is valid if `Type` is `Empty`. An empty element is used as a placeholder in the timeline.
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

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new ComposeVideoItem();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new ComposeAudioItem();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ComposeImageItem();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Transition",$param) and $param["Transition"] !== null) {
            $this->Transition = new ComposeTransitionItem();
            $this->Transition->deserialize($param["Transition"]);
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new ComposeSubtitleItem();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }

        if (array_key_exists("Empty",$param) and $param["Empty"] !== null) {
            $this->Empty = new ComposeEmptyItem();
            $this->Empty->deserialize($param["Empty"]);
        }
    }
}
