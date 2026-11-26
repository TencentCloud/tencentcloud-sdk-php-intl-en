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
 * @method string getId() Obtain Resource ID.
 * @method void setId(string $Id) Set Resource ID.
 * @method string getName() Obtain Resource name.
 * @method void setName(string $Name) Set Resource name.
 * @method array getAPIServiceIds() Obtain List of API service IDs associated with the API resource.
 * @method void setAPIServiceIds(array $APIServiceIds) Set List of API service IDs associated with the API resource.
 * @method string getPath() Obtain Resource path.
 * @method void setPath(string $Path) Set Resource path.
 * @method array getMethods() Obtain Request method list. Supports the following values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
 * @method void setMethods(array $Methods) Set Request method list. Supports the following values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
 * @method string getRequestConstraint() Obtain Specific content of the request content matching rule. It must comply with the expression syntax. For detailed specifications, see the product document.
 * @method void setRequestConstraint(string $RequestConstraint) Set Specific content of the request content matching rule. It must comply with the expression syntax. For detailed specifications, see the product document.
 */
class APIResource extends AbstractModel
{
    /**
     * @var string Resource ID.
     */
    public $Id;

    /**
     * @var string Resource name.
     */
    public $Name;

    /**
     * @var array List of API service IDs associated with the API resource.
     */
    public $APIServiceIds;

    /**
     * @var string Resource path.
     */
    public $Path;

    /**
     * @var array Request method list. Supports the following values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
     */
    public $Methods;

    /**
     * @var string Specific content of the request content matching rule. It must comply with the expression syntax. For detailed specifications, see the product document.
     */
    public $RequestConstraint;

    /**
     * @param string $Id Resource ID.
     * @param string $Name Resource name.
     * @param array $APIServiceIds List of API service IDs associated with the API resource.
     * @param string $Path Resource path.
     * @param array $Methods Request method list. Supports the following values: GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE.
     * @param string $RequestConstraint Specific content of the request content matching rule. It must comply with the expression syntax. For detailed specifications, see the product document.
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
