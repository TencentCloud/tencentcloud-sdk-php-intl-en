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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTawAreas request structure.
 *
 * @method array getAreaIds() Obtain Region ID
 * @method void setAreaIds(array $AreaIds) Set Region ID
 * @method array getAreaKeys() Obtain Region key
 * @method void setAreaKeys(array $AreaKeys) Set Region key
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method array getAreaStatuses() Obtain Region status (1: valid; 2: invalid)
 * @method void setAreaStatuses(array $AreaStatuses) Set Region status (1: valid; 2: invalid)
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 */
class DescribeTawAreasRequest extends AbstractModel
{
    /**
     * @var array Region ID
     */
    public $AreaIds;

    /**
     * @var array Region key
     */
    public $AreaKeys;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var array Region status (1: valid; 2: invalid)
     */
    public $AreaStatuses;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @param array $AreaIds Region ID
     * @param array $AreaKeys Region key
     * @param integer $Limit Pagination limit
     * @param array $AreaStatuses Region status (1: valid; 2: invalid)
     * @param integer $Offset Pagination offset
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
        if (array_key_exists("AreaIds",$param) and $param["AreaIds"] !== null) {
            $this->AreaIds = $param["AreaIds"];
        }

        if (array_key_exists("AreaKeys",$param) and $param["AreaKeys"] !== null) {
            $this->AreaKeys = $param["AreaKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AreaStatuses",$param) and $param["AreaStatuses"] !== null) {
            $this->AreaStatuses = $param["AreaStatuses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
