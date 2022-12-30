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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The instance prepayment parameter. It applies only when the billing type is `PREPAID`.

 *
 * @method integer getPeriod() Obtain The period of monthly subscription, which defaults to 1 and is expressed in month.
Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
 * @method void setPeriod(integer $Period) Set The period of monthly subscription, which defaults to 1 and is expressed in month.
Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
 * @method boolean getRenewFlag() Obtain Whether to enable auto-renewal. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 * @method void setRenewFlag(boolean $RenewFlag) Set Whether to enable auto-renewal. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer The period of monthly subscription, which defaults to 1 and is expressed in month.
Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
     */
    public $Period;

    /**
     * @var boolean Whether to enable auto-renewal. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
     */
    public $RenewFlag;

    /**
     * @param integer $Period The period of monthly subscription, which defaults to 1 and is expressed in month.
Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
     * @param boolean $RenewFlag Whether to enable auto-renewal. Valid values:
<li>`true`: Enable</li>
<li>`false` (default): Disable</li>
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
