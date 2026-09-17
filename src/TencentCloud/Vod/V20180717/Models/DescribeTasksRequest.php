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
 * DescribeTasks request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method TimeRange getCreateTime() Obtain 
 * @method void setCreateTime(TimeRange $CreateTime) Set 
 * @method TimeRange getFinishTime() Obtain 
 * @method void setFinishTime(TimeRange $FinishTime) Set 
 * @method SortBy getSort() Obtain 
 * @method void setSort(SortBy $Sort) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method string getScrollToken() Obtain 
 * @method void setScrollToken(string $ScrollToken) Set 
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var TimeRange 
     */
    public $CreateTime;

    /**
     * @var TimeRange 
     */
    public $FinishTime;

    /**
     * @var SortBy 
     */
    public $Sort;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var string 
     */
    public $ScrollToken;

    /**
     * @param integer $SubAppId 
     * @param string $Status 
     * @param string $FileId 
     * @param TimeRange $CreateTime 
     * @param TimeRange $FinishTime 
     * @param SortBy $Sort 
     * @param integer $Limit 
     * @param string $ScrollToken 
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = new TimeRange();
            $this->FinishTime->deserialize($param["FinishTime"]);
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }
    }
}
