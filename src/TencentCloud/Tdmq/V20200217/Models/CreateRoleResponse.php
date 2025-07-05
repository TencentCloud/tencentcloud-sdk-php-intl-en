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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRole response structure.
 *
 * @method string getRoleName() Obtain Role name
 * @method void setRoleName(string $RoleName) Set Role name
 * @method string getToken() Obtain Role token
 * @method void setToken(string $Token) Set Role token
 * @method string getRemark() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getEnvironmentRoleSets() Obtain Namespaces that are bound in batches
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentRoleSets(array $EnvironmentRoleSets) Set Namespaces that are bound in batches
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateRoleResponse extends AbstractModel
{
    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var string Role token
     */
    public $Token;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var array Namespaces that are bound in batches
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentRoleSets;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $RoleName Role name
     * @param string $Token Role token
     * @param string $Remark Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $EnvironmentRoleSets Namespaces that are bound in batches
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EnvironmentRoleSets",$param) and $param["EnvironmentRoleSets"] !== null) {
            $this->EnvironmentRoleSets = [];
            foreach ($param["EnvironmentRoleSets"] as $key => $value){
                $obj = new EnvironmentRoleSet();
                $obj->deserialize($value);
                array_push($this->EnvironmentRoleSets, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
