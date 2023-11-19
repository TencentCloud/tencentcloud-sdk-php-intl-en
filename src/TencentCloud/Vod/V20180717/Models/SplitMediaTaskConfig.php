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
 * Video stripping task configuration information.
 *
 * @method float getStartTimeOffset() Obtain The offset time of the start of video stripping, unit: seconds. 
<li>Leave it blank or fill in 0, which means that the transcoded video starts from the starting position of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that after transcoding The video starts from the n-th second position of the original video;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video starts from the position n seconds before the end of the original video. </li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The offset time of the start of video stripping, unit: seconds. 
<li>Leave it blank or fill in 0, which means that the transcoded video starts from the starting position of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that after transcoding The video starts from the n-th second position of the original video;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video starts from the position n seconds before the end of the original video. </li>
 * @method float getEndTimeOffset() Obtain Offset time at the end of video stripping, unit: seconds. 
<li>Leave it blank or fill it in with 0, which means that the transcoded video will continue until the end of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that the transcoded video will continue until the end of the original video. The video continues until the nth second of the original video and terminates;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video continues until n seconds before the end of the original video. </li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Offset time at the end of video stripping, unit: seconds. 
<li>Leave it blank or fill it in with 0, which means that the transcoded video will continue until the end of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that the transcoded video will continue until the end of the original video. The video continues until the nth second of the original video and terminates;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video continues until n seconds before the end of the original video. </li>
 * @method string getProcedureName() Obtain Task flow template name, if you want Fill in when executing the task flow on the generated new video.
 * @method void setProcedureName(string $ProcedureName) Set Task flow template name, if you want Fill in when executing the task flow on the generated new video.
 * @method SplitMediaOutputConfig getOutputConfig() Obtain The video is split into strips to output information.
 * @method void setOutputConfig(SplitMediaOutputConfig $OutputConfig) Set The video is split into strips to output information.
 */
class SplitMediaTaskConfig extends AbstractModel
{
    /**
     * @var float The offset time of the start of video stripping, unit: seconds. 
<li>Leave it blank or fill in 0, which means that the transcoded video starts from the starting position of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that after transcoding The video starts from the n-th second position of the original video;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video starts from the position n seconds before the end of the original video. </li>
     */
    public $StartTimeOffset;

    /**
     * @var float Offset time at the end of video stripping, unit: seconds. 
<li>Leave it blank or fill it in with 0, which means that the transcoded video will continue until the end of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that the transcoded video will continue until the end of the original video. The video continues until the nth second of the original video and terminates;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video continues until n seconds before the end of the original video. </li>
     */
    public $EndTimeOffset;

    /**
     * @var string Task flow template name, if you want Fill in when executing the task flow on the generated new video.
     */
    public $ProcedureName;

    /**
     * @var SplitMediaOutputConfig The video is split into strips to output information.
     */
    public $OutputConfig;

    /**
     * @param float $StartTimeOffset The offset time of the start of video stripping, unit: seconds. 
<li>Leave it blank or fill in 0, which means that the transcoded video starts from the starting position of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that after transcoding The video starts from the n-th second position of the original video;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video starts from the position n seconds before the end of the original video. </li>
     * @param float $EndTimeOffset Offset time at the end of video stripping, unit: seconds. 
<li>Leave it blank or fill it in with 0, which means that the transcoded video will continue until the end of the original video;</li>
<li>When the value is greater than 0 (assumed to be n), it means that the transcoded video will continue until the end of the original video. The video continues until the nth second of the original video and terminates;</li>
<li>When the value is less than 0 (assumed to be -n), it means that the transcoded video continues until n seconds before the end of the original video. </li>
     * @param string $ProcedureName Task flow template name, if you want Fill in when executing the task flow on the generated new video.
     * @param SplitMediaOutputConfig $OutputConfig The video is split into strips to output information.
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("ProcedureName",$param) and $param["ProcedureName"] !== null) {
            $this->ProcedureName = $param["ProcedureName"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SplitMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
