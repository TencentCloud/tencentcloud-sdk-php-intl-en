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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method array getWatermarkSet() Obtain 
 * @method void setWatermarkSet(array $WatermarkSet) Set 
 * @method TraceWatermarkInput getTraceWatermark() Obtain 
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) Set 
 * @method CopyRightWatermarkInput getCopyRightWatermark() Obtain 
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) Set 
 * @method BlindWatermarkInput getBlindWatermark() Obtain 
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set 
 * @method array getMosaicSet() Obtain 
 * @method void setMosaicSet(array $MosaicSet) Set 
 * @method array getHeadTailSet() Obtain 
 * @method void setHeadTailSet(array $HeadTailSet) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method OverrideTranscodeParameter getOverrideParameter() Obtain 
 * @method void setOverrideParameter(OverrideTranscodeParameter $OverrideParameter) Set 
 * @method array getSubtitleInfoSet() Obtain 
 * @method void setSubtitleInfoSet(array $SubtitleInfoSet) Set 
 */
class TranscodeTaskInput extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var array 
     */
    public $WatermarkSet;

    /**
     * @var TraceWatermarkInput 
     */
    public $TraceWatermark;

    /**
     * @var CopyRightWatermarkInput 
     */
    public $CopyRightWatermark;

    /**
     * @var BlindWatermarkInput 
     */
    public $BlindWatermark;

    /**
     * @var array 
     */
    public $MosaicSet;

    /**
     * @var array 
     */
    public $HeadTailSet;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var OverrideTranscodeParameter 
     */
    public $OverrideParameter;

    /**
     * @var array 
     */
    public $SubtitleInfoSet;

    /**
     * @param integer $Definition 
     * @param array $WatermarkSet 
     * @param TraceWatermarkInput $TraceWatermark 
     * @param CopyRightWatermarkInput $CopyRightWatermark 
     * @param BlindWatermarkInput $BlindWatermark 
     * @param array $MosaicSet 
     * @param array $HeadTailSet 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param OverrideTranscodeParameter $OverrideParameter 
     * @param array $SubtitleInfoSet 
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
