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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDiscoveredResources request structure.
 *
 * @method integer getMaxResults() Obtain Items per Page
 * @method void setMaxResults(integer $MaxResults) Set Items per Page
 * @method array getFilters() Obtain resourceName: Resource name resourceId: Resource ID
 * @method void setFilters(array $Filters) Set resourceName: Resource name resourceId: Resource ID
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method string getNextToken() Obtain Next page token.
 * @method void setNextToken(string $NextToken) Set Next page token.
 * @method string getOrderType() Obtain Sorting method asc, desc
 * @method void setOrderType(string $OrderType) Set Sorting method asc, desc
 */
class ListDiscoveredResourcesRequest extends AbstractModel
{
    /**
     * @var integer Items per Page
     */
    public $MaxResults;

    /**
     * @var array resourceName: Resource name resourceId: Resource ID
     */
    public $Filters;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @var string Next page token.
     */
    public $NextToken;

    /**
     * @var string Sorting method asc, desc
     */
    public $OrderType;

    /**
     * @param integer $MaxResults Items per Page
     * @param array $Filters resourceName: Resource name resourceId: Resource ID
     * @param array $Tags Tag
     * @param string $NextToken Next page token.
     * @param string $OrderType Sorting method asc, desc
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
