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
 * RecognizeThaiIDCardOCR response structure.
 *
 * @method string getID() Obtain ID card number
 * @method void setID(string $ID) Set ID card number
 * @method string getThaiName() Obtain Name in Thai
 * @method void setThaiName(string $ThaiName) Set Name in Thai
 * @method string getEnFirstName() Obtain Name in English
 * @method void setEnFirstName(string $EnFirstName) Set Name in English
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getIssueDate() Obtain Date of issue
 * @method void setIssueDate(string $IssueDate) Set Date of issue
 * @method string getExpirationDate() Obtain Expiration date
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
 * @method string getEnLastName() Obtain Name in English
 * @method void setEnLastName(string $EnLastName) Set Name in English
 * @method string getPortraitImage() Obtain Identity photo
 * @method void setPortraitImage(string $PortraitImage) Set Identity photo
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizeThaiIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string ID card number
     */
    public $ID;

    /**
     * @var string Name in Thai
     */
    public $ThaiName;

    /**
     * @var string Name in English
     */
    public $EnFirstName;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Date of issue
     */
    public $IssueDate;

    /**
     * @var string Expiration date
     */
    public $ExpirationDate;

    /**
     * @var string Name in English
     */
    public $EnLastName;

    /**
     * @var string Identity photo
     */
    public $PortraitImage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ID ID card number
     * @param string $ThaiName Name in Thai
     * @param string $EnFirstName Name in English
     * @param string $Address Address
     * @param string $Birthday Date of birth
     * @param string $IssueDate Date of issue
     * @param string $ExpirationDate Expiration date
     * @param string $EnLastName Name in English
     * @param string $PortraitImage Identity photo
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ThaiName",$param) and $param["ThaiName"] !== null) {
            $this->ThaiName = $param["ThaiName"];
        }

        if (array_key_exists("EnFirstName",$param) and $param["EnFirstName"] !== null) {
            $this->EnFirstName = $param["EnFirstName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("EnLastName",$param) and $param["EnLastName"] !== null) {
            $this->EnLastName = $param["EnLastName"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
