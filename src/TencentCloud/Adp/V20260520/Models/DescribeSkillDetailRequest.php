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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillDetail request structure.
 *
 * @method string getSkillId() Obtain skillID
 * @method void setSkillId(string $SkillId) Set skillID
 * @method string getSpaceId() Obtain Space ID.
 * @method void setSpaceId(string $SpaceId) Set Space ID.
 * @method array getVersionFilterList() Obtain version Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - Perspective: Perspective enumeration, single string value. The length of Values must be 1. Multiple Values are deemed as illegal. It only acts on the trimming of version_list returned in the details AND does not determine the visibility of the api itself. Default if not passed: USER (USER = USER Perspective, version_list returns only launch versions / EDITOR = EDITOR Perspective, version_list returns ALL liveness versions / ALL = full Perspective, same as EDITOR)
 * @method void setVersionFilterList(array $VersionFilterList) Set version Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - Perspective: Perspective enumeration, single string value. The length of Values must be 1. Multiple Values are deemed as illegal. It only acts on the trimming of version_list returned in the details AND does not determine the visibility of the api itself. Default if not passed: USER (USER = USER Perspective, version_list returns only launch versions / EDITOR = EDITOR Perspective, version_list returns ALL liveness versions / ALL = full Perspective, same as EDITOR)
 */
class DescribeSkillDetailRequest extends AbstractModel
{
    /**
     * @var string skillID
     */
    public $SkillId;

    /**
     * @var string Space ID.
     */
    public $SpaceId;

    /**
     * @var array version Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - Perspective: Perspective enumeration, single string value. The length of Values must be 1. Multiple Values are deemed as illegal. It only acts on the trimming of version_list returned in the details AND does not determine the visibility of the api itself. Default if not passed: USER (USER = USER Perspective, version_list returns only launch versions / EDITOR = EDITOR Perspective, version_list returns ALL liveness versions / ALL = full Perspective, same as EDITOR)
     */
    public $VersionFilterList;

    /**
     * @param string $SkillId skillID
     * @param string $SpaceId Space ID.
     * @param array $VersionFilterList version Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - Perspective: Perspective enumeration, single string value. The length of Values must be 1. Multiple Values are deemed as illegal. It only acts on the trimming of version_list returned in the details AND does not determine the visibility of the api itself. Default if not passed: USER (USER = USER Perspective, version_list returns only launch versions / EDITOR = EDITOR Perspective, version_list returns ALL liveness versions / ALL = full Perspective, same as EDITOR)
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
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("VersionFilterList",$param) and $param["VersionFilterList"] !== null) {
            $this->VersionFilterList = [];
            foreach ($param["VersionFilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->VersionFilterList, $obj);
            }
        }
    }
}
