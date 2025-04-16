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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSAI ad insertion configuration.
 *
 * @method string getAdsUrl() Obtain Advertising Decision Server URL (ADS).
 * @method void setAdsUrl(string $AdsUrl) Set Advertising Decision Server URL (ADS).
 * @method array getConfigAliases() Obtain Parameter configuration.
 * @method void setConfigAliases(array $ConfigAliases) Set Parameter configuration.
 * @method boolean getAdMarkerPassthrough() Obtain Whether to enable transparent transmission of advertising tags.
 * @method void setAdMarkerPassthrough(boolean $AdMarkerPassthrough) Set Whether to enable transparent transmission of advertising tags.
 * @method integer getSCTE35AdType() Obtain How to process tags in advertisements, optional values: [1,2] 
1: Process all SCTE-35 type tags - all (default) 
2: SCTE-35enhanced, parse some types.
 * @method void setSCTE35AdType(integer $SCTE35AdType) Set How to process tags in advertisements, optional values: [1,2] 
1: Process all SCTE-35 type tags - all (default) 
2: SCTE-35enhanced, parse some types.
 * @method string getSlateAd() Obtain Default advertising url.
 * @method void setSlateAd(string $SlateAd) Set Default advertising url.
 * @method integer getThreshold() Obtain Maximum unfilled duration, unit: seconds.
 * @method void setThreshold(integer $Threshold) Set Maximum unfilled duration, unit: seconds.
 * @method boolean getDashMPDLocation() Obtain Whether to enable mpd location, true corresponds to enable, false corresponds to disable.
 * @method void setDashMPDLocation(boolean $DashMPDLocation) Set Whether to enable mpd location, true corresponds to enable, false corresponds to disable.
 * @method array getAdTriggers() Obtain The type of tag that is regarded as an advertisement, optional values: [1,8]
1. Splice insert 
2. Provider advertisement 
3. Distributor advertisement 
4. Provider placement opportunity 
5. Distributor placement opportunity 
6. Break 
7. Provider overlay placement opportunity 
8. Distributor overlay placement opportunity.
 * @method void setAdTriggers(array $AdTriggers) Set The type of tag that is regarded as an advertisement, optional values: [1,8]
1. Splice insert 
2. Provider advertisement 
3. Distributor advertisement 
4. Provider placement opportunity 
5. Distributor placement opportunity 
6. Break 
7. Provider overlay placement opportunity 
8. Distributor overlay placement opportunity.
 * @method integer getDeliveryRestrictions() Obtain The type of distribution restriction that is considered an advertisement, optional values: [1,4]
1:None 
2:Restricted (default) 
3:Unrestricted 
4.Both.
 * @method void setDeliveryRestrictions(integer $DeliveryRestrictions) Set The type of distribution restriction that is considered an advertisement, optional values: [1,4]
1:None 
2:Restricted (default) 
3:Unrestricted 
4.Both.
 * @method string getSourceCDNPrefix() Obtain Source CDN prefix, needs to start with http:// or https://
 * @method void setSourceCDNPrefix(string $SourceCDNPrefix) Set Source CDN prefix, needs to start with http:// or https://
 * @method string getAdCDNPrefix() Obtain Advertising CDN prefix needs to start with http:// or https://
 * @method void setAdCDNPrefix(string $AdCDNPrefix) Set Advertising CDN prefix needs to start with http:// or https://
 * @method string getPreRollAdsUrl() Obtain Pre-roll ad decision service address.
 * @method void setPreRollAdsUrl(string $PreRollAdsUrl) Set Pre-roll ad decision service address.
 * @method integer getPreRollMaxAllowedDuration() Obtain The maximum allowed duration of pre-roll ads, (0, 3600].
 * @method void setPreRollMaxAllowedDuration(integer $PreRollMaxAllowedDuration) Set The maximum allowed duration of pre-roll ads, (0, 3600].
 */
class SSAIConf extends AbstractModel
{
    /**
     * @var string Advertising Decision Server URL (ADS).
     */
    public $AdsUrl;

    /**
     * @var array Parameter configuration.
     */
    public $ConfigAliases;

    /**
     * @var boolean Whether to enable transparent transmission of advertising tags.
     */
    public $AdMarkerPassthrough;

    /**
     * @var integer How to process tags in advertisements, optional values: [1,2] 
1: Process all SCTE-35 type tags - all (default) 
2: SCTE-35enhanced, parse some types.
     */
    public $SCTE35AdType;

    /**
     * @var string Default advertising url.
     */
    public $SlateAd;

    /**
     * @var integer Maximum unfilled duration, unit: seconds.
     */
    public $Threshold;

    /**
     * @var boolean Whether to enable mpd location, true corresponds to enable, false corresponds to disable.
     */
    public $DashMPDLocation;

    /**
     * @var array The type of tag that is regarded as an advertisement, optional values: [1,8]
1. Splice insert 
2. Provider advertisement 
3. Distributor advertisement 
4. Provider placement opportunity 
5. Distributor placement opportunity 
6. Break 
7. Provider overlay placement opportunity 
8. Distributor overlay placement opportunity.
     */
    public $AdTriggers;

    /**
     * @var integer The type of distribution restriction that is considered an advertisement, optional values: [1,4]
1:None 
2:Restricted (default) 
3:Unrestricted 
4.Both.
     */
    public $DeliveryRestrictions;

    /**
     * @var string Source CDN prefix, needs to start with http:// or https://
     */
    public $SourceCDNPrefix;

    /**
     * @var string Advertising CDN prefix needs to start with http:// or https://
     */
    public $AdCDNPrefix;

    /**
     * @var string Pre-roll ad decision service address.
     */
    public $PreRollAdsUrl;

    /**
     * @var integer The maximum allowed duration of pre-roll ads, (0, 3600].
     */
    public $PreRollMaxAllowedDuration;

    /**
     * @param string $AdsUrl Advertising Decision Server URL (ADS).
     * @param array $ConfigAliases Parameter configuration.
     * @param boolean $AdMarkerPassthrough Whether to enable transparent transmission of advertising tags.
     * @param integer $SCTE35AdType How to process tags in advertisements, optional values: [1,2] 
1: Process all SCTE-35 type tags - all (default) 
2: SCTE-35enhanced, parse some types.
     * @param string $SlateAd Default advertising url.
     * @param integer $Threshold Maximum unfilled duration, unit: seconds.
     * @param boolean $DashMPDLocation Whether to enable mpd location, true corresponds to enable, false corresponds to disable.
     * @param array $AdTriggers The type of tag that is regarded as an advertisement, optional values: [1,8]
1. Splice insert 
2. Provider advertisement 
3. Distributor advertisement 
4. Provider placement opportunity 
5. Distributor placement opportunity 
6. Break 
7. Provider overlay placement opportunity 
8. Distributor overlay placement opportunity.
     * @param integer $DeliveryRestrictions The type of distribution restriction that is considered an advertisement, optional values: [1,4]
1:None 
2:Restricted (default) 
3:Unrestricted 
4.Both.
     * @param string $SourceCDNPrefix Source CDN prefix, needs to start with http:// or https://
     * @param string $AdCDNPrefix Advertising CDN prefix needs to start with http:// or https://
     * @param string $PreRollAdsUrl Pre-roll ad decision service address.
     * @param integer $PreRollMaxAllowedDuration The maximum allowed duration of pre-roll ads, (0, 3600].
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
        if (array_key_exists("AdsUrl",$param) and $param["AdsUrl"] !== null) {
            $this->AdsUrl = $param["AdsUrl"];
        }

        if (array_key_exists("ConfigAliases",$param) and $param["ConfigAliases"] !== null) {
            $this->ConfigAliases = [];
            foreach ($param["ConfigAliases"] as $key => $value){
                $obj = new ConfigAliasesInfo();
                $obj->deserialize($value);
                array_push($this->ConfigAliases, $obj);
            }
        }

        if (array_key_exists("AdMarkerPassthrough",$param) and $param["AdMarkerPassthrough"] !== null) {
            $this->AdMarkerPassthrough = $param["AdMarkerPassthrough"];
        }

        if (array_key_exists("SCTE35AdType",$param) and $param["SCTE35AdType"] !== null) {
            $this->SCTE35AdType = $param["SCTE35AdType"];
        }

        if (array_key_exists("SlateAd",$param) and $param["SlateAd"] !== null) {
            $this->SlateAd = $param["SlateAd"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("DashMPDLocation",$param) and $param["DashMPDLocation"] !== null) {
            $this->DashMPDLocation = $param["DashMPDLocation"];
        }

        if (array_key_exists("AdTriggers",$param) and $param["AdTriggers"] !== null) {
            $this->AdTriggers = $param["AdTriggers"];
        }

        if (array_key_exists("DeliveryRestrictions",$param) and $param["DeliveryRestrictions"] !== null) {
            $this->DeliveryRestrictions = $param["DeliveryRestrictions"];
        }

        if (array_key_exists("SourceCDNPrefix",$param) and $param["SourceCDNPrefix"] !== null) {
            $this->SourceCDNPrefix = $param["SourceCDNPrefix"];
        }

        if (array_key_exists("AdCDNPrefix",$param) and $param["AdCDNPrefix"] !== null) {
            $this->AdCDNPrefix = $param["AdCDNPrefix"];
        }

        if (array_key_exists("PreRollAdsUrl",$param) and $param["PreRollAdsUrl"] !== null) {
            $this->PreRollAdsUrl = $param["PreRollAdsUrl"];
        }

        if (array_key_exists("PreRollMaxAllowedDuration",$param) and $param["PreRollMaxAllowedDuration"] !== null) {
            $this->PreRollMaxAllowedDuration = $param["PreRollMaxAllowedDuration"];
        }
    }
}
