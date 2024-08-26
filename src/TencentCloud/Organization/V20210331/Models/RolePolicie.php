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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CIC permission policy.
 *
 * @method integer getRolePolicyId() Obtain Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRolePolicyId(integer $RolePolicyId) Set Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRolePolicyName() Obtain Permission policy name.
 * @method void setRolePolicyName(string $RolePolicyName) Set Permission policy name.
 * @method string getRolePolicyType() Obtain Permission policy type.
 * @method void setRolePolicyType(string $RolePolicyType) Set Permission policy type.
 * @method string getRolePolicyDocument() Obtain Custom policy content. This parameter is only returned for custom policies.
 * @method void setRolePolicyDocument(string $RolePolicyDocument) Set Custom policy content. This parameter is only returned for custom policies.
 * @method string getAddTime() Obtain The time when the permission policy is added to the permission configuration.
 * @method void setAddTime(string $AddTime) Set The time when the permission policy is added to the permission configuration.
 */
class RolePolicie extends AbstractModel
{
    /**
     * @var integer Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RolePolicyId;

    /**
     * @var string Permission policy name.
     */
    public $RolePolicyName;

    /**
     * @var string Permission policy type.
     */
    public $RolePolicyType;

    /**
     * @var string Custom policy content. This parameter is only returned for custom policies.
     */
    public $RolePolicyDocument;

    /**
     * @var string The time when the permission policy is added to the permission configuration.
     */
    public $AddTime;

    /**
     * @param integer $RolePolicyId Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RolePolicyName Permission policy name.
     * @param string $RolePolicyType Permission policy type.
     * @param string $RolePolicyDocument Custom policy content. This parameter is only returned for custom policies.
     * @param string $AddTime The time when the permission policy is added to the permission configuration.
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
        if (array_key_exists("RolePolicyId",$param) and $param["RolePolicyId"] !== null) {
            $this->RolePolicyId = $param["RolePolicyId"];
        }

        if (array_key_exists("RolePolicyName",$param) and $param["RolePolicyName"] !== null) {
            $this->RolePolicyName = $param["RolePolicyName"];
        }

        if (array_key_exists("RolePolicyType",$param) and $param["RolePolicyType"] !== null) {
            $this->RolePolicyType = $param["RolePolicyType"];
        }

        if (array_key_exists("RolePolicyDocument",$param) and $param["RolePolicyDocument"] !== null) {
            $this->RolePolicyDocument = $param["RolePolicyDocument"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
