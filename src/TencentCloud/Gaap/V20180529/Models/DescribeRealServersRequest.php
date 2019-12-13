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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() 获取Queries the project ID to which the origin server belongs. -1: all projects.
 * @method void setProjectId(integer $ProjectId) 设置Queries the project ID to which the origin server belongs. -1: all projects.
 * @method string getSearchValue() 获取Origin server IP or domain name to be queried. The fuzzy match is supported.
 * @method void setSearchValue(string $SearchValue) 设置Origin server IP or domain name to be queried. The fuzzy match is supported.
 * @method integer getOffset() 获取Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) 设置Offset, which is 0 by default.
 * @method integer getLimit() 获取Quantity of values to return. The default value is 20 and the maximum value is 50.
 * @method void setLimit(integer $Limit) 设置Quantity of values to return. The default value is 20 and the maximum value is 50.
 * @method array getTagSet() 获取Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the origin servers tagged any of them will be pulled.
 * @method void setTagSet(array $TagSet) 设置Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the origin servers tagged any of them will be pulled.
 * @method array getFilters() 获取Filter conditions. The value of the `name` of the `filter` (RealServerName, RealServerIP)
 * @method void setFilters(array $Filters) 设置Filter conditions. The value of the `name` of the `filter` (RealServerName, RealServerIP)
 */

/**
 *DescribeRealServers request structure.
 */
class DescribeRealServersRequest extends AbstractModel
{
    /**
     * @var integer Queries the project ID to which the origin server belongs. -1: all projects.
     */
    public $ProjectId;

    /**
     * @var string Origin server IP or domain name to be queried. The fuzzy match is supported.
     */
    public $SearchValue;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var integer Quantity of values to return. The default value is 20 and the maximum value is 50.
     */
    public $Limit;

    /**
     * @var array Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the origin servers tagged any of them will be pulled.
     */
    public $TagSet;

    /**
     * @var array Filter conditions. The value of the `name` of the `filter` (RealServerName, RealServerIP)
     */
    public $Filters;
    /**
     * @param integer $ProjectId Queries the project ID to which the origin server belongs. -1: all projects.
     * @param string $SearchValue Origin server IP or domain name to be queried. The fuzzy match is supported.
     * @param integer $Offset Offset, which is 0 by default.
     * @param integer $Limit Quantity of values to return. The default value is 20 and the maximum value is 50.
     * @param array $TagSet Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the origin servers tagged any of them will be pulled.
     * @param array $Filters Filter conditions. The value of the `name` of the `filter` (RealServerName, RealServerIP)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
