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
 * GetResources request structure.
 *
 * @method array getResourceList() Obtain Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource.
For example, ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
If this parameter is passed in, the list of all matching resources will be returned, and the specified `MaxResults` will become invalid.
Value range of N: 0–9
 * @method void setResourceList(array $ResourceList) Set Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource.
For example, ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
If this parameter is passed in, the list of all matching resources will be returned, and the specified `MaxResults` will become invalid.
Value range of N: 0–9
 * @method array getTagFilters() Obtain Tag key and value.
If multiple tags are specified, resources bound to all such tags will be queried.
Value range of N: 0–5
There can be up to 10 `TagValues` in each `TagFilters`.
 * @method void setTagFilters(array $TagFilters) Set Tag key and value.
If multiple tags are specified, resources bound to all such tags will be queried.
Value range of N: 0–5
There can be up to 10 `TagValues` in each `TagFilters`.
 * @method string getPaginationToken() Obtain The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
 * @method void setPaginationToken(string $PaginationToken) Set The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
 * @method integer getMaxResults() Obtain Number of data entries to return per page (up to 200).
Default value: 50.
 * @method void setMaxResults(integer $MaxResults) Set Number of data entries to return per page (up to 200).
Default value: 50.
 */
class GetResourcesRequest extends AbstractModel
{
    /**
     * @var array Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource.
For example, ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
If this parameter is passed in, the list of all matching resources will be returned, and the specified `MaxResults` will become invalid.
Value range of N: 0–9
     */
    public $ResourceList;

    /**
     * @var array Tag key and value.
If multiple tags are specified, resources bound to all such tags will be queried.
Value range of N: 0–5
There can be up to 10 `TagValues` in each `TagFilters`.
     */
    public $TagFilters;

    /**
     * @var string The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
     */
    public $PaginationToken;

    /**
     * @var integer Number of data entries to return per page (up to 200).
Default value: 50.
     */
    public $MaxResults;

    /**
     * @param array $ResourceList Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource.
For example, ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
If this parameter is passed in, the list of all matching resources will be returned, and the specified `MaxResults` will become invalid.
Value range of N: 0–9
     * @param array $TagFilters Tag key and value.
If multiple tags are specified, resources bound to all such tags will be queried.
Value range of N: 0–5
There can be up to 10 `TagValues` in each `TagFilters`.
     * @param string $PaginationToken The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
     * @param integer $MaxResults Number of data entries to return per page (up to 200).
Default value: 50.
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
        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = $param["ResourceList"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
