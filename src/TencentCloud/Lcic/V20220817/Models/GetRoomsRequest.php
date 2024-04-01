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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRooms request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.

 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.

 * @method integer getStartTime() Obtain The start time. The default start time is 30 minutes before the current time.
 * @method void setStartTime(integer $StartTime) Set The start time. The default start time is 30 minutes before the current time.
 * @method integer getEndTime() Obtain The end time. The default end time is 30 minutes after the current time.
 * @method void setEndTime(integer $EndTime) Set The end time. The default end time is 30 minutes after the current time.
 * @method integer getPage() Obtain The page to return records from. Pagination starts from 1.
 * @method void setPage(integer $Page) Set The page to return records from. Pagination starts from 1.
 * @method integer getLimit() Obtain The number of records per page. The default is 10.
 * @method void setLimit(integer $Limit) Set The number of records per page. The default is 10.
 * @method array getStatus() Obtain Classroom status. Default display all classes, 0 is not started, 1 is in class, 2 is finished, 3 is expired
 * @method void setStatus(array $Status) Set Classroom status. Default display all classes, 0 is not started, 1 is in class, 2 is finished, 3 is expired
 */
class GetRoomsRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.

     */
    public $SdkAppId;

    /**
     * @var integer The start time. The default start time is 30 minutes before the current time.
     */
    public $StartTime;

    /**
     * @var integer The end time. The default end time is 30 minutes after the current time.
     */
    public $EndTime;

    /**
     * @var integer The page to return records from. Pagination starts from 1.
     */
    public $Page;

    /**
     * @var integer The number of records per page. The default is 10.
     */
    public $Limit;

    /**
     * @var array Classroom status. Default display all classes, 0 is not started, 1 is in class, 2 is finished, 3 is expired
     */
    public $Status;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.

     * @param integer $StartTime The start time. The default start time is 30 minutes before the current time.
     * @param integer $EndTime The end time. The default end time is 30 minutes after the current time.
     * @param integer $Page The page to return records from. Pagination starts from 1.
     * @param integer $Limit The number of records per page. The default is 10.
     * @param array $Status Classroom status. Default display all classes, 0 is not started, 1 is in class, 2 is finished, 3 is expired
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
