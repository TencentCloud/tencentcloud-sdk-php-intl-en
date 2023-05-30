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
 * DescribeBoardSDKLog request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getRoomId() Obtain Room ID to be used to query logs.
 * @method void setRoomId(string $RoomId) Set Room ID to be used to query logs.
 * @method string getUserId() Obtain User ID to be used to query logs.
 * @method void setUserId(string $UserId) Set User ID to be used to query logs.
 * @method array getTimeRange() Obtain Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
 * @method void setTimeRange(array $TimeRange) Set Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
 * @method string getAggregationInterval() Obtain Interval for aggregating log number queries. Example values: `5m`, `1h`, `4h`
 * @method void setAggregationInterval(string $AggregationInterval) Set Interval for aggregating log number queries. Example values: `5m`, `1h`, `4h`
 * @method string getQuery() Obtain Extra query conditions.
 * @method void setQuery(string $Query) Set Extra query conditions.
 * @method boolean getAscending() Obtain Specifies whether to sort results in ascending order of time.
 * @method void setAscending(boolean $Ascending) Set Specifies whether to sort results in ascending order of time.
 * @method string getContext() Obtain Context key used for recursive extraction. Obtain this parameter in the response to the last request.
 * @method void setContext(string $Context) Set Context key used for recursive extraction. Obtain this parameter in the response to the last request.
 */
class DescribeBoardSDKLogRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Room ID to be used to query logs.
     */
    public $RoomId;

    /**
     * @var string User ID to be used to query logs.
     */
    public $UserId;

    /**
     * @var array Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
     */
    public $TimeRange;

    /**
     * @var string Interval for aggregating log number queries. Example values: `5m`, `1h`, `4h`
     */
    public $AggregationInterval;

    /**
     * @var string Extra query conditions.
     */
    public $Query;

    /**
     * @var boolean Specifies whether to sort results in ascending order of time.
     */
    public $Ascending;

    /**
     * @var string Context key used for recursive extraction. Obtain this parameter in the response to the last request.
     */
    public $Context;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $RoomId Room ID to be used to query logs.
     * @param string $UserId User ID to be used to query logs.
     * @param array $TimeRange Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
     * @param string $AggregationInterval Interval for aggregating log number queries. Example values: `5m`, `1h`, `4h`
     * @param string $Query Extra query conditions.
     * @param boolean $Ascending Specifies whether to sort results in ascending order of time.
     * @param string $Context Context key used for recursive extraction. Obtain this parameter in the response to the last request.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("AggregationInterval",$param) and $param["AggregationInterval"] !== null) {
            $this->AggregationInterval = $param["AggregationInterval"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Ascending",$param) and $param["Ascending"] !== null) {
            $this->Ascending = $param["Ascending"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
