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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisIsolateDBInstances request structure.
 *
 * @method array getDBInstanceIdSet() Obtain <p>Instance ID list, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Supports simultaneous de-isolation of multiple instances.</p>
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set <p>Instance ID list, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Supports simultaneous de-isolation of multiple instances.</p>
 * @method integer getPeriod() Obtain <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: this parameter does not take effect.</li>
 * @method void setPeriod(integer $Period) Set <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: this parameter does not take effect.</li>
 * @method boolean getAutoVoucher() Obtain <p>Whether to use a voucher:</p><li>true: Use</li><li>false: Non-use</li>Default value: false
 * @method void setAutoVoucher(boolean $AutoVoucher) Set <p>Whether to use a voucher:</p><li>true: Use</li><li>false: Non-use</li>Default value: false
 * @method array getVoucherIds() Obtain <p>Voucher id list.</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Voucher id list.</p>
 */
class DisIsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Instance ID list, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Supports simultaneous de-isolation of multiple instances.</p>
     */
    public $DBInstanceIdSet;

    /**
     * @var integer <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: this parameter does not take effect.</li>
     */
    public $Period;

    /**
     * @var boolean <p>Whether to use a voucher:</p><li>true: Use</li><li>false: Non-use</li>Default value: false
     */
    public $AutoVoucher;

    /**
     * @var array <p>Voucher id list.</p>
     */
    public $VoucherIds;

    /**
     * @param array $DBInstanceIdSet <p>Instance ID list, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Supports simultaneous de-isolation of multiple instances.</p>
     * @param integer $Period <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: this parameter does not take effect.</li>
     * @param boolean $AutoVoucher <p>Whether to use a voucher:</p><li>true: Use</li><li>false: Non-use</li>Default value: false
     * @param array $VoucherIds <p>Voucher id list.</p>
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
