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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPolicies request structure.
 *
 * @method integer getRp() Obtain Number of entries per page: must be greater than 0 and no greater than 200. Default is 20
 * @method void setRp(integer $Rp) Set Number of entries per page: must be greater than 0 and no greater than 200. Default is 20
 * @method integer getPage() Obtain Page number. Starts from 1 and cannot be greater than 200. Default is 1
 * @method void setPage(integer $Page) Set Page number. Starts from 1 and cannot be greater than 200. Default is 1
 * @method string getScope() Obtain Valid values: `All`, `QCS`, and `Local`. `All` means all policies will be returned; `QCS` means only preset policies will be returned; `Local` means only custom policies will be returned. `All` is the default value
 * @method void setScope(string $Scope) Set Valid values: `All`, `QCS`, and `Local`. `All` means all policies will be returned; `QCS` means only preset policies will be returned; `Local` means only custom policies will be returned. `All` is the default value
 * @method string getKeyword() Obtain Filter by policy name
 * @method void setKeyword(string $Keyword) Set Filter by policy name
 */
class ListPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Number of entries per page: must be greater than 0 and no greater than 200. Default is 20
     */
    public $Rp;

    /**
     * @var integer Page number. Starts from 1 and cannot be greater than 200. Default is 1
     */
    public $Page;

    /**
     * @var string Valid values: `All`, `QCS`, and `Local`. `All` means all policies will be returned; `QCS` means only preset policies will be returned; `Local` means only custom policies will be returned. `All` is the default value
     */
    public $Scope;

    /**
     * @var string Filter by policy name
     */
    public $Keyword;

    /**
     * @param integer $Rp Number of entries per page: must be greater than 0 and no greater than 200. Default is 20
     * @param integer $Page Page number. Starts from 1 and cannot be greater than 200. Default is 1
     * @param string $Scope Valid values: `All`, `QCS`, and `Local`. `All` means all policies will be returned; `QCS` means only preset policies will be returned; `Local` means only custom policies will be returned. `All` is the default value
     * @param string $Keyword Filter by policy name
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
        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
