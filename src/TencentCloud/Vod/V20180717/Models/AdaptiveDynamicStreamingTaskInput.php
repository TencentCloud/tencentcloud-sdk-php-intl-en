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
 * @method array getSubtitleSet() Obtain 
 * @method void setSubtitleSet(array $SubtitleSet) Set 
 * @method array getSubtitleInfoSet() Obtain 
 * @method void setSubtitleInfoSet(array $SubtitleInfoSet) Set 
 * @method ThirdPartyDrmInfo getDrmInfo() Obtain 
 * @method void setDrmInfo(ThirdPartyDrmInfo $DrmInfo) Set 
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
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
    public $SubtitleSet;

    /**
     * @var array 
     */
    public $SubtitleInfoSet;

    /**
     * @var ThirdPartyDrmInfo 
     */
    public $DrmInfo;

    /**
     * @param integer $Definition 
     * @param array $WatermarkSet 
     * @param TraceWatermarkInput $TraceWatermark 
     * @param CopyRightWatermarkInput $CopyRightWatermark 
     * @param BlindWatermarkInput $BlindWatermark 
     * @param array $SubtitleSet 
     * @param array $SubtitleInfoSet 
     * @param ThirdPartyDrmInfo $DrmInfo 
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

        if (array_key_exists("DrmInfo",$param) and $param["DrmInfo"] !== null) {
            $this->DrmInfo = new ThirdPartyDrmInfo();
            $this->DrmInfo->deserialize($param["DrmInfo"]);
        }
    }
}
