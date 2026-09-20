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
 * Video splitting task configuration information.
 *
 * @method float getStartTimeOffset() Obtain Start time offset of video splitting, in seconds.
<li>Leave it empty or set it to 0, indicating that the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of video splitting, in seconds.
<li>Leave it empty or set it to 0, indicating that the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of video splitting, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video lasts until the nth second of the original video and then ends;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video ends n seconds before the original video ends.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of video splitting, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video lasts until the nth second of the original video and then ends;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video ends n seconds before the original video ends.</li>
 * @method string getProcedureName() Obtain [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in when you want to automatically execute a task flow on the generated new video.
 * @method void setProcedureName(string $ProcedureName) Set [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in when you want to automatically execute a task flow on the generated new video.
 * @method SplitMediaOutputConfig getOutputConfig() Obtain Video splitting output information.
 * @method void setOutputConfig(SplitMediaOutputConfig $OutputConfig) Set Video splitting output information.
 */
class SplitMediaTaskConfig extends AbstractModel
{
    /**
     * @var float Start time offset of video splitting, in seconds.
<li>Leave it empty or set it to 0, indicating that the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of video splitting, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video lasts until the nth second of the original video and then ends;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video ends n seconds before the original video ends.</li>
     */
    public $EndTimeOffset;

    /**
     * @var string [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in when you want to automatically execute a task flow on the generated new video.
     */
    public $ProcedureName;

    /**
     * @var SplitMediaOutputConfig Video splitting output information.
     */
    public $OutputConfig;

    /**
     * @param float $StartTimeOffset Start time offset of video splitting, in seconds.
<li>Leave it empty or set it to 0, indicating that the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
     * @param float $EndTimeOffset End time offset of video splitting, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video lasts until the nth second of the original video and then ends;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video ends n seconds before the original video ends.</li>
     * @param string $ProcedureName [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in when you want to automatically execute a task flow on the generated new video.
     * @param SplitMediaOutputConfig $OutputConfig Video splitting output information.
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
