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
 * Audio track information.
 *
 * @method integer getChannelsRemix() Obtain Whether to enable the feature of multi-audio track mixing. Valid values:
<li>0: To disable the multi-audio track mixing feature.
<li>1: To enable the multi-audio track mixing feature. 
<li>Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChannelsRemix(integer $ChannelsRemix) Set Whether to enable the feature of multi-audio track mixing. Valid values:
<li>0: To disable the multi-audio track mixing feature.
<li>1: To enable the multi-audio track mixing feature. 
<li>Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSelectType() Obtain Set the selector type for the input audio track. Valid values:
<li>track: indicates the usage of audio track id to identify the track to be used.
<li>track_channel: indicates the usage of both the audio track id and sound channel id to identify the track and channel to be used.
<li>Default value: track.
If the original audio track has multiple sound channels, please use track_channel.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSelectType(string $SelectType) Set Set the selector type for the input audio track. Valid values:
<li>track: indicates the usage of audio track id to identify the track to be used.
<li>track_channel: indicates the usage of both the audio track id and sound channel id to identify the track and channel to be used.
<li>Default value: track.
If the original audio track has multiple sound channels, please use track_channel.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getInputTrackInfo() Obtain Audio track information.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInputTrackInfo(array $InputTrackInfo) Set Audio track information.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class AudioTrackChannelInfo extends AbstractModel
{
    /**
     * @var integer Whether to enable the feature of multi-audio track mixing. Valid values:
<li>0: To disable the multi-audio track mixing feature.
<li>1: To enable the multi-audio track mixing feature. 
<li>Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChannelsRemix;

    /**
     * @var string Set the selector type for the input audio track. Valid values:
<li>track: indicates the usage of audio track id to identify the track to be used.
<li>track_channel: indicates the usage of both the audio track id and sound channel id to identify the track and channel to be used.
<li>Default value: track.
If the original audio track has multiple sound channels, please use track_channel.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SelectType;

    /**
     * @var array Audio track information.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InputTrackInfo;

    /**
     * @param integer $ChannelsRemix Whether to enable the feature of multi-audio track mixing. Valid values:
<li>0: To disable the multi-audio track mixing feature.
<li>1: To enable the multi-audio track mixing feature. 
<li>Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SelectType Set the selector type for the input audio track. Valid values:
<li>track: indicates the usage of audio track id to identify the track to be used.
<li>track_channel: indicates the usage of both the audio track id and sound channel id to identify the track and channel to be used.
<li>Default value: track.
If the original audio track has multiple sound channels, please use track_channel.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $InputTrackInfo Audio track information.

Note: This field may return null, indicating that no valid value can be obtained.
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
