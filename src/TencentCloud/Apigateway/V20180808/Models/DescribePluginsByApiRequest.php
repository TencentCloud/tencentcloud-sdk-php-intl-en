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
 * DescribePluginsByApi request structure.
 *
 * @method string getApiId() Obtain ID of the API to query
 * @method void setApiId(string $ApiId) Set ID of the API to query
 * @method string getServiceId() Obtain ID of the service to query
 * @method void setServiceId(string $ServiceId) Set ID of the service to query
 * @method string getEnvironmentName() Obtain Environment information
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment information
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 */
class DescribePluginsByApiRequest extends AbstractModel
{
    /**
     * @var string ID of the API to query
     */
    public $ApiId;

    /**
     * @var string ID of the service to query
     */
    public $ServiceId;

    /**
     * @var string Environment information
     */
    public $EnvironmentName;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @param string $ApiId ID of the API to query
     * @param string $ServiceId ID of the service to query
     * @param string $EnvironmentName Environment information
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100
     * @param integer $Offset Offset. Default value: 0
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
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
    }
}
