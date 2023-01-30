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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAndPublishNetworkFirewallPolicyDetail request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method integer getFromPolicyRule() Obtain Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method void setFromPolicyRule(integer $FromPolicyRule) Set Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method integer getToPolicyRule() Obtain Outbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method void setToPolicyRule(integer $ToPolicyRule) Set Outbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
 * @method string getPodSelector() Obtain Pod selector
 * @method void setPodSelector(string $PodSelector) Set Pod selector
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 * @method array getCustomPolicy() Obtain Custom rule
 * @method void setCustomPolicy(array $CustomPolicy) Set Custom rule
 */
class AddAndPublishNetworkFirewallPolicyDetailRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var integer Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     */
    public $FromPolicyRule;

    /**
     * @var integer Outbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     */
    public $ToPolicyRule;

    /**
     * @var string Pod selector
     */
    public $PodSelector;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @var array Custom rule
     */
    public $CustomPolicy;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $PolicyName Policy name
     * @param integer $FromPolicyRule Inbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     * @param integer $ToPolicyRule Outbound rule

`1`: Allow all.

`2`: Reject all.

`3`: Custom.
     * @param string $PodSelector Pod selector
     * @param string $Namespace Namespace
     * @param string $Description Policy description
     * @param array $CustomPolicy Custom rule
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("FromPolicyRule",$param) and $param["FromPolicyRule"] !== null) {
            $this->FromPolicyRule = $param["FromPolicyRule"];
        }

        if (array_key_exists("ToPolicyRule",$param) and $param["ToPolicyRule"] !== null) {
            $this->ToPolicyRule = $param["ToPolicyRule"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = [];
            foreach ($param["CustomPolicy"] as $key => $value){
                $obj = new NetworkCustomPolicy();
                $obj->deserialize($value);
                array_push($this->CustomPolicy, $obj);
            }
        }
    }
}
