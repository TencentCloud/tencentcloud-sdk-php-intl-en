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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP return code and statistics
 *
 * @method string getHttpCode() Obtain HTTP return code.
Example: "2xx", "3xx", "4xx", "5xx".
 * @method void setHttpCode(string $HttpCode) Set HTTP return code.
Example: "2xx", "3xx", "4xx", "5xx".
 * @method array getValueList() Obtain Statistics. 0 will be added for points in time when there is no data.
 * @method void setValueList(array $ValueList) Set Statistics. 0 will be added for points in time when there is no data.
 */
class HttpCodeInfo extends AbstractModel
{
    /**
     * @var string HTTP return code.
Example: "2xx", "3xx", "4xx", "5xx".
     */
    public $HttpCode;

    /**
     * @var array Statistics. 0 will be added for points in time when there is no data.
     */
    public $ValueList;

    /**
     * @param string $HttpCode HTTP return code.
Example: "2xx", "3xx", "4xx", "5xx".
     * @param array $ValueList Statistics. 0 will be added for points in time when there is no data.
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = [];
            foreach ($param["ValueList"] as $key => $value){
                $obj = new HttpCodeValue();
                $obj->deserialize($value);
                array_push($this->ValueList, $obj);
            }
        }
    }
}
