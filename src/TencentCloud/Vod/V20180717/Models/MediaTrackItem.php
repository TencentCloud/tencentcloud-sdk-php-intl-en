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
 * Segment information of the media track.
 *
 * @method string getType() Obtain Fragment type. Valid values:
<li>Video: video clip.</li>
<li>Audio: audio recording clip.</li>
<li>Sticker: texture segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
 * @method void setType(string $Type) Set Fragment type. Valid values:
<li>Video: video clip.</li>
<li>Audio: audio recording clip.</li>
<li>Sticker: texture segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
 * @method VideoTrackItem getVideoItem() Obtain Video clip. Valid when Type is Video.
 * @method void setVideoItem(VideoTrackItem $VideoItem) Set Video clip. Valid when Type is Video.
 * @method AudioTrackItem getAudioItem() Obtain Audio clip. Valid when Type is Audio.
 * @method void setAudioItem(AudioTrackItem $AudioItem) Set Audio clip. Valid when Type is Audio.
 * @method StickerTrackItem getStickerItem() Obtain Texture segment. Valid when Type is Sticker.
 * @method void setStickerItem(StickerTrackItem $StickerItem) Set Texture segment. Valid when Type is Sticker.
 * @method MediaTransitionItem getTransitionItem() Obtain Transition. Valid when Type is Transition.
 * @method void setTransitionItem(MediaTransitionItem $TransitionItem) Set Transition. Valid when Type is Transition.
 * @method EmptyTrackItem getEmptyItem() Obtain Empty segment. Valid when Type = Empty. The empty segment is used as a placeholder on the timeline.<li>If a period of silence is required between two audio clips, you can use EmptyTrackItem as a placeholder.</li>
<li>Use EmptyTrackItem as a placeholder to locate a certain Item.</li>
 * @method void setEmptyItem(EmptyTrackItem $EmptyItem) Set Empty segment. Valid when Type = Empty. The empty segment is used as a placeholder on the timeline.<li>If a period of silence is required between two audio clips, you can use EmptyTrackItem as a placeholder.</li>
<li>Use EmptyTrackItem as a placeholder to locate a certain Item.</li>
 */
class MediaTrackItem extends AbstractModel
{
    /**
     * @var string Fragment type. Valid values:
<li>Video: video clip.</li>
<li>Audio: audio recording clip.</li>
<li>Sticker: texture segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
     */
    public $Type;

    /**
     * @var VideoTrackItem Video clip. Valid when Type is Video.
     */
    public $VideoItem;

    /**
     * @var AudioTrackItem Audio clip. Valid when Type is Audio.
     */
    public $AudioItem;

    /**
     * @var StickerTrackItem Texture segment. Valid when Type is Sticker.
     */
    public $StickerItem;

    /**
     * @var MediaTransitionItem Transition. Valid when Type is Transition.
     */
    public $TransitionItem;

    /**
     * @var EmptyTrackItem Empty segment. Valid when Type = Empty. The empty segment is used as a placeholder on the timeline.<li>If a period of silence is required between two audio clips, you can use EmptyTrackItem as a placeholder.</li>
<li>Use EmptyTrackItem as a placeholder to locate a certain Item.</li>
     */
    public $EmptyItem;

    /**
     * @param string $Type Fragment type. Valid values:
<li>Video: video clip.</li>
<li>Audio: audio recording clip.</li>
<li>Sticker: texture segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
     * @param VideoTrackItem $VideoItem Video clip. Valid when Type is Video.
     * @param AudioTrackItem $AudioItem Audio clip. Valid when Type is Audio.
     * @param StickerTrackItem $StickerItem Texture segment. Valid when Type is Sticker.
     * @param MediaTransitionItem $TransitionItem Transition. Valid when Type is Transition.
     * @param EmptyTrackItem $EmptyItem Empty segment. Valid when Type = Empty. The empty segment is used as a placeholder on the timeline.<li>If a period of silence is required between two audio clips, you can use EmptyTrackItem as a placeholder.</li>
<li>Use EmptyTrackItem as a placeholder to locate a certain Item.</li>
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

        if (array_key_exists("VideoItem",$param) and $param["VideoItem"] !== null) {
            $this->VideoItem = new VideoTrackItem();
            $this->VideoItem->deserialize($param["VideoItem"]);
        }

        if (array_key_exists("AudioItem",$param) and $param["AudioItem"] !== null) {
            $this->AudioItem = new AudioTrackItem();
            $this->AudioItem->deserialize($param["AudioItem"]);
        }

        if (array_key_exists("StickerItem",$param) and $param["StickerItem"] !== null) {
            $this->StickerItem = new StickerTrackItem();
            $this->StickerItem->deserialize($param["StickerItem"]);
        }

        if (array_key_exists("TransitionItem",$param) and $param["TransitionItem"] !== null) {
            $this->TransitionItem = new MediaTransitionItem();
            $this->TransitionItem->deserialize($param["TransitionItem"]);
        }

        if (array_key_exists("EmptyItem",$param) and $param["EmptyItem"] !== null) {
            $this->EmptyItem = new EmptyTrackItem();
            $this->EmptyItem->deserialize($param["EmptyItem"]);
        }
    }
}
