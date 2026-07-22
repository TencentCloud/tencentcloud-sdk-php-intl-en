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
 * Input parameter type of transcoding task
 *
 * @method integer getDefinition() Obtain <p>Video transcoding template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Video transcoding template ID.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method TraceWatermarkInput getTraceWatermark() Obtain <p>Traceable watermark.</p>
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) Set <p>Traceable watermark.</p>
 * @method CopyRightWatermarkInput getCopyRightWatermark() Obtain <p>Copyright watermark.</p>
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) Set <p>Copyright watermark.</p>
 * @method BlindWatermarkInput getBlindWatermark() Obtain <p>Digital watermark.</p>
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set <p>Digital watermark.</p>
 * @method array getMosaicSet() Obtain <p>Mosaic list. Up to 10 are supported.</p>
 * @method void setMosaicSet(array $MosaicSet) Set <p>Mosaic list. Up to 10 are supported.</p>
 * @method array getHeadTailSet() Obtain <p>Opening and ending list. Up to 10 opening and ending sequences are supported.</p>
 * @method void setHeadTailSet(array $HeadTailSet) Set <p>Opening and ending list. Up to 10 opening and ending sequences are supported.</p>
 * @method float getStartTimeOffset() Obtain <p>Start time offset of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video starts from the start position of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video starts from the nth second position of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time offset of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video starts from the start position of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video starts from the nth second position of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain <p>Offset of the termination time of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video lasts until the end of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video lasts until the nth second of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>Offset of the termination time of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video lasts until the end of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video lasts until the nth second of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
 * @method OverrideTranscodeParameter getOverrideParameter() Obtain <p>Custom video transcoding parameters.</p>
 * @method void setOverrideParameter(OverrideTranscodeParameter $OverrideParameter) Set <p>Custom video transcoding parameters.</p>
 * @method array getSubtitleInfoSet() Obtain <p>List of subtitle suppression information. Up to 2 are supported.</p>
 * @method void setSubtitleInfoSet(array $SubtitleInfoSet) Set <p>List of subtitle suppression information. Up to 2 are supported.</p>
 */
class TranscodeTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Video transcoding template ID.</p>
     */
    public $Definition;

    /**
     * @var array <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     */
    public $WatermarkSet;

    /**
     * @var TraceWatermarkInput <p>Traceable watermark.</p>
     */
    public $TraceWatermark;

    /**
     * @var CopyRightWatermarkInput <p>Copyright watermark.</p>
     */
    public $CopyRightWatermark;

    /**
     * @var BlindWatermarkInput <p>Digital watermark.</p>
     */
    public $BlindWatermark;

    /**
     * @var array <p>Mosaic list. Up to 10 are supported.</p>
     */
    public $MosaicSet;

    /**
     * @var array <p>Opening and ending list. Up to 10 opening and ending sequences are supported.</p>
     */
    public $HeadTailSet;

    /**
     * @var float <p>Start time offset of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video starts from the start position of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video starts from the nth second position of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>Offset of the termination time of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video lasts until the end of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video lasts until the nth second of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
     */
    public $EndTimeOffset;

    /**
     * @var OverrideTranscodeParameter <p>Custom video transcoding parameters.</p>
     */
    public $OverrideParameter;

    /**
     * @var array <p>List of subtitle suppression information. Up to 2 are supported.</p>
     */
    public $SubtitleInfoSet;

    /**
     * @param integer $Definition <p>Video transcoding template ID.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     * @param TraceWatermarkInput $TraceWatermark <p>Traceable watermark.</p>
     * @param CopyRightWatermarkInput $CopyRightWatermark <p>Copyright watermark.</p>
     * @param BlindWatermarkInput $BlindWatermark <p>Digital watermark.</p>
     * @param array $MosaicSet <p>Mosaic list. Up to 10 are supported.</p>
     * @param array $HeadTailSet <p>Opening and ending list. Up to 10 opening and ending sequences are supported.</p>
     * @param float $StartTimeOffset <p>Start time offset of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video starts from the start position of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video starts from the nth second position of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video starts from the position n seconds before the end of the original video.</li>
     * @param float $EndTimeOffset <p>Offset of the termination time of the transcoded video, unit: second.</p><li>Leave it blank or enter 0 means the transcoded video lasts until the end of the original video.</li><li>When the value is greater than 0 (assume it is n), it means the transcoded video lasts until the nth second of the original video.</li><li>When the value is less than 0 (assume it is -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
     * @param OverrideTranscodeParameter $OverrideParameter <p>Custom video transcoding parameters.</p>
     * @param array $SubtitleInfoSet <p>List of subtitle suppression information. Up to 2 are supported.</p>
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

        if (array_key_exists("BlindWatermark",$param) and $param["BlindWatermark"] !== null) {
            $this->BlindWatermark = new BlindWatermarkInput();
            $this->BlindWatermark->deserialize($param["BlindWatermark"]);
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

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideTranscodeParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("SubtitleInfoSet",$param) and $param["SubtitleInfoSet"] !== null) {
            $this->SubtitleInfoSet = [];
            foreach ($param["SubtitleInfoSet"] as $key => $value){
                $obj = new SubtitleInfoInput();
                $obj->deserialize($value);
                array_push($this->SubtitleInfoSet, $obj);
            }
        }
    }
}
