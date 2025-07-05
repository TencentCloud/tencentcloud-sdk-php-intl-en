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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Static graphic overlay configuration.
 *
 * @method integer getGlobalImageOverlayEnabled() Obtain Whether to enable global static image overlay, 0: Disable, 1: Enable; Default value: 0.
 * @method void setGlobalImageOverlayEnabled(integer $GlobalImageOverlayEnabled) Set Whether to enable global static image overlay, 0: Disable, 1: Enable; Default value: 0.
 */
class StaticImageSettings extends AbstractModel
{
    /**
     * @var integer Whether to enable global static image overlay, 0: Disable, 1: Enable; Default value: 0.
     */
    public $GlobalImageOverlayEnabled;

    /**
     * @param integer $GlobalImageOverlayEnabled Whether to enable global static image overlay, 0: Disable, 1: Enable; Default value: 0.
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
        if (array_key_exists("GlobalImageOverlayEnabled",$param) and $param["GlobalImageOverlayEnabled"] !== null) {
            $this->GlobalImageOverlayEnabled = $param["GlobalImageOverlayEnabled"];
        }
    }
}
