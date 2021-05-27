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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace pagination
 *
 * @method array getRecords() Obtain Records
 * @method void setRecords(array $Records) Set Records
 * @method integer getTotal() Obtain Total number
 * @method void setTotal(integer $Total) Set Total number
 * @method integer getSize() Obtain Number of items
 * @method void setSize(integer $Size) Set Number of items
 * @method integer getPages() Obtain Number of pages
 * @method void setPages(integer $Pages) Set Number of pages
 */
class NamespacePage extends AbstractModel
{
    /**
     * @var array Records
     */
    public $Records;

    /**
     * @var integer Total number
     */
    public $Total;

    /**
     * @var integer Number of items
     */
    public $Size;

    /**
     * @var integer Number of pages
     */
    public $Pages;

    /**
     * @param array $Records Records
     * @param integer $Total Total number
     * @param integer $Size Number of items
     * @param integer $Pages Number of pages
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
    }
}
