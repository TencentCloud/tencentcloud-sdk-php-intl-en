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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwInfoCount response structure.
 *
 * @method string getReturnMsg() Obtain Response parameter
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setReturnMsg(string $ReturnMsg) Set Response parameter
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getNatFwInsCount() Obtain Number of NAT instances of the current tenant
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNatFwInsCount(integer $NatFwInsCount) Set Number of NAT instances of the current tenant
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getSubnetCount() Obtain Number of subnets connected by the current tenant
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSubnetCount(integer $SubnetCount) Set Number of subnets connected by the current tenant
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getOpenSwitchCount() Obtain Number of firewalls enabled
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setOpenSwitchCount(integer $OpenSwitchCount) Set Number of firewalls enabled
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNatFwInfoCountResponse extends AbstractModel
{
    /**
     * @var string Response parameter
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ReturnMsg;

    /**
     * @var integer Number of NAT instances of the current tenant
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NatFwInsCount;

    /**
     * @var integer Number of subnets connected by the current tenant
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SubnetCount;

    /**
     * @var integer Number of firewalls enabled
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $OpenSwitchCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ReturnMsg Response parameter
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $NatFwInsCount Number of NAT instances of the current tenant
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $SubnetCount Number of subnets connected by the current tenant
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $OpenSwitchCount Number of firewalls enabled
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("NatFwInsCount",$param) and $param["NatFwInsCount"] !== null) {
            $this->NatFwInsCount = $param["NatFwInsCount"];
        }

        if (array_key_exists("SubnetCount",$param) and $param["SubnetCount"] !== null) {
            $this->SubnetCount = $param["SubnetCount"];
        }

        if (array_key_exists("OpenSwitchCount",$param) and $param["OpenSwitchCount"] !== null) {
            $this->OpenSwitchCount = $param["OpenSwitchCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
