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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoleList request structure.
 *
 * @method integer getPage() Obtain Page number, beginning from 1
 * @method void setPage(integer $Page) Set Page number, beginning from 1
 * @method integer getRp() Obtain Number of lines per page, no greater than 200
 * @method void setRp(integer $Rp) Set Number of lines per page, no greater than 200
 * @method array getTags() Obtain A parameter used to filter the list of roles under a tag.
 * @method void setTags(array $Tags) Set A parameter used to filter the list of roles under a tag.
 */
class DescribeRoleListRequest extends AbstractModel
{
    /**
     * @var integer Page number, beginning from 1
     */
    public $Page;

    /**
     * @var integer Number of lines per page, no greater than 200
     */
    public $Rp;

    /**
     * @var array A parameter used to filter the list of roles under a tag.
     */
    public $Tags;

    /**
     * @param integer $Page Page number, beginning from 1
     * @param integer $Rp Number of lines per page, no greater than 200
     * @param array $Tags A parameter used to filter the list of roles under a tag.
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
