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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSourceAsset request structure.
 *
 * @method string getFuzzySearch() Obtain Fuzzy search
 * @method void setFuzzySearch(string $FuzzySearch) Set Fuzzy search
 * @method string getInsType() Obtain Asset type. 1: public network; 2: private network
 * @method void setInsType(string $InsType) Set Asset type. 1: public network; 2: private network
 * @method string getChooseType() Obtain If ChooseType is 1, grouped assets are queried; if ChooseType is not 1, non-grouped assets are queried
 * @method void setChooseType(string $ChooseType) Set If ChooseType is 1, grouped assets are queried; if ChooseType is not 1, non-grouped assets are queried
 * @method string getZone() Obtain Region
 * @method void setZone(string $Zone) Set Region
 * @method integer getLimit() Obtain Maximum number of results returned per page. For example, if it is set to 10, 10 results will be returned at most.
 * @method void setLimit(integer $Limit) Set Maximum number of results returned per page. For example, if it is set to 10, 10 results will be returned at most.
 * @method integer getOffset() Obtain Offset of search results
 * @method void setOffset(integer $Offset) Set Offset of search results
 */
class DescribeSourceAssetRequest extends AbstractModel
{
    /**
     * @var string Fuzzy search
     */
    public $FuzzySearch;

    /**
     * @var string Asset type. 1: public network; 2: private network
     */
    public $InsType;

    /**
     * @var string If ChooseType is 1, grouped assets are queried; if ChooseType is not 1, non-grouped assets are queried
     */
    public $ChooseType;

    /**
     * @var string Region
     */
    public $Zone;

    /**
     * @var integer Maximum number of results returned per page. For example, if it is set to 10, 10 results will be returned at most.
     */
    public $Limit;

    /**
     * @var integer Offset of search results
     */
    public $Offset;

    /**
     * @param string $FuzzySearch Fuzzy search
     * @param string $InsType Asset type. 1: public network; 2: private network
     * @param string $ChooseType If ChooseType is 1, grouped assets are queried; if ChooseType is not 1, non-grouped assets are queried
     * @param string $Zone Region
     * @param integer $Limit Maximum number of results returned per page. For example, if it is set to 10, 10 results will be returned at most.
     * @param integer $Offset Offset of search results
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
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            $this->FuzzySearch = $param["FuzzySearch"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("ChooseType",$param) and $param["ChooseType"] !== null) {
            $this->ChooseType = $param["ChooseType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
