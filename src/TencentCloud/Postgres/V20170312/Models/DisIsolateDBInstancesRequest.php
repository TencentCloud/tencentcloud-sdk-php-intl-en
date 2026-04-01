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
 * @method array getDBInstanceIdSet() Obtain Instance ID list. obtain through the api [DescribeDBInstances](https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1). supports de-isolating multiple instances simultaneously.
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set Instance ID list. obtain through the api [DescribeDBInstances](https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1). supports de-isolating multiple instances simultaneously.
 * @method integer getPeriod() Obtain Purchase duration, in months.
<Li>Prepaid: Yearly/monthly subscription, supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li>.
<Li>Postpaid: Pay-as-you-go, this parameter does not take effect.</li>.
 * @method void setPeriod(integer $Period) Set Purchase duration, in months.
<Li>Prepaid: Yearly/monthly subscription, supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li>.
<Li>Postpaid: Pay-as-you-go, this parameter does not take effect.</li>.
 * @method boolean getAutoVoucher() Obtain Whether to use vouchers.
<li>true: use.</li>.
<li>false: non-use.</li>.
Default value: `false`.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use vouchers.
<li>true: use.</li>.
<li>false: non-use.</li>.
Default value: `false`.
 * @method array getVoucherIds() Obtain Voucher ID list
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list
 */
class DisIsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. obtain through the api [DescribeDBInstances](https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1). supports de-isolating multiple instances simultaneously.
     */
    public $DBInstanceIdSet;

    /**
     * @var integer Purchase duration, in months.
<Li>Prepaid: Yearly/monthly subscription, supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li>.
<Li>Postpaid: Pay-as-you-go, this parameter does not take effect.</li>.
     */
    public $Period;

    /**
     * @var boolean Whether to use vouchers.
<li>true: use.</li>.
<li>false: non-use.</li>.
Default value: `false`.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list
     */
    public $VoucherIds;

    /**
     * @param array $DBInstanceIdSet Instance ID list. obtain through the api [DescribeDBInstances](https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1). supports de-isolating multiple instances simultaneously.
     * @param integer $Period Purchase duration, in months.
<Li>Prepaid: Yearly/monthly subscription, supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li>.
<Li>Postpaid: Pay-as-you-go, this parameter does not take effect.</li>.
     * @param boolean $AutoVoucher Whether to use vouchers.
<li>true: use.</li>.
<li>false: non-use.</li>.
Default value: `false`.
     * @param array $VoucherIds Voucher ID list
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
