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
 * DescribeTopAttackInfo request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method integer getQueryType() Obtain 1: Attack type 2: Attacker
 * @method void setQueryType(integer $QueryType) Set 1: Attack type 2: Attacker
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getOperatedMemberId() Obtain Member ID of the Called Group Account
 * @method void setOperatedMemberId(array $OperatedMemberId) Set Member ID of the Called Group Account
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method integer getAssetType() Obtain 0: Default all 1: Asset ID 2: Domain name
 * @method void setAssetType(integer $AssetType) Set 0: Default all 1: Asset ID 2: Domain name
 */
class DescribeTopAttackInfoRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var integer 1: Attack type 2: Attacker
     */
    public $QueryType;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Member ID of the Called Group Account
     */
    public $OperatedMemberId;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var integer 0: Default all 1: Asset ID 2: Domain name
     */
    public $AssetType;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param integer $QueryType 1: Attack type 2: Attacker
     * @param array $MemberId Group Account Member ID
     * @param array $OperatedMemberId Member ID of the Called Group Account
     * @param string $AssetName Asset name
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
