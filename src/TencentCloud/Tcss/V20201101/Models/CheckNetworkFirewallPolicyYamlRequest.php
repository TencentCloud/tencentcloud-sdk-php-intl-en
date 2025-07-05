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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckNetworkFirewallPolicyYaml request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getYaml() Obtain Base64-encoded NetworkPolicy YAML string
 * @method void setYaml(string $Yaml) Set Base64-encoded NetworkPolicy YAML string
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 */
class CheckNetworkFirewallPolicyYamlRequest extends AbstractModel
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
     * @var string Base64-encoded NetworkPolicy YAML string
     */
    public $Yaml;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $PolicyName Policy name
     * @param string $Yaml Base64-encoded NetworkPolicy YAML string
     * @param string $Description Policy description
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

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
