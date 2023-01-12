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
 * DescribeRoomStatistics request structure.
 *
 * @method integer getRoomId() Obtain Room ID
 * @method void setRoomId(integer $RoomId) Set Room ID
 * @method integer getPage() Obtain Current page in pagination, which starts from 1.
 * @method void setPage(integer $Page) Set Current page in pagination, which starts from 1.
 * @method integer getLimit() Obtain Number of data entries to return per page. Maximum value: 1000
 * @method void setLimit(integer $Limit) Set Number of data entries to return per page. Maximum value: 1000
 */
class DescribeRoomStatisticsRequest extends AbstractModel
{
    /**
     * @var integer Room ID
     */
    public $RoomId;

    /**
     * @var integer Current page in pagination, which starts from 1.
     */
    public $Page;

    /**
     * @var integer Number of data entries to return per page. Maximum value: 1000
     */
    public $Limit;

    /**
     * @param integer $RoomId Room ID
     * @param integer $Page Current page in pagination, which starts from 1.
     * @param integer $Limit Number of data entries to return per page. Maximum value: 1000
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
