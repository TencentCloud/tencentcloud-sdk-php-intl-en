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
 * ListLogMessageByCondition request structure.
 *
 * @method string getUserStoreId() Obtain User pool ID
 * @method void setUserStoreId(string $UserStoreId) Set User pool ID
 * @method Pageable getPageable() Obtain Pagination data
 * @method void setPageable(Pageable $Pageable) Set Pagination data
 * @method integer getStartTime() Obtain Start timestamp accurate to the millisecond
 * @method void setStartTime(integer $StartTime) Set Start timestamp accurate to the millisecond
 * @method array getFilters() Obtain Valid values of `Key`: `events`.

<li> **events** </li>	Values can be one or multiple items in ["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"].
 * @method void setFilters(array $Filters) Set Valid values of `Key`: `events`.

<li> **events** </li>	Values can be one or multiple items in ["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"].
 */
class ListLogMessageByConditionRequest extends AbstractModel
{
    /**
     * @var string User pool ID
     */
    public $UserStoreId;

    /**
     * @var Pageable Pagination data
     */
    public $Pageable;

    /**
     * @var integer Start timestamp accurate to the millisecond
     */
    public $StartTime;

    /**
     * @var array Valid values of `Key`: `events`.

<li> **events** </li>	Values can be one or multiple items in ["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"].
     */
    public $Filters;

    /**
     * @param string $UserStoreId User pool ID
     * @param Pageable $Pageable Pagination data
     * @param integer $StartTime Start timestamp accurate to the millisecond
     * @param array $Filters Valid values of `Key`: `events`.

<li> **events** </li>	Values can be one or multiple items in ["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"].
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
