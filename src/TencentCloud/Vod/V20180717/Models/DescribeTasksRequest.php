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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method string getStatus() Obtain Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
 * @method void setStatus(string $Status) Set Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
 * @method string getFileId() Obtain Filter: file ID.
 * @method void setFileId(string $FileId) Set Filter: file ID.
 * @method TimeRange getCreateTime() Obtain Filter: task creation time.
 * @method void setCreateTime(TimeRange $CreateTime) Set Filter: task creation time.
 * @method TimeRange getFinishTime() Obtain Filter: task end time.
 * @method void setFinishTime(TimeRange $FinishTime) Set Filter: task end time.
 * @method SortBy getSort() Obtain Sort field. Valid values:
<li> CreateTime: task creation time</li>
<li>FinishTime: task end time</li>
 * @method void setSort(SortBy $Sort) Set Sort field. Valid values:
<li> CreateTime: task creation time</li>
<li>FinishTime: task end time</li>
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method string getScrollToken() Obtain Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 * @method void setScrollToken(string $ScrollToken) Set Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
     */
    public $Status;

    /**
     * @var string Filter: file ID.
     */
    public $FileId;

    /**
     * @var TimeRange Filter: task creation time.
     */
    public $CreateTime;

    /**
     * @var TimeRange Filter: task end time.
     */
    public $FinishTime;

    /**
     * @var SortBy Sort field. Valid values:
<li> CreateTime: task creation time</li>
<li>FinishTime: task end time</li>
     */
    public $Sort;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
     */
    public $ScrollToken;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $Status Filter: Task status. Valid values: WAITING (waiting), PROCESSING (processing), FINISH (completed).
     * @param string $FileId Filter: file ID.
     * @param TimeRange $CreateTime Filter: task creation time.
     * @param TimeRange $FinishTime Filter: task end time.
     * @param SortBy $Sort Sort field. Valid values:
<li> CreateTime: task creation time</li>
<li>FinishTime: task end time</li>
     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 100.
     * @param string $ScrollToken Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
