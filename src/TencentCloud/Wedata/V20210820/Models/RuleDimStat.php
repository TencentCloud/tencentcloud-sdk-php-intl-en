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
 * Rule Dimension Count Statistics
 *
 * @method integer getTotalCnt() Obtain Total number
 * @method void setTotalCnt(integer $TotalCnt) Set Total number
 * @method array getDimCntList() Obtain Dimension Count Statistics
 * @method void setDimCntList(array $DimCntList) Set Dimension Count Statistics
 */
class RuleDimStat extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCnt;

    /**
     * @var array Dimension Count Statistics
     */
    public $DimCntList;

    /**
     * @param integer $TotalCnt Total number
     * @param array $DimCntList Dimension Count Statistics
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("DimCntList",$param) and $param["DimCntList"] !== null) {
            $this->DimCntList = [];
            foreach ($param["DimCntList"] as $key => $value){
                $obj = new RuleDimCnt();
                $obj->deserialize($value);
                array_push($this->DimCntList, $obj);
            }
        }
    }
}
