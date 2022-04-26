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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccountInAccountGroup request structure.
 *
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method AccountGroupSearchCriteria getSearchCondition() Obtain Search criterion. You can combine multiple search criteria and search in multiple data ranges.
 * @method void setSearchCondition(AccountGroupSearchCriteria $SearchCondition) Set Search criterion. You can combine multiple search criteria and search in multiple data ranges.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 */
class ListAccountInAccountGroupRequest extends AbstractModel
{
    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var AccountGroupSearchCriteria Search criterion. You can combine multiple search criteria and search in multiple data ranges.
     */
    public $SearchCondition;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $AccountGroupId Account group ID.
     * @param AccountGroupSearchCriteria $SearchCondition Search criterion. You can combine multiple search criteria and search in multiple data ranges.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new AccountGroupSearchCriteria();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
