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
 * @method integer getMainLandDau() 获取DAU in Mainland China
 * @method void setMainLandDau(integer $MainLandDau) 设置DAU in Mainland China
 * @method integer getMainLandPcu() 获取PCU in Mainland China
 * @method void setMainLandPcu(integer $MainLandPcu) 设置PCU in Mainland China
 * @method integer getMainLandDuration() 获取Total duration of use in Mainland China in minutes
 * @method void setMainLandDuration(integer $MainLandDuration) 设置Total duration of use in Mainland China in minutes
 * @method integer getOverseaDau() 获取DAU outside Mainland China
 * @method void setOverseaDau(integer $OverseaDau) 设置DAU outside Mainland China
 * @method integer getOverseaPcu() 获取PCU outside Mainland China
 * @method void setOverseaPcu(integer $OverseaPcu) 设置PCU outside Mainland China
 * @method integer getOverseaDuration() 获取Total duration of use outside Mainland China in minutes
 * @method void setOverseaDuration(integer $OverseaDuration) 设置Total duration of use outside Mainland China in minutes
 */

/**
 *Voice chat usage statistics
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
     * 内部实现，用户禁止调用
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
