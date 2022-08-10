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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Block log in rate-limiting policy
 *
 * @method array getList() Obtain Data set of bot attack logs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setList(array $List) Set Data set of bot attack logs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageNo() Obtain Current page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNo(integer $PageNo) Set Current page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Number of items per page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Number of items per page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPages() Obtain Total number of pages
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPages(integer $Pages) Set Total number of pages
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalSize() Obtain Total number of items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set Total number of items
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotLogData extends AbstractModel
{
    /**
     * @var array Data set of bot attack logs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $List;

    /**
     * @var integer Current page
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNo;

    /**
     * @var integer Number of items per page
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Total number of pages
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pages;

    /**
     * @var integer Total number of items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @param array $List Data set of bot attack logs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageNo Current page
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Number of items per page
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pages Total number of pages
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalSize Total number of items
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new BotLog();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
