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
 * Edge compute cluster private LB information
 *
 * @method boolean getEnabled() Obtain Whether the private LB is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether the private LB is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSubnetId() Obtain ID of the subnet associated with the private LB
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(array $SubnetId) Set ID of the subnet associated with the private LB
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EdgeClusterInternalLB extends AbstractModel
{
    /**
     * @var boolean Whether the private LB is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @var array ID of the subnet associated with the private LB
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @param boolean $Enabled Whether the private LB is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SubnetId ID of the subnet associated with the private LB
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
