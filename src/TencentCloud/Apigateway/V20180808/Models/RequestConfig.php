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
 * Frontend path configuration
 *
 * @method string getPath() Obtain API path, such as `/path`.
 * @method void setPath(string $Path) Set API path, such as `/path`.
 * @method string getMethod() Obtain API request method, such as `GET`.
 * @method void setMethod(string $Method) Set API request method, such as `GET`.
 */
class RequestConfig extends AbstractModel
{
    /**
     * @var string API path, such as `/path`.
     */
    public $Path;

    /**
     * @var string API request method, such as `GET`.
     */
    public $Method;

    /**
     * @param string $Path API path, such as `/path`.
     * @param string $Method API request method, such as `GET`.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
