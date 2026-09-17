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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method VideoTrackItem getVideoItem() Obtain 
 * @method void setVideoItem(VideoTrackItem $VideoItem) Set 
 * @method AudioTrackItem getAudioItem() Obtain 
 * @method void setAudioItem(AudioTrackItem $AudioItem) Set 
 * @method StickerTrackItem getStickerItem() Obtain 
 * @method void setStickerItem(StickerTrackItem $StickerItem) Set 
 * @method MediaTransitionItem getTransitionItem() Obtain 
 * @method void setTransitionItem(MediaTransitionItem $TransitionItem) Set 
 * @method EmptyTrackItem getEmptyItem() Obtain 
 * @method void setEmptyItem(EmptyTrackItem $EmptyItem) Set 
 */
class MediaTrackItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var VideoTrackItem 
     */
    public $VideoItem;

    /**
     * @var AudioTrackItem 
     */
    public $AudioItem;

    /**
     * @var StickerTrackItem 
     */
    public $StickerItem;

    /**
     * @var MediaTransitionItem 
     */
    public $TransitionItem;

    /**
     * @var EmptyTrackItem 
     */
    public $EmptyItem;

    /**
     * @param string $Type 
     * @param VideoTrackItem $VideoItem 
     * @param AudioTrackItem $AudioItem 
     * @param StickerTrackItem $StickerItem 
     * @param MediaTransitionItem $TransitionItem 
     * @param EmptyTrackItem $EmptyItem 
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
