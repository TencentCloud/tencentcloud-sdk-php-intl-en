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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDiscoveredResources request structure.
 *
 * @method integer getMaxResults() Obtain <p>Number of results displayed per page</p>
 * @method void setMaxResults(integer $MaxResults) Set <p>Number of results displayed per page</p>
 * @method array getFilters() Obtain <p>resourceName: resource name  resourceId: resource ID</p>
 * @method void setFilters(array $Filters) Set <p>resourceName: resource name  resourceId: resource ID</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method string getNextToken() Obtain <p>Next page token</p>
 * @method void setNextToken(string $NextToken) Set <p>Next page token</p>
 * @method string getOrderType() Obtain <p>Sorting method: asc, desc</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting method: asc, desc</p>
 */
class ListDiscoveredResourcesRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of results displayed per page</p>
     */
    public $MaxResults;

    /**
     * @var array <p>resourceName: resource name  resourceId: resource ID</p>
     */
    public $Filters;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Next page token</p>
     */
    public $NextToken;

    /**
     * @var string <p>Sorting method: asc, desc</p>
     */
    public $OrderType;

    /**
     * @param integer $MaxResults <p>Number of results displayed per page</p>
     * @param array $Filters <p>resourceName: resource name  resourceId: resource ID</p>
     * @param array $Tags <p>Tag.</p>
     * @param string $NextToken <p>Next page token</p>
     * @param string $OrderType <p>Sorting method: asc, desc</p>
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
