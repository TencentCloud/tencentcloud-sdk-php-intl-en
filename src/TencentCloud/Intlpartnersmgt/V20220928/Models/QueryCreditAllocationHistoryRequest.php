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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCreditAllocationHistory request structure.
 *
 * @method integer getClientUin() Obtain Customer UIN
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
 * @method integer getPage() Obtain Page number
 * @method void setPage(integer $Page) Set Page number
 * @method integer getPageSize() Obtain Number of data entries per page
 * @method void setPageSize(integer $PageSize) Set Number of data entries per page
 */
class QueryCreditAllocationHistoryRequest extends AbstractModel
{
    /**
     * @var integer Customer UIN
     */
    public $ClientUin;

    /**
     * @var integer Page number
     */
    public $Page;

    /**
     * @var integer Number of data entries per page
     */
    public $PageSize;

    /**
     * @param integer $ClientUin Customer UIN
     * @param integer $Page Page number
     * @param integer $PageSize Number of data entries per page
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
