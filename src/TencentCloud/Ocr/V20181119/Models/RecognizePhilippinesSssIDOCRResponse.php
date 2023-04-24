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
 * RecognizePhilippinesSssIDOCR response structure.
 *
 * @method TextDetectionResult getHeadPortrait() Obtain The Base64-encoded identity photo.
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) Set The Base64-encoded identity photo.
 * @method TextDetectionResult getLicenseNumber() Obtain The common reference number (CRN).
 * @method void setLicenseNumber(TextDetectionResult $LicenseNumber) Set The common reference number (CRN).
 * @method TextDetectionResult getFullName() Obtain The full name.
 * @method void setFullName(TextDetectionResult $FullName) Set The full name.
 * @method TextDetectionResult getBirthday() Obtain The date of birth.
 * @method void setBirthday(TextDetectionResult $Birthday) Set The date of birth.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizePhilippinesSssIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult The Base64-encoded identity photo.
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult The common reference number (CRN).
     */
    public $LicenseNumber;

    /**
     * @var TextDetectionResult The full name.
     */
    public $FullName;

    /**
     * @var TextDetectionResult The date of birth.
     */
    public $Birthday;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait The Base64-encoded identity photo.
     * @param TextDetectionResult $LicenseNumber The common reference number (CRN).
     * @param TextDetectionResult $FullName The full name.
     * @param TextDetectionResult $Birthday The date of birth.
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

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
