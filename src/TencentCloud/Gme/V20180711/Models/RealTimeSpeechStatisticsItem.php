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
 * Voice Chat usage statistics
 *
 * @method integer getMainLandDau() Obtain DAUs in the Chinese mainland
 * @method void setMainLandDau(integer $MainLandDau) Set DAUs in the Chinese mainland
 * @method integer getMainLandPcu() Obtain PCUs in the Chinese mainland
 * @method void setMainLandPcu(integer $MainLandPcu) Set PCUs in the Chinese mainland
 * @method integer getMainLandDuration() Obtain Total duration of use in the Chinese mainland (in minutes)
 * @method void setMainLandDuration(integer $MainLandDuration) Set Total duration of use in the Chinese mainland (in minutes)
 * @method integer getOverseaDau() Obtain DAUs outside the Chinese mainland
 * @method void setOverseaDau(integer $OverseaDau) Set DAUs outside the Chinese mainland
 * @method integer getOverseaPcu() Obtain PCUs outside the Chinese mainland
 * @method void setOverseaPcu(integer $OverseaPcu) Set PCUs outside the Chinese mainland
 * @method integer getOverseaDuration() Obtain Total duration of use outside the Chinese mainland (in minutes)
 * @method void setOverseaDuration(integer $OverseaDuration) Set Total duration of use outside the Chinese mainland (in minutes)
 */
class RealTimeSpeechStatisticsItem extends AbstractModel
{
    /**
     * @var integer DAUs in the Chinese mainland
     */
    public $MainLandDau;

    /**
     * @var integer PCUs in the Chinese mainland
     */
    public $MainLandPcu;

    /**
     * @var integer Total duration of use in the Chinese mainland (in minutes)
     */
    public $MainLandDuration;

    /**
     * @var integer DAUs outside the Chinese mainland
     */
    public $OverseaDau;

    /**
     * @var integer PCUs outside the Chinese mainland
     */
    public $OverseaPcu;

    /**
     * @var integer Total duration of use outside the Chinese mainland (in minutes)
     */
    public $OverseaDuration;

    /**
     * @param integer $MainLandDau DAUs in the Chinese mainland
     * @param integer $MainLandPcu PCUs in the Chinese mainland
     * @param integer $MainLandDuration Total duration of use in the Chinese mainland (in minutes)
     * @param integer $OverseaDau DAUs outside the Chinese mainland
     * @param integer $OverseaPcu PCUs outside the Chinese mainland
     * @param integer $OverseaDuration Total duration of use outside the Chinese mainland (in minutes)
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
