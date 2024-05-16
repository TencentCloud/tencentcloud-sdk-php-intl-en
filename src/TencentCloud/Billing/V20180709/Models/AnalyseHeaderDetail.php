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
 * Cost analysis header data complex type
 *
 * @method array getHeadDetail() Obtain Header dateNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeadDetail(array $HeadDetail) Set Header dateNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain TimeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set TimeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotal() Obtain TotalNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(string $Total) Set TotalNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseHeaderDetail extends AbstractModel
{
    /**
     * @var array Header dateNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeadDetail;

    /**
     * @var string TimeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string TotalNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @param array $HeadDetail Header dateNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name TimeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Total TotalNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("HeadDetail",$param) and $param["HeadDetail"] !== null) {
            $this->HeadDetail = [];
            foreach ($param["HeadDetail"] as $key => $value){
                $obj = new AnalyseHeaderTimeDetail();
                $obj->deserialize($value);
                array_push($this->HeadDetail, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
