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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDLCCatalogAccess request structure.
 *
 * @method integer getLimit() Obtain Displayed records
 * @method void setLimit(integer $Limit) Set Displayed records
 * @method integer getOffset() Obtain Number of records
 * @method void setOffset(integer $Offset) Set Number of records
 * @method Filter getFilter() Obtain Filter criteria
 * @method void setFilter(Filter $Filter) Set Filter criteria
 */
class DescribeDLCCatalogAccessRequest extends AbstractModel
{
    /**
     * @var integer Displayed records
     */
    public $Limit;

    /**
     * @var integer Number of records
     */
    public $Offset;

    /**
     * @var Filter Filter criteria
     */
    public $Filter;

    /**
     * @param integer $Limit Displayed records
     * @param integer $Offset Number of records
     * @param Filter $Filter Filter criteria
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
