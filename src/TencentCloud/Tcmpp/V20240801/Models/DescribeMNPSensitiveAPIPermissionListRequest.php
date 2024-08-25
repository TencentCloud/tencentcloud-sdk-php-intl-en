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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNPSensitiveAPIPermissionList request structure.
 *
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getLimit() Obtain Number of results per page
 * @method void setLimit(integer $Limit) Set Number of results per page
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getKeyword() Obtain Keywords for search (API name)
 * @method void setKeyword(string $Keyword) Set Keywords for search (API name)
 */
class DescribeMNPSensitiveAPIPermissionListRequest extends AbstractModel
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
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Keywords for search (API name)
     */
    public $Keyword;

    /**
     * @param integer $Offset Page offset
     * @param integer $Limit Number of results per page
     * @param string $MNPId Mini program ID
     * @param string $PlatformId Platform ID
     * @param string $ApplicationId Application ID
     * @param string $Keyword Keywords for search (API name)
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

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
