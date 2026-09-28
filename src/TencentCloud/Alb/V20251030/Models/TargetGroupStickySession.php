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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session persistence between target groups
 *
 * @method boolean getEnabled() Obtain Whether to enable session persistence. Off by default.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable session persistence. Off by default.
 * @method integer getTimeout() Obtain Timeout period in seconds. Value range: 1-86400. Default value: 1000.
 * @method void setTimeout(integer $Timeout) Set Timeout period in seconds. Value range: 1-86400. Default value: 1000.
 */
class TargetGroupStickySession extends AbstractModel
{
    /**
     * @var boolean Whether to enable session persistence. Off by default.
     */
    public $Enabled;

    /**
     * @var integer Timeout period in seconds. Value range: 1-86400. Default value: 1000.
     */
    public $Timeout;

    /**
     * @param boolean $Enabled Whether to enable session persistence. Off by default.
     * @param integer $Timeout Timeout period in seconds. Value range: 1-86400. Default value: 1000.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
