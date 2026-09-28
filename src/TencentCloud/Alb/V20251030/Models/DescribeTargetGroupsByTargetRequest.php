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
 * DescribeTargetGroupsByTarget request structure.
 *
 * @method array getTargetId() Obtain Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 * @method void setTargetId(array $TargetId) Set Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 */
class DescribeTargetGroupsByTargetRequest extends AbstractModel
{
    /**
     * @var array Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
     */
    public $TargetId;

    /**
     * @param array $TargetId Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }
    }
}
