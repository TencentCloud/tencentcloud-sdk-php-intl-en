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
 * Input parameter type of adaptive bitrate streaming
 *
 * @method integer getDefinition() Obtain <p>Adaptive bitrate streaming template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Adaptive bitrate streaming template ID.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method TraceWatermarkInput getTraceWatermark() Obtain <p>Traceable watermark.</p>
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) Set <p>Traceable watermark.</p>
 * @method CopyRightWatermarkInput getCopyRightWatermark() Obtain <p>Copyright watermark.</p>
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) Set <p>Copyright watermark.</p>
 * @method BlindWatermarkInput getBlindWatermark() Obtain <p>Digital watermark.</p>
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set <p>Digital watermark.</p>
 * @method array getSubtitleSet() Obtain <p>External subtitle file, with subtitle ID as the element, supports multiple subtitles, up to 16.</p>
 * @method void setSubtitleSet(array $SubtitleSet) Set <p>External subtitle file, with subtitle ID as the element, supports multiple subtitles, up to 16.</p>
 * @method array getSubtitleInfoSet() Obtain <p>List of subtitle suppression information. A maximum of 2 are supported.</p>
 * @method void setSubtitleInfoSet(array $SubtitleInfoSet) Set <p>List of subtitle suppression information. A maximum of 2 are supported.</p>
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Adaptive bitrate streaming template ID.</p>
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
     * @var array <p>External subtitle file, with subtitle ID as the element, supports multiple subtitles, up to 16.</p>
     */
    public $SubtitleSet;

    /**
     * @var array <p>List of subtitle suppression information. A maximum of 2 are supported.</p>
     */
    public $SubtitleInfoSet;

    /**
     * @param integer $Definition <p>Adaptive bitrate streaming template ID.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     * @param TraceWatermarkInput $TraceWatermark <p>Traceable watermark.</p>
     * @param CopyRightWatermarkInput $CopyRightWatermark <p>Copyright watermark.</p>
     * @param BlindWatermarkInput $BlindWatermark <p>Digital watermark.</p>
     * @param array $SubtitleSet <p>External subtitle file, with subtitle ID as the element, supports multiple subtitles, up to 16.</p>
     * @param array $SubtitleInfoSet <p>List of subtitle suppression information. A maximum of 2 are supported.</p>
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

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = $param["SubtitleSet"];
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
