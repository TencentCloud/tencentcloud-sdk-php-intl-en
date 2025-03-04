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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing time parameter.
 *
 * @method integer getRenewFlag() Obtain 1: requires auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set 1: requires auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeSpan() Obtain Order time range.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Order time range.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Time unit. Valid values: h and m.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Time unit. Valid values: h and m.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain Billing type: 0 indicates pay-as-you-go and 1 indicates monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set Billing type: 0 indicates pay-as-you-go and 1 indicates monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain PREPAID and POSTPAID_BY_HOUR
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set PREPAID and POSTPAID_BY_HOUR
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ChargeProperties extends AbstractModel
{
    /**
     * @var integer 1: requires auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var integer Order time range.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var string Time unit. Valid values: h and m.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var integer Billing type: 0 indicates pay-as-you-go and 1 indicates monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string PREPAID and POSTPAID_BY_HOUR
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @param integer $RenewFlag 1: requires auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeSpan Order time range.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Time unit. Valid values: h and m.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode Billing type: 0 indicates pay-as-you-go and 1 indicates monthly subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType PREPAID and POSTPAID_BY_HOUR
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
