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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRenewal request structure.
 *
 * @method string getProductCode() Obtain Product code.
 * @method void setProductCode(string $ProductCode) Set Product code.
 * @method string getRegionCode() Obtain Region code.
 * @method void setRegionCode(string $RegionCode) Set Region code.
 * @method string getInstanceId() Obtain Instance ID. Only one can be specified.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Only one can be specified.
 * @method string getRenewFlag() Obtain Renewal flag. Enumeration values are as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
 * @method void setRenewFlag(string $RenewFlag) Set Renewal flag. Enumeration values are as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
 * @method string getRenewPeriod() Obtain Automatic renewal cycle length. If left empty, the default value set by product is used.
If it is month, support: 1-11
If it is year, support: 1-5.
Supported range mainly depends on the product side.
 * @method void setRenewPeriod(string $RenewPeriod) Set Automatic renewal cycle length. If left empty, the default value set by product is used.
If it is month, support: 1-11
If it is year, support: 1-5.
Supported range mainly depends on the product side.
 * @method string getRenewPeriodUnit() Obtain Automatic renewal cycle unit. If left empty, the default value set by the product is used.
Year y, month m
Supported range mainly depends on the product side.
 * @method void setRenewPeriodUnit(string $RenewPeriodUnit) Set Automatic renewal cycle unit. If left empty, the default value set by the product is used.
Year y, month m
Supported range mainly depends on the product side.
 */
class SetRenewalRequest extends AbstractModel
{
    /**
     * @var string Product code.
     */
    public $ProductCode;

    /**
     * @var string Region code.
     */
    public $RegionCode;

    /**
     * @var string Instance ID. Only one can be specified.
     */
    public $InstanceId;

    /**
     * @var string Renewal flag. Enumeration values are as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
     */
    public $RenewFlag;

    /**
     * @var string Automatic renewal cycle length. If left empty, the default value set by product is used.
If it is month, support: 1-11
If it is year, support: 1-5.
Supported range mainly depends on the product side.
     */
    public $RenewPeriod;

    /**
     * @var string Automatic renewal cycle unit. If left empty, the default value set by the product is used.
Year y, month m
Supported range mainly depends on the product side.
     */
    public $RenewPeriodUnit;

    /**
     * @param string $ProductCode Product code.
     * @param string $RegionCode Region code.
     * @param string $InstanceId Instance ID. Only one can be specified.
     * @param string $RenewFlag Renewal flag. Enumeration values are as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
     * @param string $RenewPeriod Automatic renewal cycle length. If left empty, the default value set by product is used.
If it is month, support: 1-11
If it is year, support: 1-5.
Supported range mainly depends on the product side.
     * @param string $RenewPeriodUnit Automatic renewal cycle unit. If left empty, the default value set by the product is used.
Year y, month m
Supported range mainly depends on the product side.
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("RenewPeriod",$param) and $param["RenewPeriod"] !== null) {
            $this->RenewPeriod = $param["RenewPeriod"];
        }

        if (array_key_exists("RenewPeriodUnit",$param) and $param["RenewPeriodUnit"] !== null) {
            $this->RenewPeriodUnit = $param["RenewPeriodUnit"];
        }
    }
}
