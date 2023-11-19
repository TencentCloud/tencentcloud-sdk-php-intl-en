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
 * Input parameter type of adaptive bitrate streaming
 *
 * @method integer getDefinition() Obtain Adaptive bitrate streaming template ID.
 * @method void setDefinition(integer $Definition) Set Adaptive bitrate streaming template ID.
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TraceWatermarkInput getTraceWatermark() Obtain Digital watermark.
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) Set Digital watermark.
 * @method CopyRightWatermarkInput getCopyRightWatermark() Obtain CopyRight Watermark.
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) Set CopyRight Watermark.
 * @method array getSubtitleSet() Obtain List of subtitle IDs (maximum: 16)
 * @method void setSubtitleSet(array $SubtitleSet) Set List of subtitle IDs (maximum: 16)
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer Adaptive bitrate streaming template ID.
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
     * @var CopyRightWatermarkInput CopyRight Watermark.
     */
    public $CopyRightWatermark;

    /**
     * @var array List of subtitle IDs (maximum: 16)
     */
    public $SubtitleSet;

    /**
     * @param integer $Definition Adaptive bitrate streaming template ID.
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TraceWatermarkInput $TraceWatermark Digital watermark.
     * @param CopyRightWatermarkInput $CopyRightWatermark CopyRight Watermark.
     * @param array $SubtitleSet List of subtitle IDs (maximum: 16)
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

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = $param["SubtitleSet"];
        }
    }
}
