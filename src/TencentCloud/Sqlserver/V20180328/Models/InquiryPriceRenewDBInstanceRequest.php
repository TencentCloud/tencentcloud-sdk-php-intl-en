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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getPeriod() Obtain Renewal duration. It can be up to 48 months for monthly renewal. By default, the price of a one-month renewal is queried.
 * @method void setPeriod(integer $Period) Set Renewal duration. It can be up to 48 months for monthly renewal. By default, the price of a one-month renewal is queried.
 * @method string getTimeUnit() Obtain Renewal duration unit. month: monthly renewal. Currently, only monthly renewal is supported.
 * @method void setTimeUnit(string $TimeUnit) Set Renewal duration unit. month: monthly renewal. Currently, only monthly renewal is supported.
 */
class InquiryPriceRenewDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Renewal duration. It can be up to 48 months for monthly renewal. By default, the price of a one-month renewal is queried.
     */
    public $Period;

    /**
     * @var string Renewal duration unit. month: monthly renewal. Currently, only monthly renewal is supported.
     */
    public $TimeUnit;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Period Renewal duration. It can be up to 48 months for monthly renewal. By default, the price of a one-month renewal is queried.
     * @param string $TimeUnit Renewal duration unit. month: monthly renewal. Currently, only monthly renewal is supported.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
