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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the authorization bound to the machine
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getPayMode() Obtain Billing mode. 0: pay-as-you-go; 1: prepaid.
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: pay-as-you-go; 1: prepaid.
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method integer getSourceType() Obtain Order type. 0: default billing order; 1: trial order; 2: gift; 3: experience.
 * @method void setSourceType(integer $SourceType) Set Order type. 0: default billing order; 1: trial order; 2: gift; 3: experience.
 * @method string getInquireKey() Obtain This field has been deprecated.
 * @method void setInquireKey(string $InquireKey) Set This field has been deprecated.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: default (no automatic payment); 1: automatic payment; 2: set manually (non-renewal).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: default (no automatic payment); 1: automatic payment; 2: set manually (non-renewal).
 * @method string getDeadline() Obtain Expiry time. This value is empty for pay-as-you-go.
 * @method void setDeadline(string $Deadline) Set Expiry time. This value is empty for pay-as-you-go.
 * @method string getBuyTime() Obtain Time of purchase
 * @method void setBuyTime(string $BuyTime) Set Time of purchase
 * @method integer getLicenseCnt() Obtain Number of authorizations
 * @method void setLicenseCnt(integer $LicenseCnt) Set Number of authorizations
 */
class MachineLicenseDetail extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer Billing mode. 0: pay-as-you-go; 1: prepaid.
     */
    public $PayMode;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var integer Order type. 0: default billing order; 1: trial order; 2: gift; 3: experience.
     */
    public $SourceType;

    /**
     * @var string This field has been deprecated.
     */
    public $InquireKey;

    /**
     * @var integer Auto-renewal flag. 0: default (no automatic payment); 1: automatic payment; 2: set manually (non-renewal).
     */
    public $AutoRenewFlag;

    /**
     * @var string Expiry time. This value is empty for pay-as-you-go.
     */
    public $Deadline;

    /**
     * @var string Time of purchase
     */
    public $BuyTime;

    /**
     * @var integer Number of authorizations
     */
    public $LicenseCnt;

    /**
     * @param string $Quuid Host QUUID
     * @param integer $PayMode Billing mode. 0: pay-as-you-go; 1: prepaid.
     * @param string $ResourceId Resource ID
     * @param integer $LicenseType Authorization type
     * @param integer $SourceType Order type. 0: default billing order; 1: trial order; 2: gift; 3: experience.
     * @param string $InquireKey This field has been deprecated.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: default (no automatic payment); 1: automatic payment; 2: set manually (non-renewal).
     * @param string $Deadline Expiry time. This value is empty for pay-as-you-go.
     * @param string $BuyTime Time of purchase
     * @param integer $LicenseCnt Number of authorizations
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }
    }
}
