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
 * DescribeMNPApprovalList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method string getPlatformId() Obtain Platform ID.
 * @method void setPlatformId(string $PlatformId) Set Platform ID.
 * @method array getApprovalStatusList() Obtain Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method void setApprovalStatusList(array $ApprovalStatusList) Set Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method string getKeyword() Obtain Search keyword (mini program name).
 * @method void setKeyword(string $Keyword) Set Search keyword (mini program name).
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 */
class DescribeMNPApprovalListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var string Platform ID.
     */
    public $PlatformId;

    /**
     * @var array Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     */
    public $ApprovalStatusList;

    /**
     * @var string Search keyword (mini program name).
     */
    public $Keyword;

    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of entries per page.
     * @param string $PlatformId Platform ID.
     * @param array $ApprovalStatusList Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     * @param string $Keyword Search keyword (mini program name).
     * @param string $ApplicationId Superapp ID.
     * @param string $TeamId Team ID.
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

        if (array_key_exists("ApprovalStatusList",$param) and $param["ApprovalStatusList"] !== null) {
            $this->ApprovalStatusList = $param["ApprovalStatusList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
