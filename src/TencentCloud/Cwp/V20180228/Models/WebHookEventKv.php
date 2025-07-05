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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enterprise WeChat Robot Event Types
 *
 * @method integer getType() Obtain Event type
 * @method void setType(integer $Type) Set Event type
 * @method string getControlBit() Obtain Event content
 * @method void setControlBit(string $ControlBit) Set Event content
 */
class WebHookEventKv extends AbstractModel
{
    /**
     * @var integer Event type
     */
    public $Type;

    /**
     * @var string Event content
     */
    public $ControlBit;

    /**
     * @param integer $Type Event type
     * @param string $ControlBit Event content
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ControlBit",$param) and $param["ControlBit"] !== null) {
            $this->ControlBit = $param["ControlBit"];
        }
    }
}
