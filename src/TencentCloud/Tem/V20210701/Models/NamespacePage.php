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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace query result pagination
 *
 * @method array getRecords() Obtain Details of the returned records
 * @method void setRecords(array $Records) Set Details of the returned records
 * @method integer getTotal() Obtain Total number of returned records
 * @method void setTotal(integer $Total) Set Total number of returned records
 * @method integer getSize() Obtain Number of records per page
 * @method void setSize(integer $Size) Set Number of records per page
 * @method integer getPages() Obtain Total number of pages
 * @method void setPages(integer $Pages) Set Total number of pages
 * @method integer getCurrent() Obtain Current entry
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrent(integer $Current) Set Current entry
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NamespacePage extends AbstractModel
{
    /**
     * @var array Details of the returned records
     */
    public $Records;

    /**
     * @var integer Total number of returned records
     */
    public $Total;

    /**
     * @var integer Number of records per page
     */
    public $Size;

    /**
     * @var integer Total number of pages
     */
    public $Pages;

    /**
     * @var integer Current entry
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Current;

    /**
     * @param array $Records Details of the returned records
     * @param integer $Total Total number of returned records
     * @param integer $Size Number of records per page
     * @param integer $Pages Total number of pages
     * @param integer $Current Current entry
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new TemNamespaceInfo();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
