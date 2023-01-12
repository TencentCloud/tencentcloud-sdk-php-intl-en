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
 * List of returned applications
 *
 * @method array getRecords() Obtain List of applications
 * @method void setRecords(array $Records) Set List of applications
 * @method integer getTotal() Obtain Total number of applications
 * @method void setTotal(integer $Total) Set Total number of applications
 * @method integer getSize() Obtain Number of applications per page
 * @method void setSize(integer $Size) Set Number of applications per page
 * @method integer getPages() Obtain Total number of pages
 * @method void setPages(integer $Pages) Set Total number of pages
 * @method integer getCurrent() Obtain Number of current entries
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCurrent(integer $Current) Set Number of current entries
Note: This field may return `null`, indicating that no valid value was found.
 */
class ServicePage extends AbstractModel
{
    /**
     * @var array List of applications
     */
    public $Records;

    /**
     * @var integer Total number of applications
     */
    public $Total;

    /**
     * @var integer Number of applications per page
     */
    public $Size;

    /**
     * @var integer Total number of pages
     */
    public $Pages;

    /**
     * @var integer Number of current entries
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Current;

    /**
     * @param array $Records List of applications
     * @param integer $Total Total number of applications
     * @param integer $Size Number of applications per page
     * @param integer $Pages Total number of pages
     * @param integer $Current Number of current entries
Note: This field may return `null`, indicating that no valid value was found.
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
                $obj = new TemService();
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
