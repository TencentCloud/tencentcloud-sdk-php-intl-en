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
 * API resource.
 *
 * @method string getId() Obtain Specifies the resource ID.
 * @method void setId(string $Id) Set Specifies the resource ID.
 * @method string getName() Obtain Specifies the resource name.
 * @method void setName(string $Name) Set Specifies the resource name.
 * @method array getAPIServiceIds() Obtain Specifies the API service ID list associated with the API resource.
 * @method void setAPIServiceIds(array $APIServiceIds) Set Specifies the API service ID list associated with the API resource.
 * @method string getPath() Obtain Specifies the resource path.
 * @method void setPath(string $Path) Set Specifies the resource path.
 * @method array getMethods() Obtain Request method list. valid values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
 * @method void setMethods(array $Methods) Set Request method list. valid values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
 * @method string getRequestConstraint() Obtain Specifies the specific content of the request content match rule, which must comply with the expression grammar. please refer to the product document for detailed requirements.
 * @method void setRequestConstraint(string $RequestConstraint) Set Specifies the specific content of the request content match rule, which must comply with the expression grammar. please refer to the product document for detailed requirements.
 */
class APIResource extends AbstractModel
{
    /**
     * @var string Specifies the resource ID.
     */
    public $Id;

    /**
     * @var string Specifies the resource name.
     */
    public $Name;

    /**
     * @var array Specifies the API service ID list associated with the API resource.
     */
    public $APIServiceIds;

    /**
     * @var string Specifies the resource path.
     */
    public $Path;

    /**
     * @var array Request method list. valid values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
     */
    public $Methods;

    /**
     * @var string Specifies the specific content of the request content match rule, which must comply with the expression grammar. please refer to the product document for detailed requirements.
     */
    public $RequestConstraint;

    /**
     * @param string $Id Specifies the resource ID.
     * @param string $Name Specifies the resource name.
     * @param array $APIServiceIds Specifies the API service ID list associated with the API resource.
     * @param string $Path Specifies the resource path.
     * @param array $Methods Request method list. valid values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
     * @param string $RequestConstraint Specifies the specific content of the request content match rule, which must comply with the expression grammar. please refer to the product document for detailed requirements.
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

        if (array_key_exists("APIServiceIds",$param) and $param["APIServiceIds"] !== null) {
            $this->APIServiceIds = $param["APIServiceIds"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("RequestConstraint",$param) and $param["RequestConstraint"] !== null) {
            $this->RequestConstraint = $param["RequestConstraint"];
        }
    }
}
