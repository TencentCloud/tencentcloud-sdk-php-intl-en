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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDidServiceList request structure.
 *
 * @method integer getType() Obtain `1`: Return results at the network level; `0`: Return results at the service level.
 * @method void setType(integer $Type) Set `1`: Return results at the network level; `0`: Return results at the service level.
 */
class GetDidServiceListRequest extends AbstractModel
{
    /**
     * @var integer `1`: Return results at the network level; `0`: Return results at the service level.
     */
    public $Type;

    /**
     * @param integer $Type `1`: Return results at the network level; `0`: Return results at the service level.
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
    }
}
