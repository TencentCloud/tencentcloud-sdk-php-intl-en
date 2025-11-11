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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupRoutes request structure.
 *
 * @method InstanceRoute getInstanceRoute() Obtain Specifies the routing information.
 * @method void setInstanceRoute(InstanceRoute $InstanceRoute) Set Specifies the routing information.
 * @method array getFilters() Obtain Filter.
 * @method void setFilters(array $Filters) Set Filter.
 * @method integer getOffset() Obtain Specifies the pagination Offset. default is 0.
 * @method void setOffset(integer $Offset) Set Specifies the pagination Offset. default is 0.
 * @method integer getLimit() Obtain Pagination Limit. default: 20.
 * @method void setLimit(integer $Limit) Set Pagination Limit. default: 20.
 * @method string getSearchWord() Obtain Keyword. specifies fuzzy search by instance id, instance name, or vip.
 * @method void setSearchWord(string $SearchWord) Set Keyword. specifies fuzzy search by instance id, instance name, or vip.
 */
class DescribeSecurityGroupRoutesRequest extends AbstractModel
{
    /**
     * @var InstanceRoute Specifies the routing information.
     */
    public $InstanceRoute;

    /**
     * @var array Filter.
     */
    public $Filters;

    /**
     * @var integer Specifies the pagination Offset. default is 0.
     */
    public $Offset;

    /**
     * @var integer Pagination Limit. default: 20.
     */
    public $Limit;

    /**
     * @var string Keyword. specifies fuzzy search by instance id, instance name, or vip.
     */
    public $SearchWord;

    /**
     * @param InstanceRoute $InstanceRoute Specifies the routing information.
     * @param array $Filters Filter.
     * @param integer $Offset Specifies the pagination Offset. default is 0.
     * @param integer $Limit Pagination Limit. default: 20.
     * @param string $SearchWord Keyword. specifies fuzzy search by instance id, instance name, or vip.
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
        if (array_key_exists("InstanceRoute",$param) and $param["InstanceRoute"] !== null) {
            $this->InstanceRoute = new InstanceRoute();
            $this->InstanceRoute->deserialize($param["InstanceRoute"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RouteFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
