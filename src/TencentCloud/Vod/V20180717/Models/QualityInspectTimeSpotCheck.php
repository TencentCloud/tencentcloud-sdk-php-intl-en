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
 * @method integer getCheckDuration() Obtain 
 * @method void setCheckDuration(integer $CheckDuration) Set 
 * @method integer getCheckInterval() Obtain 
 * @method void setCheckInterval(integer $CheckInterval) Set 
 * @method integer getSkipDuration() Obtain 
 * @method void setSkipDuration(integer $SkipDuration) Set 
 * @method integer getCirclesNumber() Obtain 
 * @method void setCirclesNumber(integer $CirclesNumber) Set 
 */
class QualityInspectTimeSpotCheck extends AbstractModel
{
    /**
     * @var integer 
     */
    public $CheckDuration;

    /**
     * @var integer 
     */
    public $CheckInterval;

    /**
     * @var integer 
     */
    public $SkipDuration;

    /**
     * @var integer 
     */
    public $CirclesNumber;

    /**
     * @param integer $CheckDuration 
     * @param integer $CheckInterval 
     * @param integer $SkipDuration 
     * @param integer $CirclesNumber 
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
        if (array_key_exists("CheckDuration",$param) and $param["CheckDuration"] !== null) {
            $this->CheckDuration = $param["CheckDuration"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }

        if (array_key_exists("SkipDuration",$param) and $param["SkipDuration"] !== null) {
            $this->SkipDuration = $param["SkipDuration"];
        }

        if (array_key_exists("CirclesNumber",$param) and $param["CirclesNumber"] !== null) {
            $this->CirclesNumber = $param["CirclesNumber"];
        }
    }
}
