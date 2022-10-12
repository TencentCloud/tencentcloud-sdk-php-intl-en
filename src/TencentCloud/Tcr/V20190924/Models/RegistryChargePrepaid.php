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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance prepayment mode
 *
 * @method integer getPeriod() Obtain Instance purchase duration in months
 * @method void setPeriod(integer $Period) Set Instance purchase duration in months
 * @method integer getRenewFlag() Obtain Auto-renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
 */
class RegistryChargePrepaid extends AbstractModel
{
    /**
     * @var integer Instance purchase duration in months
     */
    public $Period;

    /**
     * @var integer Auto-renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Instance purchase duration in months
     * @param integer $RenewFlag Auto-renewal flag. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
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
