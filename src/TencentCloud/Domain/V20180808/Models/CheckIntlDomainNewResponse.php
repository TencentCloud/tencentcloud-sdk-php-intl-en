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
 * CheckIntlDomainNew response structure.
 *
 * @method string getDomainName() Obtain The name of the domain checked.
 * @method void setDomainName(string $DomainName) Set The name of the domain checked.
 * @method boolean getAvailable() Obtain Whether the domain is available for registration.
 * @method void setAvailable(boolean $Available) Set Whether the domain is available for registration.
 * @method string getReason() Obtain The reason why the domain cannot be registered.
 * @method void setReason(string $Reason) Set The reason why the domain cannot be registered.
 * @method boolean getPremium() Obtain Whether the domain is a premium one.
 * @method void setPremium(boolean $Premium) Set Whether the domain is a premium one.
 * @method float getPrice() Obtain The domain price.
 * @method void setPrice(float $Price) Set The domain price.
 * @method boolean getBlackWord() Obtain Whether the domain name involves restricted words.
 * @method void setBlackWord(boolean $BlackWord) Set Whether the domain name involves restricted words.
 * @method string getDescribe() Obtain The premium domain description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribe(string $Describe) Set The premium domain description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFeeRenew() Obtain The price for renewing the premium domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeeRenew(float $FeeRenew) Set The price for renewing the premium domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRealPrice() Obtain The real price of the domain. For a premium domain, its price varies depending on the period. For a non-premium domain, the price is the 1-year price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealPrice(float $RealPrice) Set The real price of the domain. For a premium domain, its price varies depending on the period. For a non-premium domain, the price is the 1-year price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFeeTransfer() Obtain The price for transferring a premium domain in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeeTransfer(float $FeeTransfer) Set The price for transferring a premium domain in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFeeRestore() Obtain The price for redeeming a premium domain.
 * @method void setFeeRestore(float $FeeRestore) Set The price for redeeming a premium domain.
 * @method integer getPeriod() Obtain The period (in years) of the domain.
 * @method void setPeriod(integer $Period) Set The period (in years) of the domain.
 * @method string getReasonZh() Obtain The reason why the domain cannot be registered, expressed in Chinese.
 * @method void setReasonZh(string $ReasonZh) Set The reason why the domain cannot be registered, expressed in Chinese.
 * @method string getResCode() Obtain The internal error code.
 * @method void setResCode(string $ResCode) Set The internal error code.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CheckIntlDomainNewResponse extends AbstractModel
{
    /**
     * @var string The name of the domain checked.
     */
    public $DomainName;

    /**
     * @var boolean Whether the domain is available for registration.
     */
    public $Available;

    /**
     * @var string The reason why the domain cannot be registered.
     */
    public $Reason;

    /**
     * @var boolean Whether the domain is a premium one.
     */
    public $Premium;

    /**
     * @var float The domain price.
     */
    public $Price;

    /**
     * @var boolean Whether the domain name involves restricted words.
     */
    public $BlackWord;

    /**
     * @var string The premium domain description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Describe;

    /**
     * @var float The price for renewing the premium domain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeeRenew;

    /**
     * @var float The real price of the domain. For a premium domain, its price varies depending on the period. For a non-premium domain, the price is the 1-year price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealPrice;

    /**
     * @var float The price for transferring a premium domain in.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeeTransfer;

    /**
     * @var float The price for redeeming a premium domain.
     */
    public $FeeRestore;

    /**
     * @var integer The period (in years) of the domain.
     */
    public $Period;

    /**
     * @var string The reason why the domain cannot be registered, expressed in Chinese.
     */
    public $ReasonZh;

    /**
     * @var string The internal error code.
     */
    public $ResCode;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DomainName The name of the domain checked.
     * @param boolean $Available Whether the domain is available for registration.
     * @param string $Reason The reason why the domain cannot be registered.
     * @param boolean $Premium Whether the domain is a premium one.
     * @param float $Price The domain price.
     * @param boolean $BlackWord Whether the domain name involves restricted words.
     * @param string $Describe The premium domain description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FeeRenew The price for renewing the premium domain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RealPrice The real price of the domain. For a premium domain, its price varies depending on the period. For a non-premium domain, the price is the 1-year price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FeeTransfer The price for transferring a premium domain in.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FeeRestore The price for redeeming a premium domain.
     * @param integer $Period The period (in years) of the domain.
     * @param string $ReasonZh The reason why the domain cannot be registered, expressed in Chinese.
     * @param string $ResCode The internal error code.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Premium",$param) and $param["Premium"] !== null) {
            $this->Premium = $param["Premium"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("BlackWord",$param) and $param["BlackWord"] !== null) {
            $this->BlackWord = $param["BlackWord"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("FeeRenew",$param) and $param["FeeRenew"] !== null) {
            $this->FeeRenew = $param["FeeRenew"];
        }

        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("FeeTransfer",$param) and $param["FeeTransfer"] !== null) {
            $this->FeeTransfer = $param["FeeTransfer"];
        }

        if (array_key_exists("FeeRestore",$param) and $param["FeeRestore"] !== null) {
            $this->FeeRestore = $param["FeeRestore"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ReasonZh",$param) and $param["ReasonZh"] !== null) {
            $this->ReasonZh = $param["ReasonZh"];
        }

        if (array_key_exists("ResCode",$param) and $param["ResCode"] !== null) {
            $this->ResCode = $param["ResCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
