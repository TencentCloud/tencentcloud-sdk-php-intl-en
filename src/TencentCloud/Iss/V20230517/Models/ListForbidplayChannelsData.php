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
 * data of the channel list where streaming is forbidden for the user
 *
 * @method integer getPageNumber() Obtain Which page.
 * @method void setPageNumber(integer $PageNumber) Set Which page.
 * @method integer getPageSize() Obtain Number of devices on the current page
 * @method void setPageSize(integer $PageSize) Set Number of devices on the current page
 * @method integer getTotalCount() Obtain Total number of device channels in this query
 * @method void setTotalCount(integer $TotalCount) Set Total number of device channels in this query
 * @method array getList() Obtain Device channel information list
 * @method void setList(array $List) Set Device channel information list
 */
class ListForbidplayChannelsData extends AbstractModel
{
    /**
     * @var integer Which page.
     */
    public $PageNumber;

    /**
     * @var integer Number of devices on the current page
     */
    public $PageSize;

    /**
     * @var integer Total number of device channels in this query
     */
    public $TotalCount;

    /**
     * @var array Device channel information list
     */
    public $List;

    /**
     * @param integer $PageNumber Which page.
     * @param integer $PageSize Number of devices on the current page
     * @param integer $TotalCount Total number of device channels in this query
     * @param array $List Device channel information list
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new ChannelAttrInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
