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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP DDOS protection configuration.
 *
 * @method AdaptiveFrequencyControl getAdaptiveFrequencyControl() Obtain Specifies the specific configuration of adaptive frequency control.
 * @method void setAdaptiveFrequencyControl(AdaptiveFrequencyControl $AdaptiveFrequencyControl) Set Specifies the specific configuration of adaptive frequency control.
 * @method ClientFiltering getClientFiltering() Obtain Specifies the intelligent client filter configuration.
 * @method void setClientFiltering(ClientFiltering $ClientFiltering) Set Specifies the intelligent client filter configuration.
 * @method BandwidthAbuseDefense getBandwidthAbuseDefense() Obtain Specifies the specific configuration for bandwidth abuse protection.
 * @method void setBandwidthAbuseDefense(BandwidthAbuseDefense $BandwidthAbuseDefense) Set Specifies the specific configuration for bandwidth abuse protection.
 * @method SlowAttackDefense getSlowAttackDefense() Obtain Specifies the configuration of slow attack protection.
 * @method void setSlowAttackDefense(SlowAttackDefense $SlowAttackDefense) Set Specifies the configuration of slow attack protection.
 */
class HttpDDoSProtection extends AbstractModel
{
    /**
     * @var AdaptiveFrequencyControl Specifies the specific configuration of adaptive frequency control.
     */
    public $AdaptiveFrequencyControl;

    /**
     * @var ClientFiltering Specifies the intelligent client filter configuration.
     */
    public $ClientFiltering;

    /**
     * @var BandwidthAbuseDefense Specifies the specific configuration for bandwidth abuse protection.
     */
    public $BandwidthAbuseDefense;

    /**
     * @var SlowAttackDefense Specifies the configuration of slow attack protection.
     */
    public $SlowAttackDefense;

    /**
     * @param AdaptiveFrequencyControl $AdaptiveFrequencyControl Specifies the specific configuration of adaptive frequency control.
     * @param ClientFiltering $ClientFiltering Specifies the intelligent client filter configuration.
     * @param BandwidthAbuseDefense $BandwidthAbuseDefense Specifies the specific configuration for bandwidth abuse protection.
     * @param SlowAttackDefense $SlowAttackDefense Specifies the configuration of slow attack protection.
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
        if (array_key_exists("AdaptiveFrequencyControl",$param) and $param["AdaptiveFrequencyControl"] !== null) {
            $this->AdaptiveFrequencyControl = new AdaptiveFrequencyControl();
            $this->AdaptiveFrequencyControl->deserialize($param["AdaptiveFrequencyControl"]);
        }

        if (array_key_exists("ClientFiltering",$param) and $param["ClientFiltering"] !== null) {
            $this->ClientFiltering = new ClientFiltering();
            $this->ClientFiltering->deserialize($param["ClientFiltering"]);
        }

        if (array_key_exists("BandwidthAbuseDefense",$param) and $param["BandwidthAbuseDefense"] !== null) {
            $this->BandwidthAbuseDefense = new BandwidthAbuseDefense();
            $this->BandwidthAbuseDefense->deserialize($param["BandwidthAbuseDefense"]);
        }

        if (array_key_exists("SlowAttackDefense",$param) and $param["SlowAttackDefense"] !== null) {
            $this->SlowAttackDefense = new SlowAttackDefense();
            $this->SlowAttackDefense->deserialize($param["SlowAttackDefense"]);
        }
    }
}
