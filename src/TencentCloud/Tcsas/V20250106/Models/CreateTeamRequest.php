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
 * CreateTeam request structure.
 *
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getAdminUserId() Obtain <p>Administrator name.</p>
 * @method void setAdminUserId(string $AdminUserId) Set <p>Administrator name.</p>
 * @method array getTeamRoleTypeList() Obtain <p>Team role type. Valid values: 1: Mini program; 2: Superapp (only one type is currently supported).</p>
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set <p>Team role type. Valid values: 1: Mini program; 2: Superapp (only one type is currently supported).</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getPlatformId() Obtain <p>Platform ID, required for API call.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID, required for API call.</p>
 * @method string getRelatedTeamId() Obtain <p>Associated team ID.</p>
 * @method void setRelatedTeamId(string $RelatedTeamId) Set <p>Associated team ID.</p>
 * @method integer getExpiryTime() Obtain <p>Team expiration time as a Unix timestamp in seconds. 0 indicates no expiration. This parameter takes effect only when creating a mini program team.</p>
 * @method void setExpiryTime(integer $ExpiryTime) Set <p>Team expiration time as a Unix timestamp in seconds. 0 indicates no expiration. This parameter takes effect only when creating a mini program team.</p>
 * @method array getAdminUserIds() Obtain <p>Administrator user IDs.</p>
 * @method void setAdminUserIds(array $AdminUserIds) Set <p>Administrator user IDs.</p>
 */
class CreateTeamRequest extends AbstractModel
{
    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Administrator name.</p>
     */
    public $AdminUserId;

    /**
     * @var array <p>Team role type. Valid values: 1: Mini program; 2: Superapp (only one type is currently supported).</p>
     */
    public $TeamRoleTypeList;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Platform ID, required for API call.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Associated team ID.</p>
     */
    public $RelatedTeamId;

    /**
     * @var integer <p>Team expiration time as a Unix timestamp in seconds. 0 indicates no expiration. This parameter takes effect only when creating a mini program team.</p>
     */
    public $ExpiryTime;

    /**
     * @var array <p>Administrator user IDs.</p>
     */
    public $AdminUserIds;

    /**
     * @param string $TeamName <p>Team name.</p>
     * @param string $AdminUserId <p>Administrator name.</p>
     * @param array $TeamRoleTypeList <p>Team role type. Valid values: 1: Mini program; 2: Superapp (only one type is currently supported).</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $PlatformId <p>Platform ID, required for API call.</p>
     * @param string $RelatedTeamId <p>Associated team ID.</p>
     * @param integer $ExpiryTime <p>Team expiration time as a Unix timestamp in seconds. 0 indicates no expiration. This parameter takes effect only when creating a mini program team.</p>
     * @param array $AdminUserIds <p>Administrator user IDs.</p>
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
        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("TeamRoleTypeList",$param) and $param["TeamRoleTypeList"] !== null) {
            $this->TeamRoleTypeList = $param["TeamRoleTypeList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("RelatedTeamId",$param) and $param["RelatedTeamId"] !== null) {
            $this->RelatedTeamId = $param["RelatedTeamId"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("AdminUserIds",$param) and $param["AdminUserIds"] !== null) {
            $this->AdminUserIds = $param["AdminUserIds"];
        }
    }
}
