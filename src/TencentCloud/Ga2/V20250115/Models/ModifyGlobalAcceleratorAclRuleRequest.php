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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGlobalAcceleratorAclRule request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getGlobalAcceleratorAclPolicyId() Obtain <p>Security policy ID</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) Set <p>Security policy ID</p>
 * @method string getGlobalAcceleratorAclRuleId() Obtain <p>Acl rule ID.</p>
 * @method void setGlobalAcceleratorAclRuleId(string $GlobalAcceleratorAclRuleId) Set <p>Acl rule ID.</p>
 * @method string getProtocol() Obtain <p>Protocol.</p><p>Input parameter limit: support selecting 'TCP', 'UDP'.</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol.</p><p>Input parameter limit: support selecting 'TCP', 'UDP'.</p>
 * @method string getPort() Obtain <p>Port.</p>
 * @method void setPort(string $Port) Set <p>Port.</p>
 * @method string getSourceCidrBlock() Obtain <p>IP range.</p>
 * @method void setSourceCidrBlock(string $SourceCidrBlock) Set <p>IP range.</p>
 * @method string getPolicy() Obtain <p>Action.</p><p>Input parameter limit: support selecting 'ACCEPT', 'DROP'.</p><p>Enumeration values:</p><ul><li>ACCEPT: permission.</li><li>DROP: deny.</li></ul>
 * @method void setPolicy(string $Policy) Set <p>Action.</p><p>Input parameter limit: support selecting 'ACCEPT', 'DROP'.</p><p>Enumeration values:</p><ul><li>ACCEPT: permission.</li><li>DROP: deny.</li></ul>
 * @method string getDescription() Obtain <p>Description. Maximum length cannot exceed 100 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description. Maximum length cannot exceed 100 bytes.</p>
 */
class ModifyGlobalAcceleratorAclRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Security policy ID</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var string <p>Acl rule ID.</p>
     */
    public $GlobalAcceleratorAclRuleId;

    /**
     * @var string <p>Protocol.</p><p>Input parameter limit: support selecting 'TCP', 'UDP'.</p>
     */
    public $Protocol;

    /**
     * @var string <p>Port.</p>
     */
    public $Port;

    /**
     * @var string <p>IP range.</p>
     */
    public $SourceCidrBlock;

    /**
     * @var string <p>Action.</p><p>Input parameter limit: support selecting 'ACCEPT', 'DROP'.</p><p>Enumeration values:</p><ul><li>ACCEPT: permission.</li><li>DROP: deny.</li></ul>
     */
    public $Policy;

    /**
     * @var string <p>Description. Maximum length cannot exceed 100 bytes.</p>
     */
    public $Description;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $GlobalAcceleratorAclPolicyId <p>Security policy ID</p>
     * @param string $GlobalAcceleratorAclRuleId <p>Acl rule ID.</p>
     * @param string $Protocol <p>Protocol.</p><p>Input parameter limit: support selecting 'TCP', 'UDP'.</p>
     * @param string $Port <p>Port.</p>
     * @param string $SourceCidrBlock <p>IP range.</p>
     * @param string $Policy <p>Action.</p><p>Input parameter limit: support selecting 'ACCEPT', 'DROP'.</p><p>Enumeration values:</p><ul><li>ACCEPT: permission.</li><li>DROP: deny.</li></ul>
     * @param string $Description <p>Description. Maximum length cannot exceed 100 bytes.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("GlobalAcceleratorAclRuleId",$param) and $param["GlobalAcceleratorAclRuleId"] !== null) {
            $this->GlobalAcceleratorAclRuleId = $param["GlobalAcceleratorAclRuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SourceCidrBlock",$param) and $param["SourceCidrBlock"] !== null) {
            $this->SourceCidrBlock = $param["SourceCidrBlock"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
