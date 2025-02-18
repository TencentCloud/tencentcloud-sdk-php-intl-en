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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the authorization binding status of user devices
 *
 * @method string getDeviceId() Obtain Device id.
 * @method void setDeviceId(string $DeviceId) Set Device id.
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method integer getLicenseCount() Obtain Number of bound licenses.
 * @method void setLicenseCount(integer $LicenseCount) Set Number of bound licenses.
 * @method integer getRemainDay() Obtain Remaining days: days.
 * @method void setRemainDay(integer $RemainDay) Set Remaining days: days.
 * @method string getExpireTime() Obtain Expiration time: s.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time: s.
 * @method string getDuration() Obtain Service duration: s.
 * @method void setDuration(string $Duration) Set Service duration: s.
 * @method array getLicenseIds() Obtain List of bound license ids.
 * @method void setLicenseIds(array $LicenseIds) Set List of bound license ids.
 * @method integer getMonthlyRemainTime() Obtain Monthly license duration limit.
 * @method void setMonthlyRemainTime(integer $MonthlyRemainTime) Set Monthly license duration limit.
 * @method integer getLimitedTime() Obtain Monthly maximum duration (minutes).
 * @method void setLimitedTime(integer $LimitedTime) Set Monthly maximum duration (minutes).
 */
class Device extends AbstractModel
{
    /**
     * @var string Device id.
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var integer Number of bound licenses.
     */
    public $LicenseCount;

    /**
     * @var integer Remaining days: days.
     */
    public $RemainDay;

    /**
     * @var string Expiration time: s.
     */
    public $ExpireTime;

    /**
     * @var string Service duration: s.
     */
    public $Duration;

    /**
     * @var array List of bound license ids.
     */
    public $LicenseIds;

    /**
     * @var integer Monthly license duration limit.
     */
    public $MonthlyRemainTime;

    /**
     * @var integer Monthly maximum duration (minutes).
     */
    public $LimitedTime;

    /**
     * @param string $DeviceId Device id.
     * @param string $DeviceName Device name.
     * @param integer $LicenseCount Number of bound licenses.
     * @param integer $RemainDay Remaining days: days.
     * @param string $ExpireTime Expiration time: s.
     * @param string $Duration Service duration: s.
     * @param array $LicenseIds List of bound license ids.
     * @param integer $MonthlyRemainTime Monthly license duration limit.
     * @param integer $LimitedTime Monthly maximum duration (minutes).
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("LicenseCount",$param) and $param["LicenseCount"] !== null) {
            $this->LicenseCount = $param["LicenseCount"];
        }

        if (array_key_exists("RemainDay",$param) and $param["RemainDay"] !== null) {
            $this->RemainDay = $param["RemainDay"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LicenseIds",$param) and $param["LicenseIds"] !== null) {
            $this->LicenseIds = $param["LicenseIds"];
        }

        if (array_key_exists("MonthlyRemainTime",$param) and $param["MonthlyRemainTime"] !== null) {
            $this->MonthlyRemainTime = $param["MonthlyRemainTime"];
        }

        if (array_key_exists("LimitedTime",$param) and $param["LimitedTime"] !== null) {
            $this->LimitedTime = $param["LimitedTime"];
        }
    }
}
