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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the authentication parameter for origin-pull.
 *
 * @method array getRequestProperties() Obtain Specifies the authentication request attribute for origin pull.
 * @method void setRequestProperties(array $RequestProperties) Set Specifies the authentication request attribute for origin pull.
 */
class OriginAuthenticationParameters extends AbstractModel
{
    /**
     * @var array Specifies the authentication request attribute for origin pull.
     */
    public $RequestProperties;

    /**
     * @param array $RequestProperties Specifies the authentication request attribute for origin pull.
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
        if (array_key_exists("RequestProperties",$param) and $param["RequestProperties"] !== null) {
            $this->RequestProperties = [];
            foreach ($param["RequestProperties"] as $key => $value){
                $obj = new OriginAuthenticationRequestProperties();
                $obj->deserialize($value);
                array_push($this->RequestProperties, $obj);
            }
        }
    }
}
