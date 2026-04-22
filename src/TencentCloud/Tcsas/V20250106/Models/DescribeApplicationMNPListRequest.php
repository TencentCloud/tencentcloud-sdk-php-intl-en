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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationMNPList request structure.
 *
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getLimit() Obtain Number of results per page
 * @method void setLimit(integer $Limit) Set Number of results per page
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getApplicationId() Obtain Superapp ID
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID
 * @method integer getOnlineStatus() Obtain Online status. 0 All (default); 1 Available; 2 In canary release
 * @method void setOnlineStatus(integer $OnlineStatus) Set Online status. 0 All (default); 1 Available; 2 In canary release
 * @method array getEngineTypeList() Obtain Engine type. 0 Mini program; 1 Mini game
 * @method void setEngineTypeList(array $EngineTypeList) Set Engine type. 0 Mini program; 1 Mini game
 * @method string getSubCategory() Obtain Secondary category name
 * @method void setSubCategory(string $SubCategory) Set Secondary category name
 * @method string getPrimaryCategory() Obtain Primary category name
 * @method void setPrimaryCategory(string $PrimaryCategory) Set Primary category name
 * @method string getKeyword() Obtain Keywords
 * @method void setKeyword(string $Keyword) Set Keywords
 */
class DescribeApplicationMNPListRequest extends AbstractModel
{
    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var integer Number of results per page
     */
    public $Limit;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Superapp ID
     */
    public $ApplicationId;

    /**
     * @var integer Online status. 0 All (default); 1 Available; 2 In canary release
     */
    public $OnlineStatus;

    /**
     * @var array Engine type. 0 Mini program; 1 Mini game
     */
    public $EngineTypeList;

    /**
     * @var string Secondary category name
     */
    public $SubCategory;

    /**
     * @var string Primary category name
     */
    public $PrimaryCategory;

    /**
     * @var string Keywords
     */
    public $Keyword;

    /**
     * @param integer $Offset Page offset
     * @param integer $Limit Number of results per page
     * @param string $PlatformId Platform ID
     * @param string $ApplicationId Superapp ID
     * @param integer $OnlineStatus Online status. 0 All (default); 1 Available; 2 In canary release
     * @param array $EngineTypeList Engine type. 0 Mini program; 1 Mini game
     * @param string $SubCategory Secondary category name
     * @param string $PrimaryCategory Primary category name
     * @param string $Keyword Keywords
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("EngineTypeList",$param) and $param["EngineTypeList"] !== null) {
            $this->EngineTypeList = $param["EngineTypeList"];
        }

        if (array_key_exists("SubCategory",$param) and $param["SubCategory"] !== null) {
            $this->SubCategory = $param["SubCategory"];
        }

        if (array_key_exists("PrimaryCategory",$param) and $param["PrimaryCategory"] !== null) {
            $this->PrimaryCategory = $param["PrimaryCategory"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
