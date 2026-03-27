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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Update Policy
 *
 * @method integer getUpdatePeriodH() Obtain Document update frequency type: 0: No update, -H: Hourly granularity. Currently only supports 24 (1 day), 72 (3 days), 168 (7 days). Only valid for source=2 Tencent document type.
 * @method void setUpdatePeriodH(integer $UpdatePeriodH) Set Document update frequency type: 0: No update, -H: Hourly granularity. Currently only supports 24 (1 day), 72 (3 days), 168 (7 days). Only valid for source=2 Tencent document type.
 */
class UpdatePeriodInfo extends AbstractModel
{
    /**
     * @var integer Document update frequency type: 0: No update, -H: Hourly granularity. Currently only supports 24 (1 day), 72 (3 days), 168 (7 days). Only valid for source=2 Tencent document type.
     */
    public $UpdatePeriodH;

    /**
     * @param integer $UpdatePeriodH Document update frequency type: 0: No update, -H: Hourly granularity. Currently only supports 24 (1 day), 72 (3 days), 168 (7 days). Only valid for source=2 Tencent document type.
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
        if (array_key_exists("UpdatePeriodH",$param) and $param["UpdatePeriodH"] !== null) {
            $this->UpdatePeriodH = $param["UpdatePeriodH"];
        }
    }
}
