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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package message statistics response packet
 *
 * @method string getPackageCreateTime() Obtain Package creation time in standard time format, such as 2019-10-08 17:18:37.
 * @method void setPackageCreateTime(string $PackageCreateTime) Set Package creation time in standard time format, such as 2019-10-08 17:18:37.
 * @method integer getPackageCreateUnixTime() Obtain Package creation time in seconds in the format of UNIX timestamp.
 * @method void setPackageCreateUnixTime(integer $PackageCreateUnixTime) Set Package creation time in seconds in the format of UNIX timestamp.
 * @method string getPackageEffectiveTime() Obtain Package effective time in standard time format, such as 2019-10-08 17:18:37.
 * @method void setPackageEffectiveTime(string $PackageEffectiveTime) Set Package effective time in standard time format, such as 2019-10-08 17:18:37.
 * @method integer getPackageEffectiveUnixTime() Obtain Package effective time in seconds in the format of UNIX timestamp.
 * @method void setPackageEffectiveUnixTime(integer $PackageEffectiveUnixTime) Set Package effective time in seconds in the format of UNIX timestamp.
 * @method string getPackageExpiredTime() Obtain Package expiration time in standard time format, such as 2019-10-08 17:18:37.
 * @method void setPackageExpiredTime(string $PackageExpiredTime) Set Package expiration time in standard time format, such as 2019-10-08 17:18:37.
 * @method integer getPackageExpiredUnixTime() Obtain Package expiration time in seconds in the format of UNIX timestamp.
 * @method void setPackageExpiredUnixTime(integer $PackageExpiredUnixTime) Set Package expiration time in seconds in the format of UNIX timestamp.
 * @method integer getAmountOfPackage() Obtain Number of SMS messages in package.
 * @method void setAmountOfPackage(integer $AmountOfPackage) Set Number of SMS messages in package.
 * @method integer getTypeOfPackage() Obtain 0: gifted package. 1: purchased package.
 * @method void setTypeOfPackage(integer $TypeOfPackage) Set 0: gifted package. 1: purchased package.
 * @method integer getPackageId() Obtain Package ID.
 * @method void setPackageId(integer $PackageId) Set Package ID.
 * @method integer getCurrentUsage() Obtain Current usage.
 * @method void setCurrentUsage(integer $CurrentUsage) Set Current usage.
 */
class SmsPackagesStatistics extends AbstractModel
{
    /**
     * @var string Package creation time in standard time format, such as 2019-10-08 17:18:37.
     */
    public $PackageCreateTime;

    /**
     * @var integer Package creation time in seconds in the format of UNIX timestamp.
     */
    public $PackageCreateUnixTime;

    /**
     * @var string Package effective time in standard time format, such as 2019-10-08 17:18:37.
     */
    public $PackageEffectiveTime;

    /**
     * @var integer Package effective time in seconds in the format of UNIX timestamp.
     */
    public $PackageEffectiveUnixTime;

    /**
     * @var string Package expiration time in standard time format, such as 2019-10-08 17:18:37.
     */
    public $PackageExpiredTime;

    /**
     * @var integer Package expiration time in seconds in the format of UNIX timestamp.
     */
    public $PackageExpiredUnixTime;

    /**
     * @var integer Number of SMS messages in package.
     */
    public $AmountOfPackage;

    /**
     * @var integer 0: gifted package. 1: purchased package.
     */
    public $TypeOfPackage;

    /**
     * @var integer Package ID.
     */
    public $PackageId;

    /**
     * @var integer Current usage.
     */
    public $CurrentUsage;

    /**
     * @param string $PackageCreateTime Package creation time in standard time format, such as 2019-10-08 17:18:37.
     * @param integer $PackageCreateUnixTime Package creation time in seconds in the format of UNIX timestamp.
     * @param string $PackageEffectiveTime Package effective time in standard time format, such as 2019-10-08 17:18:37.
     * @param integer $PackageEffectiveUnixTime Package effective time in seconds in the format of UNIX timestamp.
     * @param string $PackageExpiredTime Package expiration time in standard time format, such as 2019-10-08 17:18:37.
     * @param integer $PackageExpiredUnixTime Package expiration time in seconds in the format of UNIX timestamp.
     * @param integer $AmountOfPackage Number of SMS messages in package.
     * @param integer $TypeOfPackage 0: gifted package. 1: purchased package.
     * @param integer $PackageId Package ID.
     * @param integer $CurrentUsage Current usage.
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
        if (array_key_exists("PackageCreateTime",$param) and $param["PackageCreateTime"] !== null) {
            $this->PackageCreateTime = $param["PackageCreateTime"];
        }

        if (array_key_exists("PackageCreateUnixTime",$param) and $param["PackageCreateUnixTime"] !== null) {
            $this->PackageCreateUnixTime = $param["PackageCreateUnixTime"];
        }

        if (array_key_exists("PackageEffectiveTime",$param) and $param["PackageEffectiveTime"] !== null) {
            $this->PackageEffectiveTime = $param["PackageEffectiveTime"];
        }

        if (array_key_exists("PackageEffectiveUnixTime",$param) and $param["PackageEffectiveUnixTime"] !== null) {
            $this->PackageEffectiveUnixTime = $param["PackageEffectiveUnixTime"];
        }

        if (array_key_exists("PackageExpiredTime",$param) and $param["PackageExpiredTime"] !== null) {
            $this->PackageExpiredTime = $param["PackageExpiredTime"];
        }

        if (array_key_exists("PackageExpiredUnixTime",$param) and $param["PackageExpiredUnixTime"] !== null) {
            $this->PackageExpiredUnixTime = $param["PackageExpiredUnixTime"];
        }

        if (array_key_exists("AmountOfPackage",$param) and $param["AmountOfPackage"] !== null) {
            $this->AmountOfPackage = $param["AmountOfPackage"];
        }

        if (array_key_exists("TypeOfPackage",$param) and $param["TypeOfPackage"] !== null) {
            $this->TypeOfPackage = $param["TypeOfPackage"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CurrentUsage",$param) and $param["CurrentUsage"] !== null) {
            $this->CurrentUsage = $param["CurrentUsage"];
        }
    }
}
