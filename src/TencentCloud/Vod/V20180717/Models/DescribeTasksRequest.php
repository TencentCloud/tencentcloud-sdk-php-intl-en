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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
 * @method string getStatus() Obtain <p>Filter criteria: task status. Available values: WAITING, PROCESSING, FINISH.</p>
 * @method void setStatus(string $Status) Set <p>Filter criteria: task status. Available values: WAITING, PROCESSING, FINISH.</p>
 * @method string getFileId() Obtain <p>Filtering Conditions: file ID.</p>
 * @method void setFileId(string $FileId) Set <p>Filtering Conditions: file ID.</p>
 * @method TimeRange getCreateTime() Obtain <p>Filter condition: task creation time.</p>
 * @method void setCreateTime(TimeRange $CreateTime) Set <p>Filter condition: task creation time.</p>
 * @method TimeRange getFinishTime() Obtain <p>Filter condition: task end time.</p>
 * @method void setFinishTime(TimeRange $FinishTime) Set <p>Filter condition: task end time.</p>
 * @method SortBy getSort() Obtain <p>Sorting method. Sort.Field options:</p><li> CreateTime: task creation time.</li><li>FinishTime: task end time.</li>
 * @method void setSort(SortBy $Sort) Set <p>Sorting method. Sort.Field options:</p><li> CreateTime: task creation time.</li><li>FinishTime: task end time.</li>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method string getScrollToken() Obtain <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 * @method void setScrollToken(string $ScrollToken) Set <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Filter criteria: task status. Available values: WAITING, PROCESSING, FINISH.</p>
     */
    public $Status;

    /**
     * @var string <p>Filtering Conditions: file ID.</p>
     */
    public $FileId;

    /**
     * @var TimeRange <p>Filter condition: task creation time.</p>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>Filter condition: task end time.</p>
     */
    public $FinishTime;

    /**
     * @var SortBy <p>Sorting method. Sort.Field options:</p><li> CreateTime: task creation time.</li><li>FinishTime: task end time.</li>
     */
    public $Sort;

    /**
     * @var integer <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var string <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
     */
    public $ScrollToken;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), this field must be filled in as the application ID.</b></p>
     * @param string $Status <p>Filter criteria: task status. Available values: WAITING, PROCESSING, FINISH.</p>
     * @param string $FileId <p>Filtering Conditions: file ID.</p>
     * @param TimeRange $CreateTime <p>Filter condition: task creation time.</p>
     * @param TimeRange $FinishTime <p>Filter condition: task end time.</p>
     * @param SortBy $Sort <p>Sorting method. Sort.Field options:</p><li> CreateTime: task creation time.</li><li>FinishTime: task end time.</li>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     * @param string $ScrollToken <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
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
