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
 * ListEntitiesForPolicy request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getPage() Obtain Page number, which starts from 1. Default is 1
 * @method void setPage(integer $Page) Set Page number, which starts from 1. Default is 1
 * @method integer getRp() Obtain Number of entries per page; 20 by default
 * @method void setRp(integer $Rp) Set Number of entries per page; 20 by default
 * @method string getEntityFilter() Obtain Valid values: `All`, `User`, `Group`, and `Role`. `All` means all entity types will be returned; `User` means only sub-accounts will be returned; `Group` means only User Groups will be returned; `Role` means only roles will be returned. `All` is the default value.
 * @method void setEntityFilter(string $EntityFilter) Set Valid values: `All`, `User`, `Group`, and `Role`. `All` means all entity types will be returned; `User` means only sub-accounts will be returned; `Group` means only User Groups will be returned; `Role` means only roles will be returned. `All` is the default value.
 */
class ListEntitiesForPolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Page number, which starts from 1. Default is 1
     */
    public $Page;

    /**
     * @var integer Number of entries per page; 20 by default
     */
    public $Rp;

    /**
     * @var string Valid values: `All`, `User`, `Group`, and `Role`. `All` means all entity types will be returned; `User` means only sub-accounts will be returned; `Group` means only User Groups will be returned; `Role` means only roles will be returned. `All` is the default value.
     */
    public $EntityFilter;

    /**
     * @param integer $PolicyId Policy ID
     * @param integer $Page Page number, which starts from 1. Default is 1
     * @param integer $Rp Number of entries per page; 20 by default
     * @param string $EntityFilter Valid values: `All`, `User`, `Group`, and `Role`. `All` means all entity types will be returned; `User` means only sub-accounts will be returned; `Group` means only User Groups will be returned; `Role` means only roles will be returned. `All` is the default value.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("EntityFilter",$param) and $param["EntityFilter"] !== null) {
            $this->EntityFilter = $param["EntityFilter"];
        }
    }
}
