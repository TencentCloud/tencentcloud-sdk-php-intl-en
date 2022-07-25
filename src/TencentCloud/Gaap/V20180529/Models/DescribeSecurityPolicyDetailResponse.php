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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicyDetail response structure.
 *
 * @method string getProxyId() Obtain Connection ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Security policy status:
BOUND (security policies enabled)
UNBIND (security policies disabled)
BINDING (enabling security policies)
UNBINDING (disabling security policies)
 * @method void setStatus(string $Status) Set Security policy status:
BOUND (security policies enabled)
UNBIND (security policies disabled)
BINDING (enabling security policies)
UNBINDING (disabling security policies)
 * @method string getDefaultAction() Obtain Default policy: ACCEPT or DROP.
 * @method void setDefaultAction(string $DefaultAction) Set Default policy: ACCEPT or DROP.
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method array getRuleList() Obtain List of rules
 * @method void setRuleList(array $RuleList) Set List of rules
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecurityPolicyDetailResponse extends AbstractModel
{
    /**
     * @var string Connection ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var string Security policy status:
BOUND (security policies enabled)
UNBIND (security policies disabled)
BINDING (enabling security policies)
UNBINDING (disabling security policies)
     */
    public $Status;

    /**
     * @var string Default policy: ACCEPT or DROP.
     */
    public $DefaultAction;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var array List of rules
     */
    public $RuleList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ProxyId Connection ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Security policy status:
BOUND (security policies enabled)
UNBIND (security policies disabled)
BINDING (enabling security policies)
UNBINDING (disabling security policies)
     * @param string $DefaultAction Default policy: ACCEPT or DROP.
     * @param string $PolicyId Policy ID
     * @param array $RuleList List of rules
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DefaultAction",$param) and $param["DefaultAction"] !== null) {
            $this->DefaultAction = $param["DefaultAction"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new SecurityPolicyRuleOut();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
