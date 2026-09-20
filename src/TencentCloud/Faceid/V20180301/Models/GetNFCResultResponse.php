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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetNFCResult response structure.
 *
 * @method string getChargeCode() Obtain Billing result code. Each successful NFC read is billed once. Permissible range: 

0: Read successful, billed. 
-1: Read failed, not billed.
 * @method void setChargeCode(string $ChargeCode) Set Billing result code. Each successful NFC read is billed once. Permissible range: 

0: Read successful, billed. 
-1: Read failed, not billed.
 * @method string getIdType() Obtain Document type. Value range: 

01: ID card. 
02: Passport. 
03: Hong Kong and Macao travel permit. 
99: Other document. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIdType(string $IdType) Set Document type. Value range: 

01: ID card. 
02: Passport. 
03: Hong Kong and Macao travel permit. 
99: Other document. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCheckMRTD() Obtain Document verification result. The items for NFC verification are as follows:
{"result_issuer ":"Issuer certificate legitimacy verification result ","result_paper":"Document security object legitimacy verification result ","result_data" :"Data tampering prevention verification result ","result_chip" :"Document chip replication prevention verification result"} 
Value range: 0: verification passed 1: verification failed 2: unverified 3: partially passed 
When all four verification results are 0, the document is genuine.
 * @method void setCheckMRTD(string $CheckMRTD) Set Document verification result. The items for NFC verification are as follows:
{"result_issuer ":"Issuer certificate legitimacy verification result ","result_paper":"Document security object legitimacy verification result ","result_data" :"Data tampering prevention verification result ","result_chip" :"Document chip replication prevention verification result"} 
Value range: 0: verification passed 1: verification failed 2: unverified 3: partially passed 
When all four verification results are 0, the document is genuine.
 * @method string getIdNumCompareResult() Obtain Comparison result of the passed-in identity card number, passport number, or Hong Kong, China and Macao, China travel permit with the identity card number recognized by NFC. 

0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setIdNumCompareResult(string $IdNumCompareResult) Set Comparison result of the passed-in identity card number, passport number, or Hong Kong, China and Macao, China travel permit with the identity card number recognized by NFC. 

0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getNameCompareResult() Obtain Comparison result of the passed-in name and the name recognized by NFC.
0: Consistent
-1: Not the same
-2: NFC recognition failed, unable to compare
 * @method void setNameCompareResult(string $NameCompareResult) Set Comparison result of the passed-in name and the name recognized by NFC.
0: Consistent
-1: Not the same
-2: NFC recognition failed, unable to compare
 * @method float getPictureCompareSim() Obtain Similarity score between the passed-in face image and the portrait photo recognized by NFC.
- Value range: [0.00, 100.00].
- It is recommended to determine the same person when the similarity is equal to or greater than 70. Customers can also self-adjust the threshold based on specific scenarios (with a threshold of 70, the false pass rate is one in a thousand; with a threshold of 80, the false pass rate is one in ten thousand).
 * @method void setPictureCompareSim(float $PictureCompareSim) Set Similarity score between the passed-in face image and the portrait photo recognized by NFC.
- Value range: [0.00, 100.00].
- It is recommended to determine the same person when the similarity is equal to or greater than 70. Customers can also self-adjust the threshold based on specific scenarios (with a threshold of 70, the false pass rate is one in a thousand; with a threshold of 80, the false pass rate is one in ten thousand).
 * @method string getPictureCompareResult() Obtain Comparison result of the passed-in face image and the portrait photo recognized by NFC. 

0: Same person (similarity equal to or greater than 70 points) 
1: Not the same person (similarity less than 70 points) 
2: Comparison failed (the input image quality is too low) 
3: Comparison failed (the input image contains no human face, an incomplete face, or multiple faces) 
4: Comparison failed (input image too large or too small) 
5: Comparison failed (NFC cannot read the portrait photo) 
6: Comparison failed (no input image data) 
7: Comparison failed (other reason)
 * @method void setPictureCompareResult(string $PictureCompareResult) Set Comparison result of the passed-in face image and the portrait photo recognized by NFC. 

0: Same person (similarity equal to or greater than 70 points) 
1: Not the same person (similarity less than 70 points) 
2: Comparison failed (the input image quality is too low) 
3: Comparison failed (the input image contains no human face, an incomplete face, or multiple faces) 
4: Comparison failed (input image too large or too small) 
5: Comparison failed (NFC cannot read the portrait photo) 
6: Comparison failed (no input image data) 
7: Comparison failed (other reason)
 * @method string getBirthDateCompareResult() Obtain Comparison result of the passed-in date of birth and the date of birth recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setBirthDateCompareResult(string $BirthDateCompareResult) Set Comparison result of the passed-in date of birth and the date of birth recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getBeginTimeCompareResult() Obtain Comparison result of the passed-in validity start time and the validity start time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setBeginTimeCompareResult(string $BeginTimeCompareResult) Set Comparison result of the passed-in validity start time and the validity start time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getEndTimeCompareResult() Obtain Comparison result of the passed-in validity end time and the validity end time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setEndTimeCompareResult(string $EndTimeCompareResult) Set Comparison result of the passed-in validity end time and the validity end time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getAddressCompareResult() Obtain Comparison result of the passed-in address and the address recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setAddressCompareResult(string $AddressCompareResult) Set Comparison result of the passed-in address and the address recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getNationCompareResult() Obtain Comparison result of the passed-in ethnicity and the ethnicity recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setNationCompareResult(string $NationCompareResult) Set Comparison result of the passed-in ethnicity and the ethnicity recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getSexCompareResult() Obtain Comparison result of the passed-in sex and the sex recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setSexCompareResult(string $SexCompareResult) Set Comparison result of the passed-in sex and the sex recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getEnNameCompareResult() Obtain Comparison result of the passed-in English name and the English name recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setEnNameCompareResult(string $EnNameCompareResult) Set Comparison result of the passed-in English name and the English name recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getSigningOrganizationCompareResult() Obtain Comparison result of the passed-in issuing authority and the issuing authority recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setSigningOrganizationCompareResult(string $SigningOrganizationCompareResult) Set Comparison result of the passed-in issuing authority and the issuing authority recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getNationalityCompareResult() Obtain Comparison result of the passed-in nationality and the nationality recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setNationalityCompareResult(string $NationalityCompareResult) Set Comparison result of the passed-in nationality and the nationality recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getCountryCodeCompareResult() Obtain Comparison result of the passed-in country code and the country code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setCountryCodeCompareResult(string $CountryCodeCompareResult) Set Comparison result of the passed-in country code and the country code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getMachineReadCodeCompareResult() Obtain Comparison result of the passed-in machine-readable code and the machine-readable code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method void setMachineReadCodeCompareResult(string $MachineReadCodeCompareResult) Set Comparison result of the passed-in machine-readable code and the machine-readable code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetNFCResultResponse extends AbstractModel
{
    /**
     * @var string Billing result code. Each successful NFC read is billed once. Permissible range: 

0: Read successful, billed. 
-1: Read failed, not billed.
     */
    public $ChargeCode;

    /**
     * @var string Document type. Value range: 

01: ID card. 
02: Passport. 
03: Hong Kong and Macao travel permit. 
99: Other document. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IdType;

    /**
     * @var string Document verification result. The items for NFC verification are as follows:
{"result_issuer ":"Issuer certificate legitimacy verification result ","result_paper":"Document security object legitimacy verification result ","result_data" :"Data tampering prevention verification result ","result_chip" :"Document chip replication prevention verification result"} 
Value range: 0: verification passed 1: verification failed 2: unverified 3: partially passed 
When all four verification results are 0, the document is genuine.
     */
    public $CheckMRTD;

    /**
     * @var string Comparison result of the passed-in identity card number, passport number, or Hong Kong, China and Macao, China travel permit with the identity card number recognized by NFC. 

0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $IdNumCompareResult;

    /**
     * @var string Comparison result of the passed-in name and the name recognized by NFC.
0: Consistent
-1: Not the same
-2: NFC recognition failed, unable to compare
     */
    public $NameCompareResult;

    /**
     * @var float Similarity score between the passed-in face image and the portrait photo recognized by NFC.
- Value range: [0.00, 100.00].
- It is recommended to determine the same person when the similarity is equal to or greater than 70. Customers can also self-adjust the threshold based on specific scenarios (with a threshold of 70, the false pass rate is one in a thousand; with a threshold of 80, the false pass rate is one in ten thousand).
     */
    public $PictureCompareSim;

    /**
     * @var string Comparison result of the passed-in face image and the portrait photo recognized by NFC. 

0: Same person (similarity equal to or greater than 70 points) 
1: Not the same person (similarity less than 70 points) 
2: Comparison failed (the input image quality is too low) 
3: Comparison failed (the input image contains no human face, an incomplete face, or multiple faces) 
4: Comparison failed (input image too large or too small) 
5: Comparison failed (NFC cannot read the portrait photo) 
6: Comparison failed (no input image data) 
7: Comparison failed (other reason)
     */
    public $PictureCompareResult;

    /**
     * @var string Comparison result of the passed-in date of birth and the date of birth recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $BirthDateCompareResult;

    /**
     * @var string Comparison result of the passed-in validity start time and the validity start time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $BeginTimeCompareResult;

    /**
     * @var string Comparison result of the passed-in validity end time and the validity end time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $EndTimeCompareResult;

    /**
     * @var string Comparison result of the passed-in address and the address recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $AddressCompareResult;

    /**
     * @var string Comparison result of the passed-in ethnicity and the ethnicity recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $NationCompareResult;

    /**
     * @var string Comparison result of the passed-in sex and the sex recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $SexCompareResult;

    /**
     * @var string Comparison result of the passed-in English name and the English name recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $EnNameCompareResult;

    /**
     * @var string Comparison result of the passed-in issuing authority and the issuing authority recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $SigningOrganizationCompareResult;

    /**
     * @var string Comparison result of the passed-in nationality and the nationality recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $NationalityCompareResult;

    /**
     * @var string Comparison result of the passed-in country code and the country code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $CountryCodeCompareResult;

    /**
     * @var string Comparison result of the passed-in machine-readable code and the machine-readable code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     */
    public $MachineReadCodeCompareResult;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ChargeCode Billing result code. Each successful NFC read is billed once. Permissible range: 

0: Read successful, billed. 
-1: Read failed, not billed.
     * @param string $IdType Document type. Value range: 

01: ID card. 
02: Passport. 
03: Hong Kong and Macao travel permit. 
99: Other document. 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CheckMRTD Document verification result. The items for NFC verification are as follows:
{"result_issuer ":"Issuer certificate legitimacy verification result ","result_paper":"Document security object legitimacy verification result ","result_data" :"Data tampering prevention verification result ","result_chip" :"Document chip replication prevention verification result"} 
Value range: 0: verification passed 1: verification failed 2: unverified 3: partially passed 
When all four verification results are 0, the document is genuine.
     * @param string $IdNumCompareResult Comparison result of the passed-in identity card number, passport number, or Hong Kong, China and Macao, China travel permit with the identity card number recognized by NFC. 

0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $NameCompareResult Comparison result of the passed-in name and the name recognized by NFC.
0: Consistent
-1: Not the same
-2: NFC recognition failed, unable to compare
     * @param float $PictureCompareSim Similarity score between the passed-in face image and the portrait photo recognized by NFC.
- Value range: [0.00, 100.00].
- It is recommended to determine the same person when the similarity is equal to or greater than 70. Customers can also self-adjust the threshold based on specific scenarios (with a threshold of 70, the false pass rate is one in a thousand; with a threshold of 80, the false pass rate is one in ten thousand).
     * @param string $PictureCompareResult Comparison result of the passed-in face image and the portrait photo recognized by NFC. 

0: Same person (similarity equal to or greater than 70 points) 
1: Not the same person (similarity less than 70 points) 
2: Comparison failed (the input image quality is too low) 
3: Comparison failed (the input image contains no human face, an incomplete face, or multiple faces) 
4: Comparison failed (input image too large or too small) 
5: Comparison failed (NFC cannot read the portrait photo) 
6: Comparison failed (no input image data) 
7: Comparison failed (other reason)
     * @param string $BirthDateCompareResult Comparison result of the passed-in date of birth and the date of birth recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $BeginTimeCompareResult Comparison result of the passed-in validity start time and the validity start time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $EndTimeCompareResult Comparison result of the passed-in validity end time and the validity end time recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $AddressCompareResult Comparison result of the passed-in address and the address recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $NationCompareResult Comparison result of the passed-in ethnicity and the ethnicity recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $SexCompareResult Comparison result of the passed-in sex and the sex recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $EnNameCompareResult Comparison result of the passed-in English name and the English name recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $SigningOrganizationCompareResult Comparison result of the passed-in issuing authority and the issuing authority recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $NationalityCompareResult Comparison result of the passed-in nationality and the nationality recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $CountryCodeCompareResult Comparison result of the passed-in country code and the country code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $MachineReadCodeCompareResult Comparison result of the passed-in machine-readable code and the machine-readable code recognized by NFC. 
0: Consistent 
-1: Not the same 
-2: NFC recognition failed, unable to compare
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ChargeCode",$param) and $param["ChargeCode"] !== null) {
            $this->ChargeCode = $param["ChargeCode"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("CheckMRTD",$param) and $param["CheckMRTD"] !== null) {
            $this->CheckMRTD = $param["CheckMRTD"];
        }

        if (array_key_exists("IdNumCompareResult",$param) and $param["IdNumCompareResult"] !== null) {
            $this->IdNumCompareResult = $param["IdNumCompareResult"];
        }

        if (array_key_exists("NameCompareResult",$param) and $param["NameCompareResult"] !== null) {
            $this->NameCompareResult = $param["NameCompareResult"];
        }

        if (array_key_exists("PictureCompareSim",$param) and $param["PictureCompareSim"] !== null) {
            $this->PictureCompareSim = $param["PictureCompareSim"];
        }

        if (array_key_exists("PictureCompareResult",$param) and $param["PictureCompareResult"] !== null) {
            $this->PictureCompareResult = $param["PictureCompareResult"];
        }

        if (array_key_exists("BirthDateCompareResult",$param) and $param["BirthDateCompareResult"] !== null) {
            $this->BirthDateCompareResult = $param["BirthDateCompareResult"];
        }

        if (array_key_exists("BeginTimeCompareResult",$param) and $param["BeginTimeCompareResult"] !== null) {
            $this->BeginTimeCompareResult = $param["BeginTimeCompareResult"];
        }

        if (array_key_exists("EndTimeCompareResult",$param) and $param["EndTimeCompareResult"] !== null) {
            $this->EndTimeCompareResult = $param["EndTimeCompareResult"];
        }

        if (array_key_exists("AddressCompareResult",$param) and $param["AddressCompareResult"] !== null) {
            $this->AddressCompareResult = $param["AddressCompareResult"];
        }

        if (array_key_exists("NationCompareResult",$param) and $param["NationCompareResult"] !== null) {
            $this->NationCompareResult = $param["NationCompareResult"];
        }

        if (array_key_exists("SexCompareResult",$param) and $param["SexCompareResult"] !== null) {
            $this->SexCompareResult = $param["SexCompareResult"];
        }

        if (array_key_exists("EnNameCompareResult",$param) and $param["EnNameCompareResult"] !== null) {
            $this->EnNameCompareResult = $param["EnNameCompareResult"];
        }

        if (array_key_exists("SigningOrganizationCompareResult",$param) and $param["SigningOrganizationCompareResult"] !== null) {
            $this->SigningOrganizationCompareResult = $param["SigningOrganizationCompareResult"];
        }

        if (array_key_exists("NationalityCompareResult",$param) and $param["NationalityCompareResult"] !== null) {
            $this->NationalityCompareResult = $param["NationalityCompareResult"];
        }

        if (array_key_exists("CountryCodeCompareResult",$param) and $param["CountryCodeCompareResult"] !== null) {
            $this->CountryCodeCompareResult = $param["CountryCodeCompareResult"];
        }

        if (array_key_exists("MachineReadCodeCompareResult",$param) and $param["MachineReadCodeCompareResult"] !== null) {
            $this->MachineReadCodeCompareResult = $param["MachineReadCodeCompareResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
