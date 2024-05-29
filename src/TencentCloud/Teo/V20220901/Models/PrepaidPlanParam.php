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
 * Prepaid Plan Billing Parameters
 *
 * @method integer getPeriod() Obtain Prepaid plan duration, unit: month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.

If this field is not specified, the default value '1' will be used.
 * @method void setPeriod(integer $Period) Set Prepaid plan duration, unit: month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.

If this field is not specified, the default value '1' will be used.
 * @method string getRenewFlag() Obtain The auto-renewal flag for prepaid plan has the following values:
<li> on: Enable auto-renewal;</li>
<li> off: Disable auto-renewal. </li>
If this field is not specified, the default value 'off' will be used. When auto-renewal is enabled, it defaults to renewing for one month.
 * @method void setRenewFlag(string $RenewFlag) Set The auto-renewal flag for prepaid plan has the following values:
<li> on: Enable auto-renewal;</li>
<li> off: Disable auto-renewal. </li>
If this field is not specified, the default value 'off' will be used. When auto-renewal is enabled, it defaults to renewing for one month.
 */
class PrepaidPlanParam extends AbstractModel
{
    /**
     * @var integer Prepaid plan duration, unit: month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.

If this field is not specified, the default value '1' will be used.
     */
    public $Period;

    /**
     * @var string The auto-renewal flag for prepaid plan has the following values:
<li> on: Enable auto-renewal;</li>
<li> off: Disable auto-renewal. </li>
If this field is not specified, the default value 'off' will be used. When auto-renewal is enabled, it defaults to renewing for one month.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Prepaid plan duration, unit: month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.

If this field is not specified, the default value '1' will be used.
     * @param string $RenewFlag The auto-renewal flag for prepaid plan has the following values:
<li> on: Enable auto-renewal;</li>
<li> off: Disable auto-renewal. </li>
If this field is not specified, the default value 'off' will be used. When auto-renewal is enabled, it defaults to renewing for one month.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
