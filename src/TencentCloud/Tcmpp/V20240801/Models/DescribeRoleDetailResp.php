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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role details
 *
 * @method integer getRoleId() Obtain Role ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleId(integer $RoleId) Set Role ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleName() Obtain Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceIds() Obtain Accessible menu list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIds(array $ResourceIds) Set Accessible menu list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeRoleDetailResp extends AbstractModel
{
    /**
     * @var integer Role ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleId;

    /**
     * @var string Role name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var array Accessible menu list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIds;

    /**
     * @param integer $RoleId Role ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleName Role name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceIds Accessible menu list
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
