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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session parameter
 *
 * @method string getSessionSource() Obtain session source. Valid values: 'HEADER', 'COOKIE', 'QUERY_STRING'
 * @method void setSessionSource(string $SessionSource) Set session source. Valid values: 'HEADER', 'COOKIE', 'QUERY_STRING'
 * @method string getSessionName() Obtain session name. It must start with a letter. Other characters can consist of digits, letters, underscores, and hyphens. Length: 5-40 characters.
 * @method void setSessionName(string $SessionName) Set session name. It must start with a letter. Other characters can consist of digits, letters, underscores, and hyphens. Length: 5-40 characters.
 * @method integer getMaximumConcurrencySessionPerInstance() Obtain Maximum concurrent sessions
 * @method void setMaximumConcurrencySessionPerInstance(integer $MaximumConcurrencySessionPerInstance) Set Maximum concurrent sessions
 * @method integer getMaximumTTLInSeconds() Obtain Lifecycle
 * @method void setMaximumTTLInSeconds(integer $MaximumTTLInSeconds) Set Lifecycle
 * @method integer getMaximumIdleTimeInSeconds() Obtain Idle duration
 * @method void setMaximumIdleTimeInSeconds(integer $MaximumIdleTimeInSeconds) Set Idle duration
 * @method string getSessionPath() Obtain Path information corresponding to the session
 * @method void setSessionPath(string $SessionPath) Set Path information corresponding to the session
 * @method string getIdleTimeoutStrategy() Obtain Automatically destroy FATAL and auto-pause PAUSE. This only occurs when security isolation is started.
 * @method void setIdleTimeoutStrategy(string $IdleTimeoutStrategy) Set Automatically destroy FATAL and auto-pause PAUSE. This only occurs when security isolation is started.
 */
class SessionConfig extends AbstractModel
{
    /**
     * @var string session source. Valid values: 'HEADER', 'COOKIE', 'QUERY_STRING'
     */
    public $SessionSource;

    /**
     * @var string session name. It must start with a letter. Other characters can consist of digits, letters, underscores, and hyphens. Length: 5-40 characters.
     */
    public $SessionName;

    /**
     * @var integer Maximum concurrent sessions
     */
    public $MaximumConcurrencySessionPerInstance;

    /**
     * @var integer Lifecycle
     */
    public $MaximumTTLInSeconds;

    /**
     * @var integer Idle duration
     */
    public $MaximumIdleTimeInSeconds;

    /**
     * @var string Path information corresponding to the session
     */
    public $SessionPath;

    /**
     * @var string Automatically destroy FATAL and auto-pause PAUSE. This only occurs when security isolation is started.
     */
    public $IdleTimeoutStrategy;

    /**
     * @param string $SessionSource session source. Valid values: 'HEADER', 'COOKIE', 'QUERY_STRING'
     * @param string $SessionName session name. It must start with a letter. Other characters can consist of digits, letters, underscores, and hyphens. Length: 5-40 characters.
     * @param integer $MaximumConcurrencySessionPerInstance Maximum concurrent sessions
     * @param integer $MaximumTTLInSeconds Lifecycle
     * @param integer $MaximumIdleTimeInSeconds Idle duration
     * @param string $SessionPath Path information corresponding to the session
     * @param string $IdleTimeoutStrategy Automatically destroy FATAL and auto-pause PAUSE. This only occurs when security isolation is started.
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
        if (array_key_exists("SessionSource",$param) and $param["SessionSource"] !== null) {
            $this->SessionSource = $param["SessionSource"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("MaximumConcurrencySessionPerInstance",$param) and $param["MaximumConcurrencySessionPerInstance"] !== null) {
            $this->MaximumConcurrencySessionPerInstance = $param["MaximumConcurrencySessionPerInstance"];
        }

        if (array_key_exists("MaximumTTLInSeconds",$param) and $param["MaximumTTLInSeconds"] !== null) {
            $this->MaximumTTLInSeconds = $param["MaximumTTLInSeconds"];
        }

        if (array_key_exists("MaximumIdleTimeInSeconds",$param) and $param["MaximumIdleTimeInSeconds"] !== null) {
            $this->MaximumIdleTimeInSeconds = $param["MaximumIdleTimeInSeconds"];
        }

        if (array_key_exists("SessionPath",$param) and $param["SessionPath"] !== null) {
            $this->SessionPath = $param["SessionPath"];
        }

        if (array_key_exists("IdleTimeoutStrategy",$param) and $param["IdleTimeoutStrategy"] !== null) {
            $this->IdleTimeoutStrategy = $param["IdleTimeoutStrategy"];
        }
    }
}
