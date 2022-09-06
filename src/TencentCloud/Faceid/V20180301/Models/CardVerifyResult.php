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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The result of a single authentication or OCR process during the identity verification.
 *
 * @method boolean getIsPass() Obtain Whether the authentication or OCR process is successful.
 * @method void setIsPass(boolean $IsPass) Set Whether the authentication or OCR process is successful.
 * @method FileInfo getCardVideo() Obtain The video for ID card authentication. This field is returned only if the video-based ID card authentication is enabled. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardVideo(FileInfo $CardVideo) Set The video for ID card authentication. This field is returned only if the video-based ID card authentication is enabled. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileInfo getCardImage() Obtain The identity document image. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardImage(FileInfo $CardImage) Set The identity document image. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileInfo getCardInfoOcrJson() Obtain The OCR result (in JSON) of the identity document image. If authentication or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string: Date of birth.
- ID string: ID number.
- Name string: Name.
- Address string: Address.
- Type string: Identity document type.

When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday string: Date of birth.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- VIN string: VIN number.
- CivilStatus string: Marital status.
- Citizenship string: Citizenship.
- PrecinctNo string: Region.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex string: Gender.
- Birthday string: Date of birth.
- Name string: Name.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- MiddleName string: Middle name.
- Nationality string: Nationality.
- LicenseNo string: License number.
- ExpiresDate string: Validity period.
- AgencyCode string: Agency code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardInfoOcrJson(FileInfo $CardInfoOcrJson) Set The OCR result (in JSON) of the identity document image. If authentication or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string: Date of birth.
- ID string: ID number.
- Name string: Name.
- Address string: Address.
- Type string: Identity document type.

When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday string: Date of birth.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- VIN string: VIN number.
- CivilStatus string: Marital status.
- Citizenship string: Citizenship.
- PrecinctNo string: Region.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex string: Gender.
- Birthday string: Date of birth.
- Name string: Name.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- MiddleName string: Middle name.
- Nationality string: Nationality.
- LicenseNo string: License number.
- ExpiresDate string: Validity period.
- AgencyCode string: Agency code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The request ID of a single process.
 * @method void setRequestId(string $RequestId) Set The request ID of a single process.
 */
class CardVerifyResult extends AbstractModel
{
    /**
     * @var boolean Whether the authentication or OCR process is successful.
     */
    public $IsPass;

    /**
     * @var FileInfo The video for ID card authentication. This field is returned only if the video-based ID card authentication is enabled. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardVideo;

    /**
     * @var FileInfo The identity document image. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardImage;

    /**
     * @var FileInfo The OCR result (in JSON) of the identity document image. If authentication or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string: Date of birth.
- ID string: ID number.
- Name string: Name.
- Address string: Address.
- Type string: Identity document type.

When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday string: Date of birth.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- VIN string: VIN number.
- CivilStatus string: Marital status.
- Citizenship string: Citizenship.
- PrecinctNo string: Region.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex string: Gender.
- Birthday string: Date of birth.
- Name string: Name.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- MiddleName string: Middle name.
- Nationality string: Nationality.
- LicenseNo string: License number.
- ExpiresDate string: Validity period.
- AgencyCode string: Agency code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardInfoOcrJson;

    /**
     * @var string The request ID of a single process.
     */
    public $RequestId;

    /**
     * @param boolean $IsPass Whether the authentication or OCR process is successful.
     * @param FileInfo $CardVideo The video for ID card authentication. This field is returned only if the video-based ID card authentication is enabled. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileInfo $CardImage The identity document image. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileInfo $CardInfoOcrJson The OCR result (in JSON) of the identity document image. If authentication or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string: Date of birth.
- ID string: ID number.
- Name string: Name.
- Address string: Address.
- Type string: Identity document type.

When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday string: Date of birth.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- VIN string: VIN number.
- CivilStatus string: Marital status.
- Citizenship string: Citizenship.
- PrecinctNo string: Region.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex string: Gender.
- Birthday string: Date of birth.
- Name string: Name.
- Address string: Address.
- LastName string: Family name.
- FirstName string: First name.
- MiddleName string: Middle name.
- Nationality string: Nationality.
- LicenseNo string: License number.
- ExpiresDate string: Validity period.
- AgencyCode string: Agency code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The request ID of a single process.
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
        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("CardVideo",$param) and $param["CardVideo"] !== null) {
            $this->CardVideo = new FileInfo();
            $this->CardVideo->deserialize($param["CardVideo"]);
        }

        if (array_key_exists("CardImage",$param) and $param["CardImage"] !== null) {
            $this->CardImage = new FileInfo();
            $this->CardImage->deserialize($param["CardImage"]);
        }

        if (array_key_exists("CardInfoOcrJson",$param) and $param["CardInfoOcrJson"] !== null) {
            $this->CardInfoOcrJson = new FileInfo();
            $this->CardInfoOcrJson->deserialize($param["CardInfoOcrJson"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
