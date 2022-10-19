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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUser request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method Pageable getPageable() Obtain Pagination data
 * @method void setPageable(Pageable $Pageable) Set Pagination data
 * @method array getFilters() Obtain Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
 * @method void setFilters(array $Filters) Set Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
 * @method boolean getOriginal() Obtain Whether the content is passed through
 * @method void setOriginal(boolean $Original) Set Whether the content is passed through
 */
class ListUserRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var Pageable Pagination data
     */
    public $Pageable;

    /**
     * @var array Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
     */
    public $Filters;

    /**
     * @var boolean Whether the content is passed through
     */
    public $Original;

    /**
     * @param string $UserStoreId User directory ID
     * @param Pageable $Pageable Pagination data
     * @param array $Filters Valid values of `Key`: `condition`, `userGroupId`.

<li> **condition** </li>	Values = Query condition, which can be user ID, username, mobile number, or email address.
<li> **userGroupId** </li>	Values = User group ID
     * @param boolean $Original Whether the content is passed through
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

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
