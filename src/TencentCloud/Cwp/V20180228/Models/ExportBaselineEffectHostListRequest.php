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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportBaselineEffectHostList request structure.
 *
 * @method integer getBaselineId() Obtain Baseline ID
 * @method void setBaselineId(integer $BaselineId) Set Baseline ID
 * @method array getFilters() Obtain Filtering criteria
<li>AliasName - String - host alias</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>AliasName - String - host alias</li>
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method array getUuidList() Obtain Host UUID array
 * @method void setUuidList(array $UuidList) Set Host UUID array
 * @method string getBaselineName() Obtain Baseline name
 * @method void setBaselineName(string $BaselineName) Set Baseline name
 */
class ExportBaselineEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer Baseline ID
     */
    public $BaselineId;

    /**
     * @var array Filtering criteria
<li>AliasName - String - host alias</li>
     */
    public $Filters;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var array Host UUID array
     */
    public $UuidList;

    /**
     * @var string Baseline name
     */
    public $BaselineName;

    /**
     * @param integer $BaselineId Baseline ID
     * @param array $Filters Filtering criteria
<li>AliasName - String - host alias</li>
     * @param integer $StrategyId Policy ID
     * @param array $UuidList Host UUID array
     * @param string $BaselineName Baseline name
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
        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("UuidList",$param) and $param["UuidList"] !== null) {
            $this->UuidList = $param["UuidList"];
        }

        if (array_key_exists("BaselineName",$param) and $param["BaselineName"] !== null) {
            $this->BaselineName = $param["BaselineName"];
        }
    }
}
