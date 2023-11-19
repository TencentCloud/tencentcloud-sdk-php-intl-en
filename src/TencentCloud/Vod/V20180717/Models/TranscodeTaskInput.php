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
 * Input parameter type of transcoding task
 *
 * @method integer getDefinition() Obtain Video transcoding template ID.
 * @method void setDefinition(integer $Definition) Set Video transcoding template ID.
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TraceWatermarkInput getTraceWatermark() Obtain Digital watermark.
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) Set Digital watermark.
 * @method CopyRightWatermarkInput getCopyRightWatermark() Obtain Copyright watermark.
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) Set Copyright watermark.
 * @method array getMosaicSet() Obtain List of blurs. Up to 10 ones can be supported.
 * @method void setMosaicSet(array $MosaicSet) Set List of blurs. Up to 10 ones can be supported.
 * @method array getHeadTailSet() Obtain List of video opening/closing credits configuration template IDs. You can enter up to 10 IDs.
 * @method void setHeadTailSet(array $HeadTailSet) Set List of video opening/closing credits configuration template IDs. You can enter up to 10 IDs.
 * @method float getStartTimeOffset() Obtain Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 */
class TranscodeTaskInput extends AbstractModel
{
    /**
     * @var integer Video transcoding template ID.
     */
    public $Definition;

    /**
     * @var array List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkSet;

    /**
     * @var TraceWatermarkInput Digital watermark.
     */
    public $TraceWatermark;

    /**
     * @var CopyRightWatermarkInput Copyright watermark.
     */
    public $CopyRightWatermark;

    /**
     * @var array List of blurs. Up to 10 ones can be supported.
     */
    public $MosaicSet;

    /**
     * @var array List of video opening/closing credits configuration template IDs. You can enter up to 10 IDs.
     */
    public $HeadTailSet;

    /**
     * @var float Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition Video transcoding template ID.
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TraceWatermarkInput $TraceWatermark Digital watermark.
     * @param CopyRightWatermarkInput $CopyRightWatermark Copyright watermark.
     * @param array $MosaicSet List of blurs. Up to 10 ones can be supported.
     * @param array $HeadTailSet List of video opening/closing credits configuration template IDs. You can enter up to 10 IDs.
     * @param float $StartTimeOffset Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     * @param float $EndTimeOffset End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("TraceWatermark",$param) and $param["TraceWatermark"] !== null) {
            $this->TraceWatermark = new TraceWatermarkInput();
            $this->TraceWatermark->deserialize($param["TraceWatermark"]);
        }

        if (array_key_exists("CopyRightWatermark",$param) and $param["CopyRightWatermark"] !== null) {
            $this->CopyRightWatermark = new CopyRightWatermarkInput();
            $this->CopyRightWatermark->deserialize($param["CopyRightWatermark"]);
        }

        if (array_key_exists("MosaicSet",$param) and $param["MosaicSet"] !== null) {
            $this->MosaicSet = [];
            foreach ($param["MosaicSet"] as $key => $value){
                $obj = new MosaicInput();
                $obj->deserialize($value);
                array_push($this->MosaicSet, $obj);
            }
        }

        if (array_key_exists("HeadTailSet",$param) and $param["HeadTailSet"] !== null) {
            $this->HeadTailSet = [];
            foreach ($param["HeadTailSet"] as $key => $value){
                $obj = new HeadTailTaskInput();
                $obj->deserialize($value);
                array_push($this->HeadTailSet, $obj);
            }
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
