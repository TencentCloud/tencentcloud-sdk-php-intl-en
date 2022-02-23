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
 * RUM region information
 *
 * @method integer getAreaId() Obtain Region ID
 * @method void setAreaId(integer $AreaId) Set Region ID
 * @method integer getAreaStatus() Obtain Region status (1: valid; 2: invalid)
 * @method void setAreaStatus(integer $AreaStatus) Set Region status (1: valid; 2: invalid)
 * @method string getAreaName() Obtain Region name
 * @method void setAreaName(string $AreaName) Set Region name
 * @method string getAreaKey() Obtain Region key
 * @method void setAreaKey(string $AreaKey) Set Region key
 */
class RumAreaInfo extends AbstractModel
{
    /**
     * @var integer Region ID
     */
    public $AreaId;

    /**
     * @var integer Region status (1: valid; 2: invalid)
     */
    public $AreaStatus;

    /**
     * @var string Region name
     */
    public $AreaName;

    /**
     * @var string Region key
     */
    public $AreaKey;

    /**
     * @param integer $AreaId Region ID
     * @param integer $AreaStatus Region status (1: valid; 2: invalid)
     * @param string $AreaName Region name
     * @param string $AreaKey Region key
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("AreaStatus",$param) and $param["AreaStatus"] !== null) {
            $this->AreaStatus = $param["AreaStatus"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("AreaKey",$param) and $param["AreaKey"] !== null) {
            $this->AreaKey = $param["AreaKey"];
        }
    }
}
