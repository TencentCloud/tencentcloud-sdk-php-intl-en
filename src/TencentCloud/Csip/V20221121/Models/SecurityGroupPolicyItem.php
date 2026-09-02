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
 * Security group policy
 *
 * @method string getPort() Obtain <p>Port</p>
 * @method void setPort(string $Port) Set <p>Port</p>
 * @method string getAction() Obtain <p>Policy.</p>
 * @method void setAction(string $Action) Set <p>Policy.</p>
 * @method string getProtocol() Obtain <p>Protocol</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol</p>
 * @method string getCidrBlock() Obtain <p>Access source</p>
 * @method void setCidrBlock(string $CidrBlock) Set <p>Access source</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getPriority() Obtain <p>Priority</p><p>Unit: 1</p>
 * @method void setPriority(integer $Priority) Set <p>Priority</p><p>Unit: 1</p>
 */
class SecurityGroupPolicyItem extends AbstractModel
{
    /**
     * @var string <p>Port</p>
     */
    public $Port;

    /**
     * @var string <p>Policy.</p>
     */
    public $Action;

    /**
     * @var string <p>Protocol</p>
     */
    public $Protocol;

    /**
     * @var string <p>Access source</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Priority</p><p>Unit: 1</p>
     */
    public $Priority;

    /**
     * @param string $Port <p>Port</p>
     * @param string $Action <p>Policy.</p>
     * @param string $Protocol <p>Protocol</p>
     * @param string $CidrBlock <p>Access source</p>
     * @param string $Description <p>Description.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $Priority <p>Priority</p><p>Unit: 1</p>
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
