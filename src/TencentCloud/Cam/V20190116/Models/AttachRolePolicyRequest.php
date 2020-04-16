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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachRolePolicy request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID. Either `PolicyId` or `PolicyName` must be entered
 * @method void setPolicyId(integer $PolicyId) Set Policy ID. Either `PolicyId` or `PolicyName` must be entered
 * @method string getAttachRoleId() Obtain Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method void setAttachRoleId(string $AttachRoleId) Set Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method string getAttachRoleName() Obtain Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method void setAttachRoleName(string $AttachRoleName) Set Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method string getPolicyName() Obtain Policy name. Either `PolicyId` or `PolicyName` must be entered
 * @method void setPolicyName(string $PolicyName) Set Policy name. Either `PolicyId` or `PolicyName` must be entered
 */
class AttachRolePolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID. Either `PolicyId` or `PolicyName` must be entered
     */
    public $PolicyId;

    /**
     * @var string Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     */
    public $AttachRoleId;

    /**
     * @var string Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     */
    public $AttachRoleName;

    /**
     * @var string Policy name. Either `PolicyId` or `PolicyName` must be entered
     */
    public $PolicyName;

    /**
     * @param integer $PolicyId Policy ID. Either `PolicyId` or `PolicyName` must be entered
     * @param string $AttachRoleId Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     * @param string $AttachRoleName Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     * @param string $PolicyName Policy name. Either `PolicyId` or `PolicyName` must be entered
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AttachRoleId",$param) and $param["AttachRoleId"] !== null) {
            $this->AttachRoleId = $param["AttachRoleId"];
        }

        if (array_key_exists("AttachRoleName",$param) and $param["AttachRoleName"] !== null) {
            $this->AttachRoleName = $param["AttachRoleName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
