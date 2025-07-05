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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiEnvironmentStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of API.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of API.
 * @method array getEnvironmentNames() Obtain Environment list.
 * @method void setEnvironmentNames(array $EnvironmentNames) Set Environment list.
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeApiEnvironmentStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of API.
     */
    public $ServiceId;

    /**
     * @var array Environment list.
     */
    public $EnvironmentNames;

    /**
     * @var string Unique API ID.
     */
    public $ApiId;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $ServiceId Unique service ID of API.
     * @param array $EnvironmentNames Environment list.
     * @param string $ApiId Unique API ID.
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
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

        if (array_key_exists("EnvironmentNames",$param) and $param["EnvironmentNames"] !== null) {
            $this->EnvironmentNames = $param["EnvironmentNames"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
