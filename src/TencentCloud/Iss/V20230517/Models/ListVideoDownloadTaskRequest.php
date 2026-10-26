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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVideoDownloadTask request structure.
 *
 * @method string getDeviceName() Obtain Device name. Fuzzy search supported.
 * @method void setDeviceName(string $DeviceName) Set Device name. Fuzzy search supported.
 * @method string getChannelName() Obtain Channel name, used for fuzzy search
 * @method void setChannelName(string $ChannelName) Set Channel name, used for fuzzy search
 * @method integer getStatus() Obtain Task status (0: preparing, 1: executing, 2: completed, 3: failure)
 * @method void setStatus(integer $Status) Set Task status (0: preparing, 1: executing, 2: completed, 3: failure)
 * @method string getSortRule() Obtain Sorting rule (only StartTime is supported. A hyphen (-) indicates descending order, e.g., -StartTime)
 * @method void setSortRule(string $SortRule) Set Sorting rule (only StartTime is supported. A hyphen (-) indicates descending order, e.g., -StartTime)
 * @method integer getWithPreviewUrl() Obtain Whether the response carries the preview address (0: without; 1: carry)
 * @method void setWithPreviewUrl(integer $WithPreviewUrl) Set Whether the response carries the preview address (0: without; 1: carry)
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method string getDownloadTaskId() Obtain Download task ID
 * @method void setDownloadTaskId(string $DownloadTaskId) Set Download task ID
 * @method integer getUrlExpires() Obtain URL expiration time (in seconds), with a maximum value of 86400 seconds (1 day).
 * @method void setUrlExpires(integer $UrlExpires) Set URL expiration time (in seconds), with a maximum value of 86400 seconds (1 day).
 * @method string getDate() Obtain Task date. Defaults to the current day.
 * @method void setDate(string $Date) Set Task date. Defaults to the current day.
 */
class ListVideoDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Device name. Fuzzy search supported.
     */
    public $DeviceName;

    /**
     * @var string Channel name, used for fuzzy search
     */
    public $ChannelName;

    /**
     * @var integer Task status (0: preparing, 1: executing, 2: completed, 3: failure)
     */
    public $Status;

    /**
     * @var string Sorting rule (only StartTime is supported. A hyphen (-) indicates descending order, e.g., -StartTime)
     */
    public $SortRule;

    /**
     * @var integer Whether the response carries the preview address (0: without; 1: carry)
     */
    public $WithPreviewUrl;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var string Download task ID
     */
    public $DownloadTaskId;

    /**
     * @var integer URL expiration time (in seconds), with a maximum value of 86400 seconds (1 day).
     */
    public $UrlExpires;

    /**
     * @var string Task date. Defaults to the current day.
     */
    public $Date;

    /**
     * @param string $DeviceName Device name. Fuzzy search supported.
     * @param string $ChannelName Channel name, used for fuzzy search
     * @param integer $Status Task status (0: preparing, 1: executing, 2: completed, 3: failure)
     * @param string $SortRule Sorting rule (only StartTime is supported. A hyphen (-) indicates descending order, e.g., -StartTime)
     * @param integer $WithPreviewUrl Whether the response carries the preview address (0: without; 1: carry)
     * @param integer $PageNumber Page number
     * @param integer $PageSize Pagination size.
     * @param string $DownloadTaskId Download task ID
     * @param integer $UrlExpires URL expiration time (in seconds), with a maximum value of 86400 seconds (1 day).
     * @param string $Date Task date. Defaults to the current day.
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }

        if (array_key_exists("WithPreviewUrl",$param) and $param["WithPreviewUrl"] !== null) {
            $this->WithPreviewUrl = $param["WithPreviewUrl"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DownloadTaskId",$param) and $param["DownloadTaskId"] !== null) {
            $this->DownloadTaskId = $param["DownloadTaskId"];
        }

        if (array_key_exists("UrlExpires",$param) and $param["UrlExpires"] !== null) {
            $this->UrlExpires = $param["UrlExpires"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
