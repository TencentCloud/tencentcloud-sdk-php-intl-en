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
 * API service configuration.
 *
 * @method string getId() Obtain API service ID.
 * @method void setId(string $Id) Set API service ID.
 * @method string getName() Obtain Specifies the API service name.
 * @method void setName(string $Name) Set Specifies the API service name.
 * @method string getBasePath() Obtain Specifies the base path.
 * @method void setBasePath(string $BasePath) Set Specifies the base path.
 */
class APIService extends AbstractModel
{
    /**
     * @var string API service ID.
     */
    public $Id;

    /**
     * @var string Specifies the API service name.
     */
    public $Name;

    /**
     * @var string Specifies the base path.
     */
    public $BasePath;

    /**
     * @param string $Id API service ID.
     * @param string $Name Specifies the API service name.
     * @param string $BasePath Specifies the base path.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }
    }
}
