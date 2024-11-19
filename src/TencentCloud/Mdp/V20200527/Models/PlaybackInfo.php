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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * program playback configuration.
 *
 * @method integer getDuration() Obtain Program duration, in milliseconds, valid for live broadcast.
 * @method void setDuration(integer $Duration) Set Program duration, in milliseconds, valid for live broadcast.
 * @method string getTransitionType() Obtain Program startup method, live broadcast only supports Absolute, on-demand also supports Relative.
 * @method void setTransitionType(string $TransitionType) Set Program startup method, live broadcast only supports Absolute, on-demand also supports Relative.
 * @method integer getStartTime() Obtain Unix timestamp, the start execution time of the program in the Absolute scenario.
 * @method void setStartTime(integer $StartTime) Set Unix timestamp, the start execution time of the program in the Absolute scenario.
 * @method string getRelativePosition() Obtain It is related to the insertion order of the selected program, divided into After and Before.
 * @method void setRelativePosition(string $RelativePosition) Set It is related to the insertion order of the selected program, divided into After and Before.
 * @method string getRelativeProgramId() Obtain The selected insertion reference program id.
 * @method void setRelativeProgramId(string $RelativeProgramId) Set The selected insertion reference program id.
 * @method ClipRangeInfo getClipRangeConf() Obtain Spacer configuration.
 * @method void setClipRangeConf(ClipRangeInfo $ClipRangeConf) Set Spacer configuration.
 * @method string getRelativeProgramName() Obtain RelativeProgramName.
 * @method void setRelativeProgramName(string $RelativeProgramName) Set RelativeProgramName.
 */
class PlaybackInfo extends AbstractModel
{
    /**
     * @var integer Program duration, in milliseconds, valid for live broadcast.
     */
    public $Duration;

    /**
     * @var string Program startup method, live broadcast only supports Absolute, on-demand also supports Relative.
     */
    public $TransitionType;

    /**
     * @var integer Unix timestamp, the start execution time of the program in the Absolute scenario.
     */
    public $StartTime;

    /**
     * @var string It is related to the insertion order of the selected program, divided into After and Before.
     */
    public $RelativePosition;

    /**
     * @var string The selected insertion reference program id.
     */
    public $RelativeProgramId;

    /**
     * @var ClipRangeInfo Spacer configuration.
     */
    public $ClipRangeConf;

    /**
     * @var string RelativeProgramName.
     */
    public $RelativeProgramName;

    /**
     * @param integer $Duration Program duration, in milliseconds, valid for live broadcast.
     * @param string $TransitionType Program startup method, live broadcast only supports Absolute, on-demand also supports Relative.
     * @param integer $StartTime Unix timestamp, the start execution time of the program in the Absolute scenario.
     * @param string $RelativePosition It is related to the insertion order of the selected program, divided into After and Before.
     * @param string $RelativeProgramId The selected insertion reference program id.
     * @param ClipRangeInfo $ClipRangeConf Spacer configuration.
     * @param string $RelativeProgramName RelativeProgramName.
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

        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RelativePosition",$param) and $param["RelativePosition"] !== null) {
            $this->RelativePosition = $param["RelativePosition"];
        }

        if (array_key_exists("RelativeProgramId",$param) and $param["RelativeProgramId"] !== null) {
            $this->RelativeProgramId = $param["RelativeProgramId"];
        }

        if (array_key_exists("ClipRangeConf",$param) and $param["ClipRangeConf"] !== null) {
            $this->ClipRangeConf = new ClipRangeInfo();
            $this->ClipRangeConf->deserialize($param["ClipRangeConf"]);
        }

        if (array_key_exists("RelativeProgramName",$param) and $param["RelativeProgramName"] !== null) {
            $this->RelativeProgramName = $param["RelativeProgramName"];
        }
    }
}
