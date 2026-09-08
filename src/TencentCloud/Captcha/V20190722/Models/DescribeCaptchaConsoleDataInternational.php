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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Paging query data result obj international
 *
 * @method array getDataList() Obtain <p>Paginated data array.</p>
 * @method void setDataList(array $DataList) Set <p>Paginated data array.</p>
 * @method integer getTotal() Obtain <p>Total pages</p>
 * @method void setTotal(integer $Total) Set <p>Total pages</p>
 * @method integer getPageIndex() Obtain <p>Current page</p>
 * @method void setPageIndex(integer $PageIndex) Set <p>Current page</p>
 */
class DescribeCaptchaConsoleDataInternational extends AbstractModel
{
    /**
     * @var array <p>Paginated data array.</p>
     */
    public $DataList;

    /**
     * @var integer <p>Total pages</p>
     */
    public $Total;

    /**
     * @var integer <p>Current page</p>
     */
    public $PageIndex;

    /**
     * @param array $DataList <p>Paginated data array.</p>
     * @param integer $Total <p>Total pages</p>
     * @param integer $PageIndex <p>Current page</p>
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
        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new DescribeCaptchaConsoleSubDataInternational();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }
    }
}
