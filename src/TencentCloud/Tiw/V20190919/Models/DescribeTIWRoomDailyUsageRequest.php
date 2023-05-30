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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTIWRoomDailyUsage request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getSubProduct() Obtain Subproduct usage to be queried. The following parameters are supported:
- sp_tiw_board: The duration of use of whiteboards, in minutes.
- sp_tiw_ric: The duration of real-time recording, in minutes.
 * @method void setSubProduct(string $SubProduct) Set Subproduct usage to be queried. The following parameters are supported:
- sp_tiw_board: The duration of use of whiteboards, in minutes.
- sp_tiw_ric: The duration of real-time recording, in minutes.
 * @method string getStartTime() Obtain Start date in the format of YYYY-MM-DD. The start date is included in the query period.
 * @method void setStartTime(string $StartTime) Set Start date in the format of YYYY-MM-DD. The start date is included in the query period.
 * @method string getEndTime() Obtain End date in the format of YYYY-MM-DD. The end date is included in the query period. The period queried per request cannot be longer than 31 days.
 * @method void setEndTime(string $EndTime) Set End date in the format of YYYY-MM-DD. The end date is included in the query period. The period queried per request cannot be longer than 31 days.
 * @method array getRoomIDs() Obtain Room IDs to be queried. If you leave this parameter empty, all room IDs are queried.
 * @method void setRoomIDs(array $RoomIDs) Set Room IDs to be queried. If you leave this parameter empty, all room IDs are queried.
 * @method integer getOffset() Obtain Offset for query. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for query. Default value: `0`.
 * @method integer getLimit() Obtain Maximum number of entries returned per query. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Maximum number of entries returned per query. Default value: `20`.
 */
class DescribeTIWRoomDailyUsageRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Subproduct usage to be queried. The following parameters are supported:
- sp_tiw_board: The duration of use of whiteboards, in minutes.
- sp_tiw_ric: The duration of real-time recording, in minutes.
     */
    public $SubProduct;

    /**
     * @var string Start date in the format of YYYY-MM-DD. The start date is included in the query period.
     */
    public $StartTime;

    /**
     * @var string End date in the format of YYYY-MM-DD. The end date is included in the query period. The period queried per request cannot be longer than 31 days.
     */
    public $EndTime;

    /**
     * @var array Room IDs to be queried. If you leave this parameter empty, all room IDs are queried.
     */
    public $RoomIDs;

    /**
     * @var integer Offset for query. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries returned per query. Default value: `20`.
     */
    public $Limit;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $SubProduct Subproduct usage to be queried. The following parameters are supported:
- sp_tiw_board: The duration of use of whiteboards, in minutes.
- sp_tiw_ric: The duration of real-time recording, in minutes.
     * @param string $StartTime Start date in the format of YYYY-MM-DD. The start date is included in the query period.
     * @param string $EndTime End date in the format of YYYY-MM-DD. The end date is included in the query period. The period queried per request cannot be longer than 31 days.
     * @param array $RoomIDs Room IDs to be queried. If you leave this parameter empty, all room IDs are queried.
     * @param integer $Offset Offset for query. Default value: `0`.
     * @param integer $Limit Maximum number of entries returned per query. Default value: `20`.
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

        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomIDs",$param) and $param["RoomIDs"] !== null) {
            $this->RoomIDs = $param["RoomIDs"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
