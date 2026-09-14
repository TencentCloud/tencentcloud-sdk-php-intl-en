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
 * Acl information
 *
 * @method string getProtocol() Obtain <p>Protocol.</p><p>Input limits: supports configuration of 'TCP', 'UDP', 'ALL';</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol.</p><p>Input limits: supports configuration of 'TCP', 'UDP', 'ALL';</p>
 * @method string getPort() Obtain <p>Port.</p>
 * @method void setPort(string $Port) Set <p>Port.</p>
 * @method string getSourceCidrBlock() Obtain <p>IP range.</p>
 * @method void setSourceCidrBlock(string $SourceCidrBlock) Set <p>IP range.</p>
 * @method string getPolicy() Obtain <p>Execute action.</p><p>Input parameter limit: can be configured with 'ACCEPT' and 'DROP';</p>
 * @method void setPolicy(string $Policy) Set <p>Execute action.</p><p>Input parameter limit: can be configured with 'ACCEPT' and 'DROP';</p>
 * @method string getDescription() Obtain <p>Description. Maximum length cannot exceed 100 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description. Maximum length cannot exceed 100 bytes.</p>
 */
class AclEntries extends AbstractModel
{
    /**
     * @var string <p>Protocol.</p><p>Input limits: supports configuration of 'TCP', 'UDP', 'ALL';</p>
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
     * @var string <p>Execute action.</p><p>Input parameter limit: can be configured with 'ACCEPT' and 'DROP';</p>
     */
    public $Policy;

    /**
     * @var string <p>Description. Maximum length cannot exceed 100 bytes.</p>
     */
    public $Description;

    /**
     * @param string $Protocol <p>Protocol.</p><p>Input limits: supports configuration of 'TCP', 'UDP', 'ALL';</p>
     * @param string $Port <p>Port.</p>
     * @param string $SourceCidrBlock <p>IP range.</p>
     * @param string $Policy <p>Execute action.</p><p>Input parameter limit: can be configured with 'ACCEPT' and 'DROP';</p>
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
