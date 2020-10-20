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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EIP cost object
 *
 * @method integer getPeriod() Obtain Purchased usage period, in month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36
 * @method void setPeriod(integer $Period) Set Purchased usage period, in month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36
 * @method integer getAutoRenewFlag() Obtain Setting of renewal. Valid values: 0: manual renewal; 1: auto-renewal; 2: no renewal after expiration. Default value: 0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Setting of renewal. Valid values: 0: manual renewal; 1: auto-renewal; 2: no renewal after expiration. Default value: 0
 */
class AddressChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchased usage period, in month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36
     */
    public $Period;

    /**
     * @var integer Setting of renewal. Valid values: 0: manual renewal; 1: auto-renewal; 2: no renewal after expiration. Default value: 0
     */
    public $AutoRenewFlag;

    /**
     * @param integer $Period Purchased usage period, in month. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36
     * @param integer $AutoRenewFlag Setting of renewal. Valid values: 0: manual renewal; 1: auto-renewal; 2: no renewal after expiration. Default value: 0
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

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
