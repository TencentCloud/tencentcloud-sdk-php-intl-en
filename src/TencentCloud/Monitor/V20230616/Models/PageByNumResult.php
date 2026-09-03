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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pagination result parameters
 *
 * @method integer getTotalCount() Obtain <p>Total number of data</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of data</p>
 * @method integer getTotalPage() Obtain <p>Total number of pages</p>
 * @method void setTotalPage(integer $TotalPage) Set <p>Total number of pages</p>
 * @method integer getCurrentPageNo() Obtain <p>Current page number</p>
 * @method void setCurrentPageNo(integer $CurrentPageNo) Set <p>Current page number</p>
 */
class PageByNumResult extends AbstractModel
{
    /**
     * @var integer <p>Total number of data</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>Total number of pages</p>
     */
    public $TotalPage;

    /**
     * @var integer <p>Current page number</p>
     */
    public $CurrentPageNo;

    /**
     * @param integer $TotalCount <p>Total number of data</p>
     * @param integer $TotalPage <p>Total number of pages</p>
     * @param integer $CurrentPageNo <p>Current page number</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("CurrentPageNo",$param) and $param["CurrentPageNo"] !== null) {
            $this->CurrentPageNo = $param["CurrentPageNo"];
        }
    }
}
