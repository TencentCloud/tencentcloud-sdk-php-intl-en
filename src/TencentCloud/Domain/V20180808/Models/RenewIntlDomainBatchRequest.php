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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewIntlDomainBatch request structure.
 *
 * @method array getDomains() Obtain The domains to check.
 * @method void setDomains(array $Domains) Set The domains to check.
 * @method integer getPeriod() Obtain The period (1 to 10 years). If this parameter is left empty, premium domains cannot be checked.
 * @method void setPeriod(integer $Period) Set The period (1 to 10 years). If this parameter is left empty, premium domains cannot be checked.
 * @method integer getPayMode() Obtain Payment method. Valid value: `1` (account balance).
 * @method void setPayMode(integer $PayMode) Set Payment method. Valid value: `1` (account balance).
 * @method boolean getAutoRenewFlag() Obtain Whether to enable auto-renewal.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether to enable auto-renewal.
 */
class RenewIntlDomainBatchRequest extends AbstractModel
{
    /**
     * @var array The domains to check.
     */
    public $Domains;

    /**
     * @var integer The period (1 to 10 years). If this parameter is left empty, premium domains cannot be checked.
     */
    public $Period;

    /**
     * @var integer Payment method. Valid value: `1` (account balance).
     */
    public $PayMode;

    /**
     * @var boolean Whether to enable auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @param array $Domains The domains to check.
     * @param integer $Period The period (1 to 10 years). If this parameter is left empty, premium domains cannot be checked.
     * @param integer $PayMode Payment method. Valid value: `1` (account balance).
     * @param boolean $AutoRenewFlag Whether to enable auto-renewal.
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
