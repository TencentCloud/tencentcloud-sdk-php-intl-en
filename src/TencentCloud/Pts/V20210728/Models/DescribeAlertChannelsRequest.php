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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertChannels request structure.
 *
 * @method array getProjectIds() Obtain Array of Project ID.
 * @method void setProjectIds(array $ProjectIds) Set Array of Project ID.
 * @method integer getOffset() Obtain Offset. Default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value is 0.
 * @method integer getLimit() Obtain Number of returns, default is 20, maximum is 100.
 * @method void setLimit(integer $Limit) Set Number of returns, default is 20, maximum is 100.
 * @method array getNoticeIds() Obtain Array of Notice ID.
 * @method void setNoticeIds(array $NoticeIds) Set Array of Notice ID.
 * @method string getOrderBy() Obtain Column for sorting.
 * @method void setOrderBy(string $OrderBy) Set Column for sorting.
 * @method boolean getAscend() Obtain Whether in ascending order.
 * @method void setAscend(boolean $Ascend) Set Whether in ascending order.
 */
class DescribeAlertChannelsRequest extends AbstractModel
{
    /**
     * @var array Array of Project ID.
     */
    public $ProjectIds;

    /**
     * @var integer Offset. Default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns, default is 20, maximum is 100.
     */
    public $Limit;

    /**
     * @var array Array of Notice ID.
     */
    public $NoticeIds;

    /**
     * @var string Column for sorting.
     */
    public $OrderBy;

    /**
     * @var boolean Whether in ascending order.
     */
    public $Ascend;

    /**
     * @param array $ProjectIds Array of Project ID.
     * @param integer $Offset Offset. Default value is 0.
     * @param integer $Limit Number of returns, default is 20, maximum is 100.
     * @param array $NoticeIds Array of Notice ID.
     * @param string $OrderBy Column for sorting.
     * @param boolean $Ascend Whether in ascending order.
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }
    }
}
