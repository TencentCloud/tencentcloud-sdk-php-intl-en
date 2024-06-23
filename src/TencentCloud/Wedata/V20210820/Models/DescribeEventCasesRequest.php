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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventCases request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getCategory() Obtain Event Instance Catalog, Example Value:
- Expired: expired
- Not Expired: consuming
- All: all

 * @method void setCategory(string $Category) Set Event Instance Catalog, Example Value:
- Expired: expired
- Not Expired: consuming
- All: all

 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Number of items per page
 * @method void setPageSize(integer $PageSize) Set Number of items per page
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method string getEventType() Obtain Event type
 * @method void setEventType(string $EventType) Set Event type
 * @method string getEventSubType() Obtain Event Segmentation Type
 * @method void setEventSubType(string $EventSubType) Set Event Segmentation Type
 * @method string getEventBroadcastType() Obtain Event Broadcast Type
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event Broadcast Type
 * @method string getStatus() Obtain Event Instance Status, Example Value:
- Consumed: COMSUMED
- Expired: EXPIRED
- Pending Consumption: ACTIVE
- Consuming: CONSUMING
 * @method void setStatus(string $Status) Set Event Instance Status, Example Value:
- Consumed: COMSUMED
- Expired: EXPIRED
- Pending Consumption: ACTIVE
- Consuming: CONSUMING
 * @method string getCreationTimeStart() Obtain Minimum Creation Time of Event Instance
 * @method void setCreationTimeStart(string $CreationTimeStart) Set Minimum Creation Time of Event Instance
 * @method string getCreationTimeEnd() Obtain Maximum Creation Time of Event Instance
 * @method void setCreationTimeEnd(string $CreationTimeEnd) Set Maximum Creation Time of Event Instance
 * @method string getEventTriggeredTimeStart() Obtain Minimum Trigger Time of Event Instance
 * @method void setEventTriggeredTimeStart(string $EventTriggeredTimeStart) Set Minimum Trigger Time of Event Instance
 * @method string getEventTriggeredTimeEnd() Obtain Maximum Trigger Time of Event Instance
 * @method void setEventTriggeredTimeEnd(string $EventTriggeredTimeEnd) Set Maximum Trigger Time of Event Instance
 * @method string getLogTimeStart() Obtain Minimum Consumption Time of Event Instance
 * @method void setLogTimeStart(string $LogTimeStart) Set Minimum Consumption Time of Event Instance
 * @method string getLogTimeEnd() Obtain Maximum Consumption Time of Event Instance
 * @method void setLogTimeEnd(string $LogTimeEnd) Set Maximum Consumption Time of Event Instance
 * @method string getDimension() Obtain Event Instance Data Timestamp
 * @method void setDimension(string $Dimension) Set Event Instance Data Timestamp
 * @method string getTimeToLive() Obtain Event Instance Validity Period
 * @method void setTimeToLive(string $TimeToLive) Set Event Instance Validity Period
 * @method string getSortItem() Obtain Sort Fields
 * @method void setSortItem(string $SortItem) Set Sort Fields
 * @method string getSortType() Obtain Sorting Order
 * @method void setSortType(string $SortType) Set Sorting Order
 */
class DescribeEventCasesRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Event Instance Catalog, Example Value:
- Expired: expired
- Not Expired: consuming
- All: all

     */
    public $Category;

    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page
     */
    public $PageSize;

    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var string Event type
     * @deprecated
     */
    public $EventType;

    /**
     * @var string Event Segmentation Type
     */
    public $EventSubType;

    /**
     * @var string Event Broadcast Type
     * @deprecated
     */
    public $EventBroadcastType;

    /**
     * @var string Event Instance Status, Example Value:
- Consumed: COMSUMED
- Expired: EXPIRED
- Pending Consumption: ACTIVE
- Consuming: CONSUMING
     * @deprecated
     */
    public $Status;

    /**
     * @var string Minimum Creation Time of Event Instance
     */
    public $CreationTimeStart;

    /**
     * @var string Maximum Creation Time of Event Instance
     */
    public $CreationTimeEnd;

    /**
     * @var string Minimum Trigger Time of Event Instance
     */
    public $EventTriggeredTimeStart;

    /**
     * @var string Maximum Trigger Time of Event Instance
     */
    public $EventTriggeredTimeEnd;

    /**
     * @var string Minimum Consumption Time of Event Instance
     */
    public $LogTimeStart;

    /**
     * @var string Maximum Consumption Time of Event Instance
     */
    public $LogTimeEnd;

    /**
     * @var string Event Instance Data Timestamp
     */
    public $Dimension;

    /**
     * @var string Event Instance Validity Period
     */
    public $TimeToLive;

    /**
     * @var string Sort Fields
     */
    public $SortItem;

    /**
     * @var string Sorting Order
     */
    public $SortType;

    /**
     * @param string $ProjectId Project ID
     * @param string $Category Event Instance Catalog, Example Value:
- Expired: expired
- Not Expired: consuming
- All: all

     * @param integer $PageNumber Page Number
     * @param integer $PageSize Number of items per page
     * @param string $EventName Event name
     * @param string $EventType Event type
     * @param string $EventSubType Event Segmentation Type
     * @param string $EventBroadcastType Event Broadcast Type
     * @param string $Status Event Instance Status, Example Value:
- Consumed: COMSUMED
- Expired: EXPIRED
- Pending Consumption: ACTIVE
- Consuming: CONSUMING
     * @param string $CreationTimeStart Minimum Creation Time of Event Instance
     * @param string $CreationTimeEnd Maximum Creation Time of Event Instance
     * @param string $EventTriggeredTimeStart Minimum Trigger Time of Event Instance
     * @param string $EventTriggeredTimeEnd Maximum Trigger Time of Event Instance
     * @param string $LogTimeStart Minimum Consumption Time of Event Instance
     * @param string $LogTimeEnd Maximum Consumption Time of Event Instance
     * @param string $Dimension Event Instance Data Timestamp
     * @param string $TimeToLive Event Instance Validity Period
     * @param string $SortItem Sort Fields
     * @param string $SortType Sorting Order
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTimeStart",$param) and $param["CreationTimeStart"] !== null) {
            $this->CreationTimeStart = $param["CreationTimeStart"];
        }

        if (array_key_exists("CreationTimeEnd",$param) and $param["CreationTimeEnd"] !== null) {
            $this->CreationTimeEnd = $param["CreationTimeEnd"];
        }

        if (array_key_exists("EventTriggeredTimeStart",$param) and $param["EventTriggeredTimeStart"] !== null) {
            $this->EventTriggeredTimeStart = $param["EventTriggeredTimeStart"];
        }

        if (array_key_exists("EventTriggeredTimeEnd",$param) and $param["EventTriggeredTimeEnd"] !== null) {
            $this->EventTriggeredTimeEnd = $param["EventTriggeredTimeEnd"];
        }

        if (array_key_exists("LogTimeStart",$param) and $param["LogTimeStart"] !== null) {
            $this->LogTimeStart = $param["LogTimeStart"];
        }

        if (array_key_exists("LogTimeEnd",$param) and $param["LogTimeEnd"] !== null) {
            $this->LogTimeEnd = $param["LogTimeEnd"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
