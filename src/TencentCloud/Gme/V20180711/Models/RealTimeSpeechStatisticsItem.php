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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voice chat usage statistics
 *
 * @method integer getMainLandDau() Obtain DAU in Mainland China
 * @method void setMainLandDau(integer $MainLandDau) Set DAU in Mainland China
 * @method integer getMainLandPcu() Obtain PCU in Mainland China
 * @method void setMainLandPcu(integer $MainLandPcu) Set PCU in Mainland China
 * @method integer getMainLandDuration() Obtain Total duration of use in Mainland China in minutes
 * @method void setMainLandDuration(integer $MainLandDuration) Set Total duration of use in Mainland China in minutes
 * @method integer getOverseaDau() Obtain DAU outside Mainland China
 * @method void setOverseaDau(integer $OverseaDau) Set DAU outside Mainland China
 * @method integer getOverseaPcu() Obtain PCU outside Mainland China
 * @method void setOverseaPcu(integer $OverseaPcu) Set PCU outside Mainland China
 * @method integer getOverseaDuration() Obtain Total duration of use outside Mainland China in minutes
 * @method void setOverseaDuration(integer $OverseaDuration) Set Total duration of use outside Mainland China in minutes
 */
class RealTimeSpeechStatisticsItem extends AbstractModel
{
    /**
     * @var integer DAU in Mainland China
     */
    public $MainLandDau;

    /**
     * @var integer PCU in Mainland China
     */
    public $MainLandPcu;

    /**
     * @var integer Total duration of use in Mainland China in minutes
     */
    public $MainLandDuration;

    /**
     * @var integer DAU outside Mainland China
     */
    public $OverseaDau;

    /**
     * @var integer PCU outside Mainland China
     */
    public $OverseaPcu;

    /**
     * @var integer Total duration of use outside Mainland China in minutes
     */
    public $OverseaDuration;

    /**
     * @param integer $MainLandDau DAU in Mainland China
     * @param integer $MainLandPcu PCU in Mainland China
     * @param integer $MainLandDuration Total duration of use in Mainland China in minutes
     * @param integer $OverseaDau DAU outside Mainland China
     * @param integer $OverseaPcu PCU outside Mainland China
     * @param integer $OverseaDuration Total duration of use outside Mainland China in minutes
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
        if (array_key_exists("MainLandDau",$param) and $param["MainLandDau"] !== null) {
            $this->MainLandDau = $param["MainLandDau"];
        }

        if (array_key_exists("MainLandPcu",$param) and $param["MainLandPcu"] !== null) {
            $this->MainLandPcu = $param["MainLandPcu"];
        }

        if (array_key_exists("MainLandDuration",$param) and $param["MainLandDuration"] !== null) {
            $this->MainLandDuration = $param["MainLandDuration"];
        }

        if (array_key_exists("OverseaDau",$param) and $param["OverseaDau"] !== null) {
            $this->OverseaDau = $param["OverseaDau"];
        }

        if (array_key_exists("OverseaPcu",$param) and $param["OverseaPcu"] !== null) {
            $this->OverseaPcu = $param["OverseaPcu"];
        }

        if (array_key_exists("OverseaDuration",$param) and $param["OverseaDuration"] !== null) {
            $this->OverseaDuration = $param["OverseaDuration"];
        }
    }
}
