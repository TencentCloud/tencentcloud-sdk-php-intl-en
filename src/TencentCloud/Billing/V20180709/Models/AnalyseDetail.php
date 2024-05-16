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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis data complex type
 *
 * @method string getName() Obtain Time
 * @method void setName(string $Name) Set Time
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 * @method array getTimeDetail() Obtain Date detailed amountNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeDetail(array $TimeDetail) Set Date detailed amountNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseDetail extends AbstractModel
{
    /**
     * @var string Time
     */
    public $Name;

    /**
     * @var string Amount
     */
    public $Total;

    /**
     * @var array Date detailed amountNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeDetail;

    /**
     * @param string $Name Time
     * @param string $Total Amount
     * @param array $TimeDetail Date detailed amountNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TimeDetail",$param) and $param["TimeDetail"] !== null) {
            $this->TimeDetail = [];
            foreach ($param["TimeDetail"] as $key => $value){
                $obj = new AnalyseTimeDetail();
                $obj->deserialize($value);
                array_push($this->TimeDetail, $obj);
            }
        }
    }
}
