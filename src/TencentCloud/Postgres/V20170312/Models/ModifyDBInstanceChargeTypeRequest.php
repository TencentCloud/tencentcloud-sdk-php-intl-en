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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceChargeType request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of `postgres-6fego161`
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of `postgres-6fego161`
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription.
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go.
Default value: `PREPAID`.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription.
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go.
Default value: `PREPAID`.
 * @method integer getPeriod() Obtain Validity period in months
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method void setPeriod(integer $Period) Set Validity period in months
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
 * @method integer getAutoVoucher() Obtain Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 */
class ModifyDBInstanceChargeTypeRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `postgres-6fego161`
     */
    public $DBInstanceId;

    /**
     * @var string Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription.
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go.
Default value: `PREPAID`.
     */
    public $InstanceChargeType;

    /**
     * @var integer Validity period in months
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     */
    public $Period;

    /**
     * @var integer Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     */
    public $AutoVoucher;

    /**
     * @param string $DBInstanceId Instance ID in the format of `postgres-6fego161`
     * @param string $InstanceChargeType Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription.
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go.
Default value: `PREPAID`.
     * @param integer $Period Validity period in months
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
     * @param integer $AutoVoucher Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
