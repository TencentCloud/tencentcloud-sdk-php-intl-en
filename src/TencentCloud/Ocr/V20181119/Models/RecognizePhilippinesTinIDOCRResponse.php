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
 * RecognizePhilippinesTinIDOCR response structure.
 *
 * @method TextDetectionResult getHeadPortrait() Obtain The Base64-encoded identity photo.
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) Set The Base64-encoded identity photo.
 * @method TextDetectionResult getLicenseNumber() Obtain The tax identification number (TIN).
 * @method void setLicenseNumber(TextDetectionResult $LicenseNumber) Set The tax identification number (TIN).
 * @method TextDetectionResult getFullName() Obtain The name.
 * @method void setFullName(TextDetectionResult $FullName) Set The name.
 * @method TextDetectionResult getAddress() Obtain The address.
 * @method void setAddress(TextDetectionResult $Address) Set The address.
 * @method TextDetectionResult getBirthday() Obtain The birth date.
 * @method void setBirthday(TextDetectionResult $Birthday) Set The birth date.
 * @method TextDetectionResult getIssueDate() Obtain The issue date.
 * @method void setIssueDate(TextDetectionResult $IssueDate) Set The issue date.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizePhilippinesTinIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult The Base64-encoded identity photo.
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult The tax identification number (TIN).
     */
    public $LicenseNumber;

    /**
     * @var TextDetectionResult The name.
     */
    public $FullName;

    /**
     * @var TextDetectionResult The address.
     */
    public $Address;

    /**
     * @var TextDetectionResult The birth date.
     */
    public $Birthday;

    /**
     * @var TextDetectionResult The issue date.
     */
    public $IssueDate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait The Base64-encoded identity photo.
     * @param TextDetectionResult $LicenseNumber The tax identification number (TIN).
     * @param TextDetectionResult $FullName The name.
     * @param TextDetectionResult $Address The address.
     * @param TextDetectionResult $Birthday The birth date.
     * @param TextDetectionResult $IssueDate The issue date.
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
        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = new TextDetectionResult();
            $this->LicenseNumber->deserialize($param["LicenseNumber"]);
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = new TextDetectionResult();
            $this->FullName->deserialize($param["FullName"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = new TextDetectionResult();
            $this->IssueDate->deserialize($param["IssueDate"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
