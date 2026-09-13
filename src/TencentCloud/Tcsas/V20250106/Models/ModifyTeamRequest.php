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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTeam request structure.
 *
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getAdminUserId() Obtain <p>Team admin.</p>
 * @method void setAdminUserId(string $AdminUserId) Set <p>Team admin.</p>
 * @method array getAdminUserIds() Obtain <p>Team admin user IDs.</p>
 * @method void setAdminUserIds(array $AdminUserIds) Set <p>Team admin user IDs.</p>
 */
class ModifyTeamRequest extends AbstractModel
{
    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Team admin.</p>
     */
    public $AdminUserId;

    /**
     * @var array <p>Team admin user IDs.</p>
     */
    public $AdminUserIds;

    /**
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $AdminUserId <p>Team admin.</p>
     * @param array $AdminUserIds <p>Team admin user IDs.</p>
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("AdminUserIds",$param) and $param["AdminUserIds"] !== null) {
            $this->AdminUserIds = $param["AdminUserIds"];
        }
    }
}
