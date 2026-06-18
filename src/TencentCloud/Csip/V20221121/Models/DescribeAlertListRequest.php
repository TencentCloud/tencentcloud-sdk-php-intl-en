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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertList request structure.
 *
 * @method Filter getFilter() Obtain Tag search filter criteria
 * @method void setFilter(Filter $Filter) Set Tag search filter criteria
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getOperatedMemberId() Obtain Member ID of the Called Group Account
 * @method void setOperatedMemberId(array $OperatedMemberId) Set Member ID of the Called Group Account
 * @method integer getAssetType() Obtain 0: Default all 1: Asset ID 2: Domain name
 * @method void setAssetType(integer $AssetType) Set 0: Default all 1: Asset ID 2: Domain name
 */
class DescribeAlertListRequest extends AbstractModel
{
    /**
     * @var Filter Tag search filter criteria
     */
    public $Filter;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Member ID of the Called Group Account
     */
    public $OperatedMemberId;

    /**
     * @var integer 0: Default all 1: Asset ID 2: Domain name
     */
    public $AssetType;

    /**
     * @param Filter $Filter Tag search filter criteria
     * @param array $MemberId Group Account Member ID
     * @param array $OperatedMemberId Member ID of the Called Group Account
     * @param integer $AssetType 0: Default all 1: Asset ID 2: Domain name
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
