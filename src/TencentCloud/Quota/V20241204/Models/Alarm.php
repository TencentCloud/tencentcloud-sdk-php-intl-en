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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm Rule Details
 *
 * @method integer getId() Obtain Alarm rule ID.
 * @method void setId(integer $Id) Set Alarm rule ID.
 * @method string getName() Obtain Alarm rule name.
 * @method void setName(string $Name) Set Alarm rule name.
 * @method integer getProductId() Obtain Product ID
 * @method void setProductId(integer $ProductId) Set Product ID
 * @method integer getQuotaId() Obtain Quota ID.
 * @method void setQuotaId(integer $QuotaId) Set Quota ID.
 * @method integer getMetrics() Obtain Alarm condition.
 * @method void setMetrics(integer $Metrics) Set Alarm condition.
 * @method integer getFrequency() Obtain Alarm frequency.
 * @method void setFrequency(integer $Frequency) Set Alarm frequency.
 * @method integer getThreshold() Obtain Specifies the Alarm threshold. valid values: 0-100.
 * @method void setThreshold(integer $Threshold) Set Specifies the Alarm threshold. valid values: 0-100.
 * @method integer getOwnerUin() Obtain Creator UIN
 * @method void setOwnerUin(integer $OwnerUin) Set Creator UIN
 * @method integer getMemberUin() Obtain Specifies the uin of the rule owner.
 * @method void setMemberUin(integer $MemberUin) Set Specifies the uin of the rule owner.
 * @method string getQuotaName() Obtain Specifies the quota name.
 * @method void setQuotaName(string $QuotaName) Set Specifies the quota name.
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method integer getStatus() Obtain Whether to delete. 1: not deleted.
2: delete.
 * @method void setStatus(integer $Status) Set Whether to delete. 1: not deleted.
2: delete.
 */
class Alarm extends AbstractModel
{
    /**
     * @var integer Alarm rule ID.
     */
    public $Id;

    /**
     * @var string Alarm rule name.
     */
    public $Name;

    /**
     * @var integer Product ID
     */
    public $ProductId;

    /**
     * @var integer Quota ID.
     */
    public $QuotaId;

    /**
     * @var integer Alarm condition.
     */
    public $Metrics;

    /**
     * @var integer Alarm frequency.
     */
    public $Frequency;

    /**
     * @var integer Specifies the Alarm threshold. valid values: 0-100.
     */
    public $Threshold;

    /**
     * @var integer Creator UIN
     */
    public $OwnerUin;

    /**
     * @var integer Specifies the uin of the rule owner.
     */
    public $MemberUin;

    /**
     * @var string Specifies the quota name.
     */
    public $QuotaName;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var integer Whether to delete. 1: not deleted.
2: delete.
     */
    public $Status;

    /**
     * @param integer $Id Alarm rule ID.
     * @param string $Name Alarm rule name.
     * @param integer $ProductId Product ID
     * @param integer $QuotaId Quota ID.
     * @param integer $Metrics Alarm condition.
     * @param integer $Frequency Alarm frequency.
     * @param integer $Threshold Specifies the Alarm threshold. valid values: 0-100.
     * @param integer $OwnerUin Creator UIN
     * @param integer $MemberUin Specifies the uin of the rule owner.
     * @param string $QuotaName Specifies the quota name.
     * @param string $ProductName Product name
     * @param integer $Status Whether to delete. 1: not deleted.
2: delete.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("QuotaName",$param) and $param["QuotaName"] !== null) {
            $this->QuotaName = $param["QuotaName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
