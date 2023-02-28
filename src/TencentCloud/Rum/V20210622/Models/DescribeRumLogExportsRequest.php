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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExports request structure.
 *
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method integer getPageNum() Obtain Page number
 * @method void setPageNum(integer $PageNum) Set Page number
 * @method integer getID() Obtain Project ID (required)
 * @method void setID(integer $ID) Set Project ID (required)
 */
class DescribeRumLogExportsRequest extends AbstractModel
{
    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var integer Page number
     */
    public $PageNum;

    /**
     * @var integer Project ID (required)
     */
    public $ID;

    /**
     * @param integer $PageSize Page size
     * @param integer $PageNum Page number
     * @param integer $ID Project ID (required)
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
