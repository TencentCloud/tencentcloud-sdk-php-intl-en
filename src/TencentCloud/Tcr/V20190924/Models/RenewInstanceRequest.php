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
 * RenewInstance request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method RegistryChargePrepaid getRegistryChargePrepaid() Obtain Auto-renewal flag and purchase duration in months for prepayment. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
 * @method void setRegistryChargePrepaid(RegistryChargePrepaid $RegistryChargePrepaid) Set Auto-renewal flag and purchase duration in months for prepayment. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
 * @method integer getFlag() Obtain Valid values: 0: renewal; 1: change from pay-as-you-go to monthly subscription billing
 * @method void setFlag(integer $Flag) Set Valid values: 0: renewal; 1: change from pay-as-you-go to monthly subscription billing
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var RegistryChargePrepaid Auto-renewal flag and purchase duration in months for prepayment. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
     */
    public $RegistryChargePrepaid;

    /**
     * @var integer Valid values: 0: renewal; 1: change from pay-as-you-go to monthly subscription billing
     */
    public $Flag;

    /**
     * @param string $RegistryId Instance ID
     * @param RegistryChargePrepaid $RegistryChargePrepaid Auto-renewal flag and purchase duration in months for prepayment. Valid values: 0: Manual renewal; 1: Auto-renewal; 2: No renewal and no notification.
     * @param integer $Flag Valid values: 0: renewal; 1: change from pay-as-you-go to monthly subscription billing
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryChargePrepaid",$param) and $param["RegistryChargePrepaid"] !== null) {
            $this->RegistryChargePrepaid = new RegistryChargePrepaid();
            $this->RegistryChargePrepaid->deserialize($param["RegistryChargePrepaid"]);
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
