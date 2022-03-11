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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EIP quota information
 *
 * @method string getQuotaId() Obtain Quota name. Valid values:
TOTAL_EIP_QUOTA: quota of EIPs in the current region;
DAILY_EIP_APPLY: today's number of applications in the current region;
DAILY_PUBLIC_IP_ASSIGN: number of public IP reassignments in the current region.
 * @method void setQuotaId(string $QuotaId) Set Quota name. Valid values:
TOTAL_EIP_QUOTA: quota of EIPs in the current region;
DAILY_EIP_APPLY: today's number of applications in the current region;
DAILY_PUBLIC_IP_ASSIGN: number of public IP reassignments in the current region.
 * @method integer getQuotaCurrent() Obtain Current quantity
 * @method void setQuotaCurrent(integer $QuotaCurrent) Set Current quantity
 * @method integer getQuotaLimit() Obtain Quota
 * @method void setQuotaLimit(integer $QuotaLimit) Set Quota
 */
class EipQuota extends AbstractModel
{
    /**
     * @var string Quota name. Valid values:
TOTAL_EIP_QUOTA: quota of EIPs in the current region;
DAILY_EIP_APPLY: today's number of applications in the current region;
DAILY_PUBLIC_IP_ASSIGN: number of public IP reassignments in the current region.
     */
    public $QuotaId;

    /**
     * @var integer Current quantity
     */
    public $QuotaCurrent;

    /**
     * @var integer Quota
     */
    public $QuotaLimit;

    /**
     * @param string $QuotaId Quota name. Valid values:
TOTAL_EIP_QUOTA: quota of EIPs in the current region;
DAILY_EIP_APPLY: today's number of applications in the current region;
DAILY_PUBLIC_IP_ASSIGN: number of public IP reassignments in the current region.
     * @param integer $QuotaCurrent Current quantity
     * @param integer $QuotaLimit Quota
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaCurrent",$param) and $param["QuotaCurrent"] !== null) {
            $this->QuotaCurrent = $param["QuotaCurrent"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }
    }
}
