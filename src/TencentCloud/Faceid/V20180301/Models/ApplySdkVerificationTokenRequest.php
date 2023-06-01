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
 * ApplySdkVerificationToken request structure.
 *
 * @method boolean getNeedVerifyIdCard() Obtain Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
 * @method void setNeedVerifyIdCard(boolean $NeedVerifyIdCard) Set Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
 * @method string getIdCardType() Obtain The identity document type. Valid values: `HK` (identity card of Hong Kong (China)) (default), `ML` (Malaysian identity card), `IndonesiaIDCard` (Indonesian identity card), `PhilippinesVoteID` (Philippine voters ID card), `PhilippinesDrivingLicense` (Philippine driver's license), `PhilippinesTinID` (Philippine TIN ID card), `PhilippinesSSSID` (Philippine SSS ID card), and `MLIDPassport` (passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions).
 * @method void setIdCardType(string $IdCardType) Set The identity document type. Valid values: `HK` (identity card of Hong Kong (China)) (default), `ML` (Malaysian identity card), `IndonesiaIDCard` (Indonesian identity card), `PhilippinesVoteID` (Philippine voters ID card), `PhilippinesDrivingLicense` (Philippine driver's license), `PhilippinesTinID` (Philippine TIN ID card), `PhilippinesSSSID` (Philippine SSS ID card), and `MLIDPassport` (passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions).
 * @method boolean getDisableChangeOcrResult() Obtain Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed).
 * @method void setDisableChangeOcrResult(boolean $DisableChangeOcrResult) Set Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed).
 * @method boolean getDisableCheckOcrWarnings() Obtain Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning. If `NeedVerifyIdCard` is set to `true`, this parameter must also be set to `true`.
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning. If `NeedVerifyIdCard` is set to `true`, this parameter must also be set to `true`.
 * @method string getExtra() Obtain A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 * @method void setExtra(string $Extra) Set A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 */
class ApplySdkVerificationTokenRequest extends AbstractModel
{
    /**
     * @var boolean Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     */
    public $NeedVerifyIdCard;

    /**
     * @var string The identity document type. Valid values: `HK` (identity card of Hong Kong (China)) (default), `ML` (Malaysian identity card), `IndonesiaIDCard` (Indonesian identity card), `PhilippinesVoteID` (Philippine voters ID card), `PhilippinesDrivingLicense` (Philippine driver's license), `PhilippinesTinID` (Philippine TIN ID card), `PhilippinesSSSID` (Philippine SSS ID card), and `MLIDPassport` (passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions).
     */
    public $IdCardType;

    /**
     * @var boolean Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed).
     */
    public $DisableChangeOcrResult;

    /**
     * @var boolean Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning. If `NeedVerifyIdCard` is set to `true`, this parameter must also be set to `true`.
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var string A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
     */
    public $Extra;

    /**
     * @param boolean $NeedVerifyIdCard Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     * @param string $IdCardType The identity document type. Valid values: `HK` (identity card of Hong Kong (China)) (default), `ML` (Malaysian identity card), `IndonesiaIDCard` (Indonesian identity card), `PhilippinesVoteID` (Philippine voters ID card), `PhilippinesDrivingLicense` (Philippine driver's license), `PhilippinesTinID` (Philippine TIN ID card), `PhilippinesSSSID` (Philippine SSS ID card), and `MLIDPassport` (passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions).
     * @param boolean $DisableChangeOcrResult Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed).
     * @param boolean $DisableCheckOcrWarnings Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning. If `NeedVerifyIdCard` is set to `true`, this parameter must also be set to `true`.
     * @param string $Extra A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
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
        if (array_key_exists("NeedVerifyIdCard",$param) and $param["NeedVerifyIdCard"] !== null) {
            $this->NeedVerifyIdCard = $param["NeedVerifyIdCard"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("DisableChangeOcrResult",$param) and $param["DisableChangeOcrResult"] !== null) {
            $this->DisableChangeOcrResult = $param["DisableChangeOcrResult"];
        }

        if (array_key_exists("DisableCheckOcrWarnings",$param) and $param["DisableCheckOcrWarnings"] !== null) {
            $this->DisableCheckOcrWarnings = $param["DisableCheckOcrWarnings"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
