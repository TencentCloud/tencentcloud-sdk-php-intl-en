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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch Operation Task List Pagination
 *
 * @method integer getPageCount() Obtain Total Number of Pages
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPageCount(integer $PageCount) Set Total Number of Pages
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getItems() Obtain ContentNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setItems(array $Items) Set ContentNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalCount() Obtain Total count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total count
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DescribeBatchOperateTaskPage extends AbstractModel
{
    /**
     * @var integer Total Number of Pages
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PageCount;

    /**
     * @var array ContentNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Items;

    /**
     * @var integer Total count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @param integer $PageCount Total Number of Pages
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Items ContentNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalCount Total count
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DescribeBatchOperateTaskDTO();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
