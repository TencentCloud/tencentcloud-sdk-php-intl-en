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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the screenshot template detail list
 *
 * @method integer getTotalCount() Obtain <p>Total.</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total.</p>
 * @method string getSort() Obtain <p>Sorting parameter</p>
 * @method void setSort(string $Sort) Set <p>Sorting parameter</p>
 * @method string getOrder() Obtain <p>Sort order</p>
 * @method void setOrder(string $Order) Set <p>Sort order</p>
 * @method integer getPageNumber() Obtain <p>Page number.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page.</p>
 * @method array getList() Obtain <p>Screenshot template list</p>
 * @method void setList(array $List) Set <p>Screenshot template list</p>
 */
class ListVideoSnapshotTemplateData extends AbstractModel
{
    /**
     * @var integer <p>Total.</p>
     */
    public $TotalCount;

    /**
     * @var string <p>Sorting parameter</p>
     */
    public $Sort;

    /**
     * @var string <p>Sort order</p>
     */
    public $Order;

    /**
     * @var integer <p>Page number.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page.</p>
     */
    public $PageSize;

    /**
     * @var array <p>Screenshot template list</p>
     */
    public $List;

    /**
     * @param integer $TotalCount <p>Total.</p>
     * @param string $Sort <p>Sorting parameter</p>
     * @param string $Order <p>Sort order</p>
     * @param integer $PageNumber <p>Page number.</p>
     * @param integer $PageSize <p>Number of items per page.</p>
     * @param array $List <p>Screenshot template list</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new VideoSnapshotTemplateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
