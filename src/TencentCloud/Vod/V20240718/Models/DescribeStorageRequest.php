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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorage request structure.
 *
 * @method integer getSubAppId() Obtain <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters.Values is `20`. If this parameter is not input, all storage under the current SubAppId will be returned. The detailed filter criteria are as follows:
<li>BucketId: Filter by the ID of bucket;</li>
<li>StorageName: Filter by the name of storage.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters.Values is `20`. If this parameter is not input, all storage under the current SubAppId will be returned. The detailed filter criteria are as follows:
<li>BucketId: Filter by the ID of bucket;</li>
<li>StorageName: Filter by the name of storage.</li>
 * @method SortBy getSortBy() Obtain Sort the returned results according to this field. 
SortBy.Field Values include: 
<li>UpdateTime: (Default) Create time of the storage.</li>SortBy.Order Values include: 
<li>Asc: (Default) The order is ascend.</li> 

 * @method void setSortBy(SortBy $SortBy) Set Sort the returned results according to this field. 
SortBy.Field Values include: 
<li>UpdateTime: (Default) Create time of the storage.</li>SortBy.Order Values include: 
<li>Asc: (Default) The order is ascend.</li> 

 * @method integer getOffset() Obtain Offset for paginated queries. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: `0`.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 */
class DescribeStorageRequest extends AbstractModel
{
    /**
     * @var integer <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     */
    public $SubAppId;

    /**
     * @var array Filter criteria. The maximum number of Filters.Values is `20`. If this parameter is not input, all storage under the current SubAppId will be returned. The detailed filter criteria are as follows:
<li>BucketId: Filter by the ID of bucket;</li>
<li>StorageName: Filter by the name of storage.</li>
     */
    public $Filters;

    /**
     * @var SortBy Sort the returned results according to this field. 
SortBy.Field Values include: 
<li>UpdateTime: (Default) Create time of the storage.</li>SortBy.Order Values include: 
<li>Asc: (Default) The order is ascend.</li> 

     */
    public $SortBy;

    /**
     * @var integer Offset for paginated queries. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     * @param array $Filters Filter criteria. The maximum number of Filters.Values is `20`. If this parameter is not input, all storage under the current SubAppId will be returned. The detailed filter criteria are as follows:
<li>BucketId: Filter by the ID of bucket;</li>
<li>StorageName: Filter by the name of storage.</li>
     * @param SortBy $SortBy Sort the returned results according to this field. 
SortBy.Field Values include: 
<li>UpdateTime: (Default) Create time of the storage.</li>SortBy.Order Values include: 
<li>Asc: (Default) The order is ascend.</li> 

     * @param integer $Offset Offset for paginated queries. Default value: `0`.
     * @param integer $Limit Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
