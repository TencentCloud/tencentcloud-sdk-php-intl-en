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
 * GetRoomEvent request structure.
 *
 * @method integer getRoomId() Obtain The room ID.
 * @method void setRoomId(integer $RoomId) Set The room ID.
 * @method integer getSdkAppId() Obtain The application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID.
 * @method integer getPage() Obtain The starting page. Pagination starts from 1. This parameter is valid only if `keyword` is empty.
 * @method void setPage(integer $Page) Set The starting page. Pagination starts from 1. This parameter is valid only if `keyword` is empty.
 * @method integer getLimit() Obtain The maximum number of records (up to 200) per page. This parameter is valid only if `keyword` is empty.
 * @method void setLimit(integer $Limit) Set The maximum number of records (up to 200) per page. This parameter is valid only if `keyword` is empty.
 * @method string getKeyword() Obtain The type of events to query. Valid values:
`RoomStart`: The class started.
`RoomEnd`: The class ended.
`MemberJoin`: A user joined.
`MemberQuit`: A user left.
`RecordFinish`: Recording is finished.
 * @method void setKeyword(string $Keyword) Set The type of events to query. Valid values:
`RoomStart`: The class started.
`RoomEnd`: The class ended.
`MemberJoin`: A user joined.
`MemberQuit`: A user left.
`RecordFinish`: Recording is finished.
 */
class GetRoomEventRequest extends AbstractModel
{
    /**
     * @var integer The room ID.
     */
    public $RoomId;

    /**
     * @var integer The application ID.
     */
    public $SdkAppId;

    /**
     * @var integer The starting page. Pagination starts from 1. This parameter is valid only if `keyword` is empty.
     */
    public $Page;

    /**
     * @var integer The maximum number of records (up to 200) per page. This parameter is valid only if `keyword` is empty.
     */
    public $Limit;

    /**
     * @var string The type of events to query. Valid values:
`RoomStart`: The class started.
`RoomEnd`: The class ended.
`MemberJoin`: A user joined.
`MemberQuit`: A user left.
`RecordFinish`: Recording is finished.
     */
    public $Keyword;

    /**
     * @param integer $RoomId The room ID.
     * @param integer $SdkAppId The application ID.
     * @param integer $Page The starting page. Pagination starts from 1. This parameter is valid only if `keyword` is empty.
     * @param integer $Limit The maximum number of records (up to 200) per page. This parameter is valid only if `keyword` is empty.
     * @param string $Keyword The type of events to query. Valid values:
`RoomStart`: The class started.
`RoomEnd`: The class ended.
`MemberJoin`: A user joined.
`MemberQuit`: A user left.
`RecordFinish`: Recording is finished.
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
