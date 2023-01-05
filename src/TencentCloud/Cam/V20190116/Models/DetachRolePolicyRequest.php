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
 * DetachRolePolicy request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID. Either `PolicyId` or `PolicyName` must be entered
 * @method void setPolicyId(integer $PolicyId) Set Policy ID. Either `PolicyId` or `PolicyName` must be entered
 * @method string getDetachRoleId() Obtain Role ID, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
 * @method void setDetachRoleId(string $DetachRoleId) Set Role ID, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
 * @method string getDetachRoleName() Obtain Role name, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
 * @method void setDetachRoleName(string $DetachRoleName) Set Role name, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
 * @method string getPolicyName() Obtain Policy name. Either `PolicyId` or `PolicyName` must be entered
 * @method void setPolicyName(string $PolicyName) Set Policy name. Either `PolicyId` or `PolicyName` must be entered
 */
class DetachRolePolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID. Either `PolicyId` or `PolicyName` must be entered
     */
    public $PolicyId;

    /**
     * @var string Role ID, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
     */
    public $DetachRoleId;

    /**
     * @var string Role name, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
     */
    public $DetachRoleName;

    /**
     * @var string Policy name. Either `PolicyId` or `PolicyName` must be entered
     */
    public $PolicyName;

    /**
     * @param integer $PolicyId Policy ID. Either `PolicyId` or `PolicyName` must be entered
     * @param string $DetachRoleId Role ID, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
     * @param string $DetachRoleName Role name, which is used to specify a role. The input parameter is either `DetachRoleId` or `DetachRoleName`.
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

        if (array_key_exists("DetachRoleId",$param) and $param["DetachRoleId"] !== null) {
            $this->DetachRoleId = $param["DetachRoleId"];
        }

        if (array_key_exists("DetachRoleName",$param) and $param["DetachRoleName"] !== null) {
            $this->DetachRoleName = $param["DetachRoleName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
