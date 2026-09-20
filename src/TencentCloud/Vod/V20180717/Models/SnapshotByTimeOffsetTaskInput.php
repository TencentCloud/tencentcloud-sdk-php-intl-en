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
 * Screenshot taking at specified time points task input parameter type
 *
 * @method integer getDefinition() Obtain <p>Time point screenshot template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Time point screenshot template ID.</p>
 * @method array getExtTimeOffsetSet() Obtain <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) Set <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
 * @method array getTimeOffsetSet() Obtain <p>List of screenshot time points, in <font color="red">milliseconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
 * @method void setTimeOffsetSet(array $TimeOffsetSet) Set <p>List of screenshot time points, in <font color="red">milliseconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Time point screenshot template ID.</p>
     */
    public $Definition;

    /**
     * @var array <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
     */
    public $ExtTimeOffsetSet;

    /**
     * @var array <p>List of screenshot time points, in <font color="red">milliseconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
     */
    public $TimeOffsetSet;

    /**
     * @var array <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition <p>Time point screenshot template ID.</p>
     * @param array $ExtTimeOffsetSet <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
     * @param array $TimeOffsetSet <p>List of screenshot time points, in <font color="red">milliseconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
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

        if (array_key_exists("ExtTimeOffsetSet",$param) and $param["ExtTimeOffsetSet"] !== null) {
            $this->ExtTimeOffsetSet = $param["ExtTimeOffsetSet"];
        }

        if (array_key_exists("TimeOffsetSet",$param) and $param["TimeOffsetSet"] !== null) {
            $this->TimeOffsetSet = $param["TimeOffsetSet"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }
    }
}
