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
 * API environment binding policy
 *
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method string getApiName() Obtain Custom API name.
 * @method void setApiName(string $ApiName) Set Custom API name.
 * @method string getPath() Obtain API path, such as `/path`.
 * @method void setPath(string $Path) Set API path, such as `/path`.
 * @method string getMethod() Obtain API method, such as `GET`.
 * @method void setMethod(string $Method) Set API method, such as `GET`.
 * @method array getEnvironmentStrategySet() Obtain Environment throttling information.
 * @method void setEnvironmentStrategySet(array $EnvironmentStrategySet) Set Environment throttling information.
 */
class ApiEnvironmentStrategy extends AbstractModel
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
     * @var string API path, such as `/path`.
     */
    public $Path;

    /**
     * @var string API method, such as `GET`.
     */
    public $Method;

    /**
     * @var array Environment throttling information.
     */
    public $EnvironmentStrategySet;

    /**
     * @param string $ApiId Unique API ID.
     * @param string $ApiName Custom API name.
     * @param string $Path API path, such as `/path`.
     * @param string $Method API method, such as `GET`.
     * @param array $EnvironmentStrategySet Environment throttling information.
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("EnvironmentStrategySet",$param) and $param["EnvironmentStrategySet"] !== null) {
            $this->EnvironmentStrategySet = [];
            foreach ($param["EnvironmentStrategySet"] as $key => $value){
                $obj = new EnvironmentStrategy();
                $obj->deserialize($value);
                array_push($this->EnvironmentStrategySet, $obj);
            }
        }
    }
}
