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
namespace TencentCloud\Ciam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserGroups request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method integer getPage() Obtain Number of queried pages
 * @method void setPage(integer $Page) Set Number of queried pages
 * @method integer getSize() Obtain Number of entries per page
 * @method void setSize(integer $Size) Set Number of entries per page
 * @method string getCondition() Obtain Query conditions (user group ID or user group name)
 * @method void setCondition(string $Condition) Set Query conditions (user group ID or user group name)
 */
class ListUserGroupsRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var integer Number of queried pages
     */
    public $Page;

    /**
     * @var integer Number of entries per page
     */
    public $Size;

    /**
     * @var string Query conditions (user group ID or user group name)
     */
    public $Condition;

    /**
     * @param string $UserStoreId User directory ID
     * @param integer $Page Number of queried pages
     * @param integer $Size Number of entries per page
     * @param string $Condition Query conditions (user group ID or user group name)
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }
    }
}
