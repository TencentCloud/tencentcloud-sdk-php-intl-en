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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Virtual node
 *
 * @method string getName() Obtain Virtual node name
 * @method void setName(string $Name) Set Virtual node name
 * @method string getSubnetId() Obtain Subnet of the virtual node
 * @method void setSubnetId(string $SubnetId) Set Subnet of the virtual node
 * @method string getPhase() Obtain Virtual node status
 * @method void setPhase(string $Phase) Set Virtual node status
 * @method string getCreatedTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VirtualNode extends AbstractModel
{
    /**
     * @var string Virtual node name
     */
    public $Name;

    /**
     * @var string Subnet of the virtual node
     */
    public $SubnetId;

    /**
     * @var string Virtual node status
     */
    public $Phase;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @param string $Name Virtual node name
     * @param string $SubnetId Subnet of the virtual node
     * @param string $Phase Virtual node status
     * @param string $CreatedTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
