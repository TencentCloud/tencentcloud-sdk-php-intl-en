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
 * Task input parameter type for screencapturing for cover image of a video
 *
 * @method integer getDefinition() Obtain Time point screenshot template ID.
 * @method void setDefinition(integer $Definition) Set Time point screenshot template ID.
 * @method string getPositionType() Obtain Screenshot type. Valid values:
<li>Time: time point screencapturing</li>
<li>Percent: screenshot by percentage</li>
 * @method void setPositionType(string $PositionType) Set Screenshot type. Valid values:
<li>Time: time point screencapturing</li>
<li>Percent: screenshot by percentage</li>
 * @method float getPositionValue() Obtain Screenshot position:
<li>For time point screenshot taking, this value indicates the second of the specified video to use as the cover</li>
<li>For percentage-based screenshots, this value indicates the percentage of the video used as the cover.</li>
 * @method void setPositionValue(float $PositionValue) Set Screenshot position:
<li>For time point screenshot taking, this value indicates the second of the specified video to use as the cover</li>
<li>For percentage-based screenshots, this value indicates the percentage of the video used as the cover.</li>
 * @method array getWatermarkSet() Obtain Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 * @method void setWatermarkSet(array $WatermarkSet) Set Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 */
class CoverBySnapshotTaskInput extends AbstractModel
{
    /**
     * @var integer Time point screenshot template ID.
     */
    public $Definition;

    /**
     * @var string Screenshot type. Valid values:
<li>Time: time point screencapturing</li>
<li>Percent: screenshot by percentage</li>
     */
    public $PositionType;

    /**
     * @var float Screenshot position:
<li>For time point screenshot taking, this value indicates the second of the specified video to use as the cover</li>
<li>For percentage-based screenshots, this value indicates the percentage of the video used as the cover.</li>
     */
    public $PositionValue;

    /**
     * @var array Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition Time point screenshot template ID.
     * @param string $PositionType Screenshot type. Valid values:
<li>Time: time point screencapturing</li>
<li>Percent: screenshot by percentage</li>
     * @param float $PositionValue Screenshot position:
<li>For time point screenshot taking, this value indicates the second of the specified video to use as the cover</li>
<li>For percentage-based screenshots, this value indicates the percentage of the video used as the cover.</li>
     * @param array $WatermarkSet Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
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

        if (array_key_exists("PositionType",$param) and $param["PositionType"] !== null) {
            $this->PositionType = $param["PositionType"];
        }

        if (array_key_exists("PositionValue",$param) and $param["PositionValue"] !== null) {
            $this->PositionValue = $param["PositionValue"];
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
