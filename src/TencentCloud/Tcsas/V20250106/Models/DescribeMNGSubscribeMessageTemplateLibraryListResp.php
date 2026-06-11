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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for querying the mini game subscription message template library list
 *
 * @method integer getTotalCount() Obtain <p>Total count.</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total count.</p>
 * @method array getDataList() Obtain <p>Subscription message template library data.</p>
 * @method void setDataList(array $DataList) Set <p>Subscription message template library data.</p>
 */
class DescribeMNGSubscribeMessageTemplateLibraryListResp extends AbstractModel
{
    /**
     * @var integer <p>Total count.</p>
     */
    public $TotalCount;

    /**
     * @var array <p>Subscription message template library data.</p>
     */
    public $DataList;

    /**
     * @param integer $TotalCount <p>Total count.</p>
     * @param array $DataList <p>Subscription message template library data.</p>
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

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new DescribeMNGSubscribeMessageTemplateLibraryInfoResp();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
