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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HmtResidentPermitOCR response structure.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getSex() Obtain Gender
 * @method void setSex(string $Sex) Set Gender
 * @method string getBirth() Obtain Date of birth
 * @method void setBirth(string $Birth) Set Date of birth
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method string getIdCardNo() Obtain ID card number
 * @method void setIdCardNo(string $IdCardNo) Set ID card number
 * @method integer getCardType() Obtain 0: Front side.
1: Back side.
 * @method void setCardType(integer $CardType) Set 0: Front side.
1: Back side.
 * @method string getValidDate() Obtain Validity period
 * @method void setValidDate(string $ValidDate) Set Validity period
 * @method string getAuthority() Obtain Issuing authority
 * @method void setAuthority(string $Authority) Set Issuing authority
 * @method string getVisaNum() Obtain Number of issues
 * @method void setVisaNum(string $VisaNum) Set Number of issues
 * @method string getPassNo() Obtain Permit number
 * @method void setPassNo(string $PassNo) Set Permit number
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class HmtResidentPermitOCRResponse extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Gender
     */
    public $Sex;

    /**
     * @var string Date of birth
     */
    public $Birth;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var string ID card number
     */
    public $IdCardNo;

    /**
     * @var integer 0: Front side.
1: Back side.
     */
    public $CardType;

    /**
     * @var string Validity period
     */
    public $ValidDate;

    /**
     * @var string Issuing authority
     */
    public $Authority;

    /**
     * @var string Number of issues
     */
    public $VisaNum;

    /**
     * @var string Permit number
     */
    public $PassNo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Name
     * @param string $Sex Gender
     * @param string $Birth Date of birth
     * @param string $Address Address
     * @param string $IdCardNo ID card number
     * @param integer $CardType 0: Front side.
1: Back side.
     * @param string $ValidDate Validity period
     * @param string $Authority Issuing authority
     * @param string $VisaNum Number of issues
     * @param string $PassNo Permit number
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdCardNo",$param) and $param["IdCardNo"] !== null) {
            $this->IdCardNo = $param["IdCardNo"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("VisaNum",$param) and $param["VisaNum"] !== null) {
            $this->VisaNum = $param["VisaNum"];
        }

        if (array_key_exists("PassNo",$param) and $param["PassNo"] !== null) {
            $this->PassNo = $param["PassNo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
