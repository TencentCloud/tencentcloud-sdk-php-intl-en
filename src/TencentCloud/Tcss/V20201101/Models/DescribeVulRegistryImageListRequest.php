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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulRegistryImageList request structure.
 *
 * @method string getPocID() Obtain Vulnerability ID
 * @method void setPocID(string $PocID) Set Vulnerability ID
 * @method integer getLimit() Obtain The number of results returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of results returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method array getFilters() Obtain Filter condition
`OnlyAffectedNewestImage`: (bool) Whether the latest image is affected.
`ImageDigest`: Image digest. Fuzzy query is supported.
`ImageId`: Image ID.
`Namespace`: Namespace. Fuzzy query is supported.
`ImageTag`: Image tag. Fuzzy query is supported.
`InstanceName`: Instance name. Fuzzy query is supported.
`ImageName`: Image name. Fuzzy query is supported.
`ImageRepoAddress`: Image address. Fuzzy query is supported.
 * @method void setFilters(array $Filters) Set Filter condition
`OnlyAffectedNewestImage`: (bool) Whether the latest image is affected.
`ImageDigest`: Image digest. Fuzzy query is supported.
`ImageId`: Image ID.
`Namespace`: Namespace. Fuzzy query is supported.
`ImageTag`: Image tag. Fuzzy query is supported.
`InstanceName`: Instance name. Fuzzy query is supported.
`ImageName`: Image name. Fuzzy query is supported.
`ImageRepoAddress`: Image address. Fuzzy query is supported.
 * @method string getOrder() Obtain Sorting order
 * @method void setOrder(string $Order) Set Sorting order
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 */
class DescribeVulRegistryImageListRequest extends AbstractModel
{
    /**
     * @var string Vulnerability ID
     */
    public $PocID;

    /**
     * @var integer The number of results returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var array Filter condition
`OnlyAffectedNewestImage`: (bool) Whether the latest image is affected.
`ImageDigest`: Image digest. Fuzzy query is supported.
`ImageId`: Image ID.
`Namespace`: Namespace. Fuzzy query is supported.
`ImageTag`: Image tag. Fuzzy query is supported.
`InstanceName`: Instance name. Fuzzy query is supported.
`ImageName`: Image name. Fuzzy query is supported.
`ImageRepoAddress`: Image address. Fuzzy query is supported.
     */
    public $Filters;

    /**
     * @var string Sorting order
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @param string $PocID Vulnerability ID
     * @param integer $Limit The number of results returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset 
     * @param array $Filters Filter condition
`OnlyAffectedNewestImage`: (bool) Whether the latest image is affected.
`ImageDigest`: Image digest. Fuzzy query is supported.
`ImageId`: Image ID.
`Namespace`: Namespace. Fuzzy query is supported.
`ImageTag`: Image tag. Fuzzy query is supported.
`InstanceName`: Instance name. Fuzzy query is supported.
`ImageName`: Image name. Fuzzy query is supported.
`ImageRepoAddress`: Image address. Fuzzy query is supported.
     * @param string $Order Sorting order
     * @param string $By Sorting field
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
