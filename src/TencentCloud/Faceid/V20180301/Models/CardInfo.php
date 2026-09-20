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
 * Document recognition result
 *
 * @method HKIDCard getHKIDCard() Obtain Hong Kong identity card
 * @method void setHKIDCard(HKIDCard $HKIDCard) Set Hong Kong identity card
 * @method MLIDCard getMLIDCard() Obtain Malaysian identity card
 * @method void setMLIDCard(MLIDCard $MLIDCard) Set Malaysian identity card
 * @method PhilippinesVoteID getPhilippinesVoteID() Obtain Philippines voter card
 * @method void setPhilippinesVoteID(PhilippinesVoteID $PhilippinesVoteID) Set Philippines voter card
 * @method IndonesiaIDCard getIndonesiaIDCard() Obtain Indonesian Identity Card
 * @method void setIndonesiaIDCard(IndonesiaIDCard $IndonesiaIDCard) Set Indonesian Identity Card
 * @method PhilippinesDrivingLicense getPhilippinesDrivingLicense() Obtain Philippines driving license
 * @method void setPhilippinesDrivingLicense(PhilippinesDrivingLicense $PhilippinesDrivingLicense) Set Philippines driving license
 * @method PhilippinesTinID getPhilippinesTinID() Obtain TinID in the Philippines
 * @method void setPhilippinesTinID(PhilippinesTinID $PhilippinesTinID) Set TinID in the Philippines
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
 * @method ThailandIDCard getThailandIDCard() Obtain Thai Identity Card
 * @method void setThailandIDCard(ThailandIDCard $ThailandIDCard) Set Thai Identity Card
 * @method SingaporeIDCard getSingaporeIDCard() Obtain Singapore ID card
 * @method void setSingaporeIDCard(SingaporeIDCard $SingaporeIDCard) Set Singapore ID card
 * @method MacaoIDCard getMacaoIDCard() Obtain Macao (China) identity card
 * @method void setMacaoIDCard(MacaoIDCard $MacaoIDCard) Set Macao (China) identity card
 * @method TaiWanIDCard getTaiWanIDCard() Obtain Taiwan (China) ID card
 * @method void setTaiWanIDCard(TaiWanIDCard $TaiWanIDCard) Set Taiwan (China) ID card
 * @method JapanIDCard getJapanIDCard() Obtain Japan identity card
 * @method void setJapanIDCard(JapanIDCard $JapanIDCard) Set Japan identity card
 * @method BangladeshIDCard getBangladeshIDCard() Obtain Bangladesh ID card
 * @method void setBangladeshIDCard(BangladeshIDCard $BangladeshIDCard) Set Bangladesh ID card
 * @method NigeriaIDCard getNigeriaIDCard() Obtain Nigerian Identity Card
 * @method void setNigeriaIDCard(NigeriaIDCard $NigeriaIDCard) Set Nigerian Identity Card
 * @method NigeriaDrivingLicense getNigeriaDrivingLicense() Obtain Nigerian driver's license
 * @method void setNigeriaDrivingLicense(NigeriaDrivingLicense $NigeriaDrivingLicense) Set Nigerian driver's license
 * @method PakistanIDCard getPakistanIDCard() Obtain Pakistan identity card
 * @method void setPakistanIDCard(PakistanIDCard $PakistanIDCard) Set Pakistan identity card
 * @method PakistanDrivingLicense getPakistanDrivingLicense() Obtain Pakistan driver's license
 * @method void setPakistanDrivingLicense(PakistanDrivingLicense $PakistanDrivingLicense) Set Pakistan driver's license
 */
class CardInfo extends AbstractModel
{
    /**
     * @var HKIDCard Hong Kong identity card
     */
    public $HKIDCard;

    /**
     * @var MLIDCard Malaysian identity card
     */
    public $MLIDCard;

    /**
     * @var PhilippinesVoteID Philippines voter card
     */
    public $PhilippinesVoteID;

    /**
     * @var IndonesiaIDCard Indonesian Identity Card
     */
    public $IndonesiaIDCard;

    /**
     * @var PhilippinesDrivingLicense Philippines driving license
     */
    public $PhilippinesDrivingLicense;

    /**
     * @var PhilippinesTinID TinID in the Philippines
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
     * @var ThailandIDCard Thai Identity Card
     */
    public $ThailandIDCard;

    /**
     * @var SingaporeIDCard Singapore ID card
     */
    public $SingaporeIDCard;

    /**
     * @var MacaoIDCard Macao (China) identity card
     */
    public $MacaoIDCard;

    /**
     * @var TaiWanIDCard Taiwan (China) ID card
     */
    public $TaiWanIDCard;

    /**
     * @var JapanIDCard Japan identity card
     */
    public $JapanIDCard;

    /**
     * @var BangladeshIDCard Bangladesh ID card
     */
    public $BangladeshIDCard;

    /**
     * @var NigeriaIDCard Nigerian Identity Card
     */
    public $NigeriaIDCard;

    /**
     * @var NigeriaDrivingLicense Nigerian driver's license
     */
    public $NigeriaDrivingLicense;

    /**
     * @var PakistanIDCard Pakistan identity card
     */
    public $PakistanIDCard;

    /**
     * @var PakistanDrivingLicense Pakistan driver's license
     */
    public $PakistanDrivingLicense;

    /**
     * @param HKIDCard $HKIDCard Hong Kong identity card
     * @param MLIDCard $MLIDCard Malaysian identity card
     * @param PhilippinesVoteID $PhilippinesVoteID Philippines voter card
     * @param IndonesiaIDCard $IndonesiaIDCard Indonesian Identity Card
     * @param PhilippinesDrivingLicense $PhilippinesDrivingLicense Philippines driving license
     * @param PhilippinesTinID $PhilippinesTinID TinID in the Philippines
     * @param PhilippinesSSSID $PhilippinesSSSID Philippines SSSID
     * @param PhilippinesUMID $PhilippinesUMID Philippines UMID
     * @param InternationalIDPassport $InternationalIDPassport Hong Kong, Macao, and Taiwan region as well as overseas passport
     * @param GeneralCard $GeneralCard General card certificate information
     * @param IndonesiaDrivingLicense $IndonesiaDrivingLicense Indonesian driving license
     * @param ThailandIDCard $ThailandIDCard Thai Identity Card
     * @param SingaporeIDCard $SingaporeIDCard Singapore ID card
     * @param MacaoIDCard $MacaoIDCard Macao (China) identity card
     * @param TaiWanIDCard $TaiWanIDCard Taiwan (China) ID card
     * @param JapanIDCard $JapanIDCard Japan identity card
     * @param BangladeshIDCard $BangladeshIDCard Bangladesh ID card
     * @param NigeriaIDCard $NigeriaIDCard Nigerian Identity Card
     * @param NigeriaDrivingLicense $NigeriaDrivingLicense Nigerian driver's license
     * @param PakistanIDCard $PakistanIDCard Pakistan identity card
     * @param PakistanDrivingLicense $PakistanDrivingLicense Pakistan driver's license
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
            $this->HKIDCard = new HKIDCard();
            $this->HKIDCard->deserialize($param["HKIDCard"]);
        }

        if (array_key_exists("MLIDCard",$param) and $param["MLIDCard"] !== null) {
            $this->MLIDCard = new MLIDCard();
            $this->MLIDCard->deserialize($param["MLIDCard"]);
        }

        if (array_key_exists("PhilippinesVoteID",$param) and $param["PhilippinesVoteID"] !== null) {
            $this->PhilippinesVoteID = new PhilippinesVoteID();
            $this->PhilippinesVoteID->deserialize($param["PhilippinesVoteID"]);
        }

        if (array_key_exists("IndonesiaIDCard",$param) and $param["IndonesiaIDCard"] !== null) {
            $this->IndonesiaIDCard = new IndonesiaIDCard();
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
            $this->ThailandIDCard = new ThailandIDCard();
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

        if (array_key_exists("TaiWanIDCard",$param) and $param["TaiWanIDCard"] !== null) {
            $this->TaiWanIDCard = new TaiWanIDCard();
            $this->TaiWanIDCard->deserialize($param["TaiWanIDCard"]);
        }

        if (array_key_exists("JapanIDCard",$param) and $param["JapanIDCard"] !== null) {
            $this->JapanIDCard = new JapanIDCard();
            $this->JapanIDCard->deserialize($param["JapanIDCard"]);
        }

        if (array_key_exists("BangladeshIDCard",$param) and $param["BangladeshIDCard"] !== null) {
            $this->BangladeshIDCard = new BangladeshIDCard();
            $this->BangladeshIDCard->deserialize($param["BangladeshIDCard"]);
        }

        if (array_key_exists("NigeriaIDCard",$param) and $param["NigeriaIDCard"] !== null) {
            $this->NigeriaIDCard = new NigeriaIDCard();
            $this->NigeriaIDCard->deserialize($param["NigeriaIDCard"]);
        }

        if (array_key_exists("NigeriaDrivingLicense",$param) and $param["NigeriaDrivingLicense"] !== null) {
            $this->NigeriaDrivingLicense = new NigeriaDrivingLicense();
            $this->NigeriaDrivingLicense->deserialize($param["NigeriaDrivingLicense"]);
        }

        if (array_key_exists("PakistanIDCard",$param) and $param["PakistanIDCard"] !== null) {
            $this->PakistanIDCard = new PakistanIDCard();
            $this->PakistanIDCard->deserialize($param["PakistanIDCard"]);
        }

        if (array_key_exists("PakistanDrivingLicense",$param) and $param["PakistanDrivingLicense"] !== null) {
            $this->PakistanDrivingLicense = new PakistanDrivingLicense();
            $this->PakistanDrivingLicense->deserialize($param["PakistanDrivingLicense"]);
        }
    }
}
