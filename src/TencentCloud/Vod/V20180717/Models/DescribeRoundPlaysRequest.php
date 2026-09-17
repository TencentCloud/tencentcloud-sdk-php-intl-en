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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoundPlays request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getRoundPlayIds() Obtain 
 * @method void setRoundPlayIds(array $RoundPlayIds) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method TimeRange getCreateTime() Obtain 
 * @method void setCreateTime(TimeRange $CreateTime) Set 
 * @method TimeRange getUpdateTime() Obtain 
 * @method void setUpdateTime(TimeRange $UpdateTime) Set 
 * @method string getScrollToken() Obtain 
 * @method void setScrollToken(string $ScrollToken) Set 
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 */
class DescribeRoundPlaysRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $RoundPlayIds;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var TimeRange 
     */
    public $CreateTime;

    /**
     * @var TimeRange 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $ScrollToken;

    /**
     * @var integer 
     * @deprecated
     */
    public $Offset;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @param integer $SubAppId 
     * @param array $RoundPlayIds 
     * @param string $Status 
     * @param TimeRange $CreateTime 
     * @param TimeRange $UpdateTime 
     * @param string $ScrollToken 
     * @param integer $Offset 
     * @param integer $Limit 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RoundPlayIds",$param) and $param["RoundPlayIds"] !== null) {
            $this->RoundPlayIds = $param["RoundPlayIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = new TimeRange();
            $this->UpdateTime->deserialize($param["UpdateTime"]);
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
