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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic grayscale rule for lanes
 *
 * @method string getMode() Obtain Grayscale release rules for traffic, grayscale by ratio or preheat method
 * @method void setMode(string $Mode) Set Grayscale release rules for traffic, grayscale by ratio or preheat method
 * @method integer getPercent() Obtain Grayscale percentage value 1-100 by proportion
 * @method void setPercent(integer $Percent) Set Grayscale percentage value 1-100 by proportion
 * @method integer getIntervalSecond() Obtain Preheated interval
 * @method void setIntervalSecond(integer $IntervalSecond) Set Preheated interval
 * @method integer getCurvature() Obtain Preheated curvature
 * @method void setCurvature(integer $Curvature) Set Preheated curvature
 */
class TrafficGray extends AbstractModel
{
    /**
     * @var string Grayscale release rules for traffic, grayscale by ratio or preheat method
     */
    public $Mode;

    /**
     * @var integer Grayscale percentage value 1-100 by proportion
     */
    public $Percent;

    /**
     * @var integer Preheated interval
     */
    public $IntervalSecond;

    /**
     * @var integer Preheated curvature
     */
    public $Curvature;

    /**
     * @param string $Mode Grayscale release rules for traffic, grayscale by ratio or preheat method
     * @param integer $Percent Grayscale percentage value 1-100 by proportion
     * @param integer $IntervalSecond Preheated interval
     * @param integer $Curvature Preheated curvature
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("IntervalSecond",$param) and $param["IntervalSecond"] !== null) {
            $this->IntervalSecond = $param["IntervalSecond"];
        }

        if (array_key_exists("Curvature",$param) and $param["Curvature"] !== null) {
            $this->Curvature = $param["Curvature"];
        }
    }
}
