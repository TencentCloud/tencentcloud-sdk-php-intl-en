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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnterpriseSecurityDispatchStatus request structure.
 *
 * @method integer getStatus() Obtain Status. Values: `0` (Publish now), `1` (Stop publishing)
 * @method void setStatus(integer $Status) Set Status. Values: `0` (Publish now), `1` (Stop publishing)
 */
class ModifyEnterpriseSecurityDispatchStatusRequest extends AbstractModel
{
    /**
     * @var integer Status. Values: `0` (Publish now), `1` (Stop publishing)
     */
    public $Status;

    /**
     * @param integer $Status Status. Values: `0` (Publish now), `1` (Stop publishing)
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
