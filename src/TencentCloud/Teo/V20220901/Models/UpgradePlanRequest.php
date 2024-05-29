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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradePlan request structure.
 *
 * @method string getPlanId() Obtain Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method void setPlanId(string $PlanId) Set Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method string getPlanType() Obtain Target plan version for upgrade. Valid values: <li>basic: Basic Edition Plan;</li><li>standard: Standard Edition Plan. </li>
 * @method void setPlanType(string $PlanType) Set Target plan version for upgrade. Valid values: <li>basic: Basic Edition Plan;</li><li>standard: Standard Edition Plan. </li>
 * @method string getAutoUseVoucher() Obtain Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> If this field is not specified, the default value 'false' will be used.
 * @method void setAutoUseVoucher(string $AutoUseVoucher) Set Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> If this field is not specified, the default value 'false' will be used.
 */
class UpgradePlanRequest extends AbstractModel
{
    /**
     * @var string Plan ID, formatted as edgeone-2unuvzjmmn2q.
     */
    public $PlanId;

    /**
     * @var string Target plan version for upgrade. Valid values: <li>basic: Basic Edition Plan;</li><li>standard: Standard Edition Plan. </li>
     */
    public $PlanType;

    /**
     * @var string Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> If this field is not specified, the default value 'false' will be used.
     */
    public $AutoUseVoucher;

    /**
     * @param string $PlanId Plan ID, formatted as edgeone-2unuvzjmmn2q.
     * @param string $PlanType Target plan version for upgrade. Valid values: <li>basic: Basic Edition Plan;</li><li>standard: Standard Edition Plan. </li>
     * @param string $AutoUseVoucher Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> If this field is not specified, the default value 'false' will be used.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("AutoUseVoucher",$param) and $param["AutoUseVoucher"] !== null) {
            $this->AutoUseVoucher = $param["AutoUseVoucher"];
        }
    }
}
