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
 * DescribeNatFwVpcDnsLst response structure.
 *
 * @method array getVpcDnsSwitchLst() Obtain VPC DNS info array of NAT firewall
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcDnsSwitchLst(array $VpcDnsSwitchLst) Set VPC DNS info array of NAT firewall
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getReturnMsg() Obtain Response parameter
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setReturnMsg(string $ReturnMsg) Set Response parameter
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getTotal() Obtain Total number of toggles
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTotal(integer $Total) Set Total number of toggles
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNatFwVpcDnsLstResponse extends AbstractModel
{
    /**
     * @var array VPC DNS info array of NAT firewall
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcDnsSwitchLst;

    /**
     * @var string Response parameter
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ReturnMsg;

    /**
     * @var integer Total number of toggles
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $VpcDnsSwitchLst VPC DNS info array of NAT firewall
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ReturnMsg Response parameter
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Total Total number of toggles
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
        if (array_key_exists("VpcDnsSwitchLst",$param) and $param["VpcDnsSwitchLst"] !== null) {
            $this->VpcDnsSwitchLst = [];
            foreach ($param["VpcDnsSwitchLst"] as $key => $value){
                $obj = new VpcDnsInfo();
                $obj->deserialize($value);
                array_push($this->VpcDnsSwitchLst, $obj);
            }
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
