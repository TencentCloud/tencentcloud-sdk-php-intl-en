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
 * DeleteShareUnitMembers request structure.
 *
 * @method string getUnitId() Obtain Shared unit ID.
 * @method void setUnitId(string $UnitId) Set Shared unit ID.
 * @method string getArea() Obtain Shared unit region.
 * @method void setArea(string $Area) Set Shared unit region.
 * @method array getMembers() Obtain Member list.
 * @method void setMembers(array $Members) Set Member list.
 */
class DeleteShareUnitMembersRequest extends AbstractModel
{
    /**
     * @var string Shared unit ID.
     */
    public $UnitId;

    /**
     * @var string Shared unit region.
     */
    public $Area;

    /**
     * @var array Member list.
     */
    public $Members;

    /**
     * @param string $UnitId Shared unit ID.
     * @param string $Area Shared unit region.
     * @param array $Members Member list.
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new ShareMember();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
