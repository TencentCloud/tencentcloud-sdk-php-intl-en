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
 * The OCR result of a user's identity document during the eKYC verification process.
 *
 * @method boolean getIsPass() Obtain Whether the authentication or OCR process is successful.
 * @method void setIsPass(boolean $IsPass) Set Whether the authentication or OCR process is successful.
 * @method boolean getIsEdit() Obtain Whether the user modified the card recognition result
 * @method void setIsEdit(boolean $IsEdit) Set Whether the user modified the card recognition result
 * @method FileInfo getCardVideo() Obtain The download URL of the video used for identity document verification, which is valid for 10 minutes. This parameter is returned only if video-based identity document verification is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCardVideo(FileInfo $CardVideo) Set The download URL of the video used for identity document verification, which is valid for 10 minutes. This parameter is returned only if video-based identity document verification is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method FileInfo getCardImage() Obtain The download URL of the identity document image, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCardImage(FileInfo $CardImage) Set The download URL of the identity document image, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method FileInfo getCardInfoOcrJson() Obtain The OCR result (in JSON) of the identity document image. If verification or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
(1) Hong Kong (China) identity card
When the value of `IdCardType` is `HK`:
- CnName (string): Name in Chinese.
- EnName (string): Name in English.
- TelexCode (string): The code corresponding to the name in Chinese.
- Sex (string): Gender. Valid values: `M` (male) and `F` (female).
- Birthday (string): Date of birth.
- Permanent (int): Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum (string): Identity card number.
- Symbol (string): The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate (string): Month and year of first registration.
- CurrentIssueDate (string): The date of latest issuance.

(2) Malaysian identity card
When the value of `IdCardType` is `ML`:
- Sex (string): Gender. Valid values: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday (string): Date of birth.
- ID (string): Identity card number.
- Name (string): Name.
- Address (string): Address.
- Type (string): Identity document type.

(3) Philippine identity document
When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday (string): Date of birth.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- VIN (string): Voter's identification number (VIN).
- CivilStatus (string): Civil status.
- Citizenship (string): Citizenship.
- PrecinctNo (string): Precinct.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Name (string): Name.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- MiddleName (string): Middle name.
- Nationality (string): Nationality.
- LicenseNo (string): License number.
- ExpiresDate (string): Expiration date.
- AgencyCode (string): Agency code.

When the value of `IdCardType` is `PhilippinesTinID`:
- LicenseNumber (string): Tax identification number (TIN).
- FullName (string): Full name.
- Address (string): Address.
- Birthday (string): Date of birth.
- IssueDate (string): Issue date.

When the value of `IdCardType` is `PhilippinesSSSID`:
- LicenseNumber (string): Common reference number (CRN).
- FullName (string): Full name.
- Birthday (string): Date of birth.

When the value of `IdCardType` is `PhilippinesUMID`:
- Surname (string): Surname.
- MiddleName (string):Middle name.
- GivenName (string): Given name.
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Address (string): Address.
- CRN (string): Common reference number (CRN).

(4) Indonesian identity card
When the value of `IdCardType` is `IndonesiaIDCard`:
- NIK (string): Single Identity Number.
- Nama (string): Full name.
- TempatTglLahir (string): Place and date of birth.
- JenisKelamin (string): Gender.
- GolDarah (string): Blood type.
- Alamat (string): Address.
- RTRW (string): Street.
- KelDesa (string): Village.
- Kecamatan (string): Region.
- Agama (string): Religion.
- StatusPerkawinan (string): Marital status.
- Perkerjaan (string): Occupation.
- KewargaNegaraan (string): Nationality.
- BerlakuHingga (string): Expiry date.
- IssuedDate (string): Issue date.

(5) A passport issued in Hong Kong (China) /Macao (China) /Taiwan (China) or other countries/regions
When the value of `IdCardType` is `MLIDPassport`:
- FullName (string): Full name.
- Surname (string): Surname.
- GivenName (string): Given name.
- Birthday (string): Date of birth.
- Sex (string): Gender. Valid values: `F` (female) and `M` (male).
- DateOfExpiration (string): Expiration date.
- IssuingCountry (string): Issuing country.
- NationalityCode (string): Country/region code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardInfoOcrJson(FileInfo $CardInfoOcrJson) Set The OCR result (in JSON) of the identity document image. If verification or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
(1) Hong Kong (China) identity card
When the value of `IdCardType` is `HK`:
- CnName (string): Name in Chinese.
- EnName (string): Name in English.
- TelexCode (string): The code corresponding to the name in Chinese.
- Sex (string): Gender. Valid values: `M` (male) and `F` (female).
- Birthday (string): Date of birth.
- Permanent (int): Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum (string): Identity card number.
- Symbol (string): The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate (string): Month and year of first registration.
- CurrentIssueDate (string): The date of latest issuance.

(2) Malaysian identity card
When the value of `IdCardType` is `ML`:
- Sex (string): Gender. Valid values: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday (string): Date of birth.
- ID (string): Identity card number.
- Name (string): Name.
- Address (string): Address.
- Type (string): Identity document type.

(3) Philippine identity document
When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday (string): Date of birth.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- VIN (string): Voter's identification number (VIN).
- CivilStatus (string): Civil status.
- Citizenship (string): Citizenship.
- PrecinctNo (string): Precinct.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Name (string): Name.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- MiddleName (string): Middle name.
- Nationality (string): Nationality.
- LicenseNo (string): License number.
- ExpiresDate (string): Expiration date.
- AgencyCode (string): Agency code.

When the value of `IdCardType` is `PhilippinesTinID`:
- LicenseNumber (string): Tax identification number (TIN).
- FullName (string): Full name.
- Address (string): Address.
- Birthday (string): Date of birth.
- IssueDate (string): Issue date.

When the value of `IdCardType` is `PhilippinesSSSID`:
- LicenseNumber (string): Common reference number (CRN).
- FullName (string): Full name.
- Birthday (string): Date of birth.

When the value of `IdCardType` is `PhilippinesUMID`:
- Surname (string): Surname.
- MiddleName (string):Middle name.
- GivenName (string): Given name.
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Address (string): Address.
- CRN (string): Common reference number (CRN).

(4) Indonesian identity card
When the value of `IdCardType` is `IndonesiaIDCard`:
- NIK (string): Single Identity Number.
- Nama (string): Full name.
- TempatTglLahir (string): Place and date of birth.
- JenisKelamin (string): Gender.
- GolDarah (string): Blood type.
- Alamat (string): Address.
- RTRW (string): Street.
- KelDesa (string): Village.
- Kecamatan (string): Region.
- Agama (string): Religion.
- StatusPerkawinan (string): Marital status.
- Perkerjaan (string): Occupation.
- KewargaNegaraan (string): Nationality.
- BerlakuHingga (string): Expiry date.
- IssuedDate (string): Issue date.

(5) A passport issued in Hong Kong (China) /Macao (China) /Taiwan (China) or other countries/regions
When the value of `IdCardType` is `MLIDPassport`:
- FullName (string): Full name.
- Surname (string): Surname.
- GivenName (string): Given name.
- Birthday (string): Date of birth.
- Sex (string): Gender. Valid values: `F` (female) and `M` (male).
- DateOfExpiration (string): Expiration date.
- IssuingCountry (string): Issuing country.
- NationalityCode (string): Country/region code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The request ID of a single process.
 * @method void setRequestId(string $RequestId) Set The request ID of a single process.
 * @method CardInfo getCardInfo() Obtain The recognition results of ID card
 * @method void setCardInfo(CardInfo $CardInfo) Set The recognition results of ID card
 * @method NormalCardInfo getNormalCardInfo() Obtain License OCR result
 * @method void setNormalCardInfo(NormalCardInfo $NormalCardInfo) Set License OCR result
 * @method array getWarnCardInfos() Obtain Card warning information
-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method void setWarnCardInfos(array $WarnCardInfos) Set Card warning information
-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
 * @method array getEditDetails() Obtain Details of the OCR modifications for this EKYC card, when the user manually modifies the card recognition results (IsEdit=true), EditDetails will return the modified fields. When IsEdit=false, EditDetails is empty.
 * @method void setEditDetails(array $EditDetails) Set Details of the OCR modifications for this EKYC card, when the user manually modifies the card recognition results (IsEdit=true), EditDetails will return the modified fields. When IsEdit=false, EditDetails is empty.
 */
class CardVerifyResult extends AbstractModel
{
    /**
     * @var boolean Whether the authentication or OCR process is successful.
     */
    public $IsPass;

    /**
     * @var boolean Whether the user modified the card recognition result
     */
    public $IsEdit;

    /**
     * @var FileInfo The download URL of the video used for identity document verification, which is valid for 10 minutes. This parameter is returned only if video-based identity document verification is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CardVideo;

    /**
     * @var FileInfo The download URL of the identity document image, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CardImage;

    /**
     * @var FileInfo The OCR result (in JSON) of the identity document image. If verification or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
(1) Hong Kong (China) identity card
When the value of `IdCardType` is `HK`:
- CnName (string): Name in Chinese.
- EnName (string): Name in English.
- TelexCode (string): The code corresponding to the name in Chinese.
- Sex (string): Gender. Valid values: `M` (male) and `F` (female).
- Birthday (string): Date of birth.
- Permanent (int): Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum (string): Identity card number.
- Symbol (string): The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate (string): Month and year of first registration.
- CurrentIssueDate (string): The date of latest issuance.

(2) Malaysian identity card
When the value of `IdCardType` is `ML`:
- Sex (string): Gender. Valid values: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday (string): Date of birth.
- ID (string): Identity card number.
- Name (string): Name.
- Address (string): Address.
- Type (string): Identity document type.

(3) Philippine identity document
When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday (string): Date of birth.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- VIN (string): Voter's identification number (VIN).
- CivilStatus (string): Civil status.
- Citizenship (string): Citizenship.
- PrecinctNo (string): Precinct.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Name (string): Name.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- MiddleName (string): Middle name.
- Nationality (string): Nationality.
- LicenseNo (string): License number.
- ExpiresDate (string): Expiration date.
- AgencyCode (string): Agency code.

When the value of `IdCardType` is `PhilippinesTinID`:
- LicenseNumber (string): Tax identification number (TIN).
- FullName (string): Full name.
- Address (string): Address.
- Birthday (string): Date of birth.
- IssueDate (string): Issue date.

When the value of `IdCardType` is `PhilippinesSSSID`:
- LicenseNumber (string): Common reference number (CRN).
- FullName (string): Full name.
- Birthday (string): Date of birth.

When the value of `IdCardType` is `PhilippinesUMID`:
- Surname (string): Surname.
- MiddleName (string):Middle name.
- GivenName (string): Given name.
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Address (string): Address.
- CRN (string): Common reference number (CRN).

(4) Indonesian identity card
When the value of `IdCardType` is `IndonesiaIDCard`:
- NIK (string): Single Identity Number.
- Nama (string): Full name.
- TempatTglLahir (string): Place and date of birth.
- JenisKelamin (string): Gender.
- GolDarah (string): Blood type.
- Alamat (string): Address.
- RTRW (string): Street.
- KelDesa (string): Village.
- Kecamatan (string): Region.
- Agama (string): Religion.
- StatusPerkawinan (string): Marital status.
- Perkerjaan (string): Occupation.
- KewargaNegaraan (string): Nationality.
- BerlakuHingga (string): Expiry date.
- IssuedDate (string): Issue date.

(5) A passport issued in Hong Kong (China) /Macao (China) /Taiwan (China) or other countries/regions
When the value of `IdCardType` is `MLIDPassport`:
- FullName (string): Full name.
- Surname (string): Surname.
- GivenName (string): Given name.
- Birthday (string): Date of birth.
- Sex (string): Gender. Valid values: `F` (female) and `M` (male).
- DateOfExpiration (string): Expiration date.
- IssuingCountry (string): Issuing country.
- NationalityCode (string): Country/region code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardInfoOcrJson;

    /**
     * @var string The request ID of a single process.
     */
    public $RequestId;

    /**
     * @var CardInfo The recognition results of ID card
     * @deprecated
     */
    public $CardInfo;

    /**
     * @var NormalCardInfo License OCR result
     */
    public $NormalCardInfo;

    /**
     * @var array Card warning information
-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     */
    public $WarnCardInfos;

    /**
     * @var array Details of the OCR modifications for this EKYC card, when the user manually modifies the card recognition results (IsEdit=true), EditDetails will return the modified fields. When IsEdit=false, EditDetails is empty.
     */
    public $EditDetails;

    /**
     * @param boolean $IsPass Whether the authentication or OCR process is successful.
     * @param boolean $IsEdit Whether the user modified the card recognition result
     * @param FileInfo $CardVideo The download URL of the video used for identity document verification, which is valid for 10 minutes. This parameter is returned only if video-based identity document verification is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param FileInfo $CardImage The download URL of the identity document image, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param FileInfo $CardInfoOcrJson The OCR result (in JSON) of the identity document image. If verification or OCR fails, this parameter is left empty. The URL is valid for 10 minutes.
(1) Hong Kong (China) identity card
When the value of `IdCardType` is `HK`:
- CnName (string): Name in Chinese.
- EnName (string): Name in English.
- TelexCode (string): The code corresponding to the name in Chinese.
- Sex (string): Gender. Valid values: `M` (male) and `F` (female).
- Birthday (string): Date of birth.
- Permanent (int): Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum (string): Identity card number.
- Symbol (string): The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate (string): Month and year of first registration.
- CurrentIssueDate (string): The date of latest issuance.

(2) Malaysian identity card
When the value of `IdCardType` is `ML`:
- Sex (string): Gender. Valid values: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday (string): Date of birth.
- ID (string): Identity card number.
- Name (string): Name.
- Address (string): Address.
- Type (string): Identity document type.

(3) Philippine identity document
When the value of `IdCardType` is `PhilippinesVoteID`:
- Birthday (string): Date of birth.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- VIN (string): Voter's identification number (VIN).
- CivilStatus (string): Civil status.
- Citizenship (string): Citizenship.
- PrecinctNo (string): Precinct.

When the value of `IdCardType` is `PhilippinesDrivingLicense`:
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Name (string): Name.
- Address (string): Address.
- LastName (string): Last name.
- FirstName (string): First name.
- MiddleName (string): Middle name.
- Nationality (string): Nationality.
- LicenseNo (string): License number.
- ExpiresDate (string): Expiration date.
- AgencyCode (string): Agency code.

When the value of `IdCardType` is `PhilippinesTinID`:
- LicenseNumber (string): Tax identification number (TIN).
- FullName (string): Full name.
- Address (string): Address.
- Birthday (string): Date of birth.
- IssueDate (string): Issue date.

When the value of `IdCardType` is `PhilippinesSSSID`:
- LicenseNumber (string): Common reference number (CRN).
- FullName (string): Full name.
- Birthday (string): Date of birth.

When the value of `IdCardType` is `PhilippinesUMID`:
- Surname (string): Surname.
- MiddleName (string):Middle name.
- GivenName (string): Given name.
- Sex (string): Gender.
- Birthday (string): Date of birth.
- Address (string): Address.
- CRN (string): Common reference number (CRN).

(4) Indonesian identity card
When the value of `IdCardType` is `IndonesiaIDCard`:
- NIK (string): Single Identity Number.
- Nama (string): Full name.
- TempatTglLahir (string): Place and date of birth.
- JenisKelamin (string): Gender.
- GolDarah (string): Blood type.
- Alamat (string): Address.
- RTRW (string): Street.
- KelDesa (string): Village.
- Kecamatan (string): Region.
- Agama (string): Religion.
- StatusPerkawinan (string): Marital status.
- Perkerjaan (string): Occupation.
- KewargaNegaraan (string): Nationality.
- BerlakuHingga (string): Expiry date.
- IssuedDate (string): Issue date.

(5) A passport issued in Hong Kong (China) /Macao (China) /Taiwan (China) or other countries/regions
When the value of `IdCardType` is `MLIDPassport`:
- FullName (string): Full name.
- Surname (string): Surname.
- GivenName (string): Given name.
- Birthday (string): Date of birth.
- Sex (string): Gender. Valid values: `F` (female) and `M` (male).
- DateOfExpiration (string): Expiration date.
- IssuingCountry (string): Issuing country.
- NationalityCode (string): Country/region code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The request ID of a single process.
     * @param CardInfo $CardInfo The recognition results of ID card
     * @param NormalCardInfo $NormalCardInfo License OCR result
     * @param array $WarnCardInfos Card warning information
-9101 Alarm for covered certificate,
-9102 Alarm for photocopied certificate,
-9103 Alarm for photographed certificate,
-9107 Alarm for reflective certificate,
-9108 Alarm for blurry image,
-9109 This capability is not enabled.
     * @param array $EditDetails Details of the OCR modifications for this EKYC card, when the user manually modifies the card recognition results (IsEdit=true), EditDetails will return the modified fields. When IsEdit=false, EditDetails is empty.
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

        if (array_key_exists("IsEdit",$param) and $param["IsEdit"] !== null) {
            $this->IsEdit = $param["IsEdit"];
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

        if (array_key_exists("CardInfo",$param) and $param["CardInfo"] !== null) {
            $this->CardInfo = new CardInfo();
            $this->CardInfo->deserialize($param["CardInfo"]);
        }

        if (array_key_exists("NormalCardInfo",$param) and $param["NormalCardInfo"] !== null) {
            $this->NormalCardInfo = new NormalCardInfo();
            $this->NormalCardInfo->deserialize($param["NormalCardInfo"]);
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("EditDetails",$param) and $param["EditDetails"] !== null) {
            $this->EditDetails = [];
            foreach ($param["EditDetails"] as $key => $value){
                $obj = new EditDetail();
                $obj->deserialize($value);
                array_push($this->EditDetails, $obj);
            }
        }
    }
}
