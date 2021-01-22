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
 * Input information of a video splitting task.
 *
 * @method string getFileId() Obtain Video ID.
 * @method void setFileId(string $FileId) Set Video ID.
 * @method float getStartTimeOffset() Obtain Offset of the video splitting start time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Offset of the video splitting start time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain Offset of the video splitting end time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Offset of the video splitting end time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 * @method string getProcedureName() Obtain [Task flow template](https://intl.cloud.tencent.com/document/product/266/33931?lang=en&pg=) name, which should be entered if you want to perform a task flow on the generated new video.
 * @method void setProcedureName(string $ProcedureName) Set [Task flow template](https://intl.cloud.tencent.com/document/product/266/33931?lang=en&pg=) name, which should be entered if you want to perform a task flow on the generated new video.
 * @method SplitMediaOutputConfig getOutputConfig() Obtain Output information of a video splitting task.
 * @method void setOutputConfig(SplitMediaOutputConfig $OutputConfig) Set Output information of a video splitting task.
 */
class SplitMediaTaskInput extends AbstractModel
{
    /**
     * @var string Video ID.
     */
    public $FileId;

    /**
     * @var float Offset of the video splitting start time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float Offset of the video splitting end time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
     */
    public $EndTimeOffset;

    /**
     * @var string [Task flow template](https://intl.cloud.tencent.com/document/product/266/33931?lang=en&pg=) name, which should be entered if you want to perform a task flow on the generated new video.
     */
    public $ProcedureName;

    /**
     * @var SplitMediaOutputConfig Output information of a video splitting task.
     */
    public $OutputConfig;

    /**
     * @param string $FileId Video ID.
     * @param float $StartTimeOffset Offset of the video splitting start time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     * @param float $EndTimeOffset Offset of the video splitting end time in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
     * @param string $ProcedureName [Task flow template](https://intl.cloud.tencent.com/document/product/266/33931?lang=en&pg=) name, which should be entered if you want to perform a task flow on the generated new video.
     * @param SplitMediaOutputConfig $OutputConfig Output information of a video splitting task.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
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
