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
 * Acl rule information
 *
 * @method string getGlobalAcceleratorPolicyId() Obtain Access control policy ID.
 * @method void setGlobalAcceleratorPolicyId(string $GlobalAcceleratorPolicyId) Set Access control policy ID.
 * @method string getGlobalAcceleratorAclRuleId() Obtain Acl rule ID.
 * @method void setGlobalAcceleratorAclRuleId(string $GlobalAcceleratorAclRuleId) Set Acl rule ID.
 * @method string getProtocol() Obtain Protocol.
 * @method void setProtocol(string $Protocol) Set Protocol.
 * @method string getPort() Obtain Port.
 * @method void setPort(string $Port) Set Port.
 * @method string getSourceCidrBlock() Obtain IP range.
 * @method void setSourceCidrBlock(string $SourceCidrBlock) Set IP range.
 * @method string getPolicy() Obtain Action.
 * @method void setPolicy(string $Policy) Set Action.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 */
class GlobalAcceleratorAclRuleSet extends AbstractModel
{
    /**
     * @var string Access control policy ID.
     */
    public $GlobalAcceleratorPolicyId;

    /**
     * @var string Acl rule ID.
     */
    public $GlobalAcceleratorAclRuleId;

    /**
     * @var string Protocol.
     */
    public $Protocol;

    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @var string IP range.
     */
    public $SourceCidrBlock;

    /**
     * @var string Action.
     */
    public $Policy;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @param string $GlobalAcceleratorPolicyId Access control policy ID.
     * @param string $GlobalAcceleratorAclRuleId Acl rule ID.
     * @param string $Protocol Protocol.
     * @param string $Port Port.
     * @param string $SourceCidrBlock IP range.
     * @param string $Policy Action.
     * @param string $Description Description.
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
        if (array_key_exists("GlobalAcceleratorPolicyId",$param) and $param["GlobalAcceleratorPolicyId"] !== null) {
            $this->GlobalAcceleratorPolicyId = $param["GlobalAcceleratorPolicyId"];
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
