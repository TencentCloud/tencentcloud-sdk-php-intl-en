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
 * Configuration parameters for the custom error page.
 *
 * @method array getErrorPageParams() Obtain List of custom error page configurations.
 * @method void setErrorPageParams(array $ErrorPageParams) Set List of custom error page configurations.
 */
class ErrorPageParameters extends AbstractModel
{
    /**
     * @var array List of custom error page configurations.
     */
    public $ErrorPageParams;

    /**
     * @param array $ErrorPageParams List of custom error page configurations.
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
        if (array_key_exists("ErrorPageParams",$param) and $param["ErrorPageParams"] !== null) {
            $this->ErrorPageParams = [];
            foreach ($param["ErrorPageParams"] as $key => $value){
                $obj = new ErrorPage();
                $obj->deserialize($value);
                array_push($this->ErrorPageParams, $obj);
            }
        }
    }
}
