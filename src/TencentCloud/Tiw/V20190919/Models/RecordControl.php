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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * It specifies the global recording parameters and the recording parameters over a specific stream. For example, you can specify the streams you want to record and whether to record low-resolution videos only.
 *
 * @method boolean getEnabled() Obtain It specifies whether to enable RecordControl. Valid values: true (yes); false (no).
 * @method void setEnabled(boolean $Enabled) Set It specifies whether to enable RecordControl. Valid values: true (yes); false (no).
 * @method boolean getDisableRecord() Obtain A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable recording. Valid values:

true: no stream is recorded.
false: all streams are recorded. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method void setDisableRecord(boolean $DisableRecord) Set A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable recording. Valid values:

true: no stream is recorded.
false: all streams are recorded. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method boolean getDisableAudio() Obtain A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable audio recording over all streams. Valid values:

true: no audio recording of any streams.
false: audio recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method void setDisableAudio(boolean $DisableAudio) Set A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable audio recording over all streams. Valid values:

true: no audio recording of any streams.
false: audio recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method boolean getPullSmallVideo() Obtain A global parameter generally used in conjunction with `StreamControls` that specifies whether to record low-resolution videos only. Valid values:

true: only records low-resolution videos for all streams. Please ensure that the up-streaming end pushes the low-resolution videos. Otherwise, the recorded video may be black.
false: high-resolution video recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method void setPullSmallVideo(boolean $PullSmallVideo) Set A global parameter generally used in conjunction with `StreamControls` that specifies whether to record low-resolution videos only. Valid values:

true: only records low-resolution videos for all streams. Please ensure that the up-streaming end pushes the low-resolution videos. Otherwise, the recorded video may be black.
false: high-resolution video recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
 * @method array getStreamControls() Obtain Parameters over specific streams, which take priority over global configurations. If it’s empty, all streams are recorded according to the global configurations. 
 * @method void setStreamControls(array $StreamControls) Set Parameters over specific streams, which take priority over global configurations. If it’s empty, all streams are recorded according to the global configurations. 
 */
class RecordControl extends AbstractModel
{
    /**
     * @var boolean It specifies whether to enable RecordControl. Valid values: true (yes); false (no).
     */
    public $Enabled;

    /**
     * @var boolean A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable recording. Valid values:

true: no stream is recorded.
false: all streams are recorded. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     */
    public $DisableRecord;

    /**
     * @var boolean A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable audio recording over all streams. Valid values:

true: no audio recording of any streams.
false: audio recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     */
    public $DisableAudio;

    /**
     * @var boolean A global parameter generally used in conjunction with `StreamControls` that specifies whether to record low-resolution videos only. Valid values:

true: only records low-resolution videos for all streams. Please ensure that the up-streaming end pushes the low-resolution videos. Otherwise, the recorded video may be black.
false: high-resolution video recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     */
    public $PullSmallVideo;

    /**
     * @var array Parameters over specific streams, which take priority over global configurations. If it’s empty, all streams are recorded according to the global configurations. 
     */
    public $StreamControls;

    /**
     * @param boolean $Enabled It specifies whether to enable RecordControl. Valid values: true (yes); false (no).
     * @param boolean $DisableRecord A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable recording. Valid values:

true: no stream is recorded.
false: all streams are recorded. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     * @param boolean $DisableAudio A global parameter generally used in conjunction with `StreamControls` that specifies whether to disable audio recording over all streams. Valid values:

true: no audio recording of any streams.
false: audio recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     * @param boolean $PullSmallVideo A global parameter generally used in conjunction with `StreamControls` that specifies whether to record low-resolution videos only. Valid values:

true: only records low-resolution videos for all streams. Please ensure that the up-streaming end pushes the low-resolution videos. Otherwise, the recorded video may be black.
false: high-resolution video recording of all streams. Default value: false.

The setting in this parameter is applied to all streams. However, if `StreamControls` is passed in, the parameters in `StreamControls` will take precedence.
     * @param array $StreamControls Parameters over specific streams, which take priority over global configurations. If it’s empty, all streams are recorded according to the global configurations. 
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("DisableAudio",$param) and $param["DisableAudio"] !== null) {
            $this->DisableAudio = $param["DisableAudio"];
        }

        if (array_key_exists("PullSmallVideo",$param) and $param["PullSmallVideo"] !== null) {
            $this->PullSmallVideo = $param["PullSmallVideo"];
        }

        if (array_key_exists("StreamControls",$param) and $param["StreamControls"] !== null) {
            $this->StreamControls = [];
            foreach ($param["StreamControls"] as $key => $value){
                $obj = new StreamControl();
                $obj->deserialize($value);
                array_push($this->StreamControls, $obj);
            }
        }
    }
}
