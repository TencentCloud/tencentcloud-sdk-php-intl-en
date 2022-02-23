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
 * RUM log object
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getPv() Obtain Number of PVs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPv(string $Pv) Set Number of PVs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Time
 * @method void setCreateTime(string $CreateTime) Set Time
 */
class RumPvInfo extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Number of PVs
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Pv;

    /**
     * @var string Time
     */
    public $CreateTime;

    /**
     * @param integer $ProjectId Project ID
     * @param string $Pv Number of PVs
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Time
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Pv",$param) and $param["Pv"] !== null) {
            $this->Pv = $param["Pv"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
