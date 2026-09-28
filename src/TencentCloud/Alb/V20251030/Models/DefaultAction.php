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
 * Default rule action of the listener
 *
 * @method TargetGroupConfig getTargetGroupConfig() Obtain Forwarding target group configuration. When a listener is created, the target group configuration in the forwarding action enables only a single target group.
 * @method void setTargetGroupConfig(TargetGroupConfig $TargetGroupConfig) Set Forwarding target group configuration. When a listener is created, the target group configuration in the forwarding action enables only a single target group.
 * @method string getType() Obtain Forward action type. When a listener is created, the default forward action type only supports forwarding to a target group.
 * @method void setType(string $Type) Set Forward action type. When a listener is created, the default forward action type only supports forwarding to a target group.
 */
class DefaultAction extends AbstractModel
{
    /**
     * @var TargetGroupConfig Forwarding target group configuration. When a listener is created, the target group configuration in the forwarding action enables only a single target group.
     */
    public $TargetGroupConfig;

    /**
     * @var string Forward action type. When a listener is created, the default forward action type only supports forwarding to a target group.
     */
    public $Type;

    /**
     * @param TargetGroupConfig $TargetGroupConfig Forwarding target group configuration. When a listener is created, the target group configuration in the forwarding action enables only a single target group.
     * @param string $Type Forward action type. When a listener is created, the default forward action type only supports forwarding to a target group.
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
        if (array_key_exists("TargetGroupConfig",$param) and $param["TargetGroupConfig"] !== null) {
            $this->TargetGroupConfig = new TargetGroupConfig();
            $this->TargetGroupConfig->deserialize($param["TargetGroupConfig"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
