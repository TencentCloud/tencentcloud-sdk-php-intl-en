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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getStrategyId() Obtain Unique IP policy ID.
 * @method void setStrategyId(string $StrategyId) Set Unique IP policy ID.
 * @method string getEnvironmentName() Obtain Environment associated with policy.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment associated with policy.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter, which is a reserved field. Filtering is not supported currently.
 * @method void setFilters(array $Filters) Set Filter, which is a reserved field. Filtering is not supported currently.
 */
class DescribeIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Unique IP policy ID.
     */
    public $StrategyId;

    /**
     * @var string Environment associated with policy.
     */
    public $EnvironmentName;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter, which is a reserved field. Filtering is not supported currently.
     */
    public $Filters;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $StrategyId Unique IP policy ID.
     * @param string $EnvironmentName Environment associated with policy.
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter, which is a reserved field. Filtering is not supported currently.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
