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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getPageSize() Obtain 
 * @method void setPageSize(integer $PageSize) Set 
 * @method string getScrollToken() Obtain 
 * @method void setScrollToken(string $ScrollToken) Set 
 * @method array getData() Obtain 
 * @method void setData(array $Data) Set 
 */
class AigcTextDetail extends AbstractModel
{
    /**
     * @var integer 
     */
    public $PageSize;

    /**
     * @var string 
     */
    public $ScrollToken;

    /**
     * @var array 
     */
    public $Data;

    /**
     * @param integer $PageSize 
     * @param string $ScrollToken 
     * @param array $Data 
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

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AigcTextDetailData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
