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
 * 
 *
 * @method integer getMotionGraphicsOverlayEnabled() Obtain Whether to enable dynamic graphic overlay, '0' not enabled, '1' enabled; Default 0.
 * @method void setMotionGraphicsOverlayEnabled(integer $MotionGraphicsOverlayEnabled) Set Whether to enable dynamic graphic overlay, '0' not enabled, '1' enabled; Default 0.
 */
class MotionGraphicsSetting extends AbstractModel
{
    /**
     * @var integer Whether to enable dynamic graphic overlay, '0' not enabled, '1' enabled; Default 0.
     */
    public $MotionGraphicsOverlayEnabled;

    /**
     * @param integer $MotionGraphicsOverlayEnabled Whether to enable dynamic graphic overlay, '0' not enabled, '1' enabled; Default 0.
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
        if (array_key_exists("MotionGraphicsOverlayEnabled",$param) and $param["MotionGraphicsOverlayEnabled"] !== null) {
            $this->MotionGraphicsOverlayEnabled = $param["MotionGraphicsOverlayEnabled"];
        }
    }
}
