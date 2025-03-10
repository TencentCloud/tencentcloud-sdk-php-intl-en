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
 * License OCR result
 *
 * @method HKIDCard getHKIDCard() Obtain Hong Kong ID (China) Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHKIDCard(HKIDCard $HKIDCard) Set Hong Kong ID (China) Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MLIDCard getMLIDCard() Obtain Malaysia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMLIDCard(MLIDCard $MLIDCard) Set Malaysia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PhilippinesVoteID getPhilippinesVoteID() Obtain Philippines VoteID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhilippinesVoteID(PhilippinesVoteID $PhilippinesVoteID) Set Philippines VoteID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method IndonesiaIDCard getIndonesiaIDCard() Obtain Indonesia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndonesiaIDCard(IndonesiaIDCard $IndonesiaIDCard) Set Indonesia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PhilippinesDrivingLicense getPhilippinesDrivingLicense() Obtain Philippines Driving License
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhilippinesDrivingLicense(PhilippinesDrivingLicense $PhilippinesDrivingLicense) Set Philippines Driving License
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PhilippinesTinID getPhilippinesTinID() Obtain Philippines TinID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhilippinesTinID(PhilippinesTinID $PhilippinesTinID) Set Philippines TinID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PhilippinesSSSID getPhilippinesSSSID() Obtain Philippines SSSID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhilippinesSSSID(PhilippinesSSSID $PhilippinesSSSID) Set Philippines SSSID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PhilippinesUMID getPhilippinesUMID() Obtain Philippines UMID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhilippinesUMID(PhilippinesUMID $PhilippinesUMID) Set Philippines UMID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InternationalIDPassport getInternationalIDPassport() Obtain ID Cards of Hong Kong (China), Macao (China) and Taiwan (China), and International Passport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternationalIDPassport(InternationalIDPassport $InternationalIDPassport) Set ID Cards of Hong Kong (China), Macao (China) and Taiwan (China), and International Passport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method GeneralCard getGeneralCard() Obtain General license information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGeneralCard(GeneralCard $GeneralCard) Set General license information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method IndonesiaDrivingLicense getIndonesiaDrivingLicense() Obtain Indonesia Driving License
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndonesiaDrivingLicense(IndonesiaDrivingLicense $IndonesiaDrivingLicense) Set Indonesia Driving License
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ThailandIDCard getThailandIDCard() Obtain Thailand ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThailandIDCard(ThailandIDCard $ThailandIDCard) Set Thailand ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SingaporeIDCard getSingaporeIDCard() Obtain Singapore ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSingaporeIDCard(SingaporeIDCard $SingaporeIDCard) Set Singapore ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MacaoIDCard getMacaoIDCard() Obtain Macao (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMacaoIDCard(MacaoIDCard $MacaoIDCard) Set Macao (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaiWanIDCard getTaiWanIDCard() Obtain TaiWan (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaiWanIDCard(TaiWanIDCard $TaiWanIDCard) Set TaiWan (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method JapanIDCard getJapanIDCard() Obtain Japan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJapanIDCard(JapanIDCard $JapanIDCard) Set Japan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BangladeshIDCard getBangladeshIDCard() Obtain Bangladesh ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBangladeshIDCard(BangladeshIDCard $BangladeshIDCard) Set Bangladesh ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NigeriaIDCard getNigeriaIDCard() Obtain Nigeria ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNigeriaIDCard(NigeriaIDCard $NigeriaIDCard) Set Nigeria ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NigeriaDrivingLicense getNigeriaDrivingLicense() Obtain Nigeria driving license
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNigeriaDrivingLicense(NigeriaDrivingLicense $NigeriaDrivingLicense) Set Nigeria driving license
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PakistanIDCard getPakistanIDCard() Obtain Pakistan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPakistanIDCard(PakistanIDCard $PakistanIDCard) Set Pakistan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PakistanDrivingLicense getPakistanDrivingLicense() Obtain Pakistan driving license
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPakistanDrivingLicense(PakistanDrivingLicense $PakistanDrivingLicense) Set Pakistan driving license
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CardInfo extends AbstractModel
{
    /**
     * @var HKIDCard Hong Kong ID (China) Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HKIDCard;

    /**
     * @var MLIDCard Malaysia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MLIDCard;

    /**
     * @var PhilippinesVoteID Philippines VoteID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhilippinesVoteID;

    /**
     * @var IndonesiaIDCard Indonesia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndonesiaIDCard;

    /**
     * @var PhilippinesDrivingLicense Philippines Driving License
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhilippinesDrivingLicense;

    /**
     * @var PhilippinesTinID Philippines TinID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhilippinesTinID;

    /**
     * @var PhilippinesSSSID Philippines SSSID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhilippinesSSSID;

    /**
     * @var PhilippinesUMID Philippines UMID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhilippinesUMID;

    /**
     * @var InternationalIDPassport ID Cards of Hong Kong (China), Macao (China) and Taiwan (China), and International Passport
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternationalIDPassport;

    /**
     * @var GeneralCard General license information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GeneralCard;

    /**
     * @var IndonesiaDrivingLicense Indonesia Driving License
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndonesiaDrivingLicense;

    /**
     * @var ThailandIDCard Thailand ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThailandIDCard;

    /**
     * @var SingaporeIDCard Singapore ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SingaporeIDCard;

    /**
     * @var MacaoIDCard Macao (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MacaoIDCard;

    /**
     * @var TaiWanIDCard TaiWan (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaiWanIDCard;

    /**
     * @var JapanIDCard Japan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JapanIDCard;

    /**
     * @var BangladeshIDCard Bangladesh ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BangladeshIDCard;

    /**
     * @var NigeriaIDCard Nigeria ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NigeriaIDCard;

    /**
     * @var NigeriaDrivingLicense Nigeria driving license
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NigeriaDrivingLicense;

    /**
     * @var PakistanIDCard Pakistan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PakistanIDCard;

    /**
     * @var PakistanDrivingLicense Pakistan driving license
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PakistanDrivingLicense;

    /**
     * @param HKIDCard $HKIDCard Hong Kong ID (China) Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MLIDCard $MLIDCard Malaysia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PhilippinesVoteID $PhilippinesVoteID Philippines VoteID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param IndonesiaIDCard $IndonesiaIDCard Indonesia ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PhilippinesDrivingLicense $PhilippinesDrivingLicense Philippines Driving License
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PhilippinesTinID $PhilippinesTinID Philippines TinID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PhilippinesSSSID $PhilippinesSSSID Philippines SSSID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PhilippinesUMID $PhilippinesUMID Philippines UMID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InternationalIDPassport $InternationalIDPassport ID Cards of Hong Kong (China), Macao (China) and Taiwan (China), and International Passport
Note: This field may return null, indicating that no valid values can be obtained.
     * @param GeneralCard $GeneralCard General license information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param IndonesiaDrivingLicense $IndonesiaDrivingLicense Indonesia Driving License
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ThailandIDCard $ThailandIDCard Thailand ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SingaporeIDCard $SingaporeIDCard Singapore ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MacaoIDCard $MacaoIDCard Macao (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaiWanIDCard $TaiWanIDCard TaiWan (China) ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param JapanIDCard $JapanIDCard Japan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BangladeshIDCard $BangladeshIDCard Bangladesh ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NigeriaIDCard $NigeriaIDCard Nigeria ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NigeriaDrivingLicense $NigeriaDrivingLicense Nigeria driving license
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PakistanIDCard $PakistanIDCard Pakistan ID Card
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PakistanDrivingLicense $PakistanDrivingLicense Pakistan driving license
Note: This field may return null, indicating that no valid values can be obtained.
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
