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
 * Input parameter type of cover generating task
 *
 * @method integer getDefinition() Obtain Time point screencapturing template ID.
 * @method void setDefinition(integer $Definition) Set Time point screencapturing template ID.
 * @method string getPositionType() Obtain Screencapturing mode. Valid values:
<li>Time: screencaptures by time point</li>
<li>Percent: screencaptures by percentage</li>
 * @method void setPositionType(string $PositionType) Set Screencapturing mode. Valid values:
<li>Time: screencaptures by time point</li>
<li>Percent: screencaptures by percentage</li>
 * @method float getPositionValue() Obtain Screenshot position:
<li>For time point screencapturing, this means to take a screenshot at a specified time point (in seconds) and use it as the cover</li>
<li>For percentage screencapturing, this value means to take a screenshot at a specified percentage of the video duration and use it as the cover</li>
 * @method void setPositionValue(float $PositionValue) Set Screenshot position:
<li>For time point screencapturing, this means to take a screenshot at a specified time point (in seconds) and use it as the cover</li>
<li>For percentage screencapturing, this value means to take a screenshot at a specified percentage of the video duration and use it as the cover</li>
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CoverBySnapshotTaskInput extends AbstractModel
{
    /**
     * @var integer Time point screencapturing template ID.
     */
    public $Definition;

    /**
     * @var string Screencapturing mode. Valid values:
<li>Time: screencaptures by time point</li>
<li>Percent: screencaptures by percentage</li>
     */
    public $PositionType;

    /**
     * @var float Screenshot position:
<li>For time point screencapturing, this means to take a screenshot at a specified time point (in seconds) and use it as the cover</li>
<li>For percentage screencapturing, this value means to take a screenshot at a specified percentage of the video duration and use it as the cover</li>
     */
    public $PositionValue;

    /**
     * @var array List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition Time point screencapturing template ID.
     * @param string $PositionType Screencapturing mode. Valid values:
<li>Time: screencaptures by time point</li>
<li>Percent: screencaptures by percentage</li>
     * @param float $PositionValue Screenshot position:
<li>For time point screencapturing, this means to take a screenshot at a specified time point (in seconds) and use it as the cover</li>
<li>For percentage screencapturing, this value means to take a screenshot at a specified percentage of the video duration and use it as the cover</li>
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: this field may return null, indicating that no valid values can be obtained.
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
