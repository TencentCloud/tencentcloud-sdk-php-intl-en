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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIAgent asset credential position
 *
 * @method string getInstanceID() Obtain <p>Instance ID</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID</p>
 * @method string getContainerID() Obtain <p>Container ID</p>
 * @method void setContainerID(string $ContainerID) Set <p>Container ID</p>
 * @method string getPath() Obtain <p>Credential path</p>
 * @method void setPath(string $Path) Set <p>Credential path</p>
 * @method integer getLine() Obtain <p>Row number where the credential resides</p>
 * @method void setLine(integer $Line) Set <p>Row number where the credential resides</p>
 * @method string getContent() Obtain <p>Credential masking fragment</p>
 * @method void setContent(string $Content) Set <p>Credential masking fragment</p>
 * @method integer getStatus() Obtain <p>Whether the credential is managed</p><p>Enumeration values:</p><ul><li>1: Managed</li><li>0: Unhosted</li></ul>
 * @method void setStatus(integer $Status) Set <p>Whether the credential is managed</p><p>Enumeration values:</p><ul><li>1: Managed</li><li>0: Unhosted</li></ul>
 * @method integer getDelegateID() Obtain <p>Hosted credential ID</p>
 * @method void setDelegateID(integer $DelegateID) Set <p>Hosted credential ID</p>
 */
class AIAgentCredentialLocation extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Container ID</p>
     */
    public $ContainerID;

    /**
     * @var string <p>Credential path</p>
     */
    public $Path;

    /**
     * @var integer <p>Row number where the credential resides</p>
     */
    public $Line;

    /**
     * @var string <p>Credential masking fragment</p>
     */
    public $Content;

    /**
     * @var integer <p>Whether the credential is managed</p><p>Enumeration values:</p><ul><li>1: Managed</li><li>0: Unhosted</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Hosted credential ID</p>
     */
    public $DelegateID;

    /**
     * @param string $InstanceID <p>Instance ID</p>
     * @param string $ContainerID <p>Container ID</p>
     * @param string $Path <p>Credential path</p>
     * @param integer $Line <p>Row number where the credential resides</p>
     * @param string $Content <p>Credential masking fragment</p>
     * @param integer $Status <p>Whether the credential is managed</p><p>Enumeration values:</p><ul><li>1: Managed</li><li>0: Unhosted</li></ul>
     * @param integer $DelegateID <p>Hosted credential ID</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DelegateID",$param) and $param["DelegateID"] !== null) {
            $this->DelegateID = $param["DelegateID"];
        }
    }
}
