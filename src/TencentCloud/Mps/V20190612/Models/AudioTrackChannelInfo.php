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
 * Audio track information.
 *
 * @method integer getChannelsRemix() Obtain Whether audio mixing is enabled. Value range:
0: Disable audio mixing
1: Enable audio mixing
Default value: 0
 * @method void setChannelsRemix(integer $ChannelsRemix) Set Whether audio mixing is enabled. Value range:
0: Disable audio mixing
1: Enable audio mixing
Default value: 0
 * @method string getSelectType() Obtain Merge audio track input type, available values:
track: Indicates usage of the audio track id.
track_channel: Indicates usage of audio track id and sound channel id.
Default: track.
Note: If the original video is multichannel, recommend using track_channel.
 * @method void setSelectType(string $SelectType) Set Merge audio track input type, available values:
track: Indicates usage of the audio track id.
track_channel: Indicates usage of audio track id and sound channel id.
Default: track.
Note: If the original video is multichannel, recommend using track_channel.
 * @method array getInputTrackInfo() Obtain Audio track info
 * @method void setInputTrackInfo(array $InputTrackInfo) Set Audio track info
 */
class AudioTrackChannelInfo extends AbstractModel
{
    /**
     * @var integer Whether audio mixing is enabled. Value range:
0: Disable audio mixing
1: Enable audio mixing
Default value: 0
     */
    public $ChannelsRemix;

    /**
     * @var string Merge audio track input type, available values:
track: Indicates usage of the audio track id.
track_channel: Indicates usage of audio track id and sound channel id.
Default: track.
Note: If the original video is multichannel, recommend using track_channel.
     */
    public $SelectType;

    /**
     * @var array Audio track info
     */
    public $InputTrackInfo;

    /**
     * @param integer $ChannelsRemix Whether audio mixing is enabled. Value range:
0: Disable audio mixing
1: Enable audio mixing
Default value: 0
     * @param string $SelectType Merge audio track input type, available values:
track: Indicates usage of the audio track id.
track_channel: Indicates usage of audio track id and sound channel id.
Default: track.
Note: If the original video is multichannel, recommend using track_channel.
     * @param array $InputTrackInfo Audio track info
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
        if (array_key_exists("ChannelsRemix",$param) and $param["ChannelsRemix"] !== null) {
            $this->ChannelsRemix = $param["ChannelsRemix"];
        }

        if (array_key_exists("SelectType",$param) and $param["SelectType"] !== null) {
            $this->SelectType = $param["SelectType"];
        }

        if (array_key_exists("InputTrackInfo",$param) and $param["InputTrackInfo"] !== null) {
            $this->InputTrackInfo = [];
            foreach ($param["InputTrackInfo"] as $key => $value){
                $obj = new TrackInfo();
                $obj->deserialize($value);
                array_push($this->InputTrackInfo, $obj);
            }
        }
    }
}
