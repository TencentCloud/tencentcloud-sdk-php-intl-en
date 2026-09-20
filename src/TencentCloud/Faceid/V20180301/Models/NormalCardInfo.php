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
 * Document recognition result (mapped field result)
 *
 * @method NormalHKIDCard getHKIDCard() Obtain Hong Kong identity card
 * @method void setHKIDCard(NormalHKIDCard $HKIDCard) Set Hong Kong identity card
 * @method NormalMLIDCard getMLIDCard() Obtain Malaysian identity card
 * @method void setMLIDCard(NormalMLIDCard $MLIDCard) Set Malaysian identity card
 * @method PhilippinesVoteID getPhilippinesVoteID() Obtain Philippines voter card
 * @method void setPhilippinesVoteID(PhilippinesVoteID $PhilippinesVoteID) Set Philippines voter card
 * @method NormalIndonesiaIDCard getIndonesiaIDCard() Obtain Indonesian Identity Card
 * @method void setIndonesiaIDCard(NormalIndonesiaIDCard $IndonesiaIDCard) Set Indonesian Identity Card
 * @method PhilippinesDrivingLicense getPhilippinesDrivingLicense() Obtain Philippines driving license
 * @method void setPhilippinesDrivingLicense(PhilippinesDrivingLicense $PhilippinesDrivingLicense) Set Philippines driving license
 * @method PhilippinesTinID getPhilippinesTinID() Obtain Philippines TinID
 * @method void setPhilippinesTinID(PhilippinesTinID $PhilippinesTinID) Set Philippines TinID
 * @method PhilippinesSSSID getPhilippinesSSSID() Obtain Philippines SSSID
 * @method void setPhilippinesSSSID(PhilippinesSSSID $PhilippinesSSSID) Set Philippines SSSID
 * @method PhilippinesUMID getPhilippinesUMID() Obtain Philippines UMID
 * @method void setPhilippinesUMID(PhilippinesUMID $PhilippinesUMID) Set Philippines UMID
 * @method InternationalIDPassport getInternationalIDPassport() Obtain Hong Kong, Macao, and Taiwan region as well as overseas passport
 * @method void setInternationalIDPassport(InternationalIDPassport $InternationalIDPassport) Set Hong Kong, Macao, and Taiwan region as well as overseas passport
 * @method GeneralCard getGeneralCard() Obtain General card certificate information
 * @method void setGeneralCard(GeneralCard $GeneralCard) Set General card certificate information
 * @method IndonesiaDrivingLicense getIndonesiaDrivingLicense() Obtain Indonesian driving license
 * @method void setIndonesiaDrivingLicense(IndonesiaDrivingLicense $IndonesiaDrivingLicense) Set Indonesian driving license
 * @method NormalThailandIDCard getThailandIDCard() Obtain Thai Identity Card
 * @method void setThailandIDCard(NormalThailandIDCard $ThailandIDCard) Set Thai Identity Card
 * @method SingaporeIDCard getSingaporeIDCard() Obtain Singapore ID card
 * @method void setSingaporeIDCard(SingaporeIDCard $SingaporeIDCard) Set Singapore ID card
 * @method MacaoIDCard getMacaoIDCard() Obtain Macao identity card
 * @method void setMacaoIDCard(MacaoIDCard $MacaoIDCard) Set Macao identity card
 * @method MainlandIDCard getMainlandIDCard() Obtain Mainland ID card
 * @method void setMainlandIDCard(MainlandIDCard $MainlandIDCard) Set Mainland ID card
 * @method JapanIDCard getJapanIDCard() Obtain Japan identity card
 * @method void setJapanIDCard(JapanIDCard $JapanIDCard) Set Japan identity card
 * @method TaiWanIDCard getTaiWanIDCard() Obtain Taiwan (China) identity card
 * @method void setTaiWanIDCard(TaiWanIDCard $TaiWanIDCard) Set Taiwan (China) identity card
 * @method HMTPermit getHMTPermitCard() Obtain Hong Kong, Macau and Taiwan Travel Permit
 * @method void setHMTPermitCard(HMTPermit $HMTPermitCard) Set Hong Kong, Macau and Taiwan Travel Permit
 */
class NormalCardInfo extends AbstractModel
{
    /**
     * @var NormalHKIDCard Hong Kong identity card
     */
    public $HKIDCard;

    /**
     * @var NormalMLIDCard Malaysian identity card
     */
    public $MLIDCard;

    /**
     * @var PhilippinesVoteID Philippines voter card
     */
    public $PhilippinesVoteID;

    /**
     * @var NormalIndonesiaIDCard Indonesian Identity Card
     */
    public $IndonesiaIDCard;

    /**
     * @var PhilippinesDrivingLicense Philippines driving license
     */
    public $PhilippinesDrivingLicense;

    /**
     * @var PhilippinesTinID Philippines TinID
     */
    public $PhilippinesTinID;

    /**
     * @var PhilippinesSSSID Philippines SSSID
     */
    public $PhilippinesSSSID;

    /**
     * @var PhilippinesUMID Philippines UMID
     */
    public $PhilippinesUMID;

    /**
     * @var InternationalIDPassport Hong Kong, Macao, and Taiwan region as well as overseas passport
     */
    public $InternationalIDPassport;

    /**
     * @var GeneralCard General card certificate information
     */
    public $GeneralCard;

    /**
     * @var IndonesiaDrivingLicense Indonesian driving license
     */
    public $IndonesiaDrivingLicense;

    /**
     * @var NormalThailandIDCard Thai Identity Card
     */
    public $ThailandIDCard;

    /**
     * @var SingaporeIDCard Singapore ID card
     */
    public $SingaporeIDCard;

    /**
     * @var MacaoIDCard Macao identity card
     */
    public $MacaoIDCard;

    /**
     * @var MainlandIDCard Mainland ID card
     */
    public $MainlandIDCard;

    /**
     * @var JapanIDCard Japan identity card
     */
    public $JapanIDCard;

    /**
     * @var TaiWanIDCard Taiwan (China) identity card
     */
    public $TaiWanIDCard;

    /**
     * @var HMTPermit Hong Kong, Macau and Taiwan Travel Permit
     */
    public $HMTPermitCard;

    /**
     * @param NormalHKIDCard $HKIDCard Hong Kong identity card
     * @param NormalMLIDCard $MLIDCard Malaysian identity card
     * @param PhilippinesVoteID $PhilippinesVoteID Philippines voter card
     * @param NormalIndonesiaIDCard $IndonesiaIDCard Indonesian Identity Card
     * @param PhilippinesDrivingLicense $PhilippinesDrivingLicense Philippines driving license
     * @param PhilippinesTinID $PhilippinesTinID Philippines TinID
     * @param PhilippinesSSSID $PhilippinesSSSID Philippines SSSID
     * @param PhilippinesUMID $PhilippinesUMID Philippines UMID
     * @param InternationalIDPassport $InternationalIDPassport Hong Kong, Macao, and Taiwan region as well as overseas passport
     * @param GeneralCard $GeneralCard General card certificate information
     * @param IndonesiaDrivingLicense $IndonesiaDrivingLicense Indonesian driving license
     * @param NormalThailandIDCard $ThailandIDCard Thai Identity Card
     * @param SingaporeIDCard $SingaporeIDCard Singapore ID card
     * @param MacaoIDCard $MacaoIDCard Macao identity card
     * @param MainlandIDCard $MainlandIDCard Mainland ID card
     * @param JapanIDCard $JapanIDCard Japan identity card
     * @param TaiWanIDCard $TaiWanIDCard Taiwan (China) identity card
     * @param HMTPermit $HMTPermitCard Hong Kong, Macau and Taiwan Travel Permit
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
        if (array_key_exists("HKIDCard",$param) and $param["HKIDCard"] !== null) {
            $this->HKIDCard = new NormalHKIDCard();
            $this->HKIDCard->deserialize($param["HKIDCard"]);
        }

        if (array_key_exists("MLIDCard",$param) and $param["MLIDCard"] !== null) {
            $this->MLIDCard = new NormalMLIDCard();
            $this->MLIDCard->deserialize($param["MLIDCard"]);
        }

        if (array_key_exists("PhilippinesVoteID",$param) and $param["PhilippinesVoteID"] !== null) {
            $this->PhilippinesVoteID = new PhilippinesVoteID();
            $this->PhilippinesVoteID->deserialize($param["PhilippinesVoteID"]);
        }

        if (array_key_exists("IndonesiaIDCard",$param) and $param["IndonesiaIDCard"] !== null) {
            $this->IndonesiaIDCard = new NormalIndonesiaIDCard();
            $this->IndonesiaIDCard->deserialize($param["IndonesiaIDCard"]);
        }

        if (array_key_exists("PhilippinesDrivingLicense",$param) and $param["PhilippinesDrivingLicense"] !== null) {
            $this->PhilippinesDrivingLicense = new PhilippinesDrivingLicense();
            $this->PhilippinesDrivingLicense->deserialize($param["PhilippinesDrivingLicense"]);
        }

        if (array_key_exists("PhilippinesTinID",$param) and $param["PhilippinesTinID"] !== null) {
            $this->PhilippinesTinID = new PhilippinesTinID();
            $this->PhilippinesTinID->deserialize($param["PhilippinesTinID"]);
        }

        if (array_key_exists("PhilippinesSSSID",$param) and $param["PhilippinesSSSID"] !== null) {
            $this->PhilippinesSSSID = new PhilippinesSSSID();
            $this->PhilippinesSSSID->deserialize($param["PhilippinesSSSID"]);
        }

        if (array_key_exists("PhilippinesUMID",$param) and $param["PhilippinesUMID"] !== null) {
            $this->PhilippinesUMID = new PhilippinesUMID();
            $this->PhilippinesUMID->deserialize($param["PhilippinesUMID"]);
        }

        if (array_key_exists("InternationalIDPassport",$param) and $param["InternationalIDPassport"] !== null) {
            $this->InternationalIDPassport = new InternationalIDPassport();
            $this->InternationalIDPassport->deserialize($param["InternationalIDPassport"]);
        }

        if (array_key_exists("GeneralCard",$param) and $param["GeneralCard"] !== null) {
            $this->GeneralCard = new GeneralCard();
            $this->GeneralCard->deserialize($param["GeneralCard"]);
        }

        if (array_key_exists("IndonesiaDrivingLicense",$param) and $param["IndonesiaDrivingLicense"] !== null) {
            $this->IndonesiaDrivingLicense = new IndonesiaDrivingLicense();
            $this->IndonesiaDrivingLicense->deserialize($param["IndonesiaDrivingLicense"]);
        }

        if (array_key_exists("ThailandIDCard",$param) and $param["ThailandIDCard"] !== null) {
            $this->ThailandIDCard = new NormalThailandIDCard();
            $this->ThailandIDCard->deserialize($param["ThailandIDCard"]);
        }

        if (array_key_exists("SingaporeIDCard",$param) and $param["SingaporeIDCard"] !== null) {
            $this->SingaporeIDCard = new SingaporeIDCard();
            $this->SingaporeIDCard->deserialize($param["SingaporeIDCard"]);
        }

        if (array_key_exists("MacaoIDCard",$param) and $param["MacaoIDCard"] !== null) {
            $this->MacaoIDCard = new MacaoIDCard();
            $this->MacaoIDCard->deserialize($param["MacaoIDCard"]);
        }

        if (array_key_exists("MainlandIDCard",$param) and $param["MainlandIDCard"] !== null) {
            $this->MainlandIDCard = new MainlandIDCard();
            $this->MainlandIDCard->deserialize($param["MainlandIDCard"]);
        }

        if (array_key_exists("JapanIDCard",$param) and $param["JapanIDCard"] !== null) {
            $this->JapanIDCard = new JapanIDCard();
            $this->JapanIDCard->deserialize($param["JapanIDCard"]);
        }

        if (array_key_exists("TaiWanIDCard",$param) and $param["TaiWanIDCard"] !== null) {
            $this->TaiWanIDCard = new TaiWanIDCard();
            $this->TaiWanIDCard->deserialize($param["TaiWanIDCard"]);
        }

        if (array_key_exists("HMTPermitCard",$param) and $param["HMTPermitCard"] !== null) {
            $this->HMTPermitCard = new HMTPermit();
            $this->HMTPermitCard->deserialize($param["HMTPermitCard"]);
        }
    }
}
