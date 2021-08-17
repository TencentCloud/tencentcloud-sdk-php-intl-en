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
 * DescribeApiBindApiAppsStatus request structure.
 *
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method array getApiIds() Obtain Array of API IDs
 * @method void setApiIds(array $ApiIds) Set Array of API IDs
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter. Valid values: ApiAppId, Environment, KeyWord (match with `name` or ID).
 * @method void setFilters(array $Filters) Set Filter. Valid values: ApiAppId, Environment, KeyWord (match with `name` or ID).
 */
class DescribeApiBindApiAppsStatusRequest extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var array Array of API IDs
     */
    public $ApiIds;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter. Valid values: ApiAppId, Environment, KeyWord (match with `name` or ID).
     */
    public $Filters;

    /**
     * @param string $ServiceId Service ID
     * @param array $ApiIds Array of API IDs
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter. Valid values: ApiAppId, Environment, KeyWord (match with `name` or ID).
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

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
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
