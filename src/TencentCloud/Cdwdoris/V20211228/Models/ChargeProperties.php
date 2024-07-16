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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster billing-related information
 *
 * @method string getChargeType() Obtain Billing type: PREPAID for prepayment, and POSTPAID_BY_HOUR for postpayment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing type: PREPAID for prepayment, and POSTPAID_BY_HOUR for postpayment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Whether to automatically renew. 1 means automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Whether to automatically renew. 1 means automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeSpan() Obtain Billing duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Billing duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Billing time unit, and "m" means month, etc.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Billing time unit, and "m" means month, etc.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ChargeProperties extends AbstractModel
{
    /**
     * @var string Billing type: PREPAID for prepayment, and POSTPAID_BY_HOUR for postpayment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var integer Whether to automatically renew. 1 means automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var integer Billing duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var string Billing time unit, and "m" means month, etc.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @param string $ChargeType Billing type: PREPAID for prepayment, and POSTPAID_BY_HOUR for postpayment.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Whether to automatically renew. 1 means automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeSpan Billing duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Billing time unit, and "m" means month, etc.
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
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
    }
}
