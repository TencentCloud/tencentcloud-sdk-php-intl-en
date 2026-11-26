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
 * Affinity configurations for the inference service
 *
 * @method string getSwitch() Obtain <p>Master switch for inference service affinity.</p><p>Enumeration values:</p><ul><li>On: Enable inference service affinity;</li><li>Off: Disable inference service affinity.</li></ul>
 * @method void setSwitch(string $Switch) Set <p>Master switch for inference service affinity.</p><p>Enumeration values:</p><ul><li>On: Enable inference service affinity;</li><li>Off: Disable inference service affinity.</li></ul>
 * @method string getAffinityMode() Obtain <p>Affinity approach for inference service.</p><p>Enumeration values:</p><ul><li>SessionId: Affinity based on session ID.</li></ul><p>Default value: SessionId.</p>
 * @method void setAffinityMode(string $AffinityMode) Set <p>Affinity approach for inference service.</p><p>Enumeration values:</p><ul><li>SessionId: Affinity based on session ID.</li></ul><p>Default value: SessionId.</p>
 * @method SessionIdAffinityConfig getSessionIdAffinityConfig() Obtain <p>Inference service affinity configuration. Required when AffinityMode is SessionId.</p>
 * @method void setSessionIdAffinityConfig(SessionIdAffinityConfig $SessionIdAffinityConfig) Set <p>Inference service affinity configuration. Required when AffinityMode is SessionId.</p>
 */
class InferenceAffinityConfig extends AbstractModel
{
    /**
     * @var string <p>Master switch for inference service affinity.</p><p>Enumeration values:</p><ul><li>On: Enable inference service affinity;</li><li>Off: Disable inference service affinity.</li></ul>
     */
    public $Switch;

    /**
     * @var string <p>Affinity approach for inference service.</p><p>Enumeration values:</p><ul><li>SessionId: Affinity based on session ID.</li></ul><p>Default value: SessionId.</p>
     */
    public $AffinityMode;

    /**
     * @var SessionIdAffinityConfig <p>Inference service affinity configuration. Required when AffinityMode is SessionId.</p>
     */
    public $SessionIdAffinityConfig;

    /**
     * @param string $Switch <p>Master switch for inference service affinity.</p><p>Enumeration values:</p><ul><li>On: Enable inference service affinity;</li><li>Off: Disable inference service affinity.</li></ul>
     * @param string $AffinityMode <p>Affinity approach for inference service.</p><p>Enumeration values:</p><ul><li>SessionId: Affinity based on session ID.</li></ul><p>Default value: SessionId.</p>
     * @param SessionIdAffinityConfig $SessionIdAffinityConfig <p>Inference service affinity configuration. Required when AffinityMode is SessionId.</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AffinityMode",$param) and $param["AffinityMode"] !== null) {
            $this->AffinityMode = $param["AffinityMode"];
        }

        if (array_key_exists("SessionIdAffinityConfig",$param) and $param["SessionIdAffinityConfig"] !== null) {
            $this->SessionIdAffinityConfig = new SessionIdAffinityConfig();
            $this->SessionIdAffinityConfig->deserialize($param["SessionIdAffinityConfig"]);
        }
    }
}
