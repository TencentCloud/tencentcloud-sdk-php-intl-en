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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Segment information of media track
 *
 * @method string getType() Obtain Segment type. Valid values:
<li>Video: video segment.</li>
<li>Audio: audio segment.</li>
<li>Sticker: sticker segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
 * @method void setType(string $Type) Set Segment type. Valid values:
<li>Video: video segment.</li>
<li>Audio: audio segment.</li>
<li>Sticker: sticker segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
 * @method VideoTrackItem getVideoItem() Obtain Video segment, which is valid if `Type` is `Video`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoItem(VideoTrackItem $VideoItem) Set Video segment, which is valid if `Type` is `Video`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AudioTrackItem getAudioItem() Obtain Audio segment, which is valid if `Type` is `Audio`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioItem(AudioTrackItem $AudioItem) Set Audio segment, which is valid if `Type` is `Audio`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method StickerTrackItem getStickerItem() Obtain Sticker segment, which is valid if `Type` is `Sticker`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStickerItem(StickerTrackItem $StickerItem) Set Sticker segment, which is valid if `Type` is `Sticker`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaTransitionItem getTransitionItem() Obtain Transition, which is valid if `Type` is `Transition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransitionItem(MediaTransitionItem $TransitionItem) Set Transition, which is valid if `Type` is `Transition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EmptyTrackItem getEmptyItem() Obtain Empty segment, which is valid if `Type` is `Empty`. It is used as placeholder on time axis. <li>If you want a period of silence between two audio segments, you can use `EmptyTrackItem` to hold the place.</li>
<li>Use `EmptyTrackItem` as a placeholder to locate an item.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmptyItem(EmptyTrackItem $EmptyItem) Set Empty segment, which is valid if `Type` is `Empty`. It is used as placeholder on time axis. <li>If you want a period of silence between two audio segments, you can use `EmptyTrackItem` to hold the place.</li>
<li>Use `EmptyTrackItem` as a placeholder to locate an item.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaTrackItem extends AbstractModel
{
    /**
     * @var string Segment type. Valid values:
<li>Video: video segment.</li>
<li>Audio: audio segment.</li>
<li>Sticker: sticker segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
     */
    public $Type;

    /**
     * @var VideoTrackItem Video segment, which is valid if `Type` is `Video`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoItem;

    /**
     * @var AudioTrackItem Audio segment, which is valid if `Type` is `Audio`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioItem;

    /**
     * @var StickerTrackItem Sticker segment, which is valid if `Type` is `Sticker`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StickerItem;

    /**
     * @var MediaTransitionItem Transition, which is valid if `Type` is `Transition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TransitionItem;

    /**
     * @var EmptyTrackItem Empty segment, which is valid if `Type` is `Empty`. It is used as placeholder on time axis. <li>If you want a period of silence between two audio segments, you can use `EmptyTrackItem` to hold the place.</li>
<li>Use `EmptyTrackItem` as a placeholder to locate an item.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EmptyItem;

    /**
     * @param string $Type Segment type. Valid values:
<li>Video: video segment.</li>
<li>Audio: audio segment.</li>
<li>Sticker: sticker segment.</li>
<li>Transition: transition.</li>
<li>Empty: empty segment.</li>
     * @param VideoTrackItem $VideoItem Video segment, which is valid if `Type` is `Video`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AudioTrackItem $AudioItem Audio segment, which is valid if `Type` is `Audio`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param StickerTrackItem $StickerItem Sticker segment, which is valid if `Type` is `Sticker`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaTransitionItem $TransitionItem Transition, which is valid if `Type` is `Transition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EmptyTrackItem $EmptyItem Empty segment, which is valid if `Type` is `Empty`. It is used as placeholder on time axis. <li>If you want a period of silence between two audio segments, you can use `EmptyTrackItem` to hold the place.</li>
<li>Use `EmptyTrackItem` as a placeholder to locate an item.</li>
Note: this field may return null, indicating that no valid values can be obtained.
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
