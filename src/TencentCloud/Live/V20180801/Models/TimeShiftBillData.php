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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The time shifting billing data.
 *
 * @method string getDomain() Obtain The push domain name.
 * @method void setDomain(string $Domain) Set The push domain name.
 * @method float getDuration() Obtain The time-shift video length (minutes).
 * @method void setDuration(float $Duration) Set The time-shift video length (minutes).
 * @method float getStoragePeriod() Obtain The time-shift days.
 * @method void setStoragePeriod(float $StoragePeriod) Set The time-shift days.
 * @method string getTime() Obtain The time for the data returned. Format: YYYY-MM-DDThh:mm:ssZ.
 * @method void setTime(string $Time) Set The time for the data returned. Format: YYYY-MM-DDThh:mm:ssZ.
 * @method float getTotalDuration() Obtain The total time-shift duration (minutes).
 * @method void setTotalDuration(float $TotalDuration) Set The total time-shift duration (minutes).
 */
class TimeShiftBillData extends AbstractModel
{
    /**
     * @var string The push domain name.
     */
    public $Domain;

    /**
     * @var float The time-shift video length (minutes).
     */
    public $Duration;

    /**
     * @var float The time-shift days.
     */
    public $StoragePeriod;

    /**
     * @var string The time for the data returned. Format: YYYY-MM-DDThh:mm:ssZ.
     */
    public $Time;

    /**
     * @var float The total time-shift duration (minutes).
     */
    public $TotalDuration;

    /**
     * @param string $Domain The push domain name.
     * @param float $Duration The time-shift video length (minutes).
     * @param float $StoragePeriod The time-shift days.
     * @param string $Time The time for the data returned. Format: YYYY-MM-DDThh:mm:ssZ.
     * @param float $TotalDuration The total time-shift duration (minutes).
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StoragePeriod",$param) and $param["StoragePeriod"] !== null) {
            $this->StoragePeriod = $param["StoragePeriod"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }
    }
}
