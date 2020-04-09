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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySmsSign request structure.
 *
 * @method integer getSignId() Obtain ID of signature to be modified.
 * @method void setSignId(integer $SignId) Set ID of signature to be modified.
 * @method string getSignName() Obtain Signature name.
 * @method void setSignName(string $SignName) Set Signature name.
 * @method integer getSignType() Obtain Signature type. Each of these types is followed by their `DocumentType` (identity document type) option:
0: company (0, 1, 2, 3).
1: app (0, 1, 2, 3, 4).
2: website (0, 1, 2, 3, 5).
3: WeChat Official Account or WeChat Mini Program (0, 1, 2, 3, 6).
4: trademark (7).
5: governmental/public institution or others (2, 3).
Note: the identity document type must be selected according to the correspondence; otherwise, the review will fail.
 * @method void setSignType(integer $SignType) Set Signature type. Each of these types is followed by their `DocumentType` (identity document type) option:
0: company (0, 1, 2, 3).
1: app (0, 1, 2, 3, 4).
2: website (0, 1, 2, 3, 5).
3: WeChat Official Account or WeChat Mini Program (0, 1, 2, 3, 6).
4: trademark (7).
5: governmental/public institution or others (2, 3).
Note: the identity document type must be selected according to the correspondence; otherwise, the review will fail.
 * @method integer getDocumentType() Obtain Identity document type:
0: 3-in-1 license.
1: business license.
2: organization code certificate.
3: certificate of unified social credit code.
4: screenshot of application backend management (for personal app).
5: screenshot of website ICP filing backend (for personal website).
6: screenshot of WeChat Mini Program settings page (for personal WeChat Mini Program).
7: trademark registration certificate.
 * @method void setDocumentType(integer $DocumentType) Set Identity document type:
0: 3-in-1 license.
1: business license.
2: organization code certificate.
3: certificate of unified social credit code.
4: screenshot of application backend management (for personal app).
5: screenshot of website ICP filing backend (for personal website).
6: screenshot of WeChat Mini Program settings page (for personal WeChat Mini Program).
7: trademark registration certificate.
 * @method integer getInternational() Obtain Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method integer getUsedMethod() Obtain Signature use:
0: for self-use.
1: for others.
 * @method void setUsedMethod(integer $UsedMethod) Set Signature use:
0: for self-use.
1: for others.
 * @method string getProofImage() Obtain You should Base64-encode the image of the identity document corresponding to the signature first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
 * @method void setProofImage(string $ProofImage) Set You should Base64-encode the image of the identity document corresponding to the signature first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
 * @method string getCommissionImage() Obtain Authorization letter, which should be submitted if `UsedMethod` is for others.
You should Base64-encode the image first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
Note: this field will take effect only when `UsedMethod` is 1 (for others).
 * @method void setCommissionImage(string $CommissionImage) Set Authorization letter, which should be submitted if `UsedMethod` is for others.
You should Base64-encode the image first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
Note: this field will take effect only when `UsedMethod` is 1 (for others).
 * @method string getRemark() Obtain Signature application remarks.
 * @method void setRemark(string $Remark) Set Signature application remarks.
 */
class ModifySmsSignRequest extends AbstractModel
{
    /**
     * @var integer ID of signature to be modified.
     */
    public $SignId;

    /**
     * @var string Signature name.
     */
    public $SignName;

    /**
     * @var integer Signature type. Each of these types is followed by their `DocumentType` (identity document type) option:
0: company (0, 1, 2, 3).
1: app (0, 1, 2, 3, 4).
2: website (0, 1, 2, 3, 5).
3: WeChat Official Account or WeChat Mini Program (0, 1, 2, 3, 6).
4: trademark (7).
5: governmental/public institution or others (2, 3).
Note: the identity document type must be selected according to the correspondence; otherwise, the review will fail.
     */
    public $SignType;

    /**
     * @var integer Identity document type:
0: 3-in-1 license.
1: business license.
2: organization code certificate.
3: certificate of unified social credit code.
4: screenshot of application backend management (for personal app).
5: screenshot of website ICP filing backend (for personal website).
6: screenshot of WeChat Mini Program settings page (for personal WeChat Mini Program).
7: trademark registration certificate.
     */
    public $DocumentType;

    /**
     * @var integer Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     */
    public $International;

    /**
     * @var integer Signature use:
0: for self-use.
1: for others.
     */
    public $UsedMethod;

    /**
     * @var string You should Base64-encode the image of the identity document corresponding to the signature first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
     */
    public $ProofImage;

    /**
     * @var string Authorization letter, which should be submitted if `UsedMethod` is for others.
You should Base64-encode the image first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
Note: this field will take effect only when `UsedMethod` is 1 (for others).
     */
    public $CommissionImage;

    /**
     * @var string Signature application remarks.
     */
    public $Remark;

    /**
     * @param integer $SignId ID of signature to be modified.
     * @param string $SignName Signature name.
     * @param integer $SignType Signature type. Each of these types is followed by their `DocumentType` (identity document type) option:
0: company (0, 1, 2, 3).
1: app (0, 1, 2, 3, 4).
2: website (0, 1, 2, 3, 5).
3: WeChat Official Account or WeChat Mini Program (0, 1, 2, 3, 6).
4: trademark (7).
5: governmental/public institution or others (2, 3).
Note: the identity document type must be selected according to the correspondence; otherwise, the review will fail.
     * @param integer $DocumentType Identity document type:
0: 3-in-1 license.
1: business license.
2: organization code certificate.
3: certificate of unified social credit code.
4: screenshot of application backend management (for personal app).
5: screenshot of website ICP filing backend (for personal website).
6: screenshot of WeChat Mini Program settings page (for personal WeChat Mini Program).
7: trademark registration certificate.
     * @param integer $International Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     * @param integer $UsedMethod Signature use:
0: for self-use.
1: for others.
     * @param string $ProofImage You should Base64-encode the image of the identity document corresponding to the signature first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
     * @param string $CommissionImage Authorization letter, which should be submitted if `UsedMethod` is for others.
You should Base64-encode the image first, remove the prefix `data:image/jpeg;base64,` from the resulted string, and then use it as the value of this parameter.
Note: this field will take effect only when `UsedMethod` is 1 (for others).
     * @param string $Remark Signature application remarks.
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("UsedMethod",$param) and $param["UsedMethod"] !== null) {
            $this->UsedMethod = $param["UsedMethod"];
        }

        if (array_key_exists("ProofImage",$param) and $param["ProofImage"] !== null) {
            $this->ProofImage = $param["ProofImage"];
        }

        if (array_key_exists("CommissionImage",$param) and $param["CommissionImage"] !== null) {
            $this->CommissionImage = $param["CommissionImage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
