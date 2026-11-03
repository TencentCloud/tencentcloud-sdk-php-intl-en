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
 * @method AdaptiveFrequencyControl getAdaptiveFrequencyControl() Obtain Specific configuration of adaptive frequency control.
 * @method void setAdaptiveFrequencyControl(AdaptiveFrequencyControl $AdaptiveFrequencyControl) Set Specific configuration of adaptive frequency control.
 * @method ClientFiltering getClientFiltering() Obtain Specific configuration for intelligent client filtering.
 * @method void setClientFiltering(ClientFiltering $ClientFiltering) Set Specific configuration for intelligent client filtering.
 * @method BandwidthAbuseDefense getBandwidthAbuseDefense() Obtain Bandwidth abuse protection configuration.
 * @method void setBandwidthAbuseDefense(BandwidthAbuseDefense $BandwidthAbuseDefense) Set Bandwidth abuse protection configuration.
 * @method SlowAttackDefense getSlowAttackDefense() Obtain Specific configuration of slow attack protection.
 * @method void setSlowAttackDefense(SlowAttackDefense $SlowAttackDefense) Set Specific configuration of slow attack protection.
 */
class HttpDDoSProtection extends AbstractModel
{
    /**
     * @var AdaptiveFrequencyControl Specific configuration of adaptive frequency control.
     */
    public $AdaptiveFrequencyControl;

    /**
     * @var ClientFiltering Specific configuration for intelligent client filtering.
     */
    public $ClientFiltering;

    /**
     * @var BandwidthAbuseDefense Bandwidth abuse protection configuration.
     */
    public $BandwidthAbuseDefense;

    /**
     * @var SlowAttackDefense Specific configuration of slow attack protection.
     */
    public $SlowAttackDefense;

    /**
     * @param AdaptiveFrequencyControl $AdaptiveFrequencyControl Specific configuration of adaptive frequency control.
     * @param ClientFiltering $ClientFiltering Specific configuration for intelligent client filtering.
     * @param BandwidthAbuseDefense $BandwidthAbuseDefense Bandwidth abuse protection configuration.
     * @param SlowAttackDefense $SlowAttackDefense Specific configuration of slow attack protection.
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
