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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceDataReservedSpace request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method float getReservedSpaceGB() Obtain <p>Target reserved space size to modify</p><p>Unit: GB</p>
 * @method void setReservedSpaceGB(float $ReservedSpaceGB) Set <p>Target reserved space size to modify</p><p>Unit: GB</p>
 */
class ModifyInstanceDataReservedSpaceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var float <p>Target reserved space size to modify</p><p>Unit: GB</p>
     */
    public $ReservedSpaceGB;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param float $ReservedSpaceGB <p>Target reserved space size to modify</p><p>Unit: GB</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReservedSpaceGB",$param) and $param["ReservedSpaceGB"] !== null) {
            $this->ReservedSpaceGB = $param["ReservedSpaceGB"];
        }
    }
}
