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
 * The log details of bulk domain purchase  
 *
 * @method integer getId() Obtain The details ID.
 * @method void setId(integer $Id) Set The details ID.
 * @method string getAction() Obtain The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
 * @method void setAction(string $Action) Set The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
 * @method string getDomain() Obtain The domains.
 * @method void setDomain(string $Domain) Set The domains.
 * @method string getStatus() Obtain The status. Valid values: `SUCCESS`, `FAILURE`
 * @method void setStatus(string $Status) Set The status. Valid values: `SUCCESS`, `FAILURE`
 * @method string getReason() Obtain The reason for failure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set The reason for failure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedOn() Obtain The creation time.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time.
 * @method string getUpdatedOn() Obtain The update time.
 * @method void setUpdatedOn(string $UpdatedOn) Set The update time.
 * @method boolean getTransferDnsResult() Obtain Null: The DNS service is not transferred. `false`: The DNS service failed to be transferred. `true`: The DNS service is transferred successfully.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferDnsResult(boolean $TransferDnsResult) Set Null: The DNS service is not transferred. `false`: The DNS service failed to be transferred. `true`: The DNS service is transferred successfully.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReasonZh() Obtain The reason for failure, expressed in Chinese.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReasonZh(string $ReasonZh) Set The reason for failure, expressed in Chinese.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayStatus() Obtain The payment status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayStatus(integer $PayStatus) Set The payment status.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BatchDomainBuyDetails extends AbstractModel
{
    /**
     * @var integer The details ID.
     */
    public $Id;

    /**
     * @var string The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
     */
    public $Action;

    /**
     * @var string The domains.
     */
    public $Domain;

    /**
     * @var string The status. Valid values: `SUCCESS`, `FAILURE`
     */
    public $Status;

    /**
     * @var string The reason for failure.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @var string The creation time.
     */
    public $CreatedOn;

    /**
     * @var string The update time.
     */
    public $UpdatedOn;

    /**
     * @var boolean Null: The DNS service is not transferred. `false`: The DNS service failed to be transferred. `true`: The DNS service is transferred successfully.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferDnsResult;

    /**
     * @var string The reason for failure, expressed in Chinese.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReasonZh;

    /**
     * @var integer The payment status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayStatus;

    /**
     * @param integer $Id The details ID.
     * @param string $Action The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
     * @param string $Domain The domains.
     * @param string $Status The status. Valid values: `SUCCESS`, `FAILURE`
     * @param string $Reason The reason for failure.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedOn The creation time.
     * @param string $UpdatedOn The update time.
     * @param boolean $TransferDnsResult Null: The DNS service is not transferred. `false`: The DNS service failed to be transferred. `true`: The DNS service is transferred successfully.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReasonZh The reason for failure, expressed in Chinese.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayStatus The payment status.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("TransferDnsResult",$param) and $param["TransferDnsResult"] !== null) {
            $this->TransferDnsResult = $param["TransferDnsResult"];
        }

        if (array_key_exists("ReasonZh",$param) and $param["ReasonZh"] !== null) {
            $this->ReasonZh = $param["ReasonZh"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }
    }
}
