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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityPolicy request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method integer getPolicyIndex() Obtain PolicyId
 * @method void setPolicyIndex(integer $PolicyIndex) Set PolicyId
 * @method string getCidrBlock() Obtain Allowed IP, such as `192.168.0.0/24`
 * @method void setCidrBlock(string $CidrBlock) Set Allowed IP, such as `192.168.0.0/24`
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var integer PolicyId
     */
    public $PolicyIndex;

    /**
     * @var string Allowed IP, such as `192.168.0.0/24`
     */
    public $CidrBlock;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @param string $RegistryId Instance ID
     * @param integer $PolicyIndex PolicyId
     * @param string $CidrBlock Allowed IP, such as `192.168.0.0/24`
     * @param string $Description Remarks
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
