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
 * List of APIs bound to policy
 *
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method string getApiName() Obtain Custom API name.
 * @method void setApiName(string $ApiName) Set Custom API name.
 * @method string getApiType() Obtain API type. Valid values: NORMAL (general API), TSF (microservice API).
 * @method void setApiType(string $ApiType) Set API type. Valid values: NORMAL (general API), TSF (microservice API).
 * @method string getPath() Obtain API path, such as `/path`.
 * @method void setPath(string $Path) Set API path, such as `/path`.
 * @method string getMethod() Obtain API request method, such as `GET`.
 * @method void setMethod(string $Method) Set API request method, such as `GET`.
 * @method string getOtherIPStrategyId() Obtain Unique ID of another policy bound to API.
 * @method void setOtherIPStrategyId(string $OtherIPStrategyId) Set Unique ID of another policy bound to API.
 * @method string getOtherEnvironmentName() Obtain Environment bound to API.
 * @method void setOtherEnvironmentName(string $OtherEnvironmentName) Set Environment bound to API.
 */
class IPStrategyApi extends AbstractModel
{
    /**
     * @var string Unique API ID.
     */
    public $ApiId;

    /**
     * @var string Custom API name.
     */
    public $ApiName;

    /**
     * @var string API type. Valid values: NORMAL (general API), TSF (microservice API).
     */
    public $ApiType;

    /**
     * @var string API path, such as `/path`.
     */
    public $Path;

    /**
     * @var string API request method, such as `GET`.
     */
    public $Method;

    /**
     * @var string Unique ID of another policy bound to API.
     */
    public $OtherIPStrategyId;

    /**
     * @var string Environment bound to API.
     */
    public $OtherEnvironmentName;

    /**
     * @param string $ApiId Unique API ID.
     * @param string $ApiName Custom API name.
     * @param string $ApiType API type. Valid values: NORMAL (general API), TSF (microservice API).
     * @param string $Path API path, such as `/path`.
     * @param string $Method API request method, such as `GET`.
     * @param string $OtherIPStrategyId Unique ID of another policy bound to API.
     * @param string $OtherEnvironmentName Environment bound to API.
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("OtherIPStrategyId",$param) and $param["OtherIPStrategyId"] !== null) {
            $this->OtherIPStrategyId = $param["OtherIPStrategyId"];
        }

        if (array_key_exists("OtherEnvironmentName",$param) and $param["OtherEnvironmentName"] !== null) {
            $this->OtherEnvironmentName = $param["OtherEnvironmentName"];
        }
    }
}
