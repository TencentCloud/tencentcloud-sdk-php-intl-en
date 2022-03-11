<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Physical location information
 *
 * @method string getPosId() Obtain Rack unit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPosId(string $PosId) Set Rack unit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRackId() Obtain Rack
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRackId(string $RackId) Set Rack
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSwitchId() Obtain Switch
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitchId(string $SwitchId) Set Switch
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PhysicalPosition extends AbstractModel
{
    /**
     * @var string Rack unit
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PosId;

    /**
     * @var string Rack
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RackId;

    /**
     * @var string Switch
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SwitchId;

    /**
     * @param string $PosId Rack unit
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RackId Rack
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SwitchId Switch
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }
    }
}
