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
 * DescribeSimpleTeamList request structure.
 *
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method array getTeamRoleTypeList() Obtain Team permission type 1. Mini program management 2 Application management
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set Team permission type 1. Mini program management 2 Application management
 */
class DescribeSimpleTeamListRequest extends AbstractModel
{
    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var array Team permission type 1. Mini program management 2 Application management
     */
    public $TeamRoleTypeList;

    /**
     * @param string $PlatformId Platform ID
     * @param array $TeamRoleTypeList Team permission type 1. Mini program management 2 Application management
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TeamRoleTypeList",$param) and $param["TeamRoleTypeList"] !== null) {
            $this->TeamRoleTypeList = $param["TeamRoleTypeList"];
        }
    }
}
