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
 * @method integer getPage() 获取Page number; default is 1
 * @method void setPage(integer $Page) 设置Page number; default is 1
 * @method integer getRp() 获取Number of entries per page; default is 20
 * @method void setRp(integer $Rp) 设置Number of entries per page; default is 20
 * @method string getKeyword() 获取Filter by User Group name
 * @method void setKeyword(string $Keyword) 设置Filter by User Group name
 */

/**
 *ListGroups request structure.
 */
class ListGroupsRequest extends AbstractModel
{
    /**
     * @var integer Page number; default is 1
     */
    public $Page;

    /**
     * @var integer Number of entries per page; default is 20
     */
    public $Rp;

    /**
     * @var string Filter by User Group name
     */
    public $Keyword;
    /**
     * @param integer $Page Page number; default is 1
     * @param integer $Rp Number of entries per page; default is 20
     * @param string $Keyword Filter by User Group name
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
