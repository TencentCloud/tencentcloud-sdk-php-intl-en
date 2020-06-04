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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpUnBlockList request structure.
 *
 * @method string getBeginTime() Obtain Start time
 * @method void setBeginTime(string $BeginTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getIp() Obtain IP (if this field is not empty, IP filtering will be performed)
 * @method void setIp(string $Ip) Set IP (if this field is not empty, IP filtering will be performed)
 * @method Paging getPaging() Obtain Pagination parameter (paginated query will be performed if this field is not empty). This field will be disused in the future. Please use the `Limit` and `Offset` fields instead;
 * @method void setPaging(Paging $Paging) Set Pagination parameter (paginated query will be performed if this field is not empty). This field will be disused in the future. Please use the `Limit` and `Offset` fields instead;
 * @method integer getLimit() Obtain Number of entries per page. A value of 0 means no pagination
 * @method void setLimit(integer $Limit) Set Number of entries per page. A value of 0 means no pagination
 * @method integer getOffset() Obtain Page start offset, whose value is (page number - 1) * number of entries per page
 * @method void setOffset(integer $Offset) Set Page start offset, whose value is (page number - 1) * number of entries per page
 */
class DescribeIpUnBlockListRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string IP (if this field is not empty, IP filtering will be performed)
     */
    public $Ip;

    /**
     * @var Paging Pagination parameter (paginated query will be performed if this field is not empty). This field will be disused in the future. Please use the `Limit` and `Offset` fields instead;
     */
    public $Paging;

    /**
     * @var integer Number of entries per page. A value of 0 means no pagination
     */
    public $Limit;

    /**
     * @var integer Page start offset, whose value is (page number - 1) * number of entries per page
     */
    public $Offset;

    /**
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param string $Ip IP (if this field is not empty, IP filtering will be performed)
     * @param Paging $Paging Pagination parameter (paginated query will be performed if this field is not empty). This field will be disused in the future. Please use the `Limit` and `Offset` fields instead;
     * @param integer $Limit Number of entries per page. A value of 0 means no pagination
     * @param integer $Offset Page start offset, whose value is (page number - 1) * number of entries per page
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Paging",$param) and $param["Paging"] !== null) {
            $this->Paging = new Paging();
            $this->Paging->deserialize($param["Paging"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
