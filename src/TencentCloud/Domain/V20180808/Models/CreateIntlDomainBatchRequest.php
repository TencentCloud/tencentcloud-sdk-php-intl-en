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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIntlDomainBatch request structure.
 *
 * @method string getTemplateId() Obtain The profile ID.
 * @method void setTemplateId(string $TemplateId) Set The profile ID.
 * @method integer getPeriod() Obtain The purchase period (years) of the domain. Value range: [1-10]
 * @method void setPeriod(integer $Period) Set The purchase period (years) of the domain. Value range: [1-10]
 * @method array getDomains() Obtain The domains (maximum 4,000) to purchase.
 * @method void setDomains(array $Domains) Set The domains (maximum 4,000) to purchase.
 * @method integer getPayMode() Obtain The payment method. Valid values: `0` (online payment), `1` (account balance), `2` (package), `3` (offline settlement).
 * @method void setPayMode(integer $PayMode) Set The payment method. Valid values: `0` (online payment), `1` (account balance), `2` (package), `3` (offline settlement).
 * @method boolean getAutoRenewFlag() Obtain Whether to enable auto-renewal.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether to enable auto-renewal.
 * @method boolean getTransferProhibition() Obtain Whether to enable the transfer prohibition lock.
 * @method void setTransferProhibition(boolean $TransferProhibition) Set Whether to enable the transfer prohibition lock.
 * @method boolean getUpdateProhibition() Obtain Whether to enable the update prohibition lock.
 * @method void setUpdateProhibition(boolean $UpdateProhibition) Set Whether to enable the update prohibition lock.
 * @method array getCustomDns() Obtain The custom DNS servers
 * @method void setCustomDns(array $CustomDns) Set The custom DNS servers
 */
class CreateIntlDomainBatchRequest extends AbstractModel
{
    /**
     * @var string The profile ID.
     */
    public $TemplateId;

    /**
     * @var integer The purchase period (years) of the domain. Value range: [1-10]
     */
    public $Period;

    /**
     * @var array The domains (maximum 4,000) to purchase.
     */
    public $Domains;

    /**
     * @var integer The payment method. Valid values: `0` (online payment), `1` (account balance), `2` (package), `3` (offline settlement).
     */
    public $PayMode;

    /**
     * @var boolean Whether to enable auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var boolean Whether to enable the transfer prohibition lock.
     */
    public $TransferProhibition;

    /**
     * @var boolean Whether to enable the update prohibition lock.
     */
    public $UpdateProhibition;

    /**
     * @var array The custom DNS servers
     */
    public $CustomDns;

    /**
     * @param string $TemplateId The profile ID.
     * @param integer $Period The purchase period (years) of the domain. Value range: [1-10]
     * @param array $Domains The domains (maximum 4,000) to purchase.
     * @param integer $PayMode The payment method. Valid values: `0` (online payment), `1` (account balance), `2` (package), `3` (offline settlement).
     * @param boolean $AutoRenewFlag Whether to enable auto-renewal.
     * @param boolean $TransferProhibition Whether to enable the transfer prohibition lock.
     * @param boolean $UpdateProhibition Whether to enable the update prohibition lock.
     * @param array $CustomDns The custom DNS servers
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TransferProhibition",$param) and $param["TransferProhibition"] !== null) {
            $this->TransferProhibition = $param["TransferProhibition"];
        }

        if (array_key_exists("UpdateProhibition",$param) and $param["UpdateProhibition"] !== null) {
            $this->UpdateProhibition = $param["UpdateProhibition"];
        }

        if (array_key_exists("CustomDns",$param) and $param["CustomDns"] !== null) {
            $this->CustomDns = $param["CustomDns"];
        }
    }
}
