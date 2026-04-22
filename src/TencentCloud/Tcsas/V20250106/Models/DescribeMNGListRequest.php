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
 * DescribeMNGList request structure.
 *
 * @method integer getOffset() Obtain <p>Pagination offset</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset</p>
 * @method integer getLimit() Obtain <p>Pagination count</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination count</p>
 * @method string getPlatformId() Obtain <p>Platform ID</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID</p>
 * @method string getKeyword() Obtain <p>Keywords for search (mini game name)</p>
 * @method void setKeyword(string $Keyword) Set <p>Keywords for search (mini game name)</p>
 * @method string getTeamId() Obtain <p>Team ID</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID</p>
 * @method string getApplicationId() Obtain <p>Superapp ID</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID</p>
 */
class DescribeMNGListRequest extends AbstractModel
{
    /**
     * @var integer <p>Pagination offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>Pagination count</p>
     */
    public $Limit;

    /**
     * @var string <p>Platform ID</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Keywords for search (mini game name)</p>
     */
    public $Keyword;

    /**
     * @var string <p>Team ID</p>
     */
    public $TeamId;

    /**
     * @var string <p>Superapp ID</p>
     */
    public $ApplicationId;

    /**
     * @param integer $Offset <p>Pagination offset</p>
     * @param integer $Limit <p>Pagination count</p>
     * @param string $PlatformId <p>Platform ID</p>
     * @param string $Keyword <p>Keywords for search (mini game name)</p>
     * @param string $TeamId <p>Team ID</p>
     * @param string $ApplicationId <p>Superapp ID</p>
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
