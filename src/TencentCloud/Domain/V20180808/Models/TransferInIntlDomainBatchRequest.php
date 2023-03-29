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
 * TransferInIntlDomainBatch request structure.
 *
 * @method string getTemplateId() Obtain The profile ID.
 * @method void setTemplateId(string $TemplateId) Set The profile ID.
 * @method array getPassWords() Obtain The transfer passwords for the domains.
 * @method void setPassWords(array $PassWords) Set The transfer passwords for the domains.
 * @method array getDomains() Obtain The domains to be bulk transferred in.
 * @method void setDomains(array $Domains) Set The domains to be bulk transferred in.
 * @method integer getPayMode() Obtain The payment method. Valid value: `1` (account balance).
 * @method void setPayMode(integer $PayMode) Set The payment method. Valid value: `1` (account balance).
 * @method boolean getAutoRenewFlag() Obtain Whether to enable auto-renewal.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether to enable auto-renewal.
 * @method boolean getTransferProhibition() Obtain Whether to enable the transfer prohibition lock.
 * @method void setTransferProhibition(boolean $TransferProhibition) Set Whether to enable the transfer prohibition lock.
 * @method boolean getUpdateProhibition() Obtain Whether to enable the update prohibition lock.
 * @method void setUpdateProhibition(boolean $UpdateProhibition) Set Whether to enable the update prohibition lock.
 * @method boolean getLockTransfer() Obtain Whether to enable the 60-day inter-registrar transfer lock.
 * @method void setLockTransfer(boolean $LockTransfer) Set Whether to enable the 60-day inter-registrar transfer lock.
 */
class TransferInIntlDomainBatchRequest extends AbstractModel
{
    /**
     * @var string The profile ID.
     */
    public $TemplateId;

    /**
     * @var array The transfer passwords for the domains.
     */
    public $PassWords;

    /**
     * @var array The domains to be bulk transferred in.
     */
    public $Domains;

    /**
     * @var integer The payment method. Valid value: `1` (account balance).
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
     * @var boolean Whether to enable the 60-day inter-registrar transfer lock.
     */
    public $LockTransfer;

    /**
     * @param string $TemplateId The profile ID.
     * @param array $PassWords The transfer passwords for the domains.
     * @param array $Domains The domains to be bulk transferred in.
     * @param integer $PayMode The payment method. Valid value: `1` (account balance).
     * @param boolean $AutoRenewFlag Whether to enable auto-renewal.
     * @param boolean $TransferProhibition Whether to enable the transfer prohibition lock.
     * @param boolean $UpdateProhibition Whether to enable the update prohibition lock.
     * @param boolean $LockTransfer Whether to enable the 60-day inter-registrar transfer lock.
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

        if (array_key_exists("PassWords",$param) and $param["PassWords"] !== null) {
            $this->PassWords = $param["PassWords"];
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

        if (array_key_exists("LockTransfer",$param) and $param["LockTransfer"] !== null) {
            $this->LockTransfer = $param["LockTransfer"];
        }
    }
}
