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
 * DescribeIPStrategysStatus request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method array getFilters() Obtain Filter. Valid values: StrategyName.
 * @method void setFilters(array $Filters) Set Filter. Valid values: StrategyName.
 */
class DescribeIPStrategysStatusRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var array Filter. Valid values: StrategyName.
     */
    public $Filters;

    /**
     * @param string $ServiceId Unique service ID.
     * @param array $Filters Filter. Valid values: StrategyName.
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
