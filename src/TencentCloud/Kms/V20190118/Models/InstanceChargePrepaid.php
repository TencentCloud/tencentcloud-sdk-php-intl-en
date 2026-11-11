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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prepaid billing information.
 *
 * @method integer getPeriod() Obtain <p>Purchase duration in months (1-100).</p>
 * @method void setPeriod(integer $Period) Set <p>Purchase duration in months (1-100).</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag (0: not set by the user; 1: auto-renewal; 2: no auto-renewal).</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag (0: not set by the user; 1: auto-renewal; 2: no auto-renewal).</p>
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer <p>Purchase duration in months (1-100).</p>
     */
    public $Period;

    /**
     * @var integer <p>Renewal flag (0: not set by the user; 1: auto-renewal; 2: no auto-renewal).</p>
     */
    public $RenewFlag;

    /**
     * @param integer $Period <p>Purchase duration in months (1-100).</p>
     * @param integer $RenewFlag <p>Renewal flag (0: not set by the user; 1: auto-renewal; 2: no auto-renewal).</p>
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
