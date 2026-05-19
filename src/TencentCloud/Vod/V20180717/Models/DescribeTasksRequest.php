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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getStatus() Obtain Filter condition: Task status. Available values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed).
 * @method void setStatus(string $Status) Set Filter condition: Task status. Available values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed).
 * @method string getFileId() Obtain Filter criteria: file ID.
 * @method void setFileId(string $FileId) Set Filter criteria: file ID.
 * @method TimeRange getCreateTime() Obtain Filter condition: Task creation time.
 * @method void setCreateTime(TimeRange $CreateTime) Set Filter condition: Task creation time.
 * @method TimeRange getFinishTime() Obtain Filter condition: Task end time.
 * @method void setFinishTime(TimeRange $FinishTime) Set Filter condition: Task end time.
 * @method SortBy getSort() Obtain Sorting method. Selectable fields for Sort.Field:
<li> CreateTime Task creation time.</li>
<li>FinishTime Task end time.</li>
 * @method void setSort(SortBy $Sort) Set Sorting method. Selectable fields for Sort.Field:
<li> CreateTime Task creation time.</li>
<li>FinishTime Task end time.</li>
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getScrollToken() Obtain Pagination identifier, used for batch pulling: When a single request cannot retrieve all data, the interface will return ScrollToken. Carry over in next request, will start obtaining from the next record.
 * @method void setScrollToken(string $ScrollToken) Set Pagination identifier, used for batch pulling: When a single request cannot retrieve all data, the interface will return ScrollToken. Carry over in next request, will start obtaining from the next record.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Filter condition: Task status. Available values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed).
     */
    public $Status;

    /**
     * @var string Filter criteria: file ID.
     */
    public $FileId;

    /**
     * @var TimeRange Filter condition: Task creation time.
     */
    public $CreateTime;

    /**
     * @var TimeRange Filter condition: Task end time.
     */
    public $FinishTime;

    /**
     * @var SortBy Sorting method. Selectable fields for Sort.Field:
<li> CreateTime Task creation time.</li>
<li>FinishTime Task end time.</li>
     */
    public $Sort;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Pagination identifier, used for batch pulling: When a single request cannot retrieve all data, the interface will return ScrollToken. Carry over in next request, will start obtaining from the next record.
     */
    public $ScrollToken;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Status Filter condition: Task status. Available values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed).
     * @param string $FileId Filter criteria: file ID.
     * @param TimeRange $CreateTime Filter condition: Task creation time.
     * @param TimeRange $FinishTime Filter condition: Task end time.
     * @param SortBy $Sort Sorting method. Selectable fields for Sort.Field:
<li> CreateTime Task creation time.</li>
<li>FinishTime Task end time.</li>
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $ScrollToken Pagination identifier, used for batch pulling: When a single request cannot retrieve all data, the interface will return ScrollToken. Carry over in next request, will start obtaining from the next record.
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
