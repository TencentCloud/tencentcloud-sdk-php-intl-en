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
 * CreateTeam request structure.
 *
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method string getAdminUserId() Obtain Administrator name
 * @method void setAdminUserId(string $AdminUserId) Set Administrator name
 * @method array getTeamRoleTypeList() Obtain Permission assigned to the team. 1: Mini program; 2: Application (only one of these types is supported)
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set Permission assigned to the team. 1: Mini program; 2: Application (only one of these types is supported)
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getPlatformId() Obtain Platform ID, required for API call
 * @method void setPlatformId(string $PlatformId) Set Platform ID, required for API call
 * @method string getRelatedTeamId() Obtain Associated team ID
 * @method void setRelatedTeamId(string $RelatedTeamId) Set Associated team ID
 */
class CreateTeamRequest extends AbstractModel
{
    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var string Administrator name
     */
    public $AdminUserId;

    /**
     * @var array Permission assigned to the team. 1: Mini program; 2: Application (only one of these types is supported)
     */
    public $TeamRoleTypeList;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Platform ID, required for API call
     */
    public $PlatformId;

    /**
     * @var string Associated team ID
     */
    public $RelatedTeamId;

    /**
     * @param string $TeamName Team name
     * @param string $AdminUserId Administrator name
     * @param array $TeamRoleTypeList Permission assigned to the team. 1: Mini program; 2: Application (only one of these types is supported)
     * @param string $Remark Remarks
     * @param string $PlatformId Platform ID, required for API call
     * @param string $RelatedTeamId Associated team ID
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
    }
}
