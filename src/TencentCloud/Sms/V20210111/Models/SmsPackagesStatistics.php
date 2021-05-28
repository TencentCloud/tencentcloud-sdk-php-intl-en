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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package message statistics response body
 *
 * @method integer getPackageCreateTime() Obtain The creation time of the package in seconds in the format of UNIX timestamp.
 * @method void setPackageCreateTime(integer $PackageCreateTime) Set The creation time of the package in seconds in the format of UNIX timestamp.
 * @method integer getPackageEffectiveTime() Obtain The effective time of the package in seconds in the format of UNIX timestamp.
 * @method void setPackageEffectiveTime(integer $PackageEffectiveTime) Set The effective time of the package in seconds in the format of UNIX timestamp.
 * @method integer getPackageExpiredTime() Obtain The expiration time of the package in seconds in the format of UNIX timestamp.
 * @method void setPackageExpiredTime(integer $PackageExpiredTime) Set The expiration time of the package in seconds in the format of UNIX timestamp.
 * @method integer getPackageAmount() Obtain Number of SMS messages in the package
 * @method void setPackageAmount(integer $PackageAmount) Set Number of SMS messages in the package
 * @method integer getPackageType() Obtain Package type. 0: gifted package; 1: purchased package.
 * @method void setPackageType(integer $PackageType) Set Package type. 0: gifted package; 1: purchased package.
 * @method integer getPackageId() Obtain Package ID.
 * @method void setPackageId(integer $PackageId) Set Package ID.
 * @method integer getCurrentUsage() Obtain Current number of used messages in the package.
 * @method void setCurrentUsage(integer $CurrentUsage) Set Current number of used messages in the package.
 */
class SmsPackagesStatistics extends AbstractModel
{
    /**
     * @var integer The creation time of the package in seconds in the format of UNIX timestamp.
     */
    public $PackageCreateTime;

    /**
     * @var integer The effective time of the package in seconds in the format of UNIX timestamp.
     */
    public $PackageEffectiveTime;

    /**
     * @var integer The expiration time of the package in seconds in the format of UNIX timestamp.
     */
    public $PackageExpiredTime;

    /**
     * @var integer Number of SMS messages in the package
     */
    public $PackageAmount;

    /**
     * @var integer Package type. 0: gifted package; 1: purchased package.
     */
    public $PackageType;

    /**
     * @var integer Package ID.
     */
    public $PackageId;

    /**
     * @var integer Current number of used messages in the package.
     */
    public $CurrentUsage;

    /**
     * @param integer $PackageCreateTime The creation time of the package in seconds in the format of UNIX timestamp.
     * @param integer $PackageEffectiveTime The effective time of the package in seconds in the format of UNIX timestamp.
     * @param integer $PackageExpiredTime The expiration time of the package in seconds in the format of UNIX timestamp.
     * @param integer $PackageAmount Number of SMS messages in the package
     * @param integer $PackageType Package type. 0: gifted package; 1: purchased package.
     * @param integer $PackageId Package ID.
     * @param integer $CurrentUsage Current number of used messages in the package.
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

        if (array_key_exists("PackageEffectiveTime",$param) and $param["PackageEffectiveTime"] !== null) {
            $this->PackageEffectiveTime = $param["PackageEffectiveTime"];
        }

        if (array_key_exists("PackageExpiredTime",$param) and $param["PackageExpiredTime"] !== null) {
            $this->PackageExpiredTime = $param["PackageExpiredTime"];
        }

        if (array_key_exists("PackageAmount",$param) and $param["PackageAmount"] !== null) {
            $this->PackageAmount = $param["PackageAmount"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CurrentUsage",$param) and $param["CurrentUsage"] !== null) {
            $this->CurrentUsage = $param["CurrentUsage"];
        }
    }
}
