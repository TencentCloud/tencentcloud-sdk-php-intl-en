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
 * Update time policy
 *
 * @method integer getUpdatePeriodH() Obtain Document update frequency type: 0 does not update. -H 1-hour granularity. Currently only support 24 (1 day), 72 (3 days), and 168 (7 days). Only valid for the Tencent document type when source=2.
 * @method void setUpdatePeriodH(integer $UpdatePeriodH) Set Document update frequency type: 0 does not update. -H 1-hour granularity. Currently only support 24 (1 day), 72 (3 days), and 168 (7 days). Only valid for the Tencent document type when source=2.
 */
class UpdatePeriodInfo extends AbstractModel
{
    /**
     * @var integer Document update frequency type: 0 does not update. -H 1-hour granularity. Currently only support 24 (1 day), 72 (3 days), and 168 (7 days). Only valid for the Tencent document type when source=2.
     */
    public $UpdatePeriodH;

    /**
     * @param integer $UpdatePeriodH Document update frequency type: 0 does not update. -H 1-hour granularity. Currently only support 24 (1 day), 72 (3 days), and 168 (7 days). Only valid for the Tencent document type when source=2.
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
