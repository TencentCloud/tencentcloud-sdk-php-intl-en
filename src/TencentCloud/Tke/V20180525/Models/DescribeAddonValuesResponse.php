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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddonValues response structure.
 *
 * @method string getValues() Obtain Parameters in a JSON string. If the add-on has been installed, the configured parameters are used for rendering.
 * @method void setValues(string $Values) Set Parameters in a JSON string. If the add-on has been installed, the configured parameters are used for rendering.
 * @method string getDefaultValues() Obtain List of parameters supported by the add-on in a JSON string. The default values are used.
 * @method void setDefaultValues(string $DefaultValues) Set List of parameters supported by the add-on in a JSON string. The default values are used.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAddonValuesResponse extends AbstractModel
{
    /**
     * @var string Parameters in a JSON string. If the add-on has been installed, the configured parameters are used for rendering.
     */
    public $Values;

    /**
     * @var string List of parameters supported by the add-on in a JSON string. The default values are used.
     */
    public $DefaultValues;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Values Parameters in a JSON string. If the add-on has been installed, the configured parameters are used for rendering.
     * @param string $DefaultValues List of parameters supported by the add-on in a JSON string. The default values are used.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("DefaultValues",$param) and $param["DefaultValues"] !== null) {
            $this->DefaultValues = $param["DefaultValues"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
