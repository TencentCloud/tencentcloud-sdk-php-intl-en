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
 * DescribeUserList request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getRoomId() Obtain Room ID to be used to query users.
 * @method void setRoomId(string $RoomId) Set Room ID to be used to query users.
 * @method array getTimeRange() Obtain Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
 * @method void setTimeRange(array $TimeRange) Set Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
 * @method string getQuery() Obtain Extra query conditions.
 * @method void setQuery(string $Query) Set Extra query conditions.
 * @method integer getMaxSize() Obtain Maximum number of data entries to be returned. Default value: `1000`.
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of data entries to be returned. Default value: `1000`.
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Room ID to be used to query users.
     */
    public $RoomId;

    /**
     * @var array Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
     */
    public $TimeRange;

    /**
     * @var string Extra query conditions.
     */
    public $Query;

    /**
     * @var integer Maximum number of data entries to be returned. Default value: `1000`.
     */
    public $MaxSize;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $RoomId Room ID to be used to query users.
     * @param array $TimeRange Query period, which consists of two Unix timestamps in milliseconds. The first indicates the start time and the second the end time.
     * @param string $Query Extra query conditions.
     * @param integer $MaxSize Maximum number of data entries to be returned. Default value: `1000`.
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

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
