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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects request structure.
 *
 * @method integer getAllList() Obtain If this parameter is 1, all projects (including hidden ones) will be queried. If it is 0, only non-hidden projects will be queried.
 * @method void setAllList(integer $AllList) Set If this parameter is 1, all projects (including hidden ones) will be queried. If it is 0, only non-hidden projects will be queried.
 * @method integer getLimit() Obtain Number of entries per page. Fixed value: 1,000.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Fixed value: 1,000.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer If this parameter is 1, all projects (including hidden ones) will be queried. If it is 0, only non-hidden projects will be queried.
     */
    public $AllList;

    /**
     * @var integer Number of entries per page. Fixed value: 1,000.
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @param integer $AllList If this parameter is 1, all projects (including hidden ones) will be queried. If it is 0, only non-hidden projects will be queried.
     * @param integer $Limit Number of entries per page. Fixed value: 1,000.
     * @param integer $Offset Pagination offset.
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
        if (array_key_exists("AllList",$param) and $param["AllList"] !== null) {
            $this->AllList = $param["AllList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
