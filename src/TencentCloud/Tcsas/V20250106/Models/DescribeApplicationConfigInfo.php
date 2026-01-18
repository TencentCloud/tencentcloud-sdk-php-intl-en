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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response data for retrieving superapp configuration information
 *
 * @method array getAndroidConfig() Obtain Android configuration list
 * @method void setAndroidConfig(array $AndroidConfig) Set Android configuration list
 * @method array getIosConfig() Obtain iOS configuration list
 * @method void setIosConfig(array $IosConfig) Set iOS configuration list
 */
class DescribeApplicationConfigInfo extends AbstractModel
{
    /**
     * @var array Android configuration list
     */
    public $AndroidConfig;

    /**
     * @var array iOS configuration list
     */
    public $IosConfig;

    /**
     * @param array $AndroidConfig Android configuration list
     * @param array $IosConfig iOS configuration list
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
        if (array_key_exists("AndroidConfig",$param) and $param["AndroidConfig"] !== null) {
            $this->AndroidConfig = [];
            foreach ($param["AndroidConfig"] as $key => $value){
                $obj = new ApplicationConfigInfo();
                $obj->deserialize($value);
                array_push($this->AndroidConfig, $obj);
            }
        }

        if (array_key_exists("IosConfig",$param) and $param["IosConfig"] !== null) {
            $this->IosConfig = [];
            foreach ($param["IosConfig"] as $key => $value){
                $obj = new ApplicationConfigInfo();
                $obj->deserialize($value);
                array_push($this->IosConfig, $obj);
            }
        }
    }
}
