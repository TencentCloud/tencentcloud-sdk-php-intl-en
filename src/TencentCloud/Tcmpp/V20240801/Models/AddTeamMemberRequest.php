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
 * AddTeamMember request structure.
 *
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method array getMemberList() Obtain Members to be added
 * @method void setMemberList(array $MemberList) Set Members to be added
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class AddTeamMemberRequest extends AbstractModel
{
    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var array Members to be added
     */
    public $MemberList;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @param string $TeamId Team ID
     * @param array $MemberList Members to be added
     * @param string $PlatformId Platform ID
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

        if (array_key_exists("MemberList",$param) and $param["MemberList"] !== null) {
            $this->MemberList = [];
            foreach ($param["MemberList"] as $key => $value){
                $obj = new CreateTeamMemberInfoReq();
                $obj->deserialize($value);
                array_push($this->MemberList, $obj);
            }
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
